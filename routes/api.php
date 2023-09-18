<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('api')->group(function () {
    Route::get('trip/seats', [\App\Http\Controllers\Api\ReservationsController::class, 'getTripSeats']);
    Route::post('trip/seat/book', [\App\Http\Controllers\Api\ReservationsController::class, 'book_seat']);
});