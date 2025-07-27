<?php
include('connection.php');
include('session_head.php');
$category =$_POST['category'];
$pr =$_POST['pr'];


$pc =$_POST['pc'];

$block =$_POST['block'];

$duplicate="duplicate";
$success="success";
$failed="failed";
$zero=0;
date_default_timezone_set('Asia/Karachi');
$da=date('Y-m-d H:i:s');
$byy=$rowsession['username'];
$descrip="***OPENING BALANCE***";


$d=date("Y-m-d");

  $sql = "INSERT INTO category (project,block,category,pc)
VALUES ('$pr','$block','$category','$pc')";

if ($conn->query($sql) === TRUE) {
     $users_arr[] = array("success" => $success);
echo json_encode($users_arr);
 exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;

}
?>