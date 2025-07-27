<?php
include('config.php');

$classgroup = $_POST['cgroup'];
$duplicate="duplicate";
$success="success";
$failed="failed";
  $stmt = $conn->prepare('SELECT * FROM classheads WHERE classgroup = ?');
   $stmt->execute([$classgroup]);
   $postCount = $stmt->rowCount();
   if ($postCount>0)
   {
$users_arr[] = array("duplicate" => $duplicate);
  echo json_encode($users_arr);
  exit();
   }
else
{
 $sql = 'INSERT INTO classheads(classgroup) VALUES(:classgroup)';
   $stmt = $conn->prepare($sql);
   $stat=$stmt->execute(['classgroup' => $classgroup]);
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
