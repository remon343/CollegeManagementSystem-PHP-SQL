<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="css/register.css" rel="stylesheet">
    
</head>
<body>
    <form action="register_insert.php" method="post">
    <img src="pictures/booklogo.jpg" alt="book logo" width="120px" class="booklogo">
        <input class="box" type="text" name="fn" placeholder="Full Name">
        <input class="leftbox" type="date" name="dob" placeholder="Date of Birth"><br><br>
        <input class="box" type="text" name="pn" placeholder="Parent Name">
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
        </select class="leftbox"><br><br>
        <input class="box" type="number" name="phone" placeholder="Phone Number">
        <input class="leftbox" type="email" name="email" placeholder="Email Address"><br><br>
        <input class="box" type="text" name="user" placeholder="Username">
        <input class="leftbox" type="password" name="Pass" placeholder="Password"><br><br>
        <input class="pw" type="password" name="conpass" placeholder="Confirm Password"><br><br>
        <input class="button" type="submit" value="Register" name="submit">
    </form>
</body>
</html>