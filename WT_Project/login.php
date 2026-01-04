<?php
session_start();
$servername="localhost";
$db_username="root";
$db_password="";
$dbname="quiz_system";


?>




<!DOCTYPE html>

<head>
    <title>Login - Quiz Platform</title>
    <link rel="stylesheet" href="css/login.css">


</head>

<body>
    <div class="login-container">
        <h1>Login to your Account </h1>

        <form id="loginForm" action="">

            <div class="form-group">
                <label for="loginEmail">Email Address</label>
                <input type="text" id="loginEmail" name="loginEmail" placeholder="example@email.com"
                    value="<?= isset($_COOKIE['remembered_email']) ? htmlspecialchars($_COOKIE['remembered_email']) : '' ?>"
                    required>

            </div>
            <div class="form-group">
                
                Password:
                <input type="password" id="loginPassword" name="loginPassword" placeholder="Your password"
                    value="<?= isset($_COOKIE['remembered_password']) ? htmlspecialchars($_COOKIE['remembered_password']) : '' ?>"
                    required>
            </div>
            <div class="form-group remember-me">

                <input type="checkbox" name="remember_me" <?= isset($_COOKIE['remembered_email']) ? 'checked' : '' ?>>
                Remember Me
            </div>
            <button type="submit" class="btn">Login</button>


        </form>
        <div class="form-footer">
            Don't have an account? <a href="register.php">Register here</a>
        </div>


    </div>
</body>