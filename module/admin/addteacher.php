

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Add Teacher</title>
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
    <form action="registerteacher.php" method="post">
        <input type="text" name="fn" placeholder="Full Name">
        <input type="date" name="dob" placeholder="Date of Birth">
        <input type="text" name="pn" placeholder="Parent Name">
        <select name="course" id="">
            <?php
            include "../../connection_db/connect.php";
            $sql = "SELECT * from course";
            $result = $conn->query($sql);
            $count = mysqli_num_rows($result);
            if($count>=0){
                while(($rows=mysqli_fetch_assoc($result))){
                    echo "
                    <option value=".$rows['Course_Name'].">".$rows['Course_Name']."</option>";
                }
            }
            ?>
        </select>

        <input type="number" name="phone" placeholder="Phone Number">
        <input type="email" name="email" placeholder="Email Address">
        <input type="text" name="user" placeholder="Username">
        <input type="password" name="Pass" placeholder="Password">
        <input type="password" name="conpass" placeholder="Confirm Password">
        <input type="submit" value="Register" name="submit">
    </form>
</body>

</html>