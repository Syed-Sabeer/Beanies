<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartArtwork;
use App\Models\Order;
use App\Models\DiscountCoupon;
use App\Models\OrderItem;
use App\Models\OrderShippingDetail;
use App\Models\OrderArtwork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\PaymentExecution;

class OrderController extends Controller
{
    private $_api_context;

    public function __construct()
    {
        $paypal = config('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal['client_id'], $paypal['secret']));
        $this->_api_context->setConfig($paypal['settings']);
    }
    public function PostPaymentWithPaypal($totalPrice)
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
    
        $amount = new Amount();
        $amount->setTotal((float)$totalPrice); // Cast to float explicitly
        $amount->setCurrency('CAD');
    
        $transaction = new Transaction();
        $transaction->setAmount($amount);
    
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(URL::route('status'))
                     ->setCancelUrl(URL::route('status'));
    
        $payment = new Payment();
        $payment->setIntent('sale')
                ->setPayer($payer)
                ->setTransactions([$transaction])
                ->setRedirectUrls($redirectUrls);
    
        try {
            $payment->create($this->_api_context);
            Log::info("PayPal Payment Created: " . json_encode($payment));
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            Log::error("PayPal Error: " . $ex->getMessage());
            Session::put('error', 'Connection timeout');
            return Redirect::route('checkout');
        }
    
        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }
    
        // Store payment ID for later use
        Session::put('paypal_payment_id', $payment->getId());
    
        return $redirect_url;
    }
    

    public function GetPaymentStatus(Request $request)
    {
        $paymentId = $request->query('paymentId');
        $payerId = $request->query('PayerID');
    
        if (empty($payerId) || empty($paymentId)) {
            Session::put('error', 'Payment failed');
            return redirect()->route('checkout');
        }
    
        try {
            $payment = Payment::get($paymentId, $this->_api_context);
            $execution = new PaymentExecution();
            $execution->setPayerId($payerId);
            $result = $payment->execute($execution, $this->_api_context);
    
            if ($result->state == 'approved') {
                // Retrieve session data
                $checkoutDetails = session('checkout_details');
                if (!$checkoutDetails) {
                    return redirect()->route('checkout')->with('error', 'Session expired.');
                }
    
                DB::beginTransaction();
    
                // Create Order
                $order = Order::create([
                    'user_id' => auth()->id(),
                    'order_id' => $this->generateOrderId(),
                    'total_price' => $checkoutDetails['total_price'],
                    'payment_status' => 'completed',
                ]);
    
                // Create Shipping Details
                OrderShippingDetail::create([
                    'order_id' => $order->id,
                    'firstname' => $checkoutDetails['firstname'],
                    'lastname' => $checkoutDetails['lastname'],
                    'companyname' => $checkoutDetails['companyname'],
                    'address' => $checkoutDetails['address'],
                    'email' => $checkoutDetails['email'],
                    'phone' => $checkoutDetails['phone'],
                    'additional_info' => $checkoutDetails['additional_info'],
                ]);
    
                // Insert Order Items
                foreach ($checkoutDetails['cart_items'] as $item) {
                    $orderItem = OrderItem::create([
                        'order_id' => $order->id,
                        'product_id' => $item->product_id,
                        'color_id' => $item->color_id,
                        'quantity' => $item->quantity,
                        'beanie_type' => $item->beanie_type,
                        'printing_id' => $item->printing_id,
                        'is_pompom' => $item->is_pompom,
                        'printing_price' => $item->printing_price,
                        'product_price' => $item->product_price,
                        'delivery_price' => $item->delivery_price,
                        'pompom_price' => $item->pompom_price,
                    ]);
    
                    // Insert Order Artworks
                    foreach ($item->artworks as $artwork) {
                        OrderArtwork::create([
                            'order_item_id' => $orderItem->id,
                            'artwork_type' => $artwork->artwork_type,
                            'artwork_dataText' => $artwork->artwork_dataText,
                            'artwork_dataImage' => $artwork->artwork_dataImage,
                            'patch_length' => $artwork->patch_length,
                            'patch_height' => $artwork->patch_height,
                            'font_style' => $artwork->font_style,
                            'num_of_imprint' => $artwork->num_of_imprint,
                            'imprint_color' => $artwork->imprint_color,
                            'leathercolor' => $artwork->leathercolor,
                        ]);
                    }
                }
    
                // Clear Cart
                Cart::where('user_id', auth()->id())->delete();
    
                DB::commit();
                session()->forget('checkout_details');
    
                return redirect()->route('main.pages.success', ['orderId' => $order->id]);
            }
    
            return redirect()->route('checkout')->with('error', 'Payment failed.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('PayPal Payment Execution Failed: ' . $e->getMessage());
            return redirect()->route('checkout')->with('error', 'Payment failed.');
        }
    }


    public function orderSuccess(Request $request)
    {
        $orderId = $request->query('orderId');
        $order = Order::with(['user', 'items'])->where('id', $orderId)->first();

        if (!$order) {
            return redirect()->route('home')->with('error', 'Order not found.');
        }

        return view('main.pages.ordersuccess', compact('order'));
    }

    public function orderHistory()
    {
        $userId = auth()->id();

        $orderhistory = Order::with(['items' => function ($query) {
            $query->with('orderArtwork');
        }, 'user'])->where('user_id', $userId)->get();

        return view('main.pages.orderhistory', ['orderhistory' => $orderhistory]);
    }

    public function index()
    {
        $userId = auth()->id();

        $cart = Cart::with(['product', 'color', 'printing'])
            ->where('user_id', $userId)
            ->get();

        if ($cart->isEmpty()) {
            return redirect()->route('cart')->with('error', 'Your cart is empty. Please add items before proceeding to checkout.');
        }

        return view('main.pages.checkout', compact('cart'));
    }

    public function add(Request $request)
    {
        $userId = auth()->id();
    
        try {
            $request->validate([
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'companyname' => 'nullable|string|max:255',
                'address' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'additional_info' => 'nullable|string|max:500',
                'paymentMethod' => 'required|string' // Ensure payment method is selected
            ]);
    
            // Fetch cart items
            $cartItems = Cart::where('user_id', $userId)->with(['product', 'color', 'printing', 'artworks'])->get();
            if ($cartItems->isEmpty()) {
                return response()->json(['success' => false, 'message' => 'Cart is empty.'], 400);
            }
    
            // Calculate total price
            $totalPrice = $cartItems->reduce(function ($total, $item) {
                $productPrice = (float) $item->product_price;
                $printingPrice = (float) $item->printing_price;
                $deliveryPrice = (float) $item->delivery_price;
                $pompomPrice = (float) $item->pompom_price;
                $quantity = (int) $item->quantity;
    
                return $total + (($productPrice + $printingPrice + $deliveryPrice + $pompomPrice) * $quantity);
            }, 0);
    
            Log::info('Calculated Total Price: ' . $totalPrice);
    
            // Save user input into the session
            session([
                'checkout_details' => [
                    'firstname' => $request->input('firstname'),
                    'lastname' => $request->input('lastname'),
                    'companyname' => $request->input('companyname'),
                    'address' => $request->input('address'),
                    'email' => $request->input('email'),
                    'phone' => $request->input('phone'),
                    'additional_info' => $request->input('additional_info'),
                    'cart_items' => $cartItems,
                    'total_price' => $totalPrice,
                ]
            ]);
    
            // Initiate PayPal Payment
            if ($request->paymentMethod === 'paypal') {
                $paymentResponse = $this->PostPaymentWithPaypal($totalPrice);
    
                if (!$paymentResponse) {
                    return response()->json(['success' => false, 'message' => 'PayPal payment initiation failed.'], 500);
                }
    
                return response()->json([
                    'success' => true,
                    'message' => 'Redirecting to PayPal...',
                    'paypalUrl' => $paymentResponse
                ]);
            }
    
            return response()->json(['success' => false, 'message' => 'Payment method not supported.']);
        } catch (\Exception $e) {
            Log::error('Checkout failed: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Checkout failed. Please try again later.'], 500);
        }
    }
    
    

    private function generateOrderId()
    {
        do {
            $orderId = strtoupper(Str::random(6)); // Generate a random string of 6 characters
        } while (Order::where('order_id', $orderId)->exists());

        return $orderId;
    }



    public function applyDiscount(Request $request)
    {
        $request->validate([
            'coupon_code' => 'required|string',
        ]);
    
        $coupon = DiscountCoupon::where('code', $request->coupon_code)->first();
    
        if (!$coupon) {
            return response()->json(['success' => false, 'message' => 'Invalid coupon code.'], 400);
        }
    
        // Get the cart items for the logged-in user
        $cartItems = Cart::where('user_id', auth()->id())->get();
    
        // Loop through the cart items to check if the coupon applies
        $discountAmount = 0;
    
        foreach ($cartItems as $item) {
            if ($item->product_id == $coupon->discountable_id) {
                // Apply the discount to the specific product (assuming a percentage discount)
                $discountAmount = ($item->product_price * $coupon->percentage / 100);
            }
        }
    
        // If the coupon is applicable, return the discount amount
        if ($discountAmount > 0) {
            return response()->json([
                'success' => true,
                'discount' => $discountAmount,
                'message' => 'Discount applied successfully.',
            ]);
        }
    
        return response()->json(['success' => false, 'message' => 'Coupon not applicable for selected products.'], 400);
    }
    
    
    
}
