@extends('layouts.frontend')

@section('content')

    <div class="view" style="background-image: url({{asset('img/logo.png')}}); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <!-- Mask & flexbox options-->
        <div class="mask rgba-gradient align-items-center">
            <!-- Content -->
            <div class="container">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-6 black-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
                        <div id="separe"></div>
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

        <div class="view" style="background-image: url({{asset('img/background.png')}}); background-repeat: no-repeat; background-size: cover; background-position: center center;">

        <div class="container" >
            <!--Grid row-->

            <div class="row py-5">
                <!--Grid column-->
                <div class="col-md-12 text-center">

                    <p>Wielu użytkowników już skompletowało swoje karty. Strona pomaga im nie tylko w kontroli swojej kolekcji ale pomaga znaleść ludzi, którzy z chęcią zamienią bądź sprzedadzą brakujące Ci karty.</p>
                    <h3>Popatrz jakie kolekcje posiadaja społeczność TWICE</h3>
                </div>
                <!--Grid column-->
            </div>

            <div class="view overlay zoom">
                <img src="{{asset('img/cardExample.png')}}" class="rounded mx-auto d-block img-fluid " alt="zoom">
                <div class="mask flex-center waves-effect waves-light">
                    <p class="white-text">NICK</p>
                </div>
            </div>



            @foreach($photos->chunk(6) as $chunked_photos)
                <div class="row my-2">
                    @foreach($chunked_photos as $photo)
                        <div class="col-lg-2 col-md-4 col-sm-6 view overlay">
                            <img class="img-fluid z-depth-1 " src="{{asset('img/cardExample.png')}}">
                            <a>
                                <div class="mask waves-effect waves-light rgba-white-slight"></div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endforeach



            <!--Grid row-->
        </div>
        </div>
    </main>
    <!--Main Layout-->



@endsection
