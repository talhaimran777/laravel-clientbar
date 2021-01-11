<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login Page</h1>

    <form action="afterLogin" method="POST">
        @csrf
        <label for="name">Enter Name:</label><br>
        <input type="text" placeholder="Enter Name" name="username"><br>
        <label for="name">Enter Age:</label><br>
        <input type="text" placeholder="Enter Age" name="age"><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>