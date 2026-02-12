@extends('layouts.app')
@section('title', 'PoleWear')
@section('content')

    <h1 class="text-3xl font-bold mb-4"> {{ $category-> name }} - ID: {{ $category->id }}  {{ $category->description}} </h1>

    @foreach ($category->products as $product)
        <br><strong>{{$product->name}}</strong>
        <br> <em>{{$product->description}}</em>
        <br> Price: {{$product->price}} €
        <br> {{$product->stock}}
        <br>

    @endforeach

@endsection
