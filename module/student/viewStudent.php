<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student - View Student</title>
    <link rel="stylesheet" href="../../css/navigation.css">
</head>
<body>
    <ul class="navbar">
        <li><a href="student.php">Home</a></li>
        <li><a href="viewteacher.php">View teacher</a></li>
        <li><a href="viewStudent.php">View Student</a></li>
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

        <th>Name</th>
        <th>Username</th>
        <th>Date of Birth</th>
        <th>Parent Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Course</th>

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
        
        
        </tr>";
    }
}
    }
    else{
        $search = $_GET['search'];
        $sql = "SELECT * FROM student WHERE Name='$search'";
    $data = $conn->query($sql);
    $total = mysqli_num_rows($data);

    if ($total) {
        
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