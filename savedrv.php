<?php
include('config.php');
$name = $_POST['name'];
$duplicate="duplicate";
$success="success";
$failed="failed";
 
 $sql = 'INSERT INTO drv (name) VALUES(:name)';
   $stmt = $conn->prepare($sql);
   $stat=$stmt->execute(['name' => $name]);
  if ($stat)
{
  
  $users_arr[] = array("success" => $success);
 echo json_encode($users_arr);
 exit();
}


?>
