<!DOCTYPE html>
<html>
<head>

</head>
<body>

@php
$category =1
@endphp
@foreach($data as $toplists)
  @if($category == 1)
    <h2>Fastest Moves Leaderboards</h2>
  @elseif($category == 2)
    <h2>Fastest Times Leaderboards</h2>
  @elseif($category == 3)
    <h2>Total Match Leaderboards</h2>
  @elseif($category == 4)
    <h2>Total Times Leaderboards</h2>
  @else
    <h2>Total Moves Leaderboards</h2>
  @endif
  @php $no =1; $category++ @endphp
  @foreach($toplists as $toplist)
    <table>
      <tr>
          <td>@php
                  echo $no;
                  $no++
              @endphp
          <td>
          <td>{{ $toplist->username }}</td>
          <td>{{ $toplist->parameter }}</td>
          <td>{{ $toplist->categoryName }}</td>
      <tr>
    </table>
  @endforeach
@endforeach


</body>
</html>
