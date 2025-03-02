<?php

namespace App\Http\Controllers\Admin\Components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InternalStatus;
use App\Models\Product;
use App\Models\DiscountCoupon;
use App\Models\ProductPrinting;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;

class DiscountCouponsController extends Controller
{
    public function index()
    {
        return view('admin.content.component.discountCouponAdd');
    }

    public function getItems(Request $request)
    {
        try {
            if ($request->type == 1) {
                $items = Product::select('id', 'title')->get();
            } elseif ($request->type == 3) {
                $items = ProductPrinting::select('id', 'title')->get();
            } else {
                return response()->json([], 400);
            }

            return response()->json($items);
        } catch (Exception $e) {
            return response()->json(['error' => 'Something went wrong!'], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            // Log request data to debug
            Log::info('Form data:', $request->all());  // Log all form data to check
    
            $request->validate([
                'title' => 'required|string',
                'code' => 'required|string|unique:discount_coupon',
                'discount_type' => 'required|integer|in:1,3',
                'item_id' => 'required|integer',
                'percentage' => 'required|numeric|min:0|max:100',
                // Validation for expiry fields
                'is_expiry' => 'required|boolean', // For expiry switch
                
                'count' => 'nullable|integer|min:1', // If time limit is selected
                'duration_from' => 'nullable|date',
'duration_to' => 'nullable|date',


            ]);
    
            $discountCoupon = new DiscountCoupon();
            $discountCoupon->title = $request->title;
            $discountCoupon->code = $request->code;
            $discountCoupon->discount_type = $request->discount_type;
            $discountCoupon->percentage = $request->percentage;
    
            // Handle expiry functionality
            $discountCoupon->is_expiry = $request->is_expiry ? 1 : 0; // Set expiry status (1 if on, 0 if off)
            
            if ($request->is_expiry) { // If expiry switch is on
           
    
                
               
                    $discountCoupon->count = $request->count; 
               
                    $discountCoupon->duration_from = $request->duration_from;
                    $discountCoupon->duration_to = $request->duration_to;
               
            }
    
            // Handle the "Select All" case for item_id
            $discountCoupon->is_all = $request->item_id == 0 ? 1 : 0;

            if ($discountCoupon->is_all) {
                // Apply to all products or printings
                if ($request->discount_type == 1) {
                    $discountCoupon->discountable_type = Product::class;
                } elseif ($request->discount_type == 3) {
                    $discountCoupon->discountable_type = ProductPrinting::class;
                }
                $discountCoupon->discountable_id = null; // Ensure ID is null
                $discountCoupon->save(); // Save for global use
            } else {
                // Apply to a specific product or printing item
                if ($request->discount_type == 1) {
                    $product = Product::findOrFail($request->item_id);
                    $discountCoupon->discountable_type = Product::class;
                    $discountCoupon->discountable_id = $product->id;
                    $product->discountCoupons()->save($discountCoupon);
                } elseif ($request->discount_type == 3) {
                    $printing = ProductPrinting::findOrFail($request->item_id);
                    $discountCoupon->discountable_type = ProductPrinting::class;
                    $discountCoupon->discountable_id = $printing->id;
                    $printing->discountCoupons()->save($discountCoupon);
                }
            }
            

    
            return redirect()->back()->with('success', 'Discount coupon added successfully!');
        } catch (ValidationException $e) {
            Log::error(['error' => $e->getMessage()]);
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (ModelNotFoundException $e) {
            Log::error(['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Selected item not found!')->withInput();
        } catch (Exception $e) {
            Log::error(['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Something went wrong! Please try again later.')->withInput();
        }
    }
    

    public function list()
    {
        $discountCoupons = DiscountCoupon::with(['discountable'])->get(); // eager load discountable relationship
        return view('admin.content.component.discountCouponList', compact('discountCoupons'));
    }

    // Edit coupon
    public function edit($id)
    {
        $discountCoupon = DiscountCoupon::findOrFail($id);
        return view('admin.content.component.discountCouponEdit', compact('discountCoupon'));
    }

    // Update coupon
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'required|string',
                'code' => 'required|string|unique:discount_coupon,code,' . $id,
                'discount_type' => 'required|integer|in:1,3',
                'item_id' => 'required|integer',
                'percentage' => 'required|numeric|min:0|max:100',
            ]);

            $discountCoupon = DiscountCoupon::findOrFail($id);
            $discountCoupon->title = $request->title;
            $discountCoupon->code = $request->code;
            $discountCoupon->discount_type = $request->discount_type;
            $discountCoupon->percentage = $request->percentage;

            if ($request->discount_type == 1) {
                $product = Product::findOrFail($request->item_id);
                $product->discountCoupons()->save($discountCoupon);
            } elseif ($request->discount_type == 3) {
                $printing = ProductPrinting::findOrFail($request->item_id);
                $printing->discountCoupons()->save($discountCoupon);
            }

            return redirect()->back()->with('success', 'Discount coupon updated successfully!');
        } catch (Exception $e) {
            Log::error(['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Something went wrong! Please try again later.');
        }
    }

    // Delete coupon
    public function destroy($id)
    {
        try {
            $discountCoupon = DiscountCoupon::findOrFail($id);
            $discountCoupon->delete();

            return redirect()->back()->with('success', 'Discount coupon deleted successfully!');
        } catch (Exception $e) {
            Log::error(['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Something went wrong! Please try again later.');
        }
    }


    public function updateVisibility($id, Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'visibility' => 'required|boolean',
        ]);

        // Update the product visibility in the database
        $discountCoupon = DiscountCoupon::findOrFail($id);
        $discountCoupon->update(['visibility' => $request->visibility]);

        return response()->json(['success' => true]);
    }
}
