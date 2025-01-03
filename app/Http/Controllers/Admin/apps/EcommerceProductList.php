<?php

namespace App\Http\Controllers\Admin\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Log;


class EcommerceProductList extends Controller
{
  public function index()
  {
      // Fetch all products and their pricing information
      $products = Product::with('productPricing')->get();

      // Calculate min_price and max_price in the controller
      foreach ($products as $product) {
          // Ensure product has pricing data
          if ($product->productPricing && is_array($product->productPricing->pricing)) {
              // Calculate min and max prices based on the pricing array
              $minPrice = (float)min($product->productPricing->pricing);
              $maxPrice = (float)max($product->productPricing->pricing);
          } else {
              // Set default values if no valid pricing data exists
              $minPrice = 0;
              $maxPrice = 0;
          }

          // Assign the calculated values to the product
          $product->min_price = $minPrice;
          $product->max_price = $maxPrice;
      }

      // Return the view with the products and their pricing
      return view('admin.content.apps.app-ecommerce-product-list', compact('products'));
  }



    public function updateVisibility($id, Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'visibility' => 'required|boolean',
        ]);

        // Update the product visibility in the database
        $product = Product::findOrFail($id);
        $product->update(['visibility' => $request->visibility]);

        return response()->json(['success' => true]);
    }


    

    public function destroy($id)
    {
        try {
            Log::info("Attempting to delete product with ID: $id");
    
            $product = Product::findOrFail($id);
    
            Log::info("Product found: " . json_encode($product));
    
            $product->delete();
    
            Log::info("Product deleted successfully.");
    
            return response()->json(['success' => true]);
        } catch (\Illuminate\Database\QueryException $e) {
            Log::error("Database error: " . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Database error: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            Log::error("Error deleting product: " . $e->getMessage());
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
        
    
    

}
