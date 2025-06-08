<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bike;

class BikeController extends Controller
{
    public function index()
    {
        $bikes = Bike::all();
        return view('bikes.index', compact('bikes'));
    }

    public function create()
    {
        return view('bikes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required|numeric',
        ]);

        Bike::create($request->all());

        return redirect()->route('bikes.index')->with('success', 'Bike added successfully!');
    }
}

