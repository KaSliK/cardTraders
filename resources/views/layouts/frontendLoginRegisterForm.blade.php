@extends('layouts.frontend')

@section('content')
    <div class="view" style="background-image: url({{asset('img/logo.png')}}); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="mask rgba-gradient align-items-center">
    @yield('contentWithImage')

        </div>
    </div>

@endsection
