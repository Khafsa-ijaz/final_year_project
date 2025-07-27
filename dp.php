<?php
include('connection.php');
    $userid =$_GET['id'];
    $delete_user = mysqli_query($conn,"update itable2 set image='Nill' where id='$userid'");

    
    
        echo 1;
    exit;
 
?>
