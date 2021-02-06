<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*  Laravel From Scratch  */

Route::get('/', function () {
    return view('welcome');
});

Route::get('products', [ProductController::class, 'index'])->name('products.index');

Route::get('products/create', [ProductController::class, 'create'])->name('products.create');

Route::post('products/{product}', [ProductController::class, 'store'])->name('products.store');

Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

Route::match(['put', 'patch'], 'products/{product}', [ProductController::class, 'update'])->name('products.update');

Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
