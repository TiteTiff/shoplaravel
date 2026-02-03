<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @extends('layouts.app')
    @section('title', 'Accueil - ShopLaravel')
</head>
<body>
@section('content')
    <h1 class="text-3xl font-bold mb-4">Bienvenue sur PoleWear</h1>
    <p>Découvrez nos produits exceptionnels !</p>

<p>{{ $name }}</p>
<p>{{ $quantity }}</p>
@if($shopstate === 'open')
    <p>Shop is open</p>
@else
    <p>Shop is close</p>
@endif
<p>{{ $shopstate }}</p>
</body>


</html>
@endsection
