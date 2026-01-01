<!DOCTYPE html>
<head>
    <title>Registration</title>
    <!-- <link rel="stylesheet" href="style.css"> -->

</head>
<body>
    <div class="register-container">
    <h1>Create Your Account</h1>

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
            <option value="student">Student</option>
            <option value="teacher">Teacher</option>
        </select>
    </div>
    <button type="submit" class="register-btn">Register</button>
</body>