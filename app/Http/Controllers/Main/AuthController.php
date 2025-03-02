<?php

namespace App\Http\Controllers\Main;
use App\Models\Cart;
use App\Models\CartArtwork;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Mail\UserRegisteredMail;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    // Show Registration Form
    public function showRegistrationForm()
    {
        return view('main.pages.signup');
    }

 
public function register(Request $request)
{
    Log::info('Register request data', $request->all());

    $validator = Validator::make($request->all(), [
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'contact_number' => 'required|string|max:20',
        'language' => 'required|string|in:en,fr,es,pt-PT',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8|confirmed',
        'reseller' => 'required',
        'neq_number' => 'nullable|required_if:reseller,yes',
        'country' => 'required|in:USA,CANADA',
    ]);
    

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $isReseller = $request->reseller === 'yes' ? 1 : 0;
    $neqNumber = $isReseller ? $request->neq_number : null;
    $status = $isReseller ? 0 : 1;

    $user = User::create([
        'first_name' => $request->firstname,
        'last_name' => $request->lastname,
        'contact_number' => $request->contact_number,
        'language' => $request->language,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'is_reseller' => $isReseller,
        'neq_number' => $neqNumber,
        'status' => $status,
        'country' => $request->country,
    ]);

    if ($user) {
        auth()->login($user);
        
        $cartCookie = $request->cookie('cart');
        $cartFromLocalStorage = $cartCookie ? json_decode($cartCookie, true) : [];
        
        if ($cartFromLocalStorage) {
            foreach ($cartFromLocalStorage as $item) {
                $cartItem = Cart::create([
                    'user_id' => $user->id,
                    'product_id' => $item['productId'],
                    'color_id' => $item['colorId'],
                    'quantity' => $item['quantity'],
                    'beanie_type' => $item['beanieType'],
                    'is_pompom' => $item['PomPomOption'],
                    'printing_id' => $item['printingId'],
                    'printing_price' => $item['printingPrice'],
                    'product_price' => $item['productPrice'],
                    'delivery_price' => $item['deliveryPrice'],
                    'pompom_price' => $item['pompomPrice'],
                ]);

                if (!empty($item['artworkType']) && (!empty($item['artworkDataText']) || !empty($item['artworkDataImage']))) {
                    CartArtwork::create([
                        'cart_id' => $cartItem->id,
                        'artwork_type' => $item['artworkType'],
                        'artwork_dataText' => $item['artworkDataText'] ?? null,
                        'artwork_dataImage' => $item['artworkDataImage'] ?? null,
                        'patch_length' => $item['patchLength'] ?? null,
                        'patch_height' => $item['patchHeight'] ?? null,
                        'font_style' => $item['fontStyle'] ?? null,
                        'num_of_imprint' => $item['numOfImprint'] ?? null,
                        'imprint_color' => $item['imprintColors'] ?? [],
                        'leathercolor' => $item['leathercolor'] ?? null,
                    ]);
                }
            }
            return redirect()->route('cart')->withCookie(cookie()->forget('cart'));
        }

    // 📩 Send Email Based on User Type
    // Mail::to($user->email)->send(new UserRegisteredMail($user, $isReseller));

    if ($isReseller) {
        Log::info('Sending reseller email to sales@monkeybeanies.com for:', ['email' => $user->email]);
        Mail::to('registration@monkeybeanies.com')->send(new UserRegisteredMail($user, $isReseller, true));
    }
    

    return redirect()->route('home')->with('success', 'Registration successful!');
}
}

    // Show Login Form
    public function showLoginForm()
    {
        return view('main.pages.signin');
    }

    // Handle Login Form Submission
    public function login(Request $request)
    {
        Log::info('Login request received', $request->all());
    
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            Log::info('User authenticated successfully', ['user_id' => $user->id]);
    
            $sessionCountry = session('country', 'USA');
            Log::info('Session country:', ['sessionCountry' => $sessionCountry]);
    
            // Retrieve cart from both cookie and request
            $cartCookie = request()->cookie('cart') ?? $_COOKIE['cart'] ?? null;
Log::info('Cart cookie received:', ['cartCookie' => $cartCookie]);

            Log::info('Raw cart cookie received:', ['cartCookie' => $cartCookie]); // Add this log for debugging
            
            $cartFromLocalStorage = json_decode($cartCookie, true) ?? [];
            if (!$cartFromLocalStorage) {
                Log::error('Cart cookie is empty or not received properly!');
            }
            
            Log::info('Cart from cookie before processing:', ['cart' => $cartFromLocalStorage]);
    
            if ($user->country === $sessionCountry) {
                foreach ($cartFromLocalStorage as $item) {
                    // dd($item);

                    $cartItem = Cart::create([
                        'user_id' => $user->id,
                        'product_id' => $item['productId'],
                        'color_id' => $item['colorId'],
                        'quantity' => $item['quantity'],
                        'beanie_type' => $item['beanieType'],
                        'is_pompom' => $item['PomPomOption'],
                        'printing_id' => $item['printingId'],
                        'printing_price' => $item['printingPrice'],
                        'product_price' => $item['productPrice'],
                        'delivery_price' => $item['deliveryPrice'],
                        'pompom_price' => $item['pompomPrice'],
                    ]);
            
                    if (!empty($item['artworkType']) && (!empty($item['artworkDataText']) || !empty($item['artworkDataImage']))) {

                        if ($request->hasFile('artworkDataImage')) {
                            Log::info('Uploaded file:', ['artworkDataImage' => $request->file('artworkDataImage')]);

                            $item['artworkDataImage'] = $request->file('artworkDataImage')->store('CustomerArtworkImages', 'public');
                            Log::info('Uploaded file:', ['artworkDataImage' => $request->file('artworkDataImage')]);

                        }
                        Log::info('CartArtwork data:', [
                            'cart_id' => $cartItem->id,
                            'artwork_type' => $item['artworkType'],
                            'artwork_dataText' => $item['artworkDataText'] ?? null,
                            'artwork_dataImage' => $item['artworkDataImage'] ?? null,
                            'patch_length' => $item['patchLength'] ?? null,
                            'patch_height' => $item['patchHeight'] ?? null,
                            'font_style' => $item['fontStyle'] ?? null,
                            'num_of_imprint' => $item['numOfImprint'] ?? null,

    'imprint_color' => isset($item['imprintColors']) && is_array($item['imprintColors']) 
    ? json_encode($item['imprintColors']) 
    : json_encode([]),

                            'leathercolor' => $item['leathercolor'] ?? null,
                        ]);
                                                
                        
                        CartArtwork::create([
                            'cart_id' => $cartItem->id,
                            'artwork_type' => $item['artworkType'],
                            'artwork_dataText' => $item['artworkDataText'] ?? null,
                            'artwork_dataImage' => $item['artworkDataImage'] ?? null,
                            'patch_length' => $item['patchLength'] ?? null,
                            'patch_height' => $item['patchHeight'] ?? null,
                            'font_style' => $item['fontStyle'] ?? null,
                            'num_of_imprint' =>  $item['numOfImprint'] ?? null,

'imprint_color' => isset($item['imprintColors']) && is_array($item['imprintColors']) 
    ? json_encode($item['imprintColors']) 
    : json_encode([]),




              'leathercolor' => !empty($item['leathercolor']) ? $item['leathercolor'] : null,





                        ]);
                    }
                }
            
                Log::info('Cart & Artwork migrated, clearing cookie');
                return redirect()->route('cart')->withCookie(cookie()->forget('cart'));
            } else {
                Log::warning('Country mismatch, cart not saved', ['user_country' => $user->country]);
                return redirect()->route('home')->with('error', 'Country mismatch! Cart not saved.');
            }
            
        }
    
        Log::error('Invalid login attempt', ['email' => $request->email]);
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
    

    // Logout the user
    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.login')->with('status', 'You have been logged out.');
    }
}
