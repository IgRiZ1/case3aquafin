<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }
        $producten = $query->get();
        return view('admin.producten.index', compact('producten'));
    }

    public function destroy($id)
    {
        $product = \App\Models\Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.producten.index')->with('success', 'Product verwijderd!');
    }

    public function edit($id)
    {
        $product = \App\Models\Product::findOrFail($id);
        return view('admin.producten.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = \App\Models\Product::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $product->update($request->only('name', 'description'));
        return redirect()->route('admin.producten.index')->with('success', 'Product bijgewerkt!');
    }

    public function create()
    {
        $categories = [
            'Bevestigingsmateriaal',
            'Persoonlijke beschermingsmiddelen',
            'Gereedschap (manueel & elektrisch)',
            'Technische onderhoudsmaterialen',
            'Specifieke Aquafin/riolering gerelateerde tools',
            'Diversen / Verbruiksgoederen',
        ];
        return view('admin.producten.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);
        \App\Models\Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
            'image' => 'default.png',
        ]);
        return redirect()->route('admin.producten.index')->with('success', 'Product toegevoegd!');
    }
} 