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
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->only('name', 'description', 'category');

        if ($request->hasFile('image')) {
            // Delete old image if it exists and is not 'default.png'
            if ($product->image && $product->image !== 'default.png' && file_exists(public_path('images/products/' . $product->image))) {
                unlink(public_path('images/products/' . $product->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/products'), $imageName);
            $data['image'] = $imageName;
        } else {
            // If no new image is uploaded and 'image' field is explicitly empty in request,
            // set it to default.png, otherwise keep existing image.
            if ($request->has('image') && is_null($request->input('image'))) {
                $data['image'] = 'default.png';
            }
        }

        $product->update($data);

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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('images/products');

            $image->move($destinationPath, $imageName);
        } else {
            $imageName = 'default.png';
        }

        \App\Models\Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.producten.index')->with('success', 'Product toegevoegd!');
    }
} 