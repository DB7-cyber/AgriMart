@extends('layouts.app')

@section('title', 'AgriMart - Product Detail')

@section('content')
    <section class="page-header"><h1>Product Name Placeholder</h1></section>
    <section class="product-detail">
        <div class="product-image-placeholder" style="height:300px;"></div>
        <p class="product-price">K00.00</p>
        <p>Product description placeholder text goes here. Task 3 replaces this with {{ '{{ $product->description }}' }}.</p>
        <button class="btn-primary">Add to Cart</button>
    </section>
@endsection
