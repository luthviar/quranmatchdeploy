<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h2>leaderboards</h2>

<table>
  @php
  $no =1
  @endphp
  @foreach($toplists as $toplist)
  <tr>
      <td>@php
              echo $no;
              $no++
          @endphp
      <td>
      <td>{{ $toplist->username }}</td>
      <td>{{ $toplist->totalpoint }}</td>
  @endforeach
  <tr>
</table>

</body>
</html>
