<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher - View Course</title>
    <link rel="stylesheet" href="../../css/navigation.css">
</head>
<body>
<ul class="navbar">
        <li><a href="teacher.php">Home</a></li>
        <li><a href="updateteacher.php">Update teacher</a></li>
        <li><a href="updateStudent.php">Update Student</a></li>
        <li><a href="viewcourse.php">View Course</a></li>
        <li><a href="logout.php">Log out</a></li>
    </ul>
    <form method="get">
        <label for="Search">Search for</label>
        <input type="text" name="search" id="">
        <input type="submit" name="submit">
    </form>
    <table border="1">
    <tr>

        <th>Course Name</th>
        <th>Course Description</th>

    </tr>

    <?php
    include "../../connection_db/connect.php";
    if(!isset($_GET['submit'])){

        $sql = "SELECT * FROM course";
    $data = $conn->query($sql);
    $total = mysqli_num_rows($data);

    if ($total > 0) {
        
        while (($row = mysqli_fetch_assoc($data))) {
            
            echo "
            <tr>
        <td>" . $row['Course_Name'] . "</td>
        <td>" . $row['Course_desc'] . "</td>
        
        
        </tr>";
    }
}
    }
    else{
        $search = $_GET['search'];
        $sql = "SELECT * FROM Course WHERE Course_Name='$search'";
    $data = $conn->query($sql);
    $total = mysqli_num_rows($data);

    if ($total > 0) {
        
        while (($row = mysqli_fetch_assoc($data))) {
            
            echo "
            <tr>
            <td>" . $row['Course_Name'] . "</td>
        <td>" . $row['Course_desc'] . "</td>
        
        
        
        </tr>";
    }
    }
    else{
        echo "No records found.";
    }
}
        ?>
        </table>
</body>
</html>