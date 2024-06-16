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
        <h1>Login to Mamura</h1>
        <form id="loginForm">
            <input type="email" id="email" name="email" placeholder="Email" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <div id="error-message" class="error"></div>
            <button type="submit">Login</button>
        </form>
        <p>Belum punya akun? <a href="{{ url('/register') }}">Daftar</a></p>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const errorMessage = document.getElementById('error-message');

            // Clear any previous error messages
            errorMessage.textContent = '';

            // Retrieve stored user data from localStorage
            const storedUserData = localStorage.getItem('userData');
            if (storedUserData) {
                const userData = JSON.parse(storedUserData);

                // Check if email and password match
                if (email === userData.email && password === userData.password) {
                    // If credentials are correct, redirect to cust_page.html
                    alert('Login successful!');
                    window.location.href = "{{ url('/cust_page') }}";
                } else {
                    // If credentials are incorrect, show error message
                    errorMessage.textContent = "Email atau password salah";
                }
            } else {
                errorMessage.textContent = "Tidak ada pengguna yang terdaftar dengan email ini";
            }
        });
    </script>
</body>
</html>