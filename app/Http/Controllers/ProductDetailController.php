<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailController extends Controller
{
    public function index($id)
    {
        // Fetch product details
        $product = DB::table('products')->where('id', $id)->first();

        // Decode base_images from 'products' table
        $baseImages = [];
        if ($product && !empty($product->base_images)) {
            // If base_images are stored as text, split them into an array
            $baseImages = explode(',', $product->base_images);
        }

        // Fetch product colors
        $colors = DB::table('product_color')->where('product_id', $id)->first();

        // Decode images from 'product_color' table
        $colorImages = [];
        if ($colors && !empty($colors->images)) {
            // If color_images are stored as text, split them into an array
            $colorImages = explode(',', $colors->images);
        }

        // Merge the two image arrays
        $allImages = array_merge($baseImages, $colorImages);

        // Fetch product pricing (quantities and pricing)
        $pricingData = DB::table('product_pricing')->where('product_id', $id)->first();

        // Safely decode JSON arrays for quantities and pricing
        $quantities = $pricingData && is_string($pricingData->quantity)
            ? json_decode($pricingData->quantity, true)
            : [];

        $prices = $pricingData && is_string($pricingData->pricing)
            ? json_decode($pricingData->pricing, true)
            : [];

        // Pass all data to the view
        return view('pages.productDetail', [
            'product'    => $product,
            'colors'     => $colors,
            'allImages'  => $allImages, // Combined images
            'quantities' => $quantities,
            'prices'     => $prices,
        ]);
    }
}
