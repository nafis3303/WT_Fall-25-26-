<?php
session_start();

// session clear
session_unset();
session_destroy();

// optional: cookie delete (username)
setcookie("username", "", time() - 3600, "/");

header("Location: login.php");
exit();
?>
