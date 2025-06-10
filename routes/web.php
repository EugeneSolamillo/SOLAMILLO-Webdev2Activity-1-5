<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\LoginController;

// Redirect root to bikes list
Route::get('/', function () {
    return redirect('/bikes');
});

// Bike routes
Route::get('/bikes', [BikeController::class, 'index'])->name('bikes.index');
Route::get('/bikes/create', [BikeController::class, 'create'])->name('bikes.create');
Route::post('/bikes', [BikeController::class, 'store'])->name('bikes.store');
Route::get('/bikes/{bike}/edit', [BikeController::class, 'edit'])->name('bikes.edit');
Route::put('/bikes/{bike}', [BikeController::class, 'update'])->name('bikes.update');
Route::delete('/bikes/{bike}', [BikeController::class, 'destroy'])->name('bikes.destroy');

// Custom login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
