@extends('layouts.app')

@section('title', 'AgriMart - Add Product')

@section('content')
    <section class="page-header"><h1>Add Product</h1></section>
    @include('partials.flash')
    <section class="form-page">
        @if ($categories->isEmpty())
            <p>You need a category first. <a href="{{ route('categories.create') }}">Add a category</a>.</p>
        @else
            <form method="POST" action="{{ route('products.store') }}" class="form-card" enctype="multipart/form-data">
                @csrf
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>

                <label for="category_id">Category</label>
                <select id="category_id" name="category_id" required>
                    <option value="">-- Select category --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>{{ $category->name }}</option>
                    @endforeach
                </select>

                <label for="price">Price (K)</label>
                <input type="number" id="price" name="price" step="0.01" min="0" value="{{ old('price') }}" required>

                <label for="unit">Unit (e.g. kg, bag, crate)</label>
                <input type="text" id="unit" name="unit" value="{{ old('unit', 'kg') }}" required>

                <label for="stock">Stock quantity</label>
                <input type="number" id="stock" name="stock" min="0" value="{{ old('stock', 0) }}" required>

                <label for="description">Description</label>
                <textarea id="description" name="description" rows="4">{{ old('description') }}</textarea>

                <label for="image">Product photo (optional)</label>
                <input type="file" id="image" name="image" accept="image/*">
                <small>If you skip this, a simple category icon will be shown instead.</small>

                <label class="checkbox-label">
                    <input type="checkbox" name="is_featured" value="1" @checked(old('is_featured'))>
                    Feature on the homepage
                </label>

                <button type="submit" class="btn-primary">Save Product</button>
            </form>
        @endif
    </section>
@endsection
