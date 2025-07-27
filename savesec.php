<?php
include('connection.php');
include('session_head.php');
$name =$_POST['name'];
$area = $_POST['area']; 
$type = $_POST['type']; 
$location = $_POST['location']; 
$description = $_POST['description']; 
$status = $_POST['status']; 
$duplicate="duplicate";
$success="success";
$failed="failed";
$zero=0;
date_default_timezone_set('Asia/Karachi');
$da=date('Y-m-d H:i:s');
$byy=$rowsession['username'];
$descrip="***OPENING BALANCE***";
  $query = "SELECT * from pr  where name = '$name'";
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

  $sql = "INSERT INTO pr (name, area, location,description,status,type)
VALUES ('$name', '$area', '$location','$description','$status','$type')";

if ($conn->query($sql) === TRUE) {
     $users_arr[] = array("success" => $success);
echo json_encode($users_arr);
 exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>