@extends('layouts.app')
@section('content')
    {{--<link href="http://cdn.datatables.net/1.10.19/" rel="stylesheet">--}}
<link href="{{ URL::asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">

<div class="row" style="background: white; color: black; border-radius: 25px; opacity: 0.85;">
    <div class="col">
        <table id="scoreboard">
            <thead>
            <tr>
                <th>#</th>
                <th>First</th>
                <th>Last</th>
                <th>Handle</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th>2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th>3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>


    <script src="{{ URL::asset('js/jquery-3.3.1.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready( function () {
            $('#scoreboard').DataTable();
        } );
    </script>

@endsection

