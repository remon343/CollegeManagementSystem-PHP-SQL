<?php
include '../connection_db/connect.php';
$user  = $_POST['user'];
$pass = $_POST['pass'];
$username = stripslashes($user);
$password = stripslashes($pass);

$_SESSION['login_id'] = $user;

    $sql = "SELECT Position FROM login WHERE Username ='$user' AND Pass='$pass'";
    $result = $conn->query($sql);
    $count = mysqli_num_rows($result);
    $type = mysqli_fetch_array($result);
    
$control = $type['Position'];
echo $control;

//Connecting to desired location as detected(admin,student,teacher)

if($count!=1 || !isset($control)){
    header("Location:../index.php?login=false");
}
else if($count==1 && $control=="admin"){
    header("Location:../module/admin/admin.php");
}
else if($count==1 && $control=="teacher"){
    header("Location:../module/teacher/teacher.php");
}
else if($count==1 && $control=="student"){
    header("Location:../module/student/student.php");
}
else{
    header("Location:../index.php?login=false");
}
?> 