@extends('layouts.app')

@section('title', 'AgriMart - Products')

@section('content')
    <section class="page-header">
        <h1>{{ $search ? 'Results for "'.$search.'"' : 'All Products' }}</h1>
        <a href="{{ route('products.create') }}" class="btn-primary">+ Add Product</a>
    </section>
    @include('partials.flash')
    <section class="featured-products">
        <div class="product-grid">
            @forelse ($products as $product)
                @include('partials.product-card', ['product' => $product])
            @empty
                <p>No products found.</p>
            @endforelse
        </div>
        <div class="pagination-wrap">{{ $products->links() }}</div>
    </section>
@endsection
