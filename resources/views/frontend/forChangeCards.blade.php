@extends('layouts.frontend')

@section('content')
    <main>
        <div class="container" >

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="myChange-tab" data-toggle="tab" href="#myChange" role="tab" aria-controls="myChange"
                       aria-selected="true">Moje karty wystawione na wymianę</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="allChange-tab" data-toggle="tab" href="#allChange" role="tab" aria-controls="allChange"
                       aria-selected="false">Wszystkie karty wystawione na wymianę</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="myChange" role="tabpanel" aria-labelledby="myChange-tab">
                    <h3 class="text-center">Twoje karty wystawione na wymianę</h3>
                    @foreach($photos->chunk(6) as $chunked_photos)
                        <div class="row py-2">
                            @foreach($chunked_photos as $photo)
                                <div class="col-xl-2 col-lg-4 col-sm-6 hoverable btn-group-vertical">
                                    <img class="img-fluid z-depth-1 " src="{{asset('img/cardExample.png')}}">
                                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                        <button type="button" class="actionButton btn btn-amber text-center">Wymieniono</button>
                                        <button type="button" class="actionButton btn btn-deep-orange">Anuluj</button>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
                <div class="tab-pane fade" id="allChange" role="tabpanel" aria-labelledby="allChange-tab">
                    <h3 class="text-center">Wszystkie karty do wymiany</h3>
                    @foreach($photos->chunk(6) as $chunked_photos)
                        <div class="row py-2">
                            @foreach($chunked_photos as $photo)
                                <div class="col-xl-2 col-lg-4 col-sm-6 hoverable btn-group-vertical">
                                    <img class="img-fluid z-depth-1 " src="{{asset('img/cardExample.png')}}">
                                    <div class="btn-group-vertical " role="group" aria-label="Vertical button group">
                                        <button type="button" class=" actionButton btn btn-deep-orange">Zapytaj</button>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>

    </main>
    <!--Main Layout-->



@endsection
