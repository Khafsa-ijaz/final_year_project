<?php
include('connection.php');
    $userid = $_GET['id'];
    $delete_user = mysqli_query($conn,"DELETE FROM `income` WHERE iname='$userid'");
        echo 1;
    exit;
 
?>
