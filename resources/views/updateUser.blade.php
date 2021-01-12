<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>

<body>

    {{$action = "/user/update/".$user['id']}}
    <form action={{$action}} method="POST">
        @csrf
        <label for="username">Enter Name:</label><br>
        <input value={{$user['name']}} type="text" name="username" placeholder="Enter Name:">
        <br>
        <br>
        <label for="email">Enter Email:</label><br>
        <input value={{$user['email']}} type="text" name="email" placeholder="Enter Email:"> <br>
        <br>
        <label for="password">Enter Password:</label><br>
        <input value={{$user['password']}} type="text" name="password" placeholder="Enter Password:">
        <br>
        <br>
        <button type="submit">Update</button>
    </form>
</body>

</html>