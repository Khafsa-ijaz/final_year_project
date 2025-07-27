<?php
include('connection.php');
include('session_head.php');
$vname =$_POST['vname'];
$ob = $_POST['ob']; 
$duplicate="duplicate";
$success="success";
$failed="failed";
$zero=0;
date_default_timezone_set('Asia/Karachi');
$da=date('Y-m-d H:i:s');
$byy=$rowsession['username'];
$descrip="***OPENING BALANCE***";
  $query = "SELECT * from ven  where iname = '$vname'";
$resultlite = mysqli_query($conn,$query);

if(mysqli_num_rows($resultlite) > 0)
{
   $users_arr[] = array("duplicate" => $duplicate);
 echo json_encode($users_arr);
 exit();

}
else
{
$d=date("Y-m-d");

  $sql = "INSERT INTO ven (iname, netamount, amountin,amountout,descrip,balamt,type,date,name,byy,datetimee)
VALUES ('$vname', '$ob', '$ob','0','$descrip','$ob','','$d','','$byy','$da')";

if ($conn->query($sql) === TRUE) {
     $users_arr[] = array("success" => $success);
echo json_encode($users_arr);
 exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>