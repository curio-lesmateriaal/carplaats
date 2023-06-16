<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Auto overzicht!</h1>

    @if (session()->has('message'))
        <div>
            {{ session()->get('message') }}
        </div>
    @endif
    
    <ul>
       @foreach($cars as $car)
        <li><a href="/cars/{{$car->id}}">  {{ $car->name}} {{ $car->model }} - {{ $car->garage_name }} </a></li>
       @endforeach
    </ul>

    <a href="/cars/create">Create new car</a>

</body>
</html>