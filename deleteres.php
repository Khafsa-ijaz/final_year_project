<?php
include("connection.php");    
include('sessionfinder.php');
     $classname = $_POST['cc'];
  $termname = $_POST['tt'];
   $subject = $_POST['ss'];
        $sql="DELETE FROM result_entry WHERE class='$classname' AND termname='$termname' and subject='$subject' and session='$session' ";
        if($result123 = mysqli_query($conn, $sql)){
          echo "1";
      }
?>
