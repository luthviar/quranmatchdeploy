<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Quran Match Game, Play and Challenge Yourself">
    <meta name="author" content="luthviar">
    <meta name="google-site-verification" content="Dc2hLdZBw_lDGbNlGZHhfB-UVm_gdbZBfym7FJfiIwA" />
    <link rel="icon" href="{{ URL::asset('/img/logo.png') }}">

    {{--start main blade--}}

    {{--end main blade--}}

    <title>Quran Match</title>



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
    @yield('content')

    <script src="{{ URL::asset('js/jquery-3.3.1.js') }}"></script>
    <script src="{{ URL::asset('js/app.js') }}"></script>
</body>
</html>