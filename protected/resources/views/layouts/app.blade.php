<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Quran Match Game, Play and Challenge Yourself">
    <meta name="author" content="luthviar">
    <meta name="google-site-verification" content="Dc2hLdZBw_lDGbNlGZHhfB-UVm_gdbZBfym7FJfiIwA" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Quran Match</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('css/cover.css') }}" rel="stylesheet">





</head>

<body class="text-center">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
            <a href="{{ url('/') }}"><h3 class="masthead-brand">Qur'an Match</h3></a>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link active" href="{{ url('/') }}">Home</a>
                <a class="nav-link" href="https://goo.gl/forms/TnUhPwOzHX8TWi0L2" target="_blank">Feedback?</a>
                <a class="nav-link" href="https://linkedin.com/in/luthfi-ar/" target="_blank">Contact Me</a>
                @guest
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                    <!-- <li><a class="nav-link" href="{{ route('register') }}">Register</a></li> -->
                @else
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                <!-- <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li> -->
                @endguest
                
                
            </nav>
        </div>
    </header>

    <main role="main" class="inner cover">

        {{--<h1 class="cover-heading">Cover your page.</h1>--}}
        {{--<p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>--}}
        {{--<p class="lead">--}}
            {{--<a href="#" class="btn btn-lg btn-secondary">Learn more</a>--}}
        {{--</p>--}}
        @yield('content')

    </main>
    @include('layouts.footer')

</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{{--<script src="{{ URL::asset('js/jquery-3.3.1.slim.min.js') }}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
<script>window.jQuery || document.write('<script src="{{ URL::asset('js/jquery-slim.min.js') }}"><\/script>')</script>
<script src="{{ URL::asset('js/popper.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122658895-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-122658895-1');
</script>
</body>
</html>

