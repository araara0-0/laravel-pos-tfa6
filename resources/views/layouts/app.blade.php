<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Raimen point-of-sale foundation for customer and staff account management.">
    <title>@yield('title') | Raimen POS</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="site-header">
        <div class="container header-inner">
            <a class="brand" href="{{ route('home') }}" aria-label="Raimen POS home">
                <span class="brand-mark">RA</span>
                <span><strong>Raimen POS</strong><small>Ramen shop system</small></span>
            </a>

            <nav aria-label="Main navigation">
                <a href="{{ route('home') }}" @class(['active' => request()->routeIs('home')])>Home</a>
                <a href="{{ route('about') }}" @class(['active' => request()->routeIs('about')])>About</a>
                <a href="{{ route('customers.index') }}" @class(['active' => request()->routeIs('customers.*')])>Customers</a>
                <a href="{{ route('users.index') }}" @class(['active' => request()->routeIs('users.*')])>Users</a>
            </nav>
        </div>
    </header>

    <main>@yield('content')</main>

    <footer class="site-footer">
        <div class="container">
            <span>Raimen POS</span>
            <span>Created by Ara Avellaneda</span>
        </div>
    </footer>
</body>
</html>
