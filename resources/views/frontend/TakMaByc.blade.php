<html lang="en">
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
    <style>

        html,
        body,
        header,
        .view {
            height: 100%;
        }

        @media (max-width: 740px) {
            html,
            body,
            header,
            .view {
                height: 1000px;
            }
        }
        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            header,
            .view {
                height: 600px;
            }
        }

        .btn .fa {
            margin-left: 3px;
        }

        .top-nav-collapse {
            background-color: #a3db9c !important;
        }

        .navbar:not(.top-nav-collapse) {
            background: transparent !important;
        }

        @media (max-width: 991px) {
            .navbar:not(.top-nav-collapse) {
                background: #a3db9c !important;
            }
        }

        .btn-white {
            color: black !important;
        }

        h6 {
            line-height: 1.7;
        }


    </style>

    <script>

        // Animations init
        new WOW().init();
    </script>
</head>
<body>

<!-- Main navigation -->
<header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('img/logomini.png')}}"/> Card Traders</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Karty
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Wszystkie karty</a>
                                <a class="dropdown-item" href="#">Moje karty</a>
                                <a class="dropdown-item" href="#">Sprzedaż</a>
                                <a class="dropdown-item" href="#">Wymiana</a>
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
                <form class="form-inline">
                    <div class="md-form my-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <!-- Full Page Intro -->
    <div class="view" style="background-image: url({{asset('img/logo.png')}}); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <!-- Mask & flexbox options-->
        <div class="mask rgba-gradient align-items-center">
            <!-- Content -->
            <div class="container">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-6 black-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
                        <h1 class="h1-responsive font-weight-bold mt-sm-5">Teraz jeszcze łatwiej zebrać karty!! </h1>
                        <hr class="hr-light">
                        <h6 class="mb-4">Czy ty również zaraziłeś się manią na TWICE? <p>Tak jak my zbierasz karty najlepszych piosenkarek na świecie?</p>
                            <p>Chciałbyś poznać ludzi podzielających z Tobą pasję? Rozmawiaj, wymieniaj się kartami, dołącz do nas, aplikacji z największą społecznością TWICE. ZAPRASZAMY</p></h6>
                        <a class="btn btn-white">Aplikacja na telefon</a>
                        <a class="btn btn-outline-black">Aplikacja Dekstopowa</a>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->

                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
    </div>
    <!-- Full Page Intro -->
</header>
<!-- Main navigation -->
<!--Main Layout-->
<main>
    <div class="container">
        <!--Grid row-->
        <div class="row py-5">
            <!--Grid column-->
            <div class="col-md-12 text-center">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
</main>
<!--Main Layout-->

</body>
</html>
