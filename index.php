<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/registration.css">
    <title>Student Result Website</title>
</head>
<body>
    <div class="navbar">
        <span id="admin" onclick="myfunc_login()">Login as Teacher</span>
        <ul>
            <li onclick="show_home()">Home</li>
            <li onclick="show_about()">About</li>
            <li onclick="show_student_form()">View Your Marks</li>
        </ul>
    </div>
    <div class="logo" id="logo_id">
        " The highest result of education is tolerance "
        <input type="button" class="btn" value="Register as Teacher" onclick="myfunc_registration()">
    </div>

<!-- registration div starts from here -->
    <div class="registration" id="register">
        <div class="head">
            Create Your Account
        </div>
        <form action="/lgm/submission/registered.php" method="post">
            <input type="text" name="name" placeholder="Enter your Name"><br>
            <input type="email" name="email" placeholder="Enter your email"><br>
            <input type="number" name="phone" placeholder="Enter your Phone Number"><br>
            <input type="password" name="password" placeholder="Enter a password"><br>
            <input type="password" name="cpassword" placeholder="Re-enter your password"><br>
            <input type="submit" name="submit" value="Register">
            <input type="reset" name="reset" value="Clear">
        </form>
        <div class="foot">
            Already have an account? <span class="foot_main" onclick="myfunc_login()">Login</span>
        </div>
    </div>

<!-- login div starts from here -->
    <div class="login" id="login">
        <div class="head">
            Login as Teacher
        </div>
        <form action="/lgm/submission/login.php" method="post">
            <input type="email" name="email" placeholder="Enter your email"><br>
            <input type="password" name="password" placeholder="Enter your password"><br>
            <input type="submit" name="submit" value="Login">
            <input type="reset" name="reset" value="Clear">
        </form>
        <div class="foot">
            Create a new Account? <span class="foot_main" onclick="myfunc_registration()">SignUp</span>
        </div>
        
    </div>

<!-- This div is for About -->
    <div class="abo hide" id="about">
        <h2>Why this website is created?</h2>
        <br>
        <p>This website is just created for the ease of students to see their results by just entering their Roll Number and Class they are studing in. Also Teachers can create there personal admin account and can add students result so that students can see their results.</p>
    </div>

<!-- This div is for the students -->
    <div class="student" id="students">
        <form action="show_marks.php" method="get">
            For Seeing your Marks Please enter your Roll No <input type="number" name="roll" style="width:80px;"> and class in which you are studying <input type="number" name="class" style="width:80px;">. <br><br>
            <input type="submit" value="Get Result" style="float: right;"> 

        </form>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
