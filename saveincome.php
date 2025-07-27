<?php
include('connection.php');
$d=date("Y-m-d");
$iname = $_POST['iname'];
$ob = $_POST['ob']; 
$type = $_POST['type'];  
$duplicate="duplicate";
$success="success";
$failed="failed";
date_default_timezone_set('Asia/Karachi');
$d=date('Y-m-d H:i:s');
$zero=0;
$descrip="***OPENING BALANCE***";
  $query = "SELECT * from income  where iname = '$iname' and type='$type'";
$resultlite = mysqli_query($conn,$query);

if(mysqli_num_rows($resultlite) > 0)
{

   $users_arr[] = array("duplicate" => $duplicate);
 echo json_encode($users_arr);
 exit();

}
else
{
$date=date("Y-m-d");

  $sql = "INSERT INTO income (iname, netamount, amountin,amountout,descrip,balamt,type,date)
VALUES ('$iname', '$ob', '$ob','0','$descrip','$ob','$type','$date')";

if ($conn->query($sql) === TRUE) {
     $users_arr[] = array("success" => $success);
 echo json_encode($users_arr);
 exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>