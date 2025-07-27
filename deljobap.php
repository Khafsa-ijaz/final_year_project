<?php
include('connection.php');
    $userid = $_GET['id'];
    $delete_user = mysqli_query($conn,"DELETE FROM `job_applications` WHERE id='$userid'");

    
    
        echo 1;
    exit;
 
?>
