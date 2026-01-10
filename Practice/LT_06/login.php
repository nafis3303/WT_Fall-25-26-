<?php
session_start();

// hardcoded valid credentials (LT-6)
$valid_user = "student";
$valid_pass = "aiub123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = $_POST["username"];
    $pass = $_POST["password"];

    // login success
    if ($user === $valid_user && $pass === $valid_pass) {

        // session e username store (login status)
        $_SESSION["username"] = $user;

        // remember me checked হলে cookie set (1 week)
        if (isset($_POST["remember"])) {
            setcookie("username", $user, time() + (7 * 24 * 60 * 60), "/");
        }

        header("Location: dashboard.php");
        exit();

    } else {
        // login fail
        echo "<p style='color:red;'>Invalid username or password!</p>";
        echo "<a href='login.php'>Back to Login</a>";
        exit();
    }
} else {
    // direct open korle login e pathao
    header("Location: login.php");
    exit();
}
