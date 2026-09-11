<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AgriMart - Farm Fresh, Delivered')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('partials.header')
    <main class="site-content">
        @yield('content')
    </main>
    @include('partials.footer')
    @stack('scripts')
</body>
</html>
