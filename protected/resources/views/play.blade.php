<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Memory Game</title>
	<meta name="google-site-verification" content="Dc2hLdZBw_lDGbNlGZHhfB-UVm_gdbZBfym7FJfiIwA" />
    <meta name="description" content="Quran Match Game, Play and Challenge Yourself">
    <meta name="author" content="luthviar">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Arial">
    <!--  -->
    <link href="{{ URL::asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css')}}">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122658895-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122658895-1');
</script>


</head>
<body>
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
    <script src="{{ URL::asset('js/jquery-3.3.1.js') }}"></script>
<script src="{{ URL::asset('js/app.js') }}"></script>
</body>
</html>