<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Mamura</title>
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

        .register-container {
            background-color: #ffffff;
            padding: 20px 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
            width: 300px;
        }

        .register-container h1 {
            margin-bottom: 20px;
        }

        .register-container input[type="text"],
        .register-container input[type="email"],
        .register-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .register-container button {
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

        .register-container button:hover {
            background-color: #009acd;
        }

        .register-container p {
            margin-top: 20px;
        }

        .register-container a {
            color: #00bbf0;
            text-decoration: none;
            transition: color 0.3s;
        }

        .register-container a:hover {
            color: #009acd;
        }

        .error {
            color: red;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h1>Welcome to Mamura</h1>
        <form id="registerForm">
            <input type="text" id="username" name="username" placeholder="Username" required>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <div id="error-message" class="error"></div>
            <button type="submit">Register</button>
        </form>
        <p>Sudah punya akun? <a href="{{ url('/login') }}">Login</a></p>
    </div>

    <script>
        document.getElementById('registerForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const errorMessage = document.getElementById('error-message');

            // Clear any previous error messages
            errorMessage.textContent = '';

            // Simple validation rules
            if (username.length < 3) {
                errorMessage.textContent = 'Username harus lebih dari 3 karakter';
                return;
            }

            if (password.length < 6) {
                errorMessage.textContent = 'Password harus lebih dari 6 karakter';
                return;
            }

            // Store user data in localStorage
            const userData = {
                username: username,
                email: email,
                password: password
            };

            localStorage.setItem('userData', JSON.stringify(userData));

            // Redirect to login page after successful registration
            alert('Registration successful!');
            window.location.href = "{{ url('/login') }}";
        });
    </script>
</body>
</html>