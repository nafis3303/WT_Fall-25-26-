<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: dashboard.php");
    exit();
}
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>

<body>

    <h2>
        Welcome <?php echo $_SESSION["username"]; ?>
    </h2>

    <form action="logout.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>

</body>

</html>