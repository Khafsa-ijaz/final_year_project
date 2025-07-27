<?php
include('session_head.php');
include('session_finder.php');
include('config.php');
date_default_timezone_set("Asia/Karachi");
$adate=date("Y-m-d");
$atime=date("H:i:s");
$byy=$rowsession['username'];


$name = $_POST['name'];
$remarks = $_POST['remarks'];
$fname = $_POST['fname']; 
$cnic = $_POST['cnic']; 
$address = $_POST['address']; 
$bdate = $_POST['bdate'];
$mob = $_POST['mob'];
$en1 = $_POST['en1'];
$gender = $_POST['gender'];
$sn = $_POST['sn'];
$sl = $_POST['sl'];
$image="Nill";
$doc1="Nill";
$doc2="Nill";
$doc3="Nill";
$duplicate="duplicate";
$success="success";
$failed="failed";
    $pwd=password_hash("12345", PASSWORD_DEFAULT);
$stmt = $conn->prepare('SELECT * FROM dealer WHERE cnic = ?');
   $stmt->execute([$cnic]);
   $postCount = $stmt->rowCount();
   if ($postCount>0)
   {
  $users_arr[] = array("duplicate" => $duplicate);
  echo json_encode($users_arr);
  exit();
   }
   else
   {    
      include('config.php'); 
     
 $sql = 'INSERT INTO dealer(name,fname,cnic,address,bdate,mob,en1,gender,sn,sl,remarks
) VALUES(:name, :fname, :cnic,:address,:bdate,:mob,:en1,:gender,:sn,:sl,:remarks)';
   $stmt = $conn->prepare($sql);
   $stat=$stmt->execute(['name' => $name, 'fname' => $fname,'cnic' => $cnic,'address'=>$address,'bdate' => $bdate,'mob'=>$mob,
   'en1'=>$en1, 'remarks'=>$remarks
   ,'gender'=>$gender,'sn'=>$sn,'sl'=>$sl]);

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