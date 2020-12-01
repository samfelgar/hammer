<!doctype html>
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
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .site-footer {
            background-color: #fff;
            padding: 35px 0 20px;
            font-size: 15px;
            line-height: 24px;
            color: #737373;
        }

        .site-footer h6 {
            color: #1b4b72;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 2px
        }

        .site-footer a {
            color: #1b4b72;
        }

        .site-footer a:hover {
            color: #1b1e21;
            text-decoration: none;
        }

        .footer-links {
            padding-left: 0;
            list-style: none
        }

        .footer-links li {
            display: block
        }

        .footer-links a {
            color: #1d68a7;
        }

        .footer-links a:active, .footer-links a:focus, .footer-links a:hover {
            color: #1b1e21;
            text-decoration: none;
        }

        .footer-links.inline li {
            display: inline-block
        }

        @media (max-width: 991px) {
            .site-footer [class^=col-] {
                margin-bottom: 30px
            }
        }

        @media (max-width: 767px) {
            .site-footer {
                padding-bottom: 0
            }

            .site-footer .copyright-text {
                text-align: center
            }
        }
    </style>

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            @auth('professional')
                <a class="navbar-brand"
                   href="{{ route('professionals.dashboard', [Auth::guard('professional')->user()]) }}">
                    <img src="{{ asset('favicon.png') }}" alt="{{ config('app.name', 'Laravel') }}" height="30">
                    <span>{{ config('app.name', 'Laravel') }}</span>
                </a>
            @else
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('favicon.png') }}" alt="{{ config('app.name', 'Laravel') }}" height="30">
                    <span>{{ config('app.name', 'Laravel') }}</span>
                </a>
            @endauth
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->nome }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @auth('professional')
                                    <a href="{{route('professionals.data')}}" class="dropdown-item">Meus Dados</a>
                                    <a href="{{route('professionals.dashboard', [Auth::user()])}}"
                                       class="dropdown-item">Dashboard</a>
                                @endauth
                                @auth('web')
                                    <a href="{{route('clients.show', Auth::user())}}" class="dropdown-item">Meus Dados</a>
                                    <a href="{{route('clients.dashboard')}}" class="dropdown-item">Dashboard</a>
                                @endauth
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
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <div class="container">

            <div class="row">
                @section('sidebar')
                    <nav class="col-md-2">
                        <p class="font-weight-bold">Categorias</p>
                        <ul class="nav flex-column">
                            @foreach(\App\Category::all() as $category)
                                <li class="nav-item">
                                    <a href="{{route('category.advertisements', [$category])}}"
                                       class="nav-link">{{ $category->nome }}</a>
                                </li>
                            @endforeach
                            <li class="nav-item">
                                <a href="{{route('advertisements.all')}}" class="nav-link">Todos</a>
                            </li>

                        </ul>
                    </nav>
                @show
                <div class="col">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h6>Acessos</h6>
                    <ul class="footer-links">
                        <li>
                            <a href="{{ route('login') }}">Acesso de usuários</a>
                        </li>
                        <li>
                            <a href="{{ route('login.professional') }}">Acesso de profissionais</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</div>
</body>
</html>
