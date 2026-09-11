@extends('layouts.app')

@section('title', 'AgriMart - Checkout')

@section('content')
    <section class="page-header"><h1>Checkout</h1></section>
    <section class="checkout-page">
        <div class="checkout-form">
            <h2>Delivery Details</h2>
            <form action="#" method="POST">
                <label for="address">Delivery Address</label>
                <input type="text" id="address" name="address" required>
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" required>
                <button type="submit" class="btn-primary">Continue to Payment</button>
            </form>
        </div>
        <div class="checkout-summary">
            <h2>Order Summary</h2>
            <p>Placeholder line items go here. Task 6 loops over the cart contents and shows a real subtotal + delivery + total.</p>
            <p><strong>Total:</strong> K0.00</p>
        </div>
    </section>
@endsection
