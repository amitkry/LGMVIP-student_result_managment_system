<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Status</title>
    <link rel="stylesheet" href="/lgm/css/successful.css">
</head>
<body>
    <div class="container">

        <?php
        session_start();
    $db_hostname="localhost";
    $db_username="root";
    $db_password='';
    $db_name= "result";
    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn){
    echo "Connection Failed Occurred :".mysqli_connect_error();
    exit;
}
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];

$sql="INSERT INTO teacher(name,email,phone,password) VALUES ('$name','$email','$phone','$password')";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo ("Error:".mysqli_error($conn));
    exit;
}
echo "<h1 class='message'>Registration Successful</h1>";
mysqli_close($conn);
?>    
<button onclick="location.href='/lgm/index.php'" id='back'>Back to Home</button>
</div>
</body>
</html>

