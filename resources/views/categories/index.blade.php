@extends('layouts.app')

@section('title', 'AgriMart - Categories')

@section('content')
    <section class="page-header">
        <h1>Categories</h1>
        <a href="{{ route('categories.create') }}" class="btn-primary">+ Add Category</a>
    </section>
    @include('partials.flash')
    <section class="featured-categories">
        <div class="category-grid">
            @forelse ($categories as $category)
                <a href="{{ route('categories.show', $category) }}" class="category-card">
                    {{ $category->name }}
                    <small>{{ $category->products_count }} {{ \Illuminate\Support\Str::plural('product', $category->products_count) }}</small>
                </a>
            @empty
                <p>No categories yet.</p>
            @endforelse
        </div>
    </section>
@endsection
