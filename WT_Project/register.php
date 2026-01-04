<?php
session_start();

$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "quizzers"; 

$conn = mysqli_connect($servername, $db_username, $db_password, $dbname);


if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST')
 {
   
    $name = mysqli_real_escape_string($conn, $_POST['username'] ?? '');
    $email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirmPassword'] ?? '';
    $role = mysqli_real_escape_string($conn, $_POST['role'] ?? '');

   
    if ($name && $email && $password && $confirmPassword && $role && $password === $confirmPassword) 
    
    {
        
        $checkQuery = "SELECT * FROM users WHERE email = '$email'";
        $checkResult = mysqli_query($conn, $checkQuery);

        if (mysqli_num_rows($checkResult) > 0) 
        
        {
            $error = "Email already exists!";
        } 
        else 
        {
          
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
           
            $sql = "INSERT INTO users (username, email, password, role) VALUES ('$name', '$email', '$hashedPassword', '$role')";
            if (mysqli_query($conn, $sql)) 
            {
                $successMessage = "Registration Successful";
            } else 
            {
                $error = "Registration failed.  try again.";
            }
        }
    } 
    else 
    
    {
        $error = "Please fill  all fields correctly.";
    }
}

mysqli_close($conn);
?>
<!DOCTYPE html>

<head>
    <title>Registration</title>
    <link rel="stylesheet" href="css/register.css">

</head>

<body>
    <div class="register-container">
        <h1>Create Your Account</h1>
        <form action="">

            <div class="form-group">
                Full name:
                <input type="text" id="userName" name="userName" placeholder="Enter Your Name">
            </div>

            <div class="form-group">
                Email Address:
                <input type="text" id="email" name="email" placeholder="ex@gmail.com">
            </div>
            <div class="form-group">
                Password:
                <input type="password" id="password" name="password" placeholder="Your password">
            </div>
            <div class="form-group">
                Confirm Password:
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password">
            </div>
            <div class="form-group">
                Account Type:
                <select id="role" name="role">
                    <option valu+e="student">Student</option>
                    <option value="teacher">Teacher</option>
                </select>
            </div>
            <button type="submit" class="register-btn">Register</button>
        </form>
        <div class="form-footer">
            Already have an account? <a href="login.php">Login here</a>
        </div>
</body>