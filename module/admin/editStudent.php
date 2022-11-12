<?php
    include "../../connection_db/connect.php";
    $name = $_GET['name'];
    $username = $_GET['username'];
    $dob = $_GET['dob'];
    $fn = $_GET['fn'];
    $email = $_GET['email'];
    $phoneno = $_GET['pn'];
    $course = $_GET['course'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Edit Student</title>
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
    <form method="get">
        
        <input type="text" value="<?php echo $name?>" name="name">
        <input type="text" value="<?php echo $username?>" name="username" readonly>
        <input type="date" value="<?php echo $dob?>" name="dob">
        <input type="text" value="<?php echo $fn?>" name="fn">
        <input type="email" value="<?php echo $email?>" name="email">
        <input type="number" value="<?php echo $phoneno?>" name="phoneno">
        <select name="course" id="">
            <?php
            include "connection_db/connect.php";
            $sql = "SELECT Course_Name from course";
            $result = $conn->query($sql);
            $count = mysqli_num_rows($result);
            if($count>=0){
                while(($rows=mysqli_fetch_assoc($result))){
                    echo "
                    <option value=".$rows['Course_Name'].">".$rows['Course_Name']."</option>";
                }
            }
            ?>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>
<?php
if(isset($_GET['submit'])){
    $name = $_GET['name'];
    $username = $_GET['username'];
    $dob = $_GET['dob'];
    $fn = $_GET['fn'];
    $email = $_GET['email'];
    $phoneno = $_GET['phoneno'];
    $class = $_GET['course'];
    $sql = "UPDATE `student` SET `Name`='$name',`Date_of_birth`='$dob',`Parent_Name`='$fn',`Phone_Number`='$phoneno',`Email`='$email',`Course`='$course' WHERE Username = '$username'";
    
    $result = $conn->query($sql);
    if($result){
            header("Location:updateStudent.php");
        }
}
?>