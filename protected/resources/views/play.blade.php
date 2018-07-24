
@extends('layouts.app')
@section('content')
    @extends('layouts.cssplay')
    <div class="container">
        <header>
            <h1>Quran Match</h1>
        </header>

        <section class="score-panel">
            <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
            </ul>

            <span class="moves">0</span> Move(s)

            <div class="timer">
            </div>

            <div class="restart" onclick=restartGame()>
                <i class="fa fa-repeat"></i>
            </div>
        </section>

        <ul class="deck" id="card-deck">
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

        <div class="alert alert-success" role="alert">
            <h4><i class="fa fa-check-square-o"></i>This is a beta version.</h4>
            The words will be random from Juz 29 - 30.
        </div>
        <a class="btn btn-danger btn-lg" href="{{ url('/') }}" role="button"><i class="fa fa-home"></i> Back Home</a>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2018 |
            <a href="https://linkedin.com/in/luthfi-ar/" target="_blank">luthviar</a> |
            <a href="https://goo.gl/forms/TnUhPwOzHX8TWi0L2" target="_blank">feedback?</a>
        </p>


        <div id="popup1" class="overlay">
            <div class="popup">
                <h2 class="text-center">Congratulations 🎉</h2>
                <a class="close" href=# >×</a>
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
                    <p class="mt-5 mb-3 text-muted text-center">&copy; 2018 |
                        <a href="https://linkedin.com/in/luthfi-ar/" target="_blank">luthviar</a> |
                        <a href="https://goo.gl/forms/TnUhPwOzHX8TWi0L2" target="_blank">feedback?</a>
                    </p>
                </div>

                {{--<button id="play-again"onclick="restartGame()">--}}
                {{--Play again 😄</a>--}}
                {{--</button>--}}
            </div>
        </div>

    </div>
@endsection