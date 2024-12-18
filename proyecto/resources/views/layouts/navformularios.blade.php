<!DOCTYPE html>
<html lang="es">
<head>

    {{-- Administracion de vuelos, hoteles y destinos--}}
    {{-- Plantilla para el Panel de Administración --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>@yield('titulo','Panel princiapal')</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</head>
<body class="bg-light">
  
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow mb-4">
        <div class="container">
            <a class="navbar-brand font-weight-bold text-dark" href="{{ route('rutaInicio') }}">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('rutaVuelos') ? 'text-warning' : '' }}" href="{{ route('rutaVuelos') }}">Busqueda de vuelos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('rutaAdmiHoteles') ? 'text-warning' : '' }}" href="{{ route('rutaAdmiHoteles') }}">Busqueda de hoteles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('carritoreservacion') ? 'text-warning' : '' }}" href="{{ route('carritoreservacion') }}">Carrito de Reservación</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('contenido')

</body>
</html>
