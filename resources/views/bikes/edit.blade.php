@extends('layout')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Bike</h1>

    @if ($errors->any())
        <div class="text-red-500 mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('bikes.update', $bike->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="brand" class="block">Brand:</label>
            <input type="text" name="brand" id="brand" value="{{ old('brand', $bike->brand) }}" class="border px-2 py-1 w-full">
        </div>

        <div>
            <label for="model" class="block">Model:</label>
            <input type="text" name="model" id="model" value="{{ old('model', $bike->model) }}" class="border px-2 py-1 w-full">
        </div>

        <div>
            <label for="year" class="block">Year:</label>
            <input type="number" name="year" id="year" value="{{ old('year', $bike->year) }}" class="border px-2 py-1 w-full">
        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update Bike</button>
        <a href="{{ route('bikes.index') }}" class="ml-2 text-blue-500">Cancel</a>
    </form>
@endsection
