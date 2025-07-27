<?php
include('config.php');

$headname = $_POST['head'];

$duplicate="duplicate";
$success="success";
$failed="failed";

$stmt = $conn->prepare('SELECT * FROM projects WHERE headname = ?');
   $stmt->execute([$headname]);
   $postCount = $stmt->rowCount();
   if ($postCount>0)
   {
      $users_arr[] = array("duplicate" => $duplicate);
  echo json_encode($users_arr);
  exit();

   }
   else
   {


 $sql = 'INSERT INTO projects(headname) VALUES(:headname)';
   $stmt = $conn->prepare($sql);
   $stat=$stmt->execute(['headname' => $headname]);

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