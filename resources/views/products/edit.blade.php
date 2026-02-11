@extends('layouts.app')
@section('title', 'Edit a product - PoleWear')
@section('content')

<h1 class="text-2xl font-bold mb-6">Edit product</h1>

<form action="{{ route('products.update', $product) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label for="category_id">Category ID</label>
        <input type="number" min="0" max="5" name="category_id" value="{{ old('category_id', $product->category_id) }}">
    </div>

    <div class="mb-4">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name', $product->name) }}">
    </div>

    <div class="mb-4">
        <label for="slug">Slug</label>
        <input type="text" name="slug" value="{{ old('slug', $product->slug) }}">
    </div>

    <div class="mb-4">
        <label for="description">Description</label>
        <input type="text" name="description" value="{{ old('description', $product->description) }}">
    </div>

    <div class="mb-4">
        <label for="price">Price</label>
        <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}">
    </div>

    <div class="mb-4">
        <label for="stock">Stock</label>
        <input type="number" name="stock" value="{{ old('stock', $product->price) }}">
    </div>

    <div class="mb-4">
        <label for="updated_at">Update Date</label>
        <input type="date" name="updated_at" value="{{ old('updated_at', $product->updated_at) }}">
    </div>

    <div class="mb-4">
        <label for="active">Active</label>
        <input type="checkbox" name="active" value="{{ old('true', $product->active) }}">
    </div>

    <div class="mb-4">
        <label for="active">Not Active</label>
        <input type="checkbox" name="active" value="{{ old('false', $product->active) }}">
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
        Edit product
    </button>
</form>

<form action="{{ route('products.destroy', $product) }}" method="POST"
    onsubmit="return confirm('Êtes-vous sûr ?')">
@csrf
@method('DELETE')

<button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">
    Supprimer
</button>
</form>


@endsection

