<?php
// include "../../check_login/conn.php";

include "../../extra_php/count.php";
$username = $_SESSION['login_id'];

if(isset($username)){

    $session = $conn->query("SELECT Username FROM login WHERE username = '$username'");
    $row = mysqli_fetch_array($session);
    $login_session = $logged_user = $row['Username'];
   
}
else{   
    header("Location:../../");
}

?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Admin</title>
    <link rel="stylesheet" href="../../css/homepage.css">
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
    <center>
        
        <h1>Hey <?php echo "$logged_user";?></h1>
    </center>
        <div class="container">
            <div class="status">
                
                <div class="count">
            <?php echo "$count_admin" ?>
        </div>
        
        <p>Admins</p>
    </div>
    <div class="status">
        <div class="count">
            <?php echo "$count_teacher" ?>
        </div>
        <p>Teacher</p>
    </div>
    <div class="status">
        <div class="count">
            <?php echo "$count_student" ?>
        </div>
        <p>Student</p>
    </div>
</div>
</body>

</html>