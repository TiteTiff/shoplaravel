<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products=Product::with('category')->get();
        $categories=Category::all();
        return view('products/create', compact('products', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'category_id'=> 'required|numeric|min:0|max:5|exists:categories,id',
            'name'=> 'required|string|max:255',
            'slug'=> 'required|string|max:255',
            'description'=> 'required|string|max:255',
            'price'=> 'required|numeric|min:1',
            'stock'=> 'required|numeric',
            'active'=> 'boolean',
        ]);
        Product::create($validated);
        return redirect()->route('index')
            ->with('success', 'Produit créé avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories=Category::all();
        return view('products/edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'updated_at' => $request->updated_at,
            'active' => $request->active,
        ]);
        return redirect()->route('index')
            ->with('success', 'Produit modifié avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('index')
           ->with('Success', 'Produit supprimé avec succès !');
    }
}
