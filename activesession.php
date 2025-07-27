<?php
include('connection.php');

$sql = "UPDATE session SET status='0'";
if ($conn->query($sql) === TRUE) {
} 

    $userid = $_GET['id'];
    $delete_user = mysqli_query($conn,"update session set status='1' WHERE id='$userid'");
        echo 1;
    exit;
 
?>
