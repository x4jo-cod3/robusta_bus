<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('cities',  [\App\Http\Controllers\CitiesController::class, 'index'])->name('cities');
    Route::post('city',  [\App\Http\Controllers\CitiesController::class, 'create'])->name('city.create');

    Route::get('buses',  [\App\Http\Controllers\BusesController::class, 'index'])->name('buses');
    Route::post('bus',  [\App\Http\Controllers\BusesController::class, 'create'])->name('bus.create');

    Route::get('trips',  [\App\Http\Controllers\TripsController::class, 'index'])->name('trips');
    Route::post('trip',  [\App\Http\Controllers\TripsController::class, 'create'])->name('trip.create');
    Route::post('trip/station/{id}',  [\App\Http\Controllers\TripsController::class, 'addStation']);

    
});

require __DIR__.'/auth.php';
