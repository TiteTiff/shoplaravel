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

@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error}} </li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" method="POST" class="max-w-lg">
    @csrf
    <div class="mb-4">
        <label for="category name" class="block font-medium mb-1">Category Name</label>
        <select class="w-full border rounded px-3 py-2" name="category name" id="category name" required
                class="mt-1 block w-full rounded-md border-gray-300
                  @error('name') border-red-500 @enderror">
            @error('name')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
            <option value="">Choose a category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}"
                    {{ old('category_id', $product->category_id ?? '') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label for="category_id" class="block font-medium mb-1">Category_id</label>
        <input type="number" min="0" max="5" name="category_id" id="category_id" required
               value="{{ old('category_id') }}"
               class="w-full border rounded px-3 py-2
                  @error('category_id') border-red-500 @enderror">
        @error('category_id')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror

    </div>

    <div class="mb-4">
        <label for="name" class="block font-medium mb-1">Name</label>
        <input type="text" name="name" id="name" required
               value="{{ old('name') }}"
               class="w-full border rounded px-3 py-2
               @error('name') border-red-500 @enderror">
        @error('name')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror

    </div>

    <div class="mb-4">
        <label for="slug" class="block font-medium mb-1">Slug</label>
        <input type="text" name="slug" id="slug" required
               value="{{ old('slug') }}"
               class="w-full border rounded px-3 py-2
               @error('slug') border-red-500 @enderror">
        @error('slug')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror

    </div>

    <div class="mb-4">
        <label for="description" class="block font-medium mb-1">Description</label>
        <input type="text" name="description" id="description" required
               value="{{ old('description') }}"
               class="w-full border rounded px-3 py-2
               @error('description') border-red-500 @enderror">
        @error('description')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror

    </div>

    <div class="mb-4">
        <label for="price" class="block font-medium mb-1">Price</label>
        <input type="number" min="0" step="0.01" name="price" id="price" required
               value="{{ old('price') }}"
               class="w-full border rounded px-3 py-2
               @error('price') border-red-500 @enderror">
        @error('price')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="stock" class="block font-medium mb-1">Stock</label>
        <input type="number" name="stock" id="stock" required
               value="{{ old('stock') }}"
               class="w-full border rounded px-3 py-2
               @error('stock') border-red-500 @enderror">
        @error('stock')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="created_at" class="block font-medium mb-1">Created at</label>
        <input type="date" name="created_at" id="created_at" required
               value="{{ old('created_at') }}"
               class="w-full border rounded px-3 py-2
               @error('created_at') border-red-500 @enderror">
        @error('created_at')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
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

@endsection
