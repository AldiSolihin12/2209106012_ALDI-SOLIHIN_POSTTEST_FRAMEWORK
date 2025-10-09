<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = Product::all();

    return view('welcome', [
        "title" => "Welcome",
        "products" => $products
    ]);
})->name('welcome');

Route::get('/product/{id}', function ($id) {
    $product = Product::findOrFail($id);
    return view('product-details', [
        "title" => $product->name,
        "product" => $product
    ]);
})->name('product.details');
