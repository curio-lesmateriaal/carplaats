<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit car</h1>
    <form action="/cars/{{$car->id}}" method="post">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="">Name</label>
            <input value="{{ $car->name }}" type="text" name="name" id="name">
        </div>  

        <div class="form-group">
            <label for="">Model</label>
            <input value="{{ $car->model }}" type="text" name="model" id="model">
        </div>    

        <div class="form-group">
            <label for="">Year</label>
            <input type="number" value="{{ $car->year }}" name="year" id="year">
        </div>
        
        <div class="form-group">
            <label for="color">Color</label>
            <input type="color" value="{{ $car->color }}" name="color" id="color">
        </div>

        <div class="form-group">
            <label for="license_plate">License Plate</label>
            <input type="text" value="{{ $car->license_plate }}" name="license_plate" id="license_plate">
        </div>

        <div class="form-group">
            <label for="">Price</label>
            <input type="number" name="price" value="{{ $car->price }}" steps="0.1" id="price">
        </div>

        <div class="form-group">
            <label for="garage">Garage</label>
            <select name="garage" id="garage">
                <option value="">Selecteer garage</option>
                @foreach($garages as $garage)
                    <option @if($car->garage_id == $garage->id) selected @endif value="{{ $garage->id }}">{{ $garage->name }}</option>  
                @endforeach
            </select>
        </div>

        <input type="submit" value="Auto updaten">

    </form>
</body>
</html>