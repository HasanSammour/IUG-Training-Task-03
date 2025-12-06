<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

// ! Additional Step: Create View to show all products
Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    $products = Product::all();
    return view('products', ['products' => $products]);
});
