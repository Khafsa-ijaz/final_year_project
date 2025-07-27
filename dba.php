<?php
include('connection.php');

$bank="nill";
    $userid = $_GET['id'];

   

     $sql = "SELECT bankname FROM banks where id='$userid'";

            $result = mysqli_query($conn, $sql);

            // output data of each row
             $row123 = mysqli_fetch_assoc($result);
              $bank=$row123['bankname'];
        
             
    $delete_user = mysqli_query($conn,"DELETE FROM banks WHERE bankname='$bank'");
    if (!$delete_user)
   {
       echo 'query did not work ';
   }
   elseif($delete_user){
       echo 1 ;
   }
        
    exit;
 
?>
