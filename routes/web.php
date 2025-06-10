<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BikeController;

Route::get('/', function () {
    return redirect('/bikes');
});

// Activity 2: View and Create
Route::get('/bikes', [BikeController::class, 'index'])->name('bikes.index');
Route::get('/bikes/create', [BikeController::class, 'create'])->name('bikes.create');
Route::post('/bikes', [BikeController::class, 'store'])->name('bikes.store');

//Activity 3: Update and Delete
Route::get('/bikes/{bike}/edit', [BikeController::class, 'edit'])->name('bikes.edit');
Route::put('/bikes/{bike}', [BikeController::class, 'update'])->name('bikes.update');
Route::delete('/bikes/{bike}', [BikeController::class, 'destroy'])->name('bikes.destroy');
