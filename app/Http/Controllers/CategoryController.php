<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ]);
        Category::create(['name' => $request->name]);
        return redirect()->route('admin.producten.index')->with('success', 'Categorie toegevoegd!');
    }
} 