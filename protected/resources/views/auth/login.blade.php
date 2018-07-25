<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Quran Match Game, Play and Challenge Yourself">
    <meta name="author" content="luthviar">
	<meta name="google-site-verification" content="Dc2hLdZBw_lDGbNlGZHhfB-UVm_gdbZBfym7FJfiIwA" />
    {{--<link rel="icon" href="../../../../favicon.ico">--}}

    <title>Login | Quran Match</title>

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <!-- Scripts -->
    <script src="{{ URL::asset('/js/app.js') }}" defer></script>

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

    <div class="text-center mb-4">
        <a href="{{ url('/') }}">
            <img class="mb-4" src="{{ URL::asset('img/logo.png') }}" alt="" width="70%" height="70%">
        </a>
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2>LOGIN PAGE</h2>
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>
                    </form>
                    <a href="{{url('/register')}}">Sign Up</a>
                </div>

            </div>

        </div>


        <p class="mt-5 mb-3 text-muted text-center">&copy; 2018 |
        <a href="https://linkedin.com/in/luthfi-ar/" target="_blank">luthviar</a> |
            <a href="https://goo.gl/forms/TnUhPwOzHX8TWi0L2" target="_blank">feedback?</a>
    </p>
</body>
</html>