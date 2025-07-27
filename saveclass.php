<?php
include('session_head.php');
include('config.php');

$cname = $_POST['cname'];

$cgroup = $_POST['cgroup']; 
$session= $_POST['session']; 


$duplicate="duplicate";
$success="success";
$failed="failed";
date_default_timezone_set('Asia/Karachi');
$d=date('Y-m-d H:i:s');
$byy=$rowsession['username'];
  $stmt = $conn->prepare('SELECT * FROM classes WHERE cname = ? and session= ?');
   $stmt->execute([$cname,$session]);
   $postCount = $stmt->rowCount();
   if ($postCount>0)
   {
  $users_arr[] = array("duplicate" => $duplicate);
  echo json_encode($users_arr);
  exit();

   }
else
{
 $sql = 'INSERT INTO classes(cname,cgroup,session) VALUES(:cname,:cgroup,:session)';
   $stmt = $conn->prepare($sql);
   $stat=$stmt->execute(['cname' => $cname, 'cgroup' => $cgroup,'session'=>$session]);
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