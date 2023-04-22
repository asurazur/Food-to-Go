<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Food to Go') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/price.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/land.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar" style="background-color: #C43F52; height:70px;">
            <div class="container">
                <a class="brand navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/icon white.png') }}" height="40px"><span style="color: White;">Food to Go</span>
                </a>
                <a class="navbar-brand" href="{{ url('/') }}">
        <span style="color: White;"> Home </span>
    </a>
                <a class="navbar-brand" href="{{ url('/menu') }}">
        <span style="color: White;"> Canteens </span>
    </a>
    <a class="navbar-brand" href="{{ url('/') }}">
        <span style="color: White;"> Contacts </span>
    </a>
               
        <nav class="navbar navbar-expand">
 <!-- Left Side Of Navbar -->
<ul class="navbar-nav me-auto">
    
    <a class="navbar-brand" href="{{ url('favorites') }}">
        <img src="{{ asset('img/heart.png') }}" height="40px">
    </a>
    <div class="vr"></div>
    <a class="navbar-brand" href="{{ url('/shop') }}">
        <img src="{{ asset('img/cart.png') }}" height="40px">
    </a>
</ul>

<!-- Right Side Of Navbar -->
<ul class="navbar-nav ms-auto">
    <!-- Authentication Links -->
    @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}"><span style="color: white;">{{ __('Login') }}</span></a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
