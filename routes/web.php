<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BikeController;

Route::get('/', function () {
    return redirect('/bikes');
});

Route::get('/bikes', [BikeController::class, 'index'])->name('bikes.index');
Route::get('/bikes/create', [BikeController::class, 'create'])->name('bikes.create');
Route::post('/bikes', [BikeController::class, 'store'])->name('bikes.store');
