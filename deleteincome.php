<?php
include('connection.php');
include('session_head.php');
    $userid = $_GET['id'];
    $sql = "SELECT * FROM income where id='$userid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $amountin=$row['amountin'];
      $descrip=$row['descrip'];
      $iname=$row['iname'];
      $date=$row['date'];
  $transferto=$row['transferto'];

   $delete_user = mysqli_query($conn,"DELETE FROM `income` WHERE id='$userid'");
   
   
   if ($tranferto!='petty cash')
   
   {
   
   
   $delete_user = mysqli_query($conn,"DELETE FROM `banks` WHERE amountin='$amountin' and descrip='$descrip' and source='$iname' and date='$date'");
   }
   
   
   if ($tranferto=='petty cash')
   
   {
   
   
   $delete_user = mysqli_query($conn,"DELETE FROM `banks` WHERE amountout='$amountin' and descrip='$descrip' and source='$iname' and date='$date'");
   }

 echo 1;
    exit;




 
 
  }
}
   
?>
