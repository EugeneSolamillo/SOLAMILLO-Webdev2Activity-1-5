<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- Required for Tailwind --}}
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md p-8 bg-white rounded shadow">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>

        @if(session('error'))
            <p class="text-red-500 text-sm mb-4">{{ session('error') }}</p>
        @endif

        <form action="{{ route('login.submit') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium">Email</label>
                <input type="email" id="email" name="email" required
                       class="w-full border rounded px-3 py-2 mt-1 focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium">Password</label>
                <input type="password" id="password" name="password" required
                       class="w-full border rounded px-3 py-2 mt-1 focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div class="text-center">
                <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Login
                </button>
            </div>
        </form>
    </div>
</body>
</html>
