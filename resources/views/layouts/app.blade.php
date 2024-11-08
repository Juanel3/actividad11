<!-- layouts/app.blade.php -->
<html>
<head>
    <title>Menús</title>
    <!-- Agrega los estilos necesarios para resaltar el menú -->
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Casa</a></li>
                <li><a href="{{ route('photos') }}" class="{{ request()->routeIs('photos') ? 'active' : '' }}">Fotos</a></li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contacto</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <footer>
        <p>Proyecto realizado por [Tu Nombre]</p>
    </footer>
</body>
</html>
