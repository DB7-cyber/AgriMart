@extends('layouts.app')

@section('title', 'AgriMart - Login')

@section('content')
    <section class="auth-page">
        <h1>Login</h1>
        <form class="auth-form" action="#" method="POST">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" class="btn-primary">Login</button>
        </form>
        <p>Don't have an account? <a href="#">Register here</a></p>
    </section>
@endsection
