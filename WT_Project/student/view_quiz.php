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
    <meta charset="UTF-8" />
    <title>Available Quizzes - QuizMaster</title>
</head>

<body>