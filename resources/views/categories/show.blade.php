@extends('layouts.app')

@section('title', 'AgriMart - '.$category->name)

@section('content')
    <section class="page-header">
        <h1>{{ $category->name }}</h1>
        @if ($category->description)
            <p>{{ $category->description }}</p>
        @endif
    </section>
    @include('partials.flash')
    <section class="featured-products">
        <div class="product-grid">
            @forelse ($products as $product)
                @include('partials.product-card', ['product' => $product->setRelation('category', $category)])
            @empty
                <p>No products in this category yet.</p>
            @endforelse
        </div>
        <div class="pagination-wrap">{{ $products->links() }}</div>
    </section>
@endsection
