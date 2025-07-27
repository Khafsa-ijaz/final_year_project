<?php
include('connection.php');
include('session_head.php');
$street =$_POST['street'];
$block = $_POST['block']; 
$pr = $_POST['pr']; 
$duplicate="duplicate";
$success="success";
$failed="failed";
$zero=0;
date_default_timezone_set('Asia/Karachi');
$da=date('Y-m-d H:i:s');
$byy=$rowsession['username'];
$descrip="***OPENING BALANCE***";
  $query = "SELECT * from st  where block = '$block' and street='$street' and project='$pr'";
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

  $sql = "INSERT INTO st (project,block,street)
VALUES ('$pr','$block','$street')";

if ($conn->query($sql) === TRUE) {
     $users_arr[] = array("success" => $success);
echo json_encode($users_arr);
 exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>