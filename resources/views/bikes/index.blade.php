<!DOCTYPE html>
<html>
<head>
    <title>Bike List</title>
</head>
<body>
    <h1>List of Bikes</h1>
    <ul>
        @foreach($bikes as $bike)
            <li>{{ $bike->brand }} - {{ $bike->model }} ({{ $bike->year }})</li>
        @endforeach
    </ul>
</body>
</html>