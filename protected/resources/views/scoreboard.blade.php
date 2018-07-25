@extends('layouts.app')
@section('content')
    {{--<link href="http://cdn.datatables.net/1.10.19/" rel="stylesheet">--}}
    <link href="{{ URL::asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css" rel="stylesheet">


    @include('myscore')

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab"
               href="{{ url("/scoreboard/easy") }}" >Easy</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" href="{{ url("/scoreboard/medium") }}" >Medium</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" href="{{ url("/scoreboard/hard") }}" >Hard</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <h5 class="text-center">Scoreboard - Level Easy (4x2)</h5>
            <div class="row" style="background: white;
            color: black; border-radius: 25px;
            opacity: 0.85; padding-top: 5%; padding-bottom: 5%;">
                <div class="col-lg-12">
                    <table id="scoreboardeasy"
                           class="table table-striped table-bordered nowrap scoreboards"
                           style="width:100%">
                        <thead>
                        <tr>
                            <th>Rank</th>
                            <th>Name</th>
                            <th>Total Match</th>
                            <th>Fastest Moves</th>
                            <th>Total Moves</th>

                        </tr>
                        </thead>
                        <tbody>
                        @php $no =1 @endphp
                        @foreach($easy as $topListEasy)
                            <tr>
                                <td>@php
                                        echo $no;
                                        $no++
                                    @endphp
                                </td>
                                <td>{{ $topListEasy->name }}</td>
                                <td>{{ $topListEasy->totalmatch }}</td>
                                <td>{{ $topListEasy->fastestmoves }}</td>
                                <td>{{ $topListEasy->totalmoves }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

            {{--<h5 class="text-center">Scoreboard - Level Medium (4x4)</h5>--}}
            {{--<div class="row" style="background: white;--}}
            {{--color: black; border-radius: 25px;--}}
            {{--opacity: 0.85; padding-top: 5%; padding-bottom: 5%;">--}}
                {{--<div class="col-lg-12">--}}
                    {{--<table id="scoreboardmedium"--}}
                           {{--class="table table-striped table-bordered nowrap scoreboards"--}}
                           {{--style="width:100%">--}}
                        {{--<thead>--}}
                        {{--<tr>--}}
                            {{--<th>Rank</th>--}}
                            {{--<th>Name</th>--}}
                            {{--<th>Total Match</th>--}}
                            {{--<th>Fastest Moves</th>--}}
                            {{--<th>Total Moves</th>--}}

                        {{--</tr>--}}
                        {{--</thead>--}}
                        {{--<tbody>--}}
                        {{--@php $no =1 @endphp--}}
                        {{--@foreach($medium as $topListmedium)--}}
                            {{--<tr>--}}
                                {{--<td>@php--}}
                                        {{--echo $no;--}}
                                        {{--$no++--}}
                                    {{--@endphp--}}
                                {{--</td>--}}
                                {{--<td>{{ $topListmedium->name }}</td>--}}
                                {{--<td>{{ $topListmedium->totalmatch }}</td>--}}
                                {{--<td>{{ $topListmedium->fastestmoves }}</td>--}}
                                {{--<td>{{ $topListmedium->totalmoves }}</td>--}}

                            {{--</tr>--}}
                        {{--@endforeach--}}
                        {{--</tbody>--}}
                    {{--</table>--}}
                {{--</div>--}}
            {{--</div>--}}

        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

            {{--<h5 class="text-center">Scoreboard - Level Hard (5x4)</h5>--}}
            {{--<div class="row" style="background: white;--}}
            {{--color: black; border-radius: 25px;--}}
            {{--opacity: 0.85; padding-top: 5%; padding-bottom: 5%;">--}}
                {{--<div class="col-lg-12">--}}
                    {{--<table id="scoreboardhard" class="table table-striped table-bordered nowrap scoreboards"--}}
                           {{--style="width:100%">--}}
                        {{--<thead>--}}
                        {{--<tr>--}}
                            {{--<th>Rank</th>--}}
                            {{--<th>Name</th>--}}
                            {{--<th>Total Match</th>--}}
                            {{--<th>Fastest Moves</th>--}}
                            {{--<th>Total Moves</th>--}}

                        {{--</tr>--}}
                        {{--</thead>--}}
                        {{--<tbody>--}}
                        {{--@php $no =1 @endphp--}}
                        {{--@foreach($hard as $topListhard)--}}
                            {{--<tr>--}}
                                {{--<td>@php--}}
                                        {{--echo $no;--}}
                                        {{--$no++--}}
                                    {{--@endphp--}}
                                {{--</td>--}}
                                {{--<td>{{ $topListhard->name }}</td>--}}
                                {{--<td>{{ $topListhard->totalmatch }}</td>--}}
                                {{--<td>{{ $topListhard->fastestmoves }}</td>--}}
                                {{--<td>{{ $topListhard->totalmoves }}</td>--}}

                            {{--</tr>--}}
                        {{--@endforeach--}}
                        {{--</tbody>--}}
                    {{--</table>--}}
                {{--</div>--}}
            {{--</div>--}}

        </div>
    </div>

{{--<div class="row" style="background: white; color: black; border-radius: 25px; opacity: 0.85;">--}}
    {{--<div class="col">--}}
        {{--<table id="scoreboardeasy">--}}
            {{--<thead>--}}
            {{--<tr>--}}
                {{--<th>No</th>--}}
                {{--<th>Username</th>--}}
                {{--<th>Fastest Moves</th>--}}
                {{--<th>Total Moves</th>--}}
                {{--<th>Total Match</th>--}}
            {{--</tr>--}}
            {{--</thead>--}}
            {{--<tbody>--}}
                {{--@php $no =1 @endphp--}}
              {{--@foreach($easy as $topListEasy)--}}
              {{--<tr>--}}
                {{--<td>@php--}}
                        {{--echo $no;--}}
                        {{--$no++--}}
                    {{--@endphp--}}
                {{--</td>--}}
                {{--<td>{{ $topListEasy->email }}</td>--}}
                {{--<td>{{ $topListEasy->fastestmoves }}</td>--}}
                {{--<td>{{ $topListEasy->totalmoves }}</td>--}}
                {{--<td>{{ $topListEasy->totalmatch }}</td>--}}
              {{--</tr>--}}
              {{--@endforeach--}}
            {{--</tbody>--}}
        {{--</table>--}}
    {{--</div>--}}

    {{--<div class="col">--}}
        {{--<table id="scoreboardmedium">--}}
            {{--<thead>--}}
            {{--<tr>--}}
                {{--<th>No</th>--}}
                {{--<th>Username</th>--}}
                {{--<th>Fastest Moves</th>--}}
                {{--<th>Total Moves</th>--}}
                {{--<th>Total Match</th>--}}
            {{--</tr>--}}
            {{--</thead>--}}
            {{--<tbody>--}}
                {{--@php $no =1 @endphp--}}
              {{--@foreach($medium as $topListmedium)--}}
              {{--<tr>--}}
                {{--<td>@php--}}
                        {{--echo $no;--}}
                        {{--$no++--}}
                    {{--@endphp--}}
                {{--</td>--}}
                {{--<td>{{ $topListmedium->email }}</td>--}}
                {{--<td>{{ $topListmedium->fastestmoves }}</td>--}}
                {{--<td>{{ $topListmedium->totalmoves }}</td>--}}
                {{--<td>{{ $topListmedium->totalmatch }}</td>--}}
              {{--</tr>--}}
              {{--@endforeach--}}
            {{--</tbody>--}}
        {{--</table>--}}
    {{--</div>--}}

    {{--<div class="col">--}}
        {{--<table id="scoreboardhard">--}}
            {{--<thead>--}}
            {{--<tr>--}}
                {{--<th>No</th>--}}
                {{--<th>Username</th>--}}
                {{--<th>Fastest Moves</th>--}}
                {{--<th>Total Moves</th>--}}
                {{--<th>Total Match</th>--}}
            {{--</tr>--}}
            {{--</thead>--}}
            {{--<tbody>--}}
                {{--@php $no =1 @endphp--}}
              {{--@foreach($hard as $topListhard)--}}
              {{--<tr>--}}
                {{--<td>@php--}}
                        {{--echo $no;--}}
                        {{--$no++--}}
                    {{--@endphp--}}
                {{--</td>--}}
                {{--<td>{{ $topListhard->email }}</td>--}}
                {{--<td>{{ $topListhard->fastestmoves }}</td>--}}
                {{--<td>{{ $topListhard->totalmoves }}</td>--}}
                {{--<td>{{ $topListhard->totalmatch }}</td>--}}
              {{--</tr>--}}
              {{--@endforeach--}}
            {{--</tbody>--}}
        {{--</table>--}}
    {{--</div>--}}


{{--</div>--}}




    <script src="{{ URL::asset('js/jquery-3.3.1.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js" type="text/javascript"></script>


    <script>
        $(document).ready(function() {
            var table = $('#scoreboardeasy').DataTable( {
                responsive: true,
                "paging":   false,
                "ordering": true,
                "info":     false,
                "searching": false,
                "order": [[ 2, "desc" ]]
            } );

            new $.fn.dataTable.FixedHeader( table );
        } );

//        $(document).ready(function() {
//            $('#example').DataTable( {
//                "paging":   false,
//                "ordering": false,
//                "info":     false
//            } );
//        } );
//    $(document).ready(function() {
//      $('#scoreboardeasy').DataTable( {
//          "order": [[ 4, "desc" ]]
//      } );
//    } );
    </script>

    <script>
//        $(document).ready(function() {
//            var tableb = $('#scoreboardmedium').DataTable( {
//                responsive: true,
//                "paging":   false,
//                "ordering": true,
//                "info":     false,
//                "searching": false,
//                "order": [[ 2, "desc" ]]
//            } );
//
//            new $.fn.dataTable.FixedHeader( tableb );
//        } );

//        $(document).ready(function() {
//            $('#scoreboardmedium').DataTable( {
//                "order": [[ 4, "desc" ]]
//            } );
//        } );
    </script>

    <script>
//        $(document).ready(function() {
//            var tablec = $('#scoreboardhard').DataTable( {
//                responsive: true,
//                "paging":   false,
//                "ordering": true,
//                "info":     false,
//                "searching": false,
//                "order": [[ 2, "desc" ]]
//            } );
//
//            new $.fn.dataTable.FixedHeader( tablec );
//        } );
//        $(document).ready(function() {
//            $('#scoreboardhard').DataTable( {
//                "order": [[ 4, "desc" ]]
//            } );
//        } );
    </script>


@endsection
