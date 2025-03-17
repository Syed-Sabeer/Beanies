<?php

namespace App\Http\Controllers\Admin\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;

class EcommerceDashboard extends Controller
{
    public function index()
    {
        // Total Products
        $totalProducts = Product::count();
        $lastMonthProducts = Product::whereBetween('created_at', [
            Carbon::now()->subMonth()->startOfMonth(),
            Carbon::now()->subMonth()->endOfMonth()
        ])->count();
        $productIncreasePercentage = $lastMonthProducts > 0 
            ? (($totalProducts - $lastMonthProducts) / $lastMonthProducts) * 100 
            : 0;

        // Total Orders
        $totalOrders = Order::count();
        $lastMonthOrders = Order::whereBetween('created_at', [
            Carbon::now()->subMonth()->startOfMonth(),
            Carbon::now()->subMonth()->endOfMonth()
        ])->count();
        $orderIncreasePercentage = $lastMonthOrders > 0 
            ? (($totalOrders - $lastMonthOrders) / $lastMonthOrders) * 100 
            : 0;

        // Total Customers
        $totalCustomers = User::where('is_reseller', 0)->count();
        $lastMonthCustomers = User::where('is_reseller', 0)
            ->whereBetween('created_at', [
                Carbon::now()->subMonth()->startOfMonth(),
                Carbon::now()->subMonth()->endOfMonth()
            ])->count();
        $customerIncreasePercentage = $lastMonthCustomers > 0 
            ? (($totalCustomers - $lastMonthCustomers) / $lastMonthCustomers) * 100 
            : 0;

        // Total Reseller Customers
        $totalResellers = User::where('is_reseller', 1)->count();
        $lastMonthResellers = User::where('is_reseller', 1)
            ->whereBetween('created_at', [
                Carbon::now()->subMonth()->startOfMonth(),
                Carbon::now()->subMonth()->endOfMonth()
            ])->count();
        $resellerIncreasePercentage = $lastMonthResellers > 0 
            ? (($totalResellers - $lastMonthResellers) / $lastMonthResellers) * 100 
            : 0;

        return view('admin.content.apps.app-ecommerce-dashboard', compact(
            'totalProducts', 
            'productIncreasePercentage', 
            'totalOrders', 
            'orderIncreasePercentage',
            'totalCustomers',
            'customerIncreasePercentage',
            'totalResellers',
            'resellerIncreasePercentage'
        ));
    }
}
