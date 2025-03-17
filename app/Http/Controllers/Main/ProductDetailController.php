<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductPrinting;
use App\Models\ProductDelivery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use App\Helpers\CurrencyHelper;

class ProductDetailController extends Controller
{
    public function showColorBook()
    {
        $file = public_path('assetsMain/pdf/ColorBook.pdf');
        return Response::make(file_get_contents($file), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="ColorBook.pdf"',
        ]);
    }

    public function index($slug)
    {
        // Clear all cookies
        Cookie::queue(Cookie::forget('cart'));
        // dd($_COOKIE);
        // foreach ($_COOKIE as $key => $value) {
        //     Cookie::queue(Cookie::forget($key));
        // }
        $product = Product::where('slug', $slug)->firstOrFail();
        $productColors = $product->productColors->load('componentColor');

        $colorNames = [];
        $colorImages = [];
        foreach ($productColors as $productColor) {
            $colorNames[] = $productColor->componentColor->color_name;
            $colorImages[] = asset('storage/' . $productColor->image);
        }

        $productPrintings = ProductPrinting::where('visibility', 1)->get();

        $latestProductDelivery = ProductDelivery::latest('id')->first();

        // Fetch User Country
        $user = Auth::user();

        $country = $user ? $user->country : (session('country') ?? 'USA');



        if ($country === 'USA') {
            foreach ($productPrintings as $printing) {
                $prices = is_string($printing->price) ? json_decode($printing->price, true) : $printing->price;
                $printing->price = array_map(fn($price) => CurrencyHelper::convert($price, 'CAD', 'USD'), $prices);
            }
        }

        $pomPomPrice = 2; // Assuming it's 2 CAD per unit

        // Convert Pom-Pom Price if user is in the USA
        if ($country === 'USA') {
            $pomPomPrice = CurrencyHelper::convert($pomPomPrice, 'CAD', 'USD');
        }

        // Set fixed delivery price in CAD
        $fixedDeliveryPriceCAD = 30;

        // Convert delivery price if user is in the USA
        $fixedDeliveryPrice = ($country === 'USA') ? CurrencyHelper::convert($fixedDeliveryPriceCAD, 'CAD', 'USD') : $fixedDeliveryPriceCAD;



        // Fetch product pricing and quantities

        $pricing = $product->productPricing;
        $quantities = $pricing->pluck('quantity');

        if ($user && $user->is_reseller == 1) {
            $prices = $pricing->pluck('reseller_pricing');
        } else {
            $prices = $pricing->pluck('pricing');
        }


        // Convert Prices if user is in the USA
        if ($country === 'USA') {
            $prices = $prices->map(fn($price) => CurrencyHelper::convert($price, 'CAD', 'USD'));
        }

        // Fetch base images
        $baseImages = $product->productBaseImages;

        // Fetch latest delivery quantities and prices
        $quantitiesdelivery = [];
        $pricesDelivery = [];
        if ($latestProductDelivery) {
            $quantitiesdelivery = json_decode($latestProductDelivery->quantity, true);
            $pricesDelivery = json_decode($latestProductDelivery->pricing, true);

            // Convert Delivery Prices if user is in the USA
            if ($country === 'USA') {
                $pricesDelivery = array_map(fn($price) => CurrencyHelper::convert($price, 'CAD', 'USD'), $pricesDelivery);
            }
        }

        return view('main.pages.productDetail', [
            'product' => $product,
            'colors' => $productColors,
            'colorNames' => $colorNames,
            'colorImages' => $colorImages,
            'quantities' => $quantities,
            'prices' => $prices,
            'productPrintings' => $productPrintings,
            'latestProductDelivery' => $latestProductDelivery,
            'baseImages' => $baseImages,
            'quantitiesdelivery' => $quantitiesdelivery,
            'pricesDelivery' => $pricesDelivery,
            'pomPomPrice' => $pomPomPrice, // Pass to view  
            'fixedDeliveryPrice' => $fixedDeliveryPrice,
        ]);
    }
}
