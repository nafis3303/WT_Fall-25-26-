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
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);
$sql = "
    SELECT r.quiz_id, q.title, r.score, r.date_taken, r.time_taken
    FROM results r
    JOIN quizzes q ON r.quiz_id = q.id
    WHERE r.student_id = $studentId
    ORDER BY r.date_taken DESC
";
$result = $conn->query($sql);
$quizzes = [];
while ($row = $result->fetch_assoc()) 
{
    $quiz_id = $row['quiz_id'];
        $questions = [];
    $qRes = $conn->query("SELECT * FROM questions WHERE quiz_id = $quiz_id");

    while ($q = $qRes->fetch_assoc()) 
    {
        $questions[$q['id']] = $q;
    }
        $answers = [];
    $aRes = $conn->query("SELECT * FROM user_answers WHERE quiz_id = $quiz_id AND student_id = $studentId");
    while ($a = $aRes->fetch_assoc()) 
    {
        $answers[$a['question_id']] = $a['selected_option'];
    }
        $quizzes[] = 
    [
        'meta' => $row,
        'questions' => $questions,
        'answers' => $answers
    ];
}
$conn->close();


?>


<!DOCTYPE html>
<html>

<head>
    <title>My Results - QuizMaster</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>

<body>
    <div class="dashboard-layout">
        <h2>Menu</h2>
        <ul>
            <li><a href="../dashboard.php">Dashboard</a></li>
            <li><a href="view_quiz.php">View Quizzes</a></li>
            <li><a href="view_results.php">My Results</a></li>
        </ul>
        <form action="../logout.php" method="post">
            <button type="submit" class="logout-btn">Logout</button>
        </form>

    </div>
    
</body>

</html>