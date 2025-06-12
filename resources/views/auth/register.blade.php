<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body {
            background-color: #f2f4f8;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .register-container {
            background-color: white;
            border: 3px solid #007BFF;
            padding: 30px;
            border-radius: 10px;
            width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .logo {
            width: 120px;
            height: auto;
            margin-bottom: 15px;
        }

        h2 {
            color: #007BFF;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            text-align: left;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            margin-top: 20px;
            width: 100%;
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .login-link {
            margin-top: 15px;
            font-size: 14px;
        }

        .login-link a {
            color: #007BFF;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <img src="{{ asset('logocycling.jpg') }}" alt="Logo" class="logo">
        <h2>Register</h2>

        {{-- Display validation errors --}}
        @if ($errors->any())
            <div class="alert-error">
                <ul style="margin: 0; padding-left: 15px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register.submit') }}" method="POST">
            @csrf
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name') }}" required>

            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email') }}" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <label>Confirm Password:</label>
            <input type="password" name="password_confirmation" required>

            <button type="submit">Register</button>
        </form>

        <div class="login-link">
            Naa na kay account? <a href="{{ route('login.form') }}">Login here</a>
        </div>
    </div>
</body>
</html>
