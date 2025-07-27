<?php
include('connection.php');
include('session_head.php');
$category =$_POST['category'];
$size = $_POST['size']; 
$km = $_POST['km']; 


$pr = $_POST['pr']; 

$block = $_POST['block']; 

$pc = $_POST['pc']; 

$st = $_POST['st'];

$mk = $_POST['mk'];

$pno = $_POST['pno'];

$duplicate="duplicate";
$success="success";
$failed="failed";
$zero=0;
date_default_timezone_set('Asia/Karachi');
$da=date('Y-m-d H:i:s');
$byy=$rowsession['username'];
$descrip="***OPENING BALANCE***";

$d=date("Y-m-d");

  $sql = "INSERT INTO plot (category, size,km,pr,block,pc,st,mk,pno,totalcost)
VALUES ('$category', '$size','$km','$pr','$block','$pc','$st','$mk','$pno','0')";

if ($conn->query($sql) === TRUE) {
     $users_arr[] = array("success" => $success);
echo json_encode($users_arr);
 exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;

}
?>