<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/products', function () {
    return view('pages.products');
});

Route::get('/productDetail', function () {
    return view('pages.productDetail');
});
