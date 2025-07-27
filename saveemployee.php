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
$emp_id=$_POST['emp_id'];
$jdate = $_POST['jdate']; 
$address = $_POST['address']; 
$bdate = $_POST['bdate'];
$mob = $_POST['mob'];
$en1 = "Nill";
$en2 = "Nill";
$en3 = "Nill";
$qualification = $_POST['qualification'];
$department = "Nill";
$designation = $_POST['designation'];
$salary = $_POST['salary'];
$status = $_POST['status'];
$marital = $_POST['marital'];

$gender = $_POST['gender'];

$remarks = $_POST['remarks'];

$vaccine = $_POST['vaccine'];
$iad = $_POST['iad'];
$image="Nill";
$doc1="Nill";
$doc2="Nill";
$doc3="Nill";
$duplicate="duplicate";
$success="success";
$failed="failed";
    $pwd=password_hash("12345", PASSWORD_DEFAULT);
$stmt = $conn->prepare('SELECT * FROM employees WHERE cnic = ?');
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
     
 $sql = 'INSERT INTO employees(emp_id,name,fname,cnic,bdate,mob,qualification,department,designation,salary,status,image,address,jdate,password,en1,en2,en3,marital,gender,vaccine,doc1,doc2,doc3,remarks,iad,adate,atime,byy,session
) VALUES(:emp_id,:name, :fname, :cnic,:bdate,:mob,:qualification,:department,:designation,:salary,:status,:image,:address,:jdate,:password,:en1,:en2,:en3,:marital,:gender,:vaccine,:doc1,:doc2,:doc3,:remarks,:iad,:adate,:atime,:byy,:session)';
   $stmt = $conn->prepare($sql);
   $stat=$stmt->execute(['emp_id' => $emp_id,'name' => $name, 'fname' => $fname, 'cnic' => $cnic,'bdate' => $bdate,'mob'=>$mob,'qualification' => $qualification,'department' => $department,'designation' => $designation,'salary' => $salary,'status' => $status,'image' => $image,'address'=>$address,'jdate'=>$jdate,'password'=>$pwd,'en1'=>$en1
   ,'en2'=>$en2,'en3'=>$en3,'marital'=>$marital,'gender'=>$gender,'vaccine'=>$vaccine,'doc1'=>$doc1,'doc2'=>$doc2,'doc3'=>$doc3,'remarks'=>$remarks,'iad'=>$iad,'adate'=>$adate,'atime'=>$atime,'byy'=>$byy,'session'=>$session]);

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