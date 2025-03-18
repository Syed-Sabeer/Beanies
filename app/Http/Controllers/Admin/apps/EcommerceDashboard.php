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

        // Get sales data grouped by country
        $countrySales = Order::with('user')
            ->selectRaw('users.country, COUNT(orders.id) as total_orders, SUM(orders.total_price) as total_revenue')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->groupBy('users.country')
            ->get();

        // Get last month's sales data grouped by country
        $lastMonthSales = Order::with('user')
            ->selectRaw('users.country, COUNT(orders.id) as total_orders, SUM(orders.total_price) as total_revenue')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->whereBetween('orders.created_at', [
                Carbon::now()->subMonth()->startOfMonth(),
                Carbon::now()->subMonth()->endOfMonth()
            ])
            ->groupBy('users.country')
            ->get();

        // Calculate growth percentage for each country
        $countryData = [];
        foreach ($countrySales as $sale) {
            $lastMonthSale = $lastMonthSales->firstWhere('country', $sale->country);
            $orderGrowth = $lastMonthSale && $lastMonthSale->total_orders > 0
                ? (($sale->total_orders - $lastMonthSale->total_orders) / $lastMonthSale->total_orders) * 100
                : ($sale->total_orders > 0 ? 100 : 0);

            $revenueGrowth = $lastMonthSale && $lastMonthSale->total_revenue > 0
                ? (($sale->total_revenue - $lastMonthSale->total_revenue) / $lastMonthSale->total_revenue) * 100
                : ($sale->total_revenue > 0 ? 100 : 0);

            $countryData[] = [
                'country' => $sale->country,
                'total_orders' => $sale->total_orders,
                'total_revenue' => $sale->total_revenue,
                'order_growth' => $orderGrowth,
                'revenue_growth' => $revenueGrowth,
            ];
        }

        return view('admin.content.apps.app-ecommerce-dashboard', compact(
            'totalProducts', 
            'productIncreasePercentage', 
            'totalOrders', 
            'orderIncreasePercentage',
            'totalCustomers',
            'customerIncreasePercentage',
            'totalResellers',
            'resellerIncreasePercentage',
            'countryData'
        ));
    }
}
?>
