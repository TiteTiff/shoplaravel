@extends('layouts.app')
@section('title', 'Create a product - PoleWear')
@section('content')

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<h1 class="text-2xl font-bold mb-6">New Product</h1>

<form action="{{ route('products.store') }}" method="POST" class="max-w-lg">
    @csrf
    <div class="mb-4">
        <label for="category_id" class="block font-medium mb-1">Category ID</label>
        <input type="number" min="0" max="5" name="category_id" id="category_id"
           value="{{ old('category_id') }}"
           class="w-full border rounded px-3 py-2"
           required>
    </div>
    <div class="mb-4">
        <label for="name" class="block font-medium mb-1">Name</label>
        <input type="text" name="name" id="name"
               value="{{ old('name') }}"
               class="w-full border rounded px-3 py-2"
               required>
    </div>

    <div class="mb-4">
        <label for="slug" class="block font-medium mb-1">Slug</label>
        <input type="text" name="slug" id="slug"
               value="{{ old('slug') }}"
               class="w-full border rounded px-3 py-2"
               required>
    </div>

    <div class="mb-4">
        <label for="description" class="block font-medium mb-1">Description</label>
        <input type="text" name="description" id="description"
               value="{{ old('description') }}"
               class="w-full border rounded px-3 py-2"
               required>
    </div>

    <div class="mb-4">
        <label for="price" class="block font-medium mb-1">Price</label>
        <input type="number" step="0.01" name="price" id="price"
               value="{{ old('price') }}"
               class="w-full border rounded px-3 py-2"
               required>
    </div>

    <div class="mb-4">
        <label for="stock" class="block font-medium mb-1">Stock</label>
        <input type="number" name="stock" id="stock"
               value="{{ old('stock') }}"
               class="w-full border rounded px-3 py-2"
               required>
    </div>

    <div class="mb-4">
        <label for="created_at" class="block font-medium mb-1">Created at</label>
        <input type="date" name="created_at" id="created_at"
               value="{{ old('created_at') }}"
               class="w-full border rounded px-3 py-2"
               required>
    </div>

    <label for="active" class="block font-medium mb-1">Select active or not</label>
        <input type="checkbox" name="active" id="true"
            value="{{ old('true') }}"
            checked>
        <label for="true">Active</label>
        <div>
            <input type="checkbox" name="active" id="false"
                value="{{ old('false') }}">
            <label for="false">Not active</label>
        </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
        Créer le produit
    </button>
</form>
</body>
</html>
@if(session('success'))
    <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="bg-red-100 text-red-800 p-4 rounded mb-4">
        {{ session('error') }}
    </div>
@endif
@endsection
