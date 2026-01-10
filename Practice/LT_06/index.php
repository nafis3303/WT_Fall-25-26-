<?php
session_start();

// jodi already login thake dashboard e pathao
if (isset($_SESSION["username"])) {
    header("Location: dashboard.php");
    exit();
}

// cookie thakle username auto bosbe
$saved_user = "";
if (isset($_COOKIE["username"])) {
    $saved_user = $_COOKIE["username"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="post" action="process_login.php">
    <input type="text" name="username" placeholder="Username"
           value="<?php echo $saved_user; ?>" required>
    <br><br>

    <input type="password" name="password" placeholder="Password" required>
    <br><br>

    <input type="checkbox" name="remember" value="1"> Remember Me
    <br><br>

    <input type="submit" value="Login">
</form>

</body>
</html>
