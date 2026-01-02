<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\Api\ProductController;

Route::prefix('products')->group(function () {
    Route::get('', [ProductController::class, 'index'])
        ->name('products.index');

    Route::get('{product_id}', [ProductController::class, 'show'])
        ->name('products.show');
});
