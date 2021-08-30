<h1>Store Overview</h1>
<table border='1'>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
  </tr> 
  @foreach($user as $user)
  <tr>
    <th>{{$user['id']}}</th>
    <th>{{$user['name']}}</th>
    <th>{{$user['email']}}</th>
  </tr> 
  @endforeach

</table>