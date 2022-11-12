<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Update Student</title>
    <link rel="stylesheet" href="../../css/navigation.css">
    <link rel="stylesheet" href="../../css/table.css">

    
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
        <label for="Search">Search for</label>
        <input type="text" name="search" id="">
        <input type="submit" name="submit">
    </form>
    <table border="1">
    <tr>

        <th>Name</th>
        <th>Username</th>
        <th>Date of Birth</th>
        <th>Parent Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Course</th>
        <th colspan="2">Remarks</th>
    </tr>

    <?php
    include "../../connection_db/connect.php";
    if(!isset($_GET['submit'])){

        $sql = "SELECT * FROM student";
    $data = $conn->query($sql);
    $total = mysqli_num_rows($data);

    if ($total > 0) {
        
        while (($row = mysqli_fetch_assoc($data))) {
            
            echo "
            <tr>
        <td>" . $row['Name'] . "</td>
        <td>" . $row['Username'] . "</td>
        <td>" . $row['Date_of_birth'] . "</td>
        <td>" . $row['Parent_Name'] . "</td>
        <td>" . $row['Phone_Number'] . "</td>
        <td>" . $row['Email'] . "</td>
        <td>" . $row['Course'] . "</td>
        <td><a href='editStudent.php?name=$row[Name]&&username=$row[Username]&&dob=$row[Date_of_birth]&&fn=$row[Parent_Name]&&pn=$row[Phone_Number]&&email=$row[Email]&&course=$row[Course]'> Edit</a></td>
        <td><a href='deleteStudent.php?name=$row[Name]&&username=$row[Username]'> Delete</a></td>
        
        
        </tr>";
    }
}
    }
    else{
        $search = $_GET['search'];
        $sql = "SELECT * FROM student WHERE Name='$search'";
    $data = $conn->query($sql);
    $total = mysqli_num_rows($data);

    if ($total > 0) {
        
        while (($row = mysqli_fetch_assoc($data))) {
            
            echo "
            <tr>
            <td>" . $row['Name'] . "</td>
        <td>" . $row['Username'] . "</td>
        <td>" . $row['Date_of_birth'] . "</td>
        <td>" . $row['Parent_Name'] . "</td>
        <td>" . $row['Phone_Number'] . "</td>
        <td>" . $row['Email'] . "</td>
        <td>" . $row['Course'] . "</td>
        <td><a href='editStudent.php?name=$row[Name]&&username=$row[Username]&&dob=$row[Date_of_birth]&&fn=$row[Parent_Name]&&pn=$row[Phone_Number]&&email=$row[Email]&&course=$row[Course]'> Edit</a></td>
        <td><a href='deleteStudent.php?name=$row[Name]&&username=$row[Username]'> Delete</a></td>
        
        
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