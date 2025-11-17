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
      form {
        background: white;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #555;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button {
        background-color: #007bff;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-right: 10px;
    }

    button:hover {
        background-color: #0056b3;
    }

    .success-message {
        background-color: #d4edda;
        color: #155724;
        padding: 10px;
        border-radius: 4px;
        margin-top: 15px;
        display: none;
    }

    .course-list {
        list-style-type: none;
        padding: 0;
        margin-top: 15px;
    }

    .course-list li {
        background-color: #f8f9fa;
        padding: 10px;
        margin-bottom: 5px;
        border-radius: 4px;
        border-left: 4px solid #007bff;
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
   
</script>
</html>