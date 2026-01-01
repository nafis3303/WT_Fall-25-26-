<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<link rel="stylesheet" href="style.css" >

<!DOCTYPE html>

<head>
    <title>Online Quiz System </title>

</head>

<body>
    <h1>Welcome to QuizeMaster</h1>
    <p>Start creating quizzes, take tests and track performance!</p>
    
    <div class="btn-grp">
        <a href=" " class="btn">Login</a>
        <a href=" " class="btn">Create Account</a>

    </div>


</body>

</html>