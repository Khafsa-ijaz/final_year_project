<?php
include('config.php');

$name = $_POST['session'];
$duplicate="duplicate";
$success="success";
$failed="failed";
  $stmt = $conn->prepare('SELECT * FROM session WHERE name = ?');
   $stmt->execute([$name]);
   $postCount = $stmt->rowCount();
   if ($postCount>0)
   {
$users_arr[] = array("duplicate" => $duplicate);
  echo json_encode($users_arr);
  exit();
   }
else
{
 $sql = 'INSERT INTO session(name) VALUES(:name)';
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
