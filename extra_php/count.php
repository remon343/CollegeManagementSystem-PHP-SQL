<?php 
include "../../connection_db/connect.php";

//Count the number of students in database
$sql_student = "SELECT Username FROM login WHERE Position='student'";
$result_student = $conn->query($sql_student);
$count_student = mysqli_num_rows($result_student);

//count the number of teacher in database
$sql_teacher = "SELECT Username FROM login WHERE Position='teacher'";
$result_teacher = $conn->query($sql_teacher);
$count_teacher = mysqli_num_rows($result_teacher);

//count the number of admin in database
$sql_admin = "SELECT Username FROM login WHERE Position='admin'";
$result_admin = $conn->query($sql_admin);
$count_admin = mysqli_num_rows($result_admin);
?>