<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @yield('head')

    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon/">

    <meta name="description" content="KARTY"/>
    <script>

        // Animations init
        new WOW().init();
    </script>



</head>


<body>

<!-- Main navigation -->

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('img/logomini.png')}}"/> Card Traders</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav ml-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Karty
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('allCards')}}">Wszystkie karty</a>
                                <a class="dropdown-item" href="{{route('myCards')}}">Moje karty</a>
                                <a class="dropdown-item" href="{{route('forSaleCards')}}">Sprzedaż</a>
                                <a class="dropdown-item" href="{{route('forChangeCards')}}">Wymiana</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Dodaj do zaufanych</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endauth


                    @guest
                        <li class="nav-item nav-right">
                            <a class="nav-link" href="{{ route('login') }}">{{__('Login')}}</a>
                        </li>
                        <li class="nav-item nav-right">
                            <a class="nav-link" href="{{ route('register') }}">{{__('Register')}}</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
<div style="padding-top: 80px;">
</div>
@yield('content')







<footer id="sticky-footer">
    <p class="text-center">&copy; 2020 CardTraderS</p>
</footer>

@yield('scripts')
</body>
</html>
