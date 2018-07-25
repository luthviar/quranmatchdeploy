@extends('layouts.app')
@section('content')

    <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Arial">
    {{--<link href="{{ URL::asset('/css/bootstrap.min.css') }}" rel="stylesheet">--}}

    <link rel="stylesheet" href="{{ URL::asset('css/app.css')}}">

    <style>
        .top-buffer { margin-top:10%; }
    </style>

    <input type="hidden" id="type" value="{{$type}}">


    <div class="row text-center top-buffer">
        <div class="col-lg-5">


            <button type="button" class="btn btn-primary" disabled>Life</button>
            <span class="stars">
                    <button type="button" class="btn btn-info" disabled><i class="fa fa-star"></i></button>
                    <button type="button" class="btn btn-info" disabled><i class="fa fa-star"></i></button>
                    <button type="button" class="btn btn-info" disabled><i class="fa fa-star"></i></button>
            </span>
        </div>


            {{--<ul class="stars">--}}
                {{--<li><i class="fa fa-star"></i></li>--}}
                {{--<li><i class="fa fa-star"></i></li>--}}
                {{--<li><i class="fa fa-star"></i></li>--}}
            {{--</ul>--}}
        <div class="col-lg-3">
            <h5 class="text-center"><span class="moves">0</span> Move(s)</h5>

        </div>
        <div class="col-lg-4">
            <h5 class="text-center"><div class="timer text-center"></div></h5>
            <button type="button" onclick="restartGame();"
                    class="btn btn-danger btn-sm">
                <i class="fa fa-repeat"></i>
            </button>
            {{--<div class="restart" onclick=restartGame()>--}}
            {{--<i class="fa fa-repeat"></i>--}}
            {{--</div>--}}
        </div>

    </div>

    <div class="row text-center">
        <div class="col-lg-6 offset-lg-3">
            @guest
            <div class="alert alert-warning" role="alert">
                <h6>You are in guest mode,
                    please login or sign up to play others level,
                    access score and other features <a style="color: blue;" href="{{ url('login') }}">here.</a>
                </h6>
            </div>

            @endguest
        </div>

    </div>


    <div class="row">
        <div class="col-lg-12">
            <ul class="deck text-center" id="card-deck">
                @foreach($quran as $qrn)
                    <li class="card" type="{{ $qrn->id }}">
                        {{ $qrn->word }}
                    </li>
                @endforeach
                @foreach($quran as $qrn)
                    <li class="card" type="{{ $qrn->id }}">
                        {{ $qrn->trans }}
                    </li>
                @endforeach

            </ul>
        </div>
    </div>

    <div class="alert alert-success" role="alert">
        <h4><i class="fa fa-check-square-o"></i>This is a beta version.</h4>
        The words will be random from Juz 29 - 30.
    </div>


    <div id="popup1" class="overlay">
        <div class="popup" style="background: grey; color: white;">

            <h2 class="text-center" style="color: white;">Congratulations 🎉</h2>
            {{--<a class="close" href=# >×</a>--}}
            <div class="content-1">
                Congratulations you're a winner 🎉🎉
            </div>
            <div class="content-2">
                <p>You made <span id=finalMove> </span> moves </p>
                <p>in <span id=totalTime> </span> </p>
                <p>Life:  <span id=starRating></span></p>
            </div>
            <div class="text-center">
                <a class="btn btn-primary btn-lg"
                   role="button" onclick="restartGame()"
                   style="color: white;"
                >
                    Play Again 😄
                </a>
            </div>

            <div class="text-center">
                <a class="btn btn-danger btn-lg"
                   href="{{ url('/') }}" role="button">
                    <i class="fa fa-home"></i> Back Home
                </a>
            </div>
            <div class="text-center">
                <p class="mt-5 mb-3 text-muted text-center" style="color:white;">&copy; 2018 |
                    <a href="https://linkedin.com/in/luthfi-ar/" target="_blank">luthviar</a> |
                    <a href="https://goo.gl/forms/TnUhPwOzHX8TWi0L2" target="_blank">feedback?</a>
                </p>
            </div>

            {{--<button id="play-again"onclick="restartGame()">--}}
            {{--Play again 😄</a>--}}
            {{--</button>--}}
        </div>
    </div>


    <script src="{{ URL::asset('js/jquery-3.3.1.js') }}"></script>
    <script src="{{ URL::asset('js/app.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>


@endsection