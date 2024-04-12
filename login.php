<?php
include './settings/core.php';
include './settings/connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-color: black;
            background-size: cover;
            background-position: center;
            color: black;
            padding: 20px;
            font-family: Verdana, sans-serif;
        }
        
        h1 {
            color:rgb(220, 146, 8);
            font-weight: bold;
            text-align: left;
        }

        .login-box {
            max-width: 400px;
            margin: 150px auto;
            padding: 20px;
            background-color: black;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .login-box label {
            display: block;
            margin-bottom: 5px;
            color:rgb(255, 166, 0);
        }

        .login-box input[type="email"],
        .login-box input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-box button {
            width: 100%;
            padding: 10px;
            background-color:rgb(255, 166, 0);
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-box button:hover {
            background-color:black;
        }

        .login-box p {
            margin-top: 10px;
            text-align: center;
            color:rgb(255, 166, 0);
        }

        .login-box a {
            color: #007bff;
            text-decoration: none;
        }

        .login-box a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <h1></h1>

    <div class="login-box">
        <h1 style="text-align: center;color:rgb(255, 166, 0);">Login</h1>
        <form action="./action/login_user_action.php" method="post" name="loginForm" id="loginForm" onsubmit="return validateForm()">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>

            <button type="submit" name="loginBtn" id="loginBtn">Sign In</button>
        </form>

        <p>Don't have an account? <a href="register.php">Register</a></p>
    </div>

    <script>
        function validateForm() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            if (email.trim() === "" || password.trim() === "") {
                alert("Email and password are required.");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
