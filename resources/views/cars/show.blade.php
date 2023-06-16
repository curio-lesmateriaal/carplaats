<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Detailpagina</h1>
    <h2>Naam auto: {{ $car->name }}  {{ $car->model }}</h2>

    <p>De auto met het kenteken {{ $car->license_plate }} is gemaakt in het jaar {{ $car->year }}.</p>
    <p>De auto is dus {{ Date('Y') - $car->year }} jaar oud...</p>
    <p>kleur: </p>
    <div style="height: 100px; width: 100px; background-color: {{$car->color}}"></div>
    <p>De auto staat bij garage: {{ $car->garage_name }}</p>

    <a href="/cars/{{$car->id}}/edit">Bewerk auto</a>
    <form action="/cars/{{$car->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Verwijder auto">
    </form>

    <a href="/cars">Terug naar overzicht</a>
</body>
</html>