<?php
include('config.php');

$ss = $_POST['ss'];

$amount = $_POST['amount'];



$duplicate="duplicate";
$success="success";
$failed="failed";
  $stmt = $conn->prepare('SELECT * FROM ss WHERE ss = ?');
   $stmt->execute([$ss]);
   $postCount = $stmt->rowCount();
   if ($postCount>0)
   {
$users_arr[] = array("duplicate" => $duplicate);
  echo json_encode($users_arr);
  exit();
   }
else
{
 $sql = 'INSERT INTO ss (ss,amount) VALUES(:ss,:amount)';
   $stmt = $conn->prepare($sql);
   $stat=$stmt->execute(['ss' => $ss,'amount' => $amount]);
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
