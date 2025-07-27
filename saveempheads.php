<?php
include('config.php');

$headname = $_POST['head'];
$category = $_POST['category']; 
$duplicate="duplicate";
$success="success";
$failed="failed";

$stmt = $conn->prepare('SELECT * FROM employeeheads WHERE headname = ? and category = ?');
   $stmt->execute([$headname,$category]);
   $postCount = $stmt->rowCount();
   if ($postCount>0)
   {
      $users_arr[] = array("duplicate" => $duplicate);
  echo json_encode($users_arr);
  exit();

   }
   else
   {


 $sql = 'INSERT INTO employeeheads(headname,category
) VALUES(:headname, :category)';
   $stmt = $conn->prepare($sql);
   $stat=$stmt->execute(['headname' => $headname, 'category' => $category]);

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