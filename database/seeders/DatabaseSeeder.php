<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     
        \DB::table('garages')->insert([
            'name' => 'Garage 1',
            'address' => 'Address 1',
            'phone_number' => '123456789',
            'email' => 'info@garage1.nl',
            'website' => 'www.garage1.nl',
            'city' => 'Amsterdam',
        ]);
        
        \DB::table('garages')->insert([
            'name' => 'Garage 2',
            'address' => 'Address 2',
            'phone_number' => '123456789',
            'email' => 'info@garage2.nl',
            'website' => '',
            'city' => 'Rotterdam',
        ]);

        // insert two more garages with a standard email
        \DB::table('garages')->insert([
            'name' => 'Garage 3',
            'address' => 'Address 3',
            'phone_number' => '123456789',
            'email' => 'info@garage3.nl',
            'website' => '',
            'city' => 'Utrecht',
        ]);

        \DB::table('garages')->insert([
            'name' => 'Garage 4',
            'address' => 'Address 4',
            'phone_number' => '123456789',
            'email' => 'info@garage4.nl',
            'website' => 'www.garage4.test',
            'city' => 'Den Haag',
        ]);


        \DB::table('cars')->insert([
            'name' => 'Car 1',
            'model' => 'Model 1',
            'year' => '2021',
            'color' => 'Red',
            'license_plate' => 'AA-11-BB',
            'price' => '10000.00',
            'garage_id' => 1,
        ]);

        \DB::table('cars')->insert([
            'name' => 'Car 2',
            'model' => 'Model 2',
            'year' => '2021',
            'color' => 'Blue',
            'license_plate' => 'CC-22-DD',
            'price' => '20000.00',
            'garage_id' => 1,
        ]);

        \DB::table('cars')->insert([
            'name' => 'Car 3',
            'model' => 'Model 3',
            'year' => '2021',
            'color' => 'Green',
            'license_plate' => 'EE-33-FF',
            'price' => '30000.00',
            'garage_id' => 2,
        ]);

        \DB::table('cars')->insert([
            'name' => 'Car 4',
            'model' => 'Model 4',
            'year' => '2021',
            'color' => 'Yellow',
            'license_plate' => 'GG-44-HH',
            'price' => '40000.00',
            'garage_id' => 2,
        ]);

        \DB::table('cars')->insert([
            'name' => 'Car 5',
            'model' => 'Model 5',
            'year' => '2021',
            'color' => 'Orange',
            'license_plate' => 'II-55-JJ',
            'price' => '50000.00',
            'garage_id' => 3,
        ]);

        \DB::table('cars')->insert([
            'name' => 'Car 6',
            'model' => 'Model 6',
            'year' => '2021',
            'color' => 'Purple',
            'license_plate' => 'KK-66-LL',
            'price' => '60000.00',
            'garage_id' => 3,
        ]);

        \DB::table('cars')->insert([
            'name' => 'Car 7',
            'model' => 'Model 7',
            'year' => '2021',
            'color' => 'Black',
            'license_plate' => 'MM-77-NN',
            'price' => '70000.00',
            'garage_id' => 4,
        ]);

        


        


    }
}
