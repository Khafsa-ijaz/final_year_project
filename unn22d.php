<?php
include("connection.php");
include('session_head');

    $userid = $_GET['id'];
    $delete_user = mysqli_query($conn,"UPDATE users set dashboard='1' WHERE id='$userid' ");
    

        header("Location:assignroles");
    
?>
