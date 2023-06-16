<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = \DB::table('cars')
        ->join('garages', 'cars.garage_id', '=', 'garages.id')
        ->select('cars.*', 'garages.name as garage_name' )
        ->get();    

        // geef de data door aan de view
        return view('cars.index', [
            'cars' => $cars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // haal alle garages op
        $garages = \DB::table('garages')->get();

        // geef de data door aan de view
        return view('cars.create', [
            'garages' => $garages
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        \DB::table('cars')->insert([
            'name' => $request->name,
            'model' => $request->model,
            'year' => $request->year,
            'color' => $request->color,
            'license_plate' => $request->license_plate,
            'price'     => $request->price,
            'garage_id' => $request->garage
        ]);

        // redirect naar de index
        return redirect('/')->with('message', 'Auto is toegevoegd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = \DB::table('cars')
            ->where('cars.id', $id)
            ->join('garages', 'cars.garage_id', '=', 'garages.id')
            ->select('cars.*', 'garages.name as garage_name' )
            ->get()
            ->first();
        
        return view('cars.show', [
            'car' => $car
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = \DB::table('cars')
                    ->where('id', $id)
                    ->first();

        $garages = \DB::table('garages')->get();


        return view('cars.edit', [
            'car' => $car,
            'garages' => $garages
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $car = \DB::table('cars')
                    ->where('id', $id)
                    ->update([
                        'name' => $request->name,
                        'model' => $request->model,
                        'year' => $request->year,
                        'color' => $request->color,
                        'license_plate' => $request->license_plate,
                        'price'     => $request->price,
                        'garage_id' => $request->garage
                    ]);
        
        
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $car = \DB::table('cars')->where('id', $id)->delete();
        return redirect('/');


    }
}
