<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #007BFF, #00C6FF);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 350px;
        }

        .login-container h2 {
            text-align: center;
            color: #007BFF;
            margin-bottom: 25px;
        }

        .login-container label {
            font-weight: 600;
            color: #333;
        }

        .login-container input {
            width: 100%;
            padding: 10px 12px;
            margin: 10px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
        }

        .login-container input:focus {
            outline: none;
            border-color: #007BFF;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
        }

        .login-container input[type="submit"] {
            background-color: #007BFF;
            color: white;
            font-weight: bold;
            cursor: pointer;
            border: none;
            transition: 0.3s;
        }

        .login-container input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 15px;
            font-weight: 500;
        }

        .success {
            color: green;
            text-align: center;
            margin-bottom: 15px;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>User Login</h2>

        <?php
        $valid_username = "admin";
        $valid_password = "12345";
        $message = "";

        if (isset($_POST['submit'])) {
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);

            if (empty($username) || empty($password)) {
                $message = "<div class='error'>All fields are required.</div>";
            } elseif ($username === $valid_username && $password === $valid_password) {
                $message = "<div class='success'>Login Successful! Welcome, $username.</div>";
            } else {
                $message = "<div class='error'>Invalid Username or Password!</div>";
            }
        }

        echo $message;
        ?>

        <form method="post" action="">
            <label>Username:</label>
            <input type="text" name="username" placeholder="Enter Username">

            <label>Password:</label>
            <input type="password" name="password" placeholder="Enter Password">

            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>
</html>
