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

        // Fetch product colors
        $colors = DB::table('product_color')->where('product_id', $id)->first();

        // Decode the color JSON from the product_color table
        $productColors = $colors && !empty($colors->color) ? json_decode($colors->color, true) : [];

        // Load the color_api.json file
        $colorApi = json_decode(file_get_contents(public_path('color_api.json')), true);

        // Map hex codes to names
        $colorNames = [];
        foreach ($productColors as $hexCode) {
            foreach ($colorApi as $color) {
                if (strtolower($color['hex']) === strtolower($hexCode)) {
                    $colorNames[] = $color['name'];
                    break;
                }
            }
        }

        // Fetch product printing options
        $productPrintings = DB::table('product_printing')->get();

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
            'product'         => $product,
            'colors'          => $colors,
            'colorNames'      => $colorNames, // List of color names
            'quantities'      => $quantities,
            'prices'          => $prices,
            'productPrintings'=> $productPrintings, // Pass printing options
        ]);
    }
}
