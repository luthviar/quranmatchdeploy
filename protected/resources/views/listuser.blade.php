@extends('layouts.app')
@section('content')
    @foreach($listuser as $user)
        <table class="table">
            <tbody>
            <tr>
                <td>
                    {{ $user->name }}
                </td>
                <td>
                    {{ $user->email }}
                </td>
                <td>
                    {{ $user->created_at }}
                </td>
            </tr>

            </tbody>

        </table>

    @endforeach

@endsection