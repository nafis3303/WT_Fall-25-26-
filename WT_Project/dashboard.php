<?php
session_start();

if (!isset($_SESSION['user_id']) || !isset($_SESSION['role'])) {
    header("Location: login.php");
    exit();
}

if (trim(strtolower($_SESSION['role'])) !== 'student') {
    header("Location: login.php");
    exit();
}

$userId = (int) $_SESSION['user_id'];
$username = $_SESSION['username'] ?? 'User';

if ($username === 'User') {
    $conn = mysqli_connect("localhost", "root", "", "quizzers"); // ✅ fixed db name
    if ($conn) {
        $stmt = mysqli_prepare($conn, "SELECT username FROM users WHERE id = ?");
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "i", $userId);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $fetchedUsername);

            if (mysqli_stmt_fetch($stmt) && $fetchedUsername) {
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
<html>

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
                <li><a href="student/view_quiz.php">Available Quizzes</a></li>
                <li><a href="student/view_results.php">My Results</a></li>
            </ul>
            <form action="logout.php" method="POST" style="margin-top: 20px;">
                <button type="submit" class="btn logout-btn">Logout</button>
            </form>
        </aside>

        <main class="content-area">
            <h1>Welcome, <?= htmlspecialchars($username) ?>(Student)</h1>
            <p>Select an option to continue:</p>
            <div class="quick-actions">
                <a href="student/view_quiz.php" class="quick-btn">Take a Quiz</a>
                <a href="student/view_results.php" class="quick-btn">View My Results</a>
            </div>
        </main>
    </div>
</body>

</html>