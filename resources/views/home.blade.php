@extends('layouts.app')

@section('title', 'AgriMart - Home')

@section('content')
    <section class="hero">
        <div class="hero-text">
            <h1>Fresh From the Farm, Straight to You</h1>
            <p>Buy quality produce directly from local farmers and vendors.</p>
            <a href="#" class="btn-primary">Shop Now</a>
        </div>
    </section>

    <section class="featured-categories">
        <h2>Shop by Category</h2>
        <div class="category-grid">
            <div class="category-card">Vegetables</div>
            <div class="category-card">Fruits</div>
            <div class="category-card">Grains</div>
            <div class="category-card">Livestock Products</div>
        </div>
    </section>

    <section class="featured-products">
        <h2>Featured Products</h2>
        <div class="product-grid">
            @for ($product = 1; $product <= 4; $product++)
                <div class="product-card">
                    <div class="product-image-placeholder"></div>
                    <p class="product-name">Sample Product {{ $product }}</p>
                    <p class="product-price">K00.00</p>
                </div>
            @endfor
        </div>
    </section>
@endsection
