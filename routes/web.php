<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BikeController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

Route::middleware('auth')->group(function () {
    Route::get('/bikes', [BikeController::class, 'index'])->name('bikes.index');
    Route::get('/bikes/create', [BikeController::class, 'create'])->name('bikes.create');
    Route::post('/bikes', [BikeController::class, 'store'])->name('bikes.store');
    Route::get('/bikes/{bike}/edit', [BikeController::class, 'edit'])->name('bikes.edit');
    Route::put('/bikes/{bike}', [BikeController::class, 'update'])->name('bikes.update');
    Route::delete('/bikes/{bike}', [BikeController::class, 'destroy'])->name('bikes.destroy');
});
