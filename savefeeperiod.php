<?php
include('config.php');
$month = $_POST['month'];
$duedate = $_POST['duedate']; 
$fine = $_POST['fine']; 
$duplicate="duplicate";
$success="success";
$failed="failed";
  $stmt = $conn->prepare('SELECT * FROM feeperiod WHERE month = ?');
   $stmt->execute([$month]);
   $postCount = $stmt->rowCount();
   if ($postCount>0)
   {
  $users_arr[] = array("duplicate" => $duplicate);
  echo json_encode($users_arr);
  exit();

   }
else
{
 $sql = 'INSERT INTO feeperiod(month,duedate,fine) VALUES(:month, :duedate, :fine)';
   $stmt = $conn->prepare($sql);
   $stat=$stmt->execute(['month' => $month, 'duedate' => $duedate, 'fine' => $fine]);
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