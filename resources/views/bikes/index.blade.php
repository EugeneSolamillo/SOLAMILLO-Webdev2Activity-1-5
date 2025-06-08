@extends('layout')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Bike List</h1>

    <a href="{{ route('bikes.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add New Bike</a>

    @if(session('success'))
        <p class="text-green-500 mt-4">{{ session('success') }}</p>
    @endif

    <ul class="mt-4">
        @foreach($bikes as $bike)
            <li>{{ $bike->brand }} - {{ $bike->model }} ({{ $bike->year }})</li>
        @endforeach
    </ul>
@endsection
