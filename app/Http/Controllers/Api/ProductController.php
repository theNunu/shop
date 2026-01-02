<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProduct;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }


    public function index()
    {
        //   dd(Product::all());
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function show($product_id)
    {
        $product = Product::findOrFail($product_id);
        return view('products.show', compact('product'));
    }

    public function store(StoreProduct $request)
    {
        return response()->json(
            $this->productService->create($request->validated()),
            201
        );
    }
}
