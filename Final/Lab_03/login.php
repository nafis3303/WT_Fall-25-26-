<?php
session_start();
if(isset($_SESSION["username"])) {
    header("Location: welcome.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>

    <h2>Login Page</h2>

    <form method="post">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" name="login" value="Login">
    </form>

    <?php
    if (isset($_POST['login'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == "admin" && $password == "123") {
            $_SESSION["username"] = $username;
            header("Location: welcome.php");
        } else {
            echo "Invalid Username or Password";
        }
    }
    ?>

</body>

</html>