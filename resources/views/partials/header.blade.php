<header class="site-header">
    <div class="header-inner">
        <a href="{{ route('home') }}" class="logo">AgriMart</a>
        <nav class="main-nav">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </nav>
        <form class="search-bar" action="#" method="GET">
            <input type="text" name="q" placeholder="Search products...">
            <button type="submit">Search</button>
        </form>
        <div class="header-actions">
            <a href="#" class="icon-link">Login</a>
            <a href="#" class="icon-link cart-icon">Cart <span class="cart-count">0</span></a>
        </div>
        <button class="mobile-menu-toggle" aria-label="Toggle menu">☰</button>
    </div>
</header>
