<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Website')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        nav { background-color: #333; color: white; padding: 1rem; }
        nav ul { list-style: none; margin: 0; padding: 0; display: flex; }
        nav li { margin-right: 1rem; }
        nav a { color: white; text-decoration: none; }
        nav a.active { font-weight: bold; color: yellow; }
        .container { max-width: 1200px; margin: 0 auto; padding: 2rem; }
        footer { background-color: #333; color: white; text-align: center; padding: 1rem; margin-top: 2rem; }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
            <li><a href="{{ route('hobbies') }}" class="{{ request()->routeIs('hobbies') ? 'active' : '' }}">Hobbies</a></li>
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        <p>Made with love and coffee <3.</p>
    </footer>
</body>
</html>