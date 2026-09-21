@extends('layouts.app')

@section('title', 'AgriMart - Add Category')

@section('content')
    <section class="page-header"><h1>Add Category</h1></section>
    @include('partials.flash')
    <section class="form-page">
        <form method="POST" action="{{ route('categories.store') }}" class="form-card">
            @csrf
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>

            <label for="description">Description</label>
            <textarea id="description" name="description" rows="4">{{ old('description') }}</textarea>

            <button type="submit" class="btn-primary">Save Category</button>
        </form>
    </section>
@endsection
