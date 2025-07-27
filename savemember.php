<?php
include('session_head.php');
include('session_finder.php');
include('config.php');
date_default_timezone_set("Asia/Karachi");
$adate=date("Y-m-d");
$atime=date("H:i:s");
$byy=$rowsession['username'];


$name = $_POST['name'];
$fname = $_POST['fname']; 
$cnic = $_POST['cnic']; 
$age = $_POST['age']; 
$address = $_POST['address']; 
$gender = $_POST['gender'];
$mob = $_POST['mob'];
$bwg = $_POST['bwg'];
$uc = $_POST['uc'];
$tehsil = $_POST['tehsil'];
$zillah = $_POST['zillah'];
$province = $_POST['province'];
$phn = $_POST['phn'];
$nh = $_POST['nh'];
$email = $_POST['email'];



$image="Nill";
$doc1="Nill";
$doc2="Nill";
$doc3="Nill";
$duplicate="duplicate";
$success="success";
$failed="failed";
    $pwd=password_hash("12345", PASSWORD_DEFAULT);
$stmt = $conn->prepare('SELECT * FROM party WHERE cnic = ?');
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
     
 $sql = 'INSERT INTO party(name,fname,age,gender,cnic,bwg,uc,tehsil,mob,zillah,province,phn,nh,email,address
) VALUES(:name, :fname, :age,:gender,:cnic,:bwg,:uc,:tehsil,:mob,:zillah,:province,:phn,:nh,:email,:address)';
   $stmt = $conn->prepare($sql);
   $stat=$stmt->execute(['name' => $name, 'fname' => $fname, 'age' => $age,'gender' => $gender,'cnic'=>$cnic,'bwg' => $bwg,'uc' => $uc,'tehsil' => $tehsil,'mob' => $mob,
   'zillah' => $zillah,'province' => $province,'phn'=>$phn,'nh'=>$nh,'email'=>$email,'address'=>$address
 ]);

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