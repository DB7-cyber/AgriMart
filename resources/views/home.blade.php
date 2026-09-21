@extends('layouts.app')

@section('title', 'AgriMart - Home')

@section('content')
    <section class="hero">
        <div class="hero-text">
            <h1>Fresh From the Farm, Straight to You</h1>
            <p>Buy quality produce directly from local farmers and vendors.</p>
            <a href="{{ route('products.index') }}" class="btn-primary">Shop Now</a>
        </div>
    </section>

    @include('partials.flash')

    <section class="featured-categories">
        <h2>Shop by Category</h2>
        <div class="category-grid">
            @forelse ($categories as $category)
                <a href="{{ route('categories.show', $category) }}" class="category-card">{{ $category->name }}</a>
            @empty
                <p>No categories yet. <a href="{{ route('categories.create') }}">Add one</a>.</p>
            @endforelse
        </div>
    </section>

    <section class="featured-products">
        <h2>Featured Products</h2>
        <div class="product-grid">
            @forelse ($featuredProducts as $product)
                @include('partials.product-card', ['product' => $product])
            @empty
                <p>No featured products yet. <a href="{{ route('products.create') }}">Add a product</a>.</p>
            @endforelse
        </div>
    </section>
@endsection
