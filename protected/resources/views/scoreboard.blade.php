@extends('layouts.app')
@section('content')
    {{--<link href="http://cdn.datatables.net/1.10.19/" rel="stylesheet">--}}
<link href="{{ URL::asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">

<div class="row" style="background: white; color: black; border-radius: 25px; opacity: 0.85;">
    <div class="col">
        <table id="scoreboard">
            <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Fastest Moves</th>
                <th>Total Moves</th>
                <th>Total Match</th>
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
                <td>{{ $topListEasy->email }}</td>
                <td>{{ $topListEasy->fastestmoves }}</td>
                <td>{{ $topListEasy->totalmoves }}</td>
                <td>{{ $topListEasy->totalmatch }}</td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>

    <div class="col">
        <table id="scoreboard">
            <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Fastest Moves</th>
                <th>Total Moves</th>
                <th>Total Match</th>
            </tr>
            </thead>
            <tbody>
                @php $no =1 @endphp
              @foreach($medium as $topListmedium)
              <tr>
                <td>@php
                        echo $no;
                        $no++
                    @endphp
                </td>
                <td>{{ $topListmedium->email }}</td>
                <td>{{ $topListmedium->fastestmoves }}</td>
                <td>{{ $topListmedium->totalmoves }}</td>
                <td>{{ $topListmedium->totalmatch }}</td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>

    <div class="col">
        <table id="scoreboard">
            <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Fastest Moves</th>
                <th>Total Moves</th>
                <th>Total Match</th>
            </tr>
            </thead>
            <tbody>
                @php $no =1 @endphp
              @foreach($hard as $topListhard)
              <tr>
                <td>@php
                        echo $no;
                        $no++
                    @endphp
                </td>
                <td>{{ $topListhard->email }}</td>
                <td>{{ $topListhard->fastestmoves }}</td>
                <td>{{ $topListhard->totalmoves }}</td>
                <td>{{ $topListhard->totalmatch }}</td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>


</div>




    <script src="{{ URL::asset('js/jquery-3.3.1.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script>
    $(document).ready(function() {
      $('#scoreboard').DataTable( {
          "order": [[ 4, "desc" ]]
      } );
    } );
    </script>

@endsection
