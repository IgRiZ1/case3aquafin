<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('producten.show', compact('product'));
    }

    public function index()
    {
        $producten = \App\Models\Product::all();
        return view('producten.index', compact('producten'));
    }
} 