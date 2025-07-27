<?php
include('connection.php');
    $userid = $_GET['id'];
    $delete_user = mysqli_query($conn,"update session set status='0' WHERE id='$userid'");
        echo 1;
    exit;
 
?>
