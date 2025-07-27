<?php
include("connection.php");
include('session_head');

    $userid = $_GET['regno'];
    $password=password_hash("12345", PASSWORD_DEFAULT);
    $delete_user = mysqli_query($conn,"UPDATE employees set password='$password' WHERE id='$userid' ");
    

        header("Location:manageportals");
    
?>
