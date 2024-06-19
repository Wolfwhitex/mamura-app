<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Mamura</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #00204a, #00507a);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #ffffff;
            padding: 20px 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
            width: 300px;
        }

        .login-container h1 {
            margin-bottom: 20px;
        }

        .login-container input[type="email"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .login-container button {
            background-color: #00bbf0;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
            box-sizing: border-box;
        }

        .login-container button:hover {
            background-color: #009acd;
        }

        .login-container p {
            margin-top: 20px;
        }

        .login-container a {
            color: #00bbf0;
            text-decoration: none;
            transition: color 0.3s;
        }

        .login-container a:hover {
            color: #009acd;
        }

        .error {
            color: red;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="login-container">
    <h1>Login Seller to Mamura</h1>
        <form id="loginForm" method="POST" action="{{ url('/loginseller') }}">
            @csrf <!-- Token CSRF Laravel untuk keamanan -->
            <input type="email" id="email" name="email" placeholder="Email" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <div id="error-message" class="error">
                <!-- Menampilkan pesan error jika ada -->
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <button type="submit">Login</button>
        </form>
        <p>Belum punya akun? <a href="{{ url('/join') }}">Register</a></p>
        <p>Login Sebagai User <a href="{{ url('/loginuser') }}">Login User</a></p>
    </div>
</body>
</html>