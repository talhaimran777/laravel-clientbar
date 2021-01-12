<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>

<body>
    <form action="addUser" method="POST">
        @csrf
        <label for="username">Enter Name:</label><br>
        <input type="text" name="username" placeholder="Enter Name:">
        <br>
        <br>
        <label for="email">Enter Email:</label><br>
        <input type="text" name="email" placeholder="Enter Email:"> <br>
        <br>
        <label for="password">Enter Password:</label><br>
        <input type="text" name="password" placeholder="Enter Password:">
        <br>
        <br>
        <button type="submit">Save</button>
    </form>
</body>

</html>