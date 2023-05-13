<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Food to Go') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/icon.ico') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/land.css') }}" rel="stylesheet">
</head>
<body>
    <div class="vh-100">
        <nav class="navbar navbar-expand-md shadow-sm bg-navbar">
            <div class="container">
                <a class="brand navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/icon.png') }}" height="40px"><span>Food to Go</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <span> Home </span>
                        </a>   
                        <a class="navbar-brand" href="{{ url('/canteen') }}">
                            <span> Canteens </span>
                        </a>    
                        <a class="navbar-brand" href="{{ url('/About') }}">
                            <span> About Us </span>
                        </a>         
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color:white;" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color:white;" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <!-- Heart & Cart -->
                        <div class="d-flex align-items-center">
                            <a class="navicon" href="{{ url('/favorites') }}"><img src="{{ asset('img/heart.png') }}" alt="Favorites" height="24"> </a>
                            <a class="navicon" href="{{ url('/shop') }}"><img src="{{ asset('img/cart.png') }}" alt="Favorites" height="24"> </a>
                        <!-- Profile -->
                        </div>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: white; font-weight: bold;" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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

        <main class="vh-100">
            @yield('content')
        </main>
    </div>
</body>
</html>
