<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <!-- Rendering header component using x-component-name -->
    <x-header title="Header File" />
    <h1>Hello all {{count($names)}} participants!</h1>
    <h4>Using simple for loop</h4>
    @for ($i = 0; $i < count($names); $i++) <p>{{$names[$i]}}</p>
        @endfor


        <h4>Using foreach loop</h4>
        @foreach ($names as $key => $name)
        <p>{{$name}} is defined at index {{$key}}</p>
        @endforeach

        <h4>Using forelse loop</h4>
        @forelse ($names as $key => $name)
        <p>{{ $name }}</p>
        @empty
        <p>No users</p>
        @endforelse

</body>

</html>