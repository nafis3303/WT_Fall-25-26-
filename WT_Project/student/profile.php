<?php
session_start();

if (!isset($_SESSION['role']) || trim(strtolower($_SESSION['role'])) !== 'student') {
    header("Location: ../login.php");
    exit();
}

$studentId = (int)($_SESSION['user_id'] ?? 0);
if ($studentId <= 0) {
    header("Location: ../login.php");
    exit();
}
?>
