@extends('layouts.app')

@section('title', 'AgriMart - '.$product->name)

@section('content')
    <section class="page-header"><h1>{{ $product->name }}</h1></section>
    @include('partials.flash')
    <section class="product-detail">
        <div class="product-image-placeholder" style="height:300px;"></div>
        <p class="product-category">
            Category: <a href="{{ route('categories.show', $product->category) }}">{{ $product->category->name }}</a>
        </p>
        <p class="product-price">K{{ number_format($product->price, 2) }} / {{ $product->unit }}</p>
        <p>{{ $product->stock > 0 ? $product->stock.' '.$product->unit.' in stock' : 'Out of stock' }}</p>
        <p>{{ $product->description }}</p>
        <button class="btn-primary" @disabled($product->stock < 1)>Add to Cart</button>
    </section>
@endsection
