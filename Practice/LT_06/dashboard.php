<?php
session_start();

// session na thakle login e pathao
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Dashboard</h2>

<p>Welcome, <b><?php echo $_SESSION["username"]; ?></b></p>

<?php
// cookie ache kina check
if (isset($_COOKIE["username"])) {
    echo "<p>Cookie found: Username remembered.</p>";
} else {
    echo "<p>No cookie found: Username not remembered.</p>";
}
?>

<a href="logout.php">Logout</a>

</body>
</html>
