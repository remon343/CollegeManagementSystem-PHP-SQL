<?php

include "../../connection_db/connect.php";
$cn = $_GET['cn'];
$sql = "DELETE FROM course WHERE Course_Name = '$cn'";
$result = $conn->query($sql);
if($result){
   
        header("Location:updateCourse.php");
    }
    ?>
