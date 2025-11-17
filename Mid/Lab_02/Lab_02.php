<!DOCTYPE html>
<head>
    <title>Student Registration</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        padding: 20px;
        margin: 0;
    }
    h1 {
        text-align: center;
        color: aqua;
        margin-bottom: 15px;  
    }

    h2 {
        text-align: center;
        color: #444;
        margin-bottom: 15px;  
    }


</style>
<body> 
    <center> <h2>Student Registration</h2>  </center> 

    <form>

        Full Name: <br> 
        <input type="text"> <br><br>
        Email: <br>
        <input type="email"><br><br>
        Password: <br>
        <input type="password"><br><br>
        Confirm Password: <br>
        <input type="password"><br><br>

        <button type="button">Register</button>
    </form>
    <form>

    <div class="success"></div>

    <center> <h2>Course Registration</h2> </center> 
    Course Name:<br>
    <input type="text" name="course"><br>
    <button type="button">Add Course</button>
    <ul class="course-list">
        <li>No Course Added </li>
    </ul>

    </form>

</body>
<script>
    function registerStudent() {

        
    }
</script>
</html>