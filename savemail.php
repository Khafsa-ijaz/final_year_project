<?php
include('session_head.php');
include('config.php');

$sendto = $_POST['sendto'];

$mail = $_POST['mail']; 

$duplicate="duplicate";
$success="success";
$failed="failed";
date_default_timezone_set('Asia/Karachi');
$d=date('Y-m-d H:i:s');
$byy=$rowsession['username'];
  $stmt = $conn->prepare('SELECT * FROM email WHERE sendto= ? and mail= ?');
   $stmt->execute([$sendto,$mail]);
   $postCount = $stmt->rowCount();
   if ($postCount>0)
   {
  $users_arr[] = array("duplicate" => $duplicate);
  echo json_encode($users_arr);
  exit();

   }
else
{
 $sql = 'INSERT INTO email(sendto,mail) VALUES(:sendto,:mail)';
   $stmt = $conn->prepare($sql);
   $stat=$stmt->execute(['sendto' => $sendto, 'mail' => $mail]);
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