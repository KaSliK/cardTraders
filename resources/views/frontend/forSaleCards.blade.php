@extends('layouts.frontend')

@section('content')
    <main>
        <div class="container" >

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mySell-tab" data-toggle="tab" href="#mySell" role="tab" aria-controls="mySell"
                       aria-selected="true">Moja sprzedaż</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="allSell-tab" data-toggle="tab" href="#allSell" role="tab" aria-controls="allSell"
                       aria-selected="false">Wszystkie karty wystawione na sprzedaż</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="mySell" role="tabpanel" aria-labelledby="mySell-tab">
                    <h3 class="text-center">Moja sprzedaż</h3>
                    @foreach($photos->chunk(6) as $chunked_photos)
                        <div class="row py-2">
                            @foreach($chunked_photos as $photo)
                                <div class="col-xl-2 col-lg-4 col-sm-6 hoverable btn-group-vertical">
                                    <img class="img-fluid z-depth-1 " src="{{asset('img/cardExample.png')}}">
                                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                        <button type="button" class="actionButton btn btn-amber text-center">Sprzedane</button>
                                        <button type="button" class="actionButton btn btn-deep-orange">Anuluj</button>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
                <div class="tab-pane fade" id="allSell" role="tabpanel" aria-labelledby="allSell-tab">
                    <h3 class="text-center">Inni wystawili na sprzedaż</h3>
                    @foreach($photos->chunk(6) as $chunked_photos)
                        <div class="row py-2">
                            @foreach($chunked_photos as $photo)
                                <div class="col-xl-2 col-lg-4 col-sm-6 hoverable btn-group-vertical">
                                    <img class="img-fluid z-depth-1 " src="{{asset('img/cardExample.png')}}">
                                    <div class="btn-group-vertical " role="group" aria-label="Vertical button group">
                                        <button type="button" class=" actionButton btn btn-deep-orange">Kup</button>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>

    </main>



@endsection
