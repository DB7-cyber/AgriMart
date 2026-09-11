@extends('layouts.app')

@section('title', 'AgriMart - Your Cart')

@section('content')
    <section class="page-header"><h1>Your Cart</h1></section>
    <section class="cart-page">
        <p>Your cart is currently empty. (Placeholder - Task 4 adds real cart logic.)</p>
        <div class="cart-summary">
            <p><strong>Total:</strong> K0.00</p>
            <a href="#" class="btn-primary">Proceed to Checkout</a>
        </div>
    </section>
@endsection
