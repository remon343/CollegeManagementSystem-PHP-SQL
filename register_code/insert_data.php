<?php
include "../check_login/conn.php";


$name = $_POST["fullName"];
$dob = $_POST["DateofBirth"];
$phone = $_POST["PhoneNumber"];
$username =  $_POST["Username"];
$password = $_POST["Password"];
$email = $_POST["Email"];
$position = $_POST["position"];
$confirm = $_POST['ConfirmPassword'];
if ($name == "" || $dob == "" || $phone == "" || $username == "" || $password == "" || $email == "" || $position == "" || $confirm == "") {
        echo "<script>Data is Empty.</script>";
} else {

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email is not valid.";
    } else {
        if ($password != $confirm) {
             echo "Both password are not same.";
        } else {

            if (isset($_POST["submit"])) {
                
               
                
                
                $sql = "INSERT INTO `users`(`Name`, `Username`, `Pass`, `Position`, `Date`, `Phone_No`, `Email`) VALUES ('$name','$username','$password','$position','$dob',$phone,'$email')";
                $result = $conn->query($sql);
                if($position=='Student'){

                    $sql1 = "INSERT INTO `student`(`Name`, `Username`, `Date_of_birth`, `Phone_No`, `Email`) VALUES ('$name','$username','$dob','$phone','$email')";
                    $result1 = $conn->query($sql1);
                }
                if($position=='Facilitator'){
                    $sql1 = "INSERT INTO `facilitator`(`Name`, `Username`, `Date_of_birth`, `Phone_Number`, `Email`) VALUES ('$name','$username','$dob','$phone','$email')";
                    $result1 = $conn->query($sql1);
                }

                

                if ($result) {
                    if($result1){

                        header("Location:../index.php");
                    }
                }
                else{
                    echo "Cannot insert data.";
                    header("Location:../index.php");
                }
            }
        }
    }
}
