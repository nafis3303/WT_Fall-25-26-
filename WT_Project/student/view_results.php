<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'student') {
    header("Location: ../login.php");
    exit();
} 


    $studentId = $_SESSION['user_id'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quizzers";
    




?>


<!DOCTYPE html>
<html>

<head>
    <title>My Results - QuizMaster</title>
</head>

<body>
    <h1>View Results</h1>
</body>

</html>