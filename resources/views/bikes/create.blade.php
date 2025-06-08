@extends('layout')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Add a New Bike</h1>

    @if ($errors->any())
        <div class="text-red-500">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('bikes.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label>Brand:</label>
            <input type="text" name="brand" class="border rounded px-2 py-1 w-full">
        </div>
        <div>
            <label>Model:</label>
            <input type="text" name="model" class="border rounded px-2 py-1 w-full">
        </div>
        <div>
            <label>Year:</label>
            <input type="number" name="year" class="border rounded px-2 py-1 w-full">
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Submit</button>
    </form>
@endsection
