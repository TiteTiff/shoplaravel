@extends('layouts.app')
@section('title', 'Accueil - ShopLaravel')
@section('content')
    <h1 class="text-3xl font-bold mb-4">Bienvenue sur PoleWear</h1>
    <p><strong>Découvrez nos produits exceptionnels !</strong></p>



<ul>
@forelse($products as $product)
        <li><strong>{{ $product->name}}</strong>
        <li>Description: {{ $product->description}} </li>
        <li>Price: {{ $product->price}}€ </li>
        <li>Stock: {{ $product->stock}} </li>
@empty
<p>Aucun produit trouvé.</p>
@endforelse
</ul>
@endsection


