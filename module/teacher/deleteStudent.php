<?php

include "../../connection_db/connect.php";
$username = $_GET['username'];
$sql = "DELETE FROM student WHERE Username = '$username'";
$sql1 = "DELETE FROM login WHERE Username='$username'";
$result = $conn->query($sql);
$result1 = $conn->query($sql1);
if($result){
    if($result1){

        header("Location:updateStudent.php");
    }
}
?>