<?php
include('connection.php');
    $userid = $_GET['id'];
      $delete_user = mysqli_query($conn,"DELETE FROM `files` WHERE reg_no='$userid'");
    // $delete_user =mysqli_query($conn,"DELETE * FROM 'files' WHERE reg_no='$userid'");

    
    
        echo 1;
    exit;
 
?>
