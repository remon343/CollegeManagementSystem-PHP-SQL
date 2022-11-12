<?php
include "connection_db/connect.php";
$fn = $_POST['fn'];
$dob = $_POST['dob'];
$pn = $_POST['pn'];
$course = $_POST['course'];
$phone = $_POST['phone'];
$user = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['Pass'];
$conpass = $_POST['conpass'];
if ($fn == "" || $dob == "" || $phone == "" || $user == "" || $pass == "" || $email == "" || $course == "" || $conpass == "" || $pn == "") {
    echo "Data is Empty.";
} else {

    
        if ($pass != $conpass) {
            echo "Both password are not same.";
        } else {
            if (isset($_POST["submit"])) {

                $sql = "INSERT INTO `student` (`Name`, `Date_of_birth`, `Parent_Name`, `Course`, `Username`, `Pass`, `Phone_Number`, `Email`) VALUES ('$fn','$dob','$pn','$course','$user','$pass','$phone','$email')";
                $result = $conn->query($sql);
                $sql1 = "INSERT INTO `login` ( `Username`, `Pass`, `Position`) VALUES ('$user','$pass','student')";
                $result1 = $conn->query($sql1);
                if ($result) {
                    if ($result1) {

                        header("Location:index.php");
                    }
                } else {
                    echo "Data not inserted successfully.Go back and try again.";
                }
            }
        }
    
}
?>
