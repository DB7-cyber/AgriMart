@extends('layouts.app')

@section('title', 'AgriMart - Edit Product')

@section('content')
    <section class="page-header"><h1>Edit Product</h1></section>
    @include('partials.flash')
    <section class="form-page">
        <form method="POST" action="{{ route('products.update', $product) }}" class="form-card" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" required>

            <label for="category_id">Category</label>
            <select id="category_id" name="category_id" required>
                <option value="">-- Select category --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id', $product->category_id) == $category->id)>{{ $category->name }}</option>
                @endforeach
            </select>

            <label for="price">Price (K)</label>
            <input type="number" id="price" name="price" step="0.01" min="0" value="{{ old('price', $product->price) }}" required>

            <label for="unit">Unit (e.g. kg, bag, crate)</label>
            <input type="text" id="unit" name="unit" value="{{ old('unit', $product->unit) }}" required>

            <label for="stock">Stock quantity</label>
            <input type="number" id="stock" name="stock" min="0" value="{{ old('stock', $product->stock) }}" required>

            <label for="description">Description</label>
            <textarea id="description" name="description" rows="4">{{ old('description', $product->description) }}</textarea>

            <label for="image">Update product photo (optional)</label>
            <input type="file" id="image" name="image" accept="image/*">
            <small>Leave blank to keep the current image. If no image exists, a category icon will be shown.</small>

            <label class="checkbox-label">
                <input type="checkbox" name="is_featured" value="1" @checked(old('is_featured', $product->is_featured))>
                Feature on the homepage
            </label>

            <button type="submit" class="btn-primary">Update Product</button>
        </form>
    </section>
@endsection
