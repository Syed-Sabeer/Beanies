<?php

namespace App\Http\Controllers\Admin\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductSEO;
use App\Models\ProductPricing;
use App\Models\ComponentProductColor;
use App\Models\ProductBaseImage;
use Illuminate\Support\Facades\Log;

class EcommerceProductList extends Controller
{
    public function index()
    {
        // Fetch all products and their pricing information
        $products = Product::with('productPricing', 'productBaseImages')->get(); // Include the base images and pricing in the query
    
        // Calculate min_price and max_price in the controller
        foreach ($products as $product) {
            // Check if there are any associated pricing records
            if ($product->productPricing->isNotEmpty()) {
                // Get the pricing values from all pricing records (not just the first one)
                $pricing = $product->productPricing->pluck('pricing')->flatten(); // Flatten pricing to a single collection
    
                // Calculate min and max prices based on the pricing array
                $minPrice = (float)$pricing->min();
                $maxPrice = (float)$pricing->max();
            } else {
                // Set default values if no product pricing exists
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
    
            return redirect()->back()->with('success', 'Product deleted successfully');
            // return response()->json(['success' => true]);
        } catch (\Illuminate\Database\QueryException $e) {
            Log::error("Database error: " . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong! Please try again later');
            // return response()->json(['success' => false, 'message' => 'Database error: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            Log::error("Error deleting product: " . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong! Please try again later');
            // return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function edit($id)
    {
        // Retrieve the product with its related pricing, color images, and base images
        $product = Product::with(['productSEO','productPricing', 'productColors.componentColor', 'productBaseImages'])->findOrFail($id);
    
        // Fetch available color options for the product
        $colorData = ComponentProductColor::all();
    
        // Return the edit view with the product data and color options
        return view('admin.content.apps.app-ecommerce-product-edit', compact('product', 'colorData'));
    }
    
    
    
    public function update($id, Request $request)
    {
        try {
            // Validate the incoming request
            $request->validate([
                'title' => 'required|string|max:255',
                'metatitle' => 'nullable|string',
                'metadescription' => 'nullable|string',
                'metakeywords' => 'nullable|string',
                'slug' => 'required|string|max:255|unique:products,slug,' . $id,
                'description' => 'required|string',
                'is_pompom' => 'required|integer',
                'base_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif',
                'color.*' => 'nullable|string',
                'images.*.*' => 'nullable|image|mimes:jpeg,png,jpg,gif',
                'quantity.*' => 'required|integer',
                'pricing.*' => 'required|numeric',
                'reseller_pricing.*' => 'required|numeric',
            ]);
    
            DB::beginTransaction();
    
            // Find the product by its ID
            $product = Product::findOrFail($id);
    
            // Update the product's main data
            $product->update([
                'title' => $request->title,
                'description' => $request->description,
                'slug' => $request->slug,
                'is_pompom' => $request->is_pompom,
            ]);
    
            // Update or create Product SEO data
            ProductSEO::updateOrCreate(
                ['product_id' => $product->id],
                [
                    'metatitle' => $request->metatitle,
                    'metadescription' => $request->metadescription,
                    'metakeywords' => $request->metakeywords,
                ]
            );
    
            // Process and store base images
            if ($request->hasFile('base_images')) {
                foreach ($request->file('base_images') as $baseImage) {
                    Log::info('Processing base image: ', [$baseImage->getClientOriginalName()]);
                    $baseImagePath = $baseImage->store('ProductImages', 'public');
                    if ($baseImagePath) {
                        ProductBaseImage::create([
                            'product_id' => $product->id,
                            'base_image' => $baseImagePath,
                        ]);
                    } else {
                        Log::error('Base image upload failed for file: ', [$baseImage->getClientOriginalName()]);
                        return redirect()->back()->with('error', 'Base image upload failed.');
                    }
                }
            }
    
            // Process and store color images
            if (isset($request->color) && count($request->color) > 0) {
                foreach ($request->color as $index => $colorId) {
                    Log::info("Processing color ID $colorId with images:");
                    if ($request->hasFile("images.$index")) {
                        foreach ($request->file("images.$index") as $colorImage) {
                            Log::info('Processing color image: ', [$colorImage->getClientOriginalName()]);
                            $colorImagePath = $colorImage->store('ProductImages/ColorVariations', 'public');
                            if ($colorImagePath) {
                                ProductColor::create([
                                    'product_id' => $product->id,
                                    'color_id' => $colorId,
                                    'image' => $colorImagePath,
                                ]);
                            } else {
                                return redirect()->back()->with('error', 'Color image upload failed.');
                            }
                        }
                    }
                }
            }
    
            // Delete all existing product pricing first
            ProductPricing::where('product_id', $id)->delete();
    
            // Save product pricing in separate rows
            foreach ($request->quantity as $index => $quantity) {
                Log::info("Processing pricing", [
                    'Quantity' => $quantity,
                    'Price' => $request->pricing[$index],
                    'Reseller Price' => $request->reseller_pricing[$index],
                ]);
    
                ProductPricing::create([
                    'product_id' => $product->id,
                    'quantity' => $quantity,
                    'pricing' => $request->pricing[$index],
                    'reseller_pricing' => $request->reseller_pricing[$index],
                ]);
            }
    
            DB::commit();
            return redirect()->back()->with('success', 'Product updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Error occurred while updating product: " . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update product. Please try again.');
        }
    }
    

    public function deleteProductColor($id)
    {
        try {
            $productColor = ProductColor::findOrFail($id);
            if($productColor){
                $productColor->delete();
                return redirect()->back()->with('success', 'Product Color has been removed successfully.');
            }else{
                return redirect()->back()->with('error', 'Product Color not found.');
            }
        } catch (\Throwable $th) {
            //throw $th;
            Log::error("Error occurred while deleting product color: " . $th->getMessage());
            return redirect()->back()->with('error', 'Failed to delete product color. Please try again.');
        }
    }

    public function deleteProductBaseImage($id)
    {
        try {
            // dd($id);
            $productBaseImage = ProductBaseImage::findOrFail($id);
            if($productBaseImage){
                $productBaseImage->delete();
                return redirect()->back()->with('success', 'Product Base Image has been removed successfully.');
            }else{
                return redirect()->back()->with('error', 'Product Base Image not found.');
            }
        } catch (\Throwable $th) {
            //throw $th;
            Log::error("Error occurred while deleting product Base Image: " . $th->getMessage());
            return redirect()->back()->with('error', 'Failed to delete product Base Image. Please try again.');
        }
    }
    
}
