
<?php
include('connection.php');
    $userid = $_GET['id'];
    $delete_user = mysqli_query($conn,"DELETE FROM `courses` WHERE id=?");

    
    
        echo 1;
    exit;
 
?>
