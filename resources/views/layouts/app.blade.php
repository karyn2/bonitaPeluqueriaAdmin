<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite(['resources/css/layout.css', 'resources/sass/layout.scss'])
    @vite(['resources/css/app.css'])

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md fondoNav shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand fuente" href="{{ url('/home') }}">
                    BONITA - Sistema de Administración
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link"  href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle fuentePeq" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <nav class="sidebar-navigation">
            <ul>
                <li class="active">
                    <a href="{{ route('listaCitas') }}">
                    <img src="{{ asset('images/evento2.png') }}" alt="Imagen" class="img-fluid iconosSidebar">
                        <span class="tooltip">Citas</span>
                    </a>  
                </li>
                <li>
                <img src="{{ asset('images/citahoy.png') }}" alt="Imagen" class="iconosSidebar">
                    <span class="tooltip">Mi Agenda hoy</span>
                </li>
                <li>
                    <img src="{{ asset('images/procedimientos.png') }}" alt="Imagen" class="iconosSidebar">
                    <span class="tooltip">Procedimientos</span>
                </li>
                <li>
                <img src="{{ asset('images/contabilidad.png') }}" alt="Imagen" class="iconosSidebar">
                    <span class="tooltip">Cuentas</span>
                </li>
                <li>
                    <a href="{{ url('/register') }}">
                        <img src="{{ asset('images/perfil.png') }}" alt="Imagen" class="iconosSidebar">
                        <span class="tooltip">Usuarios</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/personal/listado') }}">
                    <img src="{{ asset('images/empleo.png') }}" alt="Imagen" class="iconosSidebar">
                    <span class="tooltip">Empleados</span>
                    </a>
                </li>
            </ul>
    </nav>
        <main class="py-4 p-4">
             @yield('content')
        </main>

</body>
</html>
