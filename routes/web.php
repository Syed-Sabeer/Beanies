<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductDetailController;

Route::get('/', function () {
    return view('index');
});
Route::get('/products', function () {
    return view('pages.products');
});

Route::get('/productDetail/{id}', [ProductDetailController::class, 'index'])->name('product.detail');
