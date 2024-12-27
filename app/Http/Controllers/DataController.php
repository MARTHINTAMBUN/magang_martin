<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DataController extends Controller
{
    public function index()

    {
        $products = Product::all();
        return view('home', compact('products'));
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.detail', compact('product'));
    }
}
