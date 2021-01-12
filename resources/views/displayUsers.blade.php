<h1>Fetching users from the database</h1>


<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th></th>
        <th></th>
    </tr>

    @foreach($data as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
        <td>{{$user['password']}}</td>
        <td>
            <a href={{"user/delete/".$user['id']}}>Delete</a>
        </td>
        <td>
            <a href={{"user/edit/".$user['id']}}>Edit</a>
        </td>
    </tr>
    @endforeach
</table>

<span>{{$data -> links()}}</span>

<style>
.w-5 {
    display: none;
}
</style>