<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TripController;

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

Route::group(['middleware' => 'auth:user'], function() {

Route::get('available-trips',[TripController::class,'availableTrips']);
Route::post('book-trip',[BookingController::class,'bookTrip']);




});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
