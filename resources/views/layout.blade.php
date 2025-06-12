<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bike App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-6">
        @auth
            <div class="flex justify-between items-center mb-6">
                <div>
                    <p class="text-gray-700">Welcome, {{ Auth::user()->name }}</p>
                </div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">
                        Logout
                    </button>
                </form>
            </div>
        @endauth

        @yield('content')
    </div>
</body>
</html>
