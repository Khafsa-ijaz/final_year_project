<?php
include('session_head.php');
include('config.php');

$fname = $_POST['fname'] ;
$lname = $_POST['lname']; 

// $mobileno= $_POST['mobileno']; 
$email = $_POST['email'];

$qulification = $_POST['qulification']; 
$designation= $_POST['designation'];
$university = $_POST['university']; 
$comments= $_POST['comments'];
$file= $_POST['file'];



$file =$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];


$folder="uploads/";
 move_uploaded_file($file_loc,$folder.$file);


$duplicate="duplicate";
$success="success";
$failed="failed";
date_default_timezone_set('Asia/Karachi');
$d=date('Y-m-d H:i:s');
$byy=$rowsession['username'];
  $stmt = $conn->prepare('SELECT * FROM faculty WHERE fname = ? and lname= ?');
   $stmt->execute([$fname,$lname]);
   $postCount = $stmt->rowCount();
   if ($postCount>0)
   {
  $users_arr[] = array("duplicate" => $duplicate);
  echo json_encode($users_arr);
  exit();

   }
else
{
 $sql = 'INSERT INTO faculty(fname,lname,email,qulification,designation,university,comments,file) VALUES(:fname,:lname,:email,:qulification,:designation,:university,:comments,:file)';
   $stmt = $conn->prepare($sql);
   $stat=$stmt->execute(['fname' => $fname, 'lname' => $lname,'file'=>$file,'email' => $email, 'qulification' => $qulification,'designation'=>$designation,'university' => $university, 'comments' => $comments,]);
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