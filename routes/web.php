<?php

use Illuminate\Support\Facades\Route;
use App\Models\Bike; // Make sure to import the Bike model

Route::get('/', function () {
    return view('welcome');
});

// Route to show all bikes
Route::get('/bikes', function () {
    $bikes = Bike::all(); // Get all bikes from the database
    return view('bikes.index', compact('bikes')); // Send bikes to the view
});
