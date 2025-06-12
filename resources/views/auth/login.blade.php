<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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

        .login-container {
            background-color: white;
            border: 3px solid #007BFF;
            padding: 30px;
            border-radius: 10px;
            width: 350px;
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

        .alert {
            margin-top: 10px;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .register-link {
            margin-top: 15px;
            font-size: 14px;
        }

        .register-link a {
            color: #007BFF;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="{{ asset('logocycling.jpg') }}" alt="Logo" class="logo">
        <h2>Login</h2>

        {{-- Success message --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Error message --}}
        @if ($errors->has('email'))
            <div class="alert alert-error">
                {{ $errors->first('email') }}
            </div>
        @endif

        <form action="{{ route('login.submit') }}" method="POST">
            @csrf
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email') }}" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
        </form>

        <div class="register-link">
            Wa pa kay account? <a href="{{ route('register.form') }}">Register here</a>
        </div>
    </div>
</body>
</html>
