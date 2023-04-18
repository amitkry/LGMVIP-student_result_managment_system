<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Students Details</title>
    <link rel="stylesheet" href="css/inside_admin.css">
</head>
<body id="add">
    <div class="nav1">
        ADD STUDENTS DETAILS
        <a href="/lgm/admin.php"><button id="back_to_dash">Back to Dashboard</button></a>
    </div>
    <div class="container">
        <form action="submission/submit_marks.php" method="post">
            <label for="student_detail" style="font-size: 35px;">Students Details:</label><br>
            <label for="Class">
                Class :
            </label>
            <input type="number" name="class" style="width:150px;">
            <label for="Roll" >
                Roll :
            </label>
            <input type="number" name="roll" style="width:150px;"><br>
            <label for="name">
                Name :
            </label>
            <input type="text" name="name"><br><br>
           <label for="marks" style="font-size: 35px;">Marks of the Students: (out of 100) </label><br>
            <label for="Hindi">
                Hindi :
            </label>
            <input type="number" name="hindi">
            
            <label for="English">
                English :
            </label>
            <input type="number" name="english">

            <label for="Math">
                Maths :
            </label>
            <input type="number" name="maths">

            <label for="Science">
                Science :
            </label>
            <input type="number" name="science">
            
            <label for="sst">
                Social Studies :
            </label>
            <input type="number" name="sst"><br>
            <input type="submit" value="Submit Result">
        </form>
    </div>
</body>
</html>