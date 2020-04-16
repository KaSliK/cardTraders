@extends('layouts.frontend')

@section('content')
    <main>
        <div class="container" >
            <!--Grid row-->

            <div class="row">
                <!--Grid column-->
                <div class="col-md-12 text-center">
                    <h1>Zebrane karty</h1>
                </div>
                <!--Grid column-->
            </div>
            @foreach($photos->chunk(6) as $chunked_photos)
                <div class="row my-2">
                    @foreach($chunked_photos as $photo)
                        <div class="col-lg-2 col-md-4 col-sm-6 view overlay">
                            <img class="img-fluid z-depth-1 " src="{{asset('img/cardExample.png')}}">
                            <a>
                                <div class="mask waves-effect waves-light rgba-white-slight"></div>
                            </a>
                            <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                <button type="button" class="actionButton btn btn-amber text-center">Sprzedaj</button>
                                <button type="button" class="actionButton btn btn-deep-orange">Na wymianę</button>
                                <button type="button" class="actionButton btn btn-deep-orange">Usuń z kolekcji</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach



            <!--Grid row-->
        </div>

    </main>
    <!--Main Layout-->



@endsection
