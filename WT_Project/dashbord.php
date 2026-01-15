<?php
session_start();

if (!isset($_SESSION['user_id']) || !isset($_SESSION['role'])) {
    header("Location: login.php");
    exit();
}

$role = $_SESSION['role'];
$userId = (int) $_SESSION['user_id'];
$username = $_SESSION['username'] ?? 'User';
if ($username === 'User') {
    $conn = mysqli_connect("localhost", "root", "", "quiz_app");
    if ($conn) {
        $stmt = mysqli_prepare($conn, "SELECT username FROM users WHERE id = ?");
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "i", $userId);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $fetchedUsername);

            if (mysqli_stmt_fetch($stmt)) {
                $username = $fetchedUsername;
                $_SESSION['username'] = $username;
            }

            mysqli_stmt_close($stmt);
        }
        mysqli_close($conn);
    }
}
?>
<!DOCTYPE html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">

</head>

<body>
    <div class="dashboard-layout">
        <aside class="sidebar">
            <h2>Menu</h2>
            <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="student/view_quiz.php">Available Quizzes </a></li>
                    <li><a href="student/view_results.php">My results</a></li>

                
            </ul>


        </aside>
    </div>


</body>

</html>