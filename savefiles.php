<?php
include('session_head.php');
include('config.php');

$name = $_POST['name'];




$duplicate="duplicate";
$success="success";
$failed="failed";
date_default_timezone_set('Asia/Karachi');
$d=date('Y-m-d H:i:s');
$byy=$rowsession['username'];
  $stmt = $conn->prepare('SELECT * FROM file_heads WHERE name = ? ');
   $stmt->execute([$name,]);
   $postCount = $stmt->rowCount();
   if ($postCount>0)
   {
  $users_arr[] = array("duplicate" => $duplicate);
  echo json_encode($users_arr);
  exit();

   }
else
{
 $sql = 'INSERT INTO file_heads(name) VALUES(:name)';
   $stmt = $conn->prepare($sql);
   $stat=$stmt->execute(['name' => $name]);
  if ($stat)
{
   $users_arr[] = array("success" => $success);
 echo json_encode($users_arr);
 exit();

}
else
{
 $users_arr[] = array("failed" => $failed);
 echo json_encode($users_arr);
  exit();

}
}

?>