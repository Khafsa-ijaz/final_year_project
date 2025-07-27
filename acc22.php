<?php
include("connection.php");
include('session_head');

    $userid = $_GET['regno'];
    $delete_user = mysqli_query($conn,"UPDATE employees set pstatus='0' WHERE id='$userid' ");
    

        header("Location:manageportals");
    
?>
