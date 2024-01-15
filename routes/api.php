<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\FlightController;
use App\Http\Controllers\API\AirlineController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::get('/airline', [AirlineController::class, 'index']);
//Route::post('/airline', [AirlineController::class, 'store']);
Route::resource('airline', AirlineController::class);
Route::resource('flight', FlightController::class);
