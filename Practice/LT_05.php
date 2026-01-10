<?php
// decide what action to perform
$action = $_GET["action"] ?? "set";

/* -------------------------
   DELETE COOKIE
-------------------------- */
if ($action === "delete") {

    // delete cookie by setting past time
    setcookie("user_theme", "", time() - 3600, "/");
    ?>
    <html>
    <head><title>Delete Cookie</title></head>
    <body>

    <h2>Cookie Deleted</h2>
    <p>Cookie has been deleted successfully.</p>

    <a href="theme_cookie.php">Set Theme Again</a>

    </body>
    </html>
    <?php
    exit();
}

/* -------------------------
   SET COOKIE (FORM SUBMIT)
-------------------------- */
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $theme = $_POST["theme"]; // get selected theme

    // set cookie for 1 week
    setcookie("user_theme", $theme, time() + (7 * 24 * 60 * 60), "/");

    // redirect to read page
    header("Location: theme_cookie.php?action=read");
    exit();
}

/* -------------------------
   READ COOKIE
-------------------------- */
if ($action === "read") {
    ?>
    <html>
    <head><title>Read Cookie</title></head>
    <body>

    <h2>Theme Preference</h2>

    <?php if (isset($_COOKIE["user_theme"])) { ?>
        <p>Hello! Your preferred theme is <b><?php echo $_COOKIE["user_theme"]; ?></b>.</p>
    <?php } else { ?>
        <p>No theme selected. Please choose your preferred theme.</p>
    <?php } ?>

    <a href="theme_cookie.php?action=delete">Delete Cookie</a>

    </body>
    </html>
    <?php
    exit();
}
?>

<!-- -------------------------
     SET COOKIE FORM (DEFAULT)
-------------------------- -->
<html>
<head><title>Set Cookie</title></head>
<body>

<h2>Select Your Preferred Theme</h2>

<form method="post">
    <input type="radio" name="theme" value="Light" required> Light <br>
    <input type="radio" name="theme" value="Dark"> Dark <br><br>

    <button type="submit">Save Theme</button>
</form>

</body>
</html>
