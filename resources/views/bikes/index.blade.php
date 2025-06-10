@extends('layout')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Bike List</h1>

    <a href="{{ route('bikes.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add New Bike</a>

    @if(session('success'))
        <p class="text-green-500 mt-4">{{ session('success') }}</p>
    @endif

    <table class="table-auto mt-4 w-full">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Brand</th>
                <th class="px-4 py-2">Model</th>
                <th class="px-4 py-2">Year</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bikes as $bike)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $bike->brand }}</td>
                    <td class="px-4 py-2">{{ $bike->model }}</td>
                    <td class="px-4 py-2">{{ $bike->year }}</td>
                    <td class="px-4 py-2">
                        <a href="{{ route('bikes.edit', $bike->id) }}" class="text-blue-600">Edit</a> |
                        <form action="{{ route('bikes.destroy', $bike->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600" onclick="return confirm('Are you sure you want to delete this bike?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
