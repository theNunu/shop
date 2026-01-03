<?php

use App\Http\Controllers\Api\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\PruebaController;

Route::prefix('products')->group(function () {
    Route::get('', [ProductController::class, 'index'])
        ->name('products.index');

    Route::get('{product_id}', [ProductController::class, 'show'])
        ->name('products.show');
});

Route::prefix('pruebas')->group(function () {
    Route::get('/', [PruebaController::class, 'index'])->name('pruebas.index');
    Route::get('{id}', [PruebaController::class, 'show'])->name('pruebas.show');
    // Route::post('/add/{id}', [CartController::class, 'add'])->name('cart.add');
    // Route::post('/remove/{rowId}', [CartController::class, 'remove'])->name('cart.remove');
});

// Route::prefix('carts')->group(function () {
//     Route::get('', [CartController::class, 'addToCart'])
//         ->name('cart.index');

//     // Route::get('{product_id}', [ProductController::class, 'show'])
//     //     ->name('products.show');
// });

// use App\Http\Controllers\CartController;

Route::prefix('carts')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::post('/add/{id}', [CartController::class, 'add'])->name('cart.add');
    Route::post('/remove/{rowId}', [CartController::class, 'remove'])->name('cart.remove');
});
