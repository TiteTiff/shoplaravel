@extends('layouts.app')
@section('title', 'Accueil - ShopLaravel')
@section('content')
    <h1 class="text-3xl font-bold mb-4">Bienvenue sur PoleWear</h1>
    <p><strong>Découvrez nos produits exceptionnels !</strong></p>



<br>
    @foreach($products as $product)
        <p><br><strong>{{ $product-> name }}</strong> - Category: <em>{{ $product->category->name }}</em>
        <br>
        Price: {{ $product['price']}} €
        </p>
    @endforeach

@endsection


