<?php
    session_start();

    if(isset($_SESSION['email'])){
        $name=$_SESSION['name'];
        $email=$_SESSION['email'];
        $phone=$_SESSION['phone'];
        $password=$_SESSION['password'];
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHECK YOUR DETAILS</title>
    <link rel="stylesheet" href="css/inside_admin.css">
</head>
<body id="check">
    <div class="nav2">
        CHECK YOUR DETAILS
        <a href="/lgm/admin.php"><button id="back_to_dash">Back to Dashboard</button></a>
    </div>
    <div class="container2">
        Name :
        <?php
        echo $name;
        ?><br>
        Email:
        <?php
        echo $email;
        ?><br>
        Phone Number:
        <?php
        echo $phone;
        ?><br>
        Password:
        <?php echo $password; ?> 
    </div>
</body>
</html>