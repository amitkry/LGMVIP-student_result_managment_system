<?php
session_start();
if(isset($_SESSION['email'])){
    $name=$_SESSION['name'];
}
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="heading">DASHBOARD
        <a href="/lgm/logout.php"><button id="out">Logout</button></a>
    </div>
    <div class="title">
       <p style="color:black; font-family:sans-serif;">Hello <span style="color:purple;"><?php echo $name ?> </span></p>
       <span id="auto_type"></span>
    </div>
    <div class="container">
        <!-- add student details -->
        <div class="option1 size" onclick="location.href='add_student_details.php'">
            <div class="head">
                Add students result
            </div>
            <div class="desc">
                Here your can add marks of the students they obtained.
            </div>
        </div>
        <!-- check my details -->
        <div class="option2 size" onclick="location.href='check_your_details.php'">
            <div class="head">
                Check your details
            </div>
            <div class="desc">
                Have a look on your personal details entered while registration.
            </div>
        </div>
        <!-- edit marks of students
        <div class="option3 size" onclick="location.href='edit_student_details.html'">  
            <div class="head">
                Edit marks of students
            </div>
            <div class="desc">
                Entered incorrect marks of the students have a check and Re-enter it. 
            </div>
        </div>
        change your password -->
        <!-- <div class="option4 size" onclick="location.href='change_your_password.html'">
            <div class="head">
                Change your password
            </div>
            <div class="desc">
                Want to change old password and set a new password.
            </div>
            
        </div> -->
    </div>

    <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
    <script>
        var typed=new Typed("#auto_type",{
            strings:["This is Your Personal Dashboard","Here You can perform all your tasks easily"],
            typeSpeed:200,
            backSpeed:200,
            loop: true
        });

    </script>
</body>
</html>

    <?php

mysqli_close($conn);
?>