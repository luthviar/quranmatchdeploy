@extends('layouts.app')
@section('content')
    {{--<div class="row align-items-center">--}}
        {{--<div class="col">--}}
            {{--One of three columns--}}
        {{--</div>--}}
        {{--<div class="col">--}}
            {{--One of three columns--}}
        {{--</div>--}}
        {{--<div class="col">--}}
            {{--One of three columns--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="h-100 row align-items-center">
        <div class="col">
            <div class="col-md-8 offset-md-2">
                <div class="text-center mb-4">
                    <a href="{{ url('/') }}">
                        <img class="mb-4" src="{{ URL::asset('img/logo.png') }}" alt="" width="70%" height="70%">
                    </a>


                    <div class="container">
                        <div class="row text-center">
                            <div class="col">
                                <a class="btn btn-block btn-light btn-md"
                                   href="{{ url('/guest/play/') }}" role="button">Start Guest Mode</a>

                                <a class="btn btn-info btn-block btn-primary btn-md"
                                   href="{{ url('/guest/play/easy') }}" role="button">Start- Easy 4x2</a>

                                <a class="btn btn-block btn-primary btn-md"
                                   href="{{ url('/guest/play/medium') }}" role="button">Start - Medium 4x4</a>

                                <a class="btn btn-info btn-block btn-danger btn-md"
                                   href="{{ url('/guest/play/hard') }}" role="button">Start - Hard 5x4</a>

                                <a class="btn btn-info btn-block btn-warning btn-md"
                                   href="{{ url('/scoreboards') }}" role="button">Scoreboards</a>
                            </div>

                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>


@endsection