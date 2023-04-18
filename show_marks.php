<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="css/result.css">
</head>
<body>
    <div class="main">

        <div class="container">
            
        <?php
        $db_hostname="127.0.0.1";
        $db_username="root";
        $db_password="";
        $db_name="result";
        $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
        if(!$conn){
            echo "Connection failed:".mysqli_connect_error();
            exit;
        }
        
        $class=$_GET['class'];
        $roll=$_GET['roll'];
        $sql="SELECT * FROM students WHERE class='$class' AND roll='$roll'";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            echo "Error:".mysqli_error($conn);
            exit;
        }
        
        while( $row=mysqli_fetch_assoc($result)){
            echo "<div class='details'> Class - " .$row['class']."<br>";
            echo "Roll No. - ".$row['roll']."<br> </div>";
            echo "<div class='name'>Name - ".$row['name']."<br></div>";
            ?>
            <table>
                <tr id="heading">
                    <td>Hindi</td>
                    <td>English</td>
                    <td>Maths</td>
                    <td>Science</td>
                    <td>Social Studies</td>
                    <td>Percentage</td>
                    <td>Grade</td>
                </tr>
                <?php
            echo "<tr><td class='second'>".$row['hindi']."<br></td>";
            echo "<td class='second'>".$row['english']."<br></td>";
            echo "<td class='second'>".$row['maths']."<br></td>";
            echo "<td class='second'>".$row['science']."<br></td>";
            echo "<td class='second'>".$row['sst']."<br></td>";
            $clacu=$row['hindi']+$row['english']+$row['maths']+$row['science']+$row['sst'];
        }
        if(!$clacu){
            
            echo "<p style='color:red; font-weight:bolder;'>Sorry Your Result is not uploaded or else please check your class and roll number</p>";
            // exit;
        }
        $percentage=($clacu/500)*100;
        echo "<td class='second'>".$percentage."%</td>";
        if($percentage>=90){
            echo "<td class='second' style='color:green !important'>A+</td>";
        }
        else if($percentage>=80){
            echo "<td class='second' style='color:green !important'>A</td>";
        }
        else if($percentage>=70){
            echo "<td class='second' style='color:green !important'>B+</td>";
        }
        else if($percentage>=60){
            echo "<td class='second' style='color:green !important'>B</td>";
        }
        else if($percentage>=50){
            echo "<td class='second' style='color:green !important'>C+</td>";
        }
        else if($percentage>=40){
            echo "<td class='second' style='color:green !important'>C</td>";
        }
        else if($percentage<40){
            echo "<td class='second' style='color:red !important'>Fail</td>";
        }
        ?>
    </tr>
</table>
</div>
<a href="/lgm/index.php"><button id="ok">OK</button></a>
</div>
</body>
</html>