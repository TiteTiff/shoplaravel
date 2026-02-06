<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<ul>
    <strong>Boucle foreach</strong>
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
</body>
</html>
