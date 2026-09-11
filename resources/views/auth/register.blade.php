@extends('layouts.app')

@section('title', 'AgriMart - Register')

@section('content')
    <section class="auth-page">
        <h1>Create an Account</h1>
        <form class="auth-form" action="#" method="POST">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
            <button type="submit" class="btn-primary">Register</button>
        </form>
        <p>Already have an account? <a href="#">Login here</a></p>
    </section>
@endsection
