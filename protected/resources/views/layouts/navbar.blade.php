@extends('layouts.app')
@section('navbar')
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
@endsection