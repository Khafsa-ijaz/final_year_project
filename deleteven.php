<?php
include('connection.php');
    $userid = $_POST['id'];
    
     $sql = "SELECT iname FROM ven where id='$userid'";

            $result = mysqli_query($conn, $sql);

            // output data of each row
             $row123 = mysqli_fetch_assoc($result);
             $bank=$row123['iname'];
             
    $delete_user = mysqli_query($conn,"DELETE FROM `ven` WHERE iname='$bank'");
    if (!$delete_user)
   {
       echo 'query did not work ';
   }
   elseif($delete_user){
       echo 1 ;
   }
        
    exit;
 
?>
