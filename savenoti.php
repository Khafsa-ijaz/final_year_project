<?php
include('config.php');

$noti = $_POST['head'];
$duplicate="duplicate";
$success="success";
$failed="failed";
  
 $sql = 'INSERT INTO tnotice_board(heading) VALUES(:noti)';
   $stmt = $conn->prepare($sql);
   $stat=$stmt->execute(['noti' => $noti]);
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
?>
