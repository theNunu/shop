<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
{
    $product = Product::findOrFail($id);
    // Cart::add($product->product_id, $product->name, 1, $product->price);
    return redirect()->route('cart.index');
}
}
