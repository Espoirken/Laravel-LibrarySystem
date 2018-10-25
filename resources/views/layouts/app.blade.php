<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/fonts/sawarabigothic_medium_macroman/stylesheet.css') }}" type="text/css" charset="utf-8" />
    <link rel="stylesheet" href="{{ asset('css/fonts/sawarabimincho_medium_macroman/stylesheet.css') }}" type="text/css" charset="utf-8" />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="navbar-brand">
                                {{ config('app.name', 'Laravel') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('attendance')}}"><i class="fa fa-address-book" aria-hidden="true"></i> Attendances</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('transaction')}}"><i class="fa fa-credit-card" aria-hidden="true"></i> Transactions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('books')}}"><i class="fa fa-book" aria-hidden="true"></i> Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users')}}"><i class="fa fa-users" aria-hidden="true"></i> Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('settings')}}"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reports')}}"><i class="fa fa-tasks" aria-hidden="true"></i> Reports</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            
        </nav>
        
        <main class="py-4">
            <div class="container">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
</body>
</html>
