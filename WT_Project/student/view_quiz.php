<?php
session_start();

if (!isset($_SESSION['role']) || trim(strtolower($_SESSION['role'])) !== 'student') {
    header("Location: ../login.php");
    exit();
}


$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "quizzers";

$conn = mysqli_connect($servername, $db_username, $db_password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Available Quizzes - QuizMaster</title>
    <link rel="stylesheet" href="css/dashboard.css">

</head>

<body>
    <div class="dashboard-layout">

        <aside class="sidebar">
            <div class="sidebar-top">
                <h2>Menu</h2>
                <ul>
                    <li><a href="../dashboard.php">Dashboard</a></li>
                    <li><a href="view_quiz.php">View Quizzes</a></li>
                    <li><a href="view_my_results.php">My Results</a></li>
                </ul>
            </div>
            <div class="sidebar-bottom">
                <form action="../logout.php" method="post">
                    <button type="submit" class="logout-btn">Logout</button>
                </form>
            </div>
        </aside>
        <main class="content-area">
            <div class="breadcrumbs">Dashboard > View Quizzes</div>
            <h1>Available Quizzes</h1>
             
</body>
</html>