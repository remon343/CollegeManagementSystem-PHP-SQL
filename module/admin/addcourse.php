<?php
    include "../../connection_db/connect.php";
    if(isset($_GET['submit'])){
        $cn = $_GET['course_name'];
        $cd = $_GET['course_desc'];
        $sql = "INSERT INTO `course`(`Course_Name`, `Course_desc`) VALUES ('$cn','$cd')";
        $result =  $conn->query($sql);
        if($result){
            $msg = "Course Added Successfully.";
        }
        
   }
   else{
    $msg = ""; 
   }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Add Course</title>
    <link rel="stylesheet" href="../../css/navigation.css">
</head>
<body>
<ul class="navbar">
        <li><a href="admin.php">Home</a></li>
        <li><a href="addteacher.php">Add Teacher</a></li>
        <li><a href="updateteacher.php">Update teacher</a></li>
        <li><a href="updateStudent.php">UpdateStudent</a></li>
        <li><a href="addcourse.php">Add Course</a></li>
        <li><a href="updateCourse.php">Update Course</a></li>
        <li><a href="logout.php">Log out</a></li>
    </ul>
    <form action="" method="get">
        <input type="text" name="course_name">
        <input type="text" name="course_desc">
        <input type="submit" name="submit" value="Add">
        <br>
        <p style="background-color: orange; color:white;"><?php echo "$msg"; ?></p>
    </form>
    
</body>
</html>