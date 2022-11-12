<?php
    include "../../connection_db/connect.php";
    session_destroy();
    mysqli_close($conn);
    header("Location:../../")
?>