<?php

use Illuminate\Support\Facades\Route;

/*  Laravel From Scratch  */

Route::get('/', function () {
    return view('welcome');
});

Route::get('products', function(){
    return 'This page shows the list of products.';
})->name('products.index');

Route::get('products/create', function(){
    return 'Show the form to create a product.';
})->name('products.create');

Route::post('products/{product}', function($product){
    //
})->name('products.store');

Route::get('products/{product}', function($product){
    return "This is product number {$product}.";
})->name('products.show');

Route::get('products/{product}/edit', function($product){
    return 'Show the form to edit product number ' . $product . '.';
})->name('products.edit');

Route::match(['put', 'patch'], 'products/{product}', function($product){
    //
})->name('products.update');

Route::delete('products/{product}', function ($product) {
    //
})->name('products.destroy');
