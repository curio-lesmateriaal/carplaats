<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CarsController::class, 'index']);
Route::get('/cars', [CarsController::class, 'index']);
Route::get('/cars/create', [CarsController::class, 'create']);

Route::delete('/cars/{id}', [CarsController::class, 'destroy']);

Route::put('/cars/{id}', [CarsController::class, 'update']);

Route::get('/cars/{id}/edit', [CarsController::class, 'edit']);

Route::post('/cars', [CarsController::class, 'store']);
Route::get('/cars/{id}', [CarsController::class, 'show']);


