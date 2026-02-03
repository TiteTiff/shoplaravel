@extends('layouts.app')
@section('title', 'Accueil - ShopLaravel')
@section('content')
    <h1 class="text-3xl font-bold mb-4">Bienvenue sur PoleWear</h1>
    <p>Découvrez nos produits exceptionnels !</p>


<ul>
    @foreach($products as $product)
        <li>{{ $product['identifiant'] }} - {{ $product['name'] }} - {{ $product['price']}} </li>
    @endforeach
</ul>
<ul>
<strong>Boucle forelse</strong>
    @forelse($products as $product)
        <li>{{ $product['identifiant'] }} - {{ $product['name'] }} - {{ $product['price']}} </li>
    @empty
        <p>Aucun produit trouvé.</p>
    @endforelse
</ul>
@endsection


