<?php
include("connection.php");    
    echo $date = $_POST['cc'];
// echo $termname = $_POST['tt'];
        $sql="DELETE FROM tasks WHERE sdate='$date' ";
        if($result123 = mysqli_query($conn, $sql)){
          echo "1";
      }
?>
