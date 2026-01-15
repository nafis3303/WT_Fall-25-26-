<?php
session_start();

if (!isset($_SESSION['user_id']) || !isset($_SESSION['role'])) {
    header("Location: login.php");
    exit();
}

$role = $_SESSION['role'];
$userId = (int)$_SESSION['user_id'];
$username = $_SESSION['username'] ?? 'User';
?>
<!DOCTYPE html>
<head>
<title>Dashboard</title>
<!-- <link rel="stylesheet" href="style.css"> -->

</head>
<body>
    <div class="dashboard-layout">
        <aside class="sidebar">
            <h2>Menu</h2>
            <ul>
                <?php if(role == 'student'): ?>

                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="student/view_quiz.php">Available Quizzes </a></li>
                <li><a href="student/view_results.php">My results</a></li>

                <?php endif; ?>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            

        </aside>
    </div>
    

</body>
</html>