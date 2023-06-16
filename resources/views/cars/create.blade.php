<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create new Car</h1>
    <form action="/cars" method="post">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="name">
        </div>  

        <div class="form-group">
            <label for="">Model</label>
            <input type="text" name="model" id="model">
        </div>    

        <div class="form-group">
            <label for="">Year</label>
            <input type="number" name="year" id="year">
        </div>
        
        <div class="form-group">
            <label for="color">Color</label>
            <input type="color" name="color" id="color">
        </div>

        <div class="form-group">
            <label for="license_plate">License Plate</label>
            <input type="text" name="license_plate" id="license_plate">
        </div>

        <div class="form-group">
            <label for="">Price</label>
            <input type="number" name="price" steps="0.1" id="price">
        </div>

        <div class="form-group">
            <label for="garage">Garage</label>
            <select name="garage" id="garage">
                <option value="">Selecteer garage</option>
                @foreach($garages as $garage)
                    <option value="{{ $garage->id }}">{{ $garage->name }}</option>  
                @endforeach
            </select>
        </div>

        <input type="submit" value="Auto aanmaken">

    </form>
</body>
</html>