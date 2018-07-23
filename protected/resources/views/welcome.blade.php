<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Quran Match Game, Play and Challenge Yourself">
    <meta name="author" content="luthviar">
	<meta name="google-site-verification" content="Dc2hLdZBw_lDGbNlGZHhfB-UVm_gdbZBfym7FJfiIwA" />
    {{--<link rel="icon" href="../../../../favicon.ico">--}}

    <title>Quran Match</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('/css/floating-labels.css') }}" rel="stylesheet">
	
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
<form class="form-signin">
    <div class="text-center mb-4">
        <img class="mb-4" src="{{ URL::asset('img/logo.png') }}" alt="" width="70%" height="70%">
        {{--<h1 class="h3 mb-3 font-weight-normal">Qur'an Match</h1>--}}
        {{--<p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and Firefox.</a></p>--}}
    {{--</div>--}}

    {{--<div class="form-label-group">--}}
        {{--<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>--}}
        {{--<label for="inputEmail">Email address</label>--}}
    {{--</div>--}}

    {{--<div class="form-label-group">--}}
        {{--<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>--}}
        {{--<label for="inputPassword">Password</label>--}}
    {{--</div>--}}

    {{--<div class="checkbox mb-3">--}}
        {{--<label>--}}
            {{--<input type="checkbox" value="remember-me"> Remember me--}}
        {{--</label>--}}
    {{--</div>--}}
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <a class="btn btn-info btn-block btn-primary btn-md" href="{{ url('/guest/play/easy') }}" role="button">Start Guest Mode (Easy 4x2)</a>

                    <a class="btn btn-block btn-primary btn-md" href="{{ url('/guest/play/medium') }}" role="button">Start Guest Mode (Medium 4x4)</a>

                    <a class="btn btn-info btn-block btn-danger btn-md" href="{{ url('/guest/play/hard') }}" role="button">Start Guest Mode (Hard 5x4)</a>
                </div>

            </div>

        </div>


        <p class="mt-5 mb-3 text-muted text-center">&copy; 2018 |
        <a href="https://linkedin.com/in/luthfi-ar/" target="_blank">luthviar</a> |
            <a href="https://goo.gl/forms/TnUhPwOzHX8TWi0L2" target="_blank">feedback?</a>
    </p>
</form>
</body>
</html>