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
        Bike::create($request->only(['brand', 'model', 'year']));
        return redirect('/bikes')->with('success', 'Bike added!');
    }

    // ✅ Activity 3: Edit form
    public function edit(Bike $bike)
    {
        return view('bikes.edit', compact('bike'));
    }

    // ✅ Activity 3: Update bike
    public function update(Request $request, Bike $bike)
    {
        $bike->update($request->only(['brand', 'model', 'year']));
        return redirect()->route('bikes.index')->with('success', 'Bike updated!');
    }

    // ✅ Activity 3: Delete bike
    public function destroy(Bike $bike)
    {
        $bike->delete();
        return redirect()->route('bikes.index')->with('success', 'Bike deleted!');
    }
}
