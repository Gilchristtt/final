<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            background: rgb(66, 66, 66); 
            color: white; 
            padding: 20px;
            margin: 0;

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
       
        h1 {
            font-family: Verdana, sans-serif;
            color: whitesmoke;
            font-weight: bold;
            text-align: left;
        }

        label{
            font-family: Verdana,sans-serif;
        }

        .register-box {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            background-color:rgb(66, 66, 66); 
        }

        .register-box label {
            display: block;
            margin-bottom: 5px;
            color:rgb(255, 166, 0);
        }

        .register-box input[type="text"],
        .register-box input[type="email"],
        .register-box input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .register-box select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: white;
        }

        .register-box button {
            width: 100%;
            padding: 10px;
            background-color: rgb(255, 166, 0);
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .register-box button:hover {
            background-color: rgb(255, 166, 0);
        }

        .register-box p {
            margin-top: 10px;
            text-align: center;
            color: #fff;
        }

        .register-box a {
            color: #007bff;
            text-decoration: none;
        }

        .register-box a:hover {
            text-decoration: underline;
        }

        label{
            color: rgb(255, 166, 0);
        }

        .content-container {
            display: flex;
            justify-content: space-between; 
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="register-box">
        <form action="./action/register_user_action.php" method="post" name="registerForm" id="registerForm"> 
            <label for="userName">Username:</label>
            <input type="text" name="userName" id="userName" placeholder="Enter your first name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>

            <label for="passwordRetype">Retype Password:</label>
            <input type="password" name="passwordRetype" id="passwordRetype" placeholder="Retype your password" required>

            <a href="contact.php">
    <button type="submit" name="registerBtn" id="registerBtn">Register</button>
</a>

        </form>

        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>

    <script>
        document.getElementById("registerForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent form submission
            
            var userName = document.getElementById("userName").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var passwordRetype = document.getElementById("passwordRetype").value;

            if (userName.trim() === "" ||  email.trim() === "" || password.trim() === "" || passwordRetype.trim() === "") {
                alert("All fields are required");
                return;
            }

            if (password !== passwordRetype) {
                alert("Passwords do not match");
                return;
            }

            // If all validations pass, submit the form
            document.getElementById("registerForm").submit();
        });
    </script>
</body>
</php>
