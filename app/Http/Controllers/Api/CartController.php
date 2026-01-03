<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
class CartController extends Controller
{
    public function index()
    {
        return view('cart.index');
    }

    public function add($id)
    {
        $product = Product::findOrFail($id);

        Cart::add(
            $product->product_id, // ID real
            $product->name,
            1,
            $product->price
        );

        return redirect()->route('cart.index');
    }

    public function remove($rowId)
    {
        Cart::remove($rowId);
        return back();
    }
    // public function addToCart($id)
    // {
    //     $product = Product::findOrFail($id);
    //     Card::add($product->product_id, $product->name, 1, $product->price);
    //     return redirect()->route('cart.index');
    // }
}
