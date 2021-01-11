<h1>Fetching data from an api</h1>

<table border="1">
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Image</th>
    </tr>

    @foreach($users as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['first_name']}}</td>
        <td>{{$user['last_name']}}</td>
        <td>{{$user['email']}}</td>
        <td> <img src={{$user['avatar']}} height="50px" alt=""> </td>
    </tr>
    @endforeach
</table>