<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks submitted</title>
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
$class=$_POST['class'];
$roll=$_POST['roll'];
$name=$_POST['name'];
$hindi=$_POST['hindi'];
$english=$_POST['english'];
$maths=$_POST['maths'];
$science=$_POST['science'];
$sst=$_POST['sst'];

$sql="INSERT INTO students(class,roll,name,hindi,english,maths,science,sst) VALUES ('$class','$roll','$name','$hindi','$english','$maths','$science','$sst')";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo ("Error:".mysqli_error($conn));
    exit;
}
echo "<h1 class='message'>Marks of the students are successful submitted</h1>";

mysqli_close($conn);

?>    
<a href="/lgm/admin.php"><button id='back'>Back to Dashboard</button></a>
</div>
</body>
</html>

