@extends('layouts.app')
@section('title', 'product')
@section('content')


    <ul>
        <li><strong>{{ $product->name}}</strong></li>
            <li>Description: {{ $product->description}} </li>
            <li>Price: {{ $product->price}}€ </li>
            <li>Stock: {{ $product->stock}} </li>
    </ul>

@endsection

