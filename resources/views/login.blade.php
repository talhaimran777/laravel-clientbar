<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <h1>Login Page</h1>
    <form action="login" method="POST">

        @csrf
        @error('username') <div class="alert alert-danger" role="alert">
            {{$message}} @enderror
        </div>
        <label for="name">Enter Name:</label>
        <input class="form-control" type="text" placeholder="Enter Name" name="username">
        @error('age') <div class="alert alert-danger" role="alert">
            {{$message}} @enderror
        </div>
        <label for="name">Enter Password:</label>
        <input class="form-control" type="text" placeholder="Enter Password" name="password">
        <button class="btn btn-primary" type="submit">Login</button>
    </form>





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

</body>

</html>