<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    //
    public function index()
    {
        //   dd(Product::all());
        // $products = Product::all();

        return view('pruebas.index');
    }

    public function show($id)
    {
        //   dd(Product::all());
        // $products = Product::all();
        $elId = $id;

        return view('pruebas.show', compact('elId'));
    }
}
