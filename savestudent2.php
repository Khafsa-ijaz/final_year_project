<?php
include('session_head.php');
include('sessionfinder.php');
include('config.php');
$sname = $_POST['sname'];
$fname = $_POST['fname']; 
$gender = $_POST['gender']; 
$bdate = $_POST['bdate'];
$address = $_POST['address'];
$image="Nill";
$nic = $_POST['nic'];
$occupation = $_POST['occupation'];
$phone = $_POST['phone'];
$mob = $_POST['mob'];
$app_class = $_POST['app_class'];
$curr_class = $_POST['curr_class'];
$regno = $_POST['regno'];
$rollno = $_POST['rollno'];
$monfee = $_POST['monfee'];
$newfee = $_POST['newfee'];
$tfee = $_POST['tfee'];
$lunchfee = $_POST['lunchfee'];
$admdate = $_POST['admdate'];
$status = $_POST['status'];
$snic = $_POST['snic'];
$mob1 = $_POST['mob1'];
$mob2 = $_POST['mob2'];
$paddress = $_POST['paddress'];
date_default_timezone_set("Asia/Karachi");
$d=date('Y-m-d H:i:s');
$byy=$rowsession['username'];
$csession=$session;
$duplicate="duplicate";
$success="success";
$failed="failed";
$s="1";
$i="1";
    $password=password_hash("school123", PASSWORD_DEFAULT);
$stmt = $conn->prepare('SELECT * FROM students WHERE regno = ? and csession=?');
   $stmt->execute([$regno,$csession]);
   $postCount = $stmt->rowCount();
   if ($postCount>0)
   {
  $users_arr[] = array("duplicate" => $duplicate);
  echo json_encode($users_arr);
  exit();
   }
   else
   {




$sql = 'INSERT INTO students(sname,fname,gender,bdate,address,image,nic,occupation,phone,mob,app_class,curr_class,regno,rollno,monfee,newfee,tfee,lunchfee,admdate,status,session,password,snic,mob1,mob2,paddress,byy,datetimee,csession
) VALUES(:sname, :fname, :gender,:bdate,:address,:image,:nic,:occupation,:phone,:mob,:app_class,:curr_class
,:regno,:rollno,:monfee,:newfee,:tfee,:lunchfee,:admdate,:status,:session,:password,:snic,:mob1,:mob2,:paddress,:byy,:datetimee,:csession)';
   $stmt = $conn->prepare($sql);
   $stat=$stmt->execute(['sname' => $sname, 'fname' => $fname, 'gender' => $gender,'bdate' => $bdate,'address'=>$address,'image' => $image,'nic' => $nic,'occupation' => $occupation,'phone' => $phone,'mob' => $mob,'app_class' => $app_class,'curr_class' => $curr_class,'regno' => $regno,
    'rollno' => $rollno,'monfee' => $monfee,'newfee' => $newfee,'tfee' => $tfee,'lunchfee' => $lunchfee,'admdate' => $admdate,'status' => $status,'session' => $session,'password'=>$password
    ,'snic'=>$snic,'mob1'=>$mob1,'mob2'=>$mob2,'paddress'=>$paddress,'byy'=>$byy,'datetimee'=>$d,'csession'=>$csession
    
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