<?php
include('session_head.php');
include('config.php');

$name = $_POST['name'];

$title = $_POST['title']; 
$notice= $_POST['notice']; 


$duplicate="duplicate";
$success="success";
$failed="failed";
date_default_timezone_set('Asia/Karachi');
$d=date('Y-m-d H:i:s');
$byy=$rowsession['username'];
  $stmt = $conn->prepare('SELECT * FROM notifications WHERE name = ? and notice= ?');
   $stmt->execute([$name,$notice]);
   $postCount = $stmt->rowCount();
   if ($postCount>0)
   {
  $users_arr[] = array("duplicate" => $duplicate);
  echo json_encode($users_arr);
  exit();

   }
else
{
 $sql = 'INSERT INTO notifications(name,title,notice) VALUES(:name,:title,:notice)';
   $stmt = $conn->prepare($sql);
   $stat=$stmt->execute(['name' => $name, 'title' => $title,'notice'=>$notice]);
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