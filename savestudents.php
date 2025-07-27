<?php
include('session_head.php');
include('session_finder.php');
include('config.php');
date_default_timezone_set("Asia/Karachi");
$adate=date("Y-m-d");
$atime=date("H:i:s");
$byy=$rowsession['username'];


$sname = $_POST['sname'];
$fname = $_POST['fname']; 
$cnic = $_POST['cnic']; 
//$jdate = $_POST['jdate']; 
$address = $_POST['address']; 
$dob = $_POST['dob'];
$mobileno = $_POST['mobileno'];
$emno = $_POST['emno'];
$gender = $_POST['gender'];
$marital_status = $_POST['marital_status'];

$vaccine_status = $_POST['vaccine_status'];

 $program = $_POST['program'];
 $session = $_POST['session'];
$Iboard = $_POST['Iboard'];
$Igroup= $_POST['Igroup'];
$It_marks = $_POST['It_marks'];

$Iob_marks = $_POST['Iob_marks'];

$I_percentage = $_POST['I_percentage'];
 $Mboard = $_POST['Mboard'];
 $Tmarks= $_POST['Tmarks'];
$Obmarks = $_POST['Obmarks'];
$M_percentage= $_POST['M_percentage'];

$university = $_POST['university'];
 $Subject = $_POST['Subject'];
 $totalmarks= $_POST['totalmarks'];
$obtainedmarks= $_POST['obtainedmarks'];
$cgpa= $_POST['cgpa'];
$email= $_POST['email'];





// $image="Nill";
// $doc1="Nill";
// $doc2="Nill";
// $doc3="Nill";
$duplicate="duplicate";
$success="success";
$failed="failed";
    $pwd=password_hash("12345", PASSWORD_DEFAULT);
$stmt = $conn->prepare('SELECT * FROM extrastudents WHERE cnic = ?');
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
     
 $sql = 'INSERT INTO extrastudents(sname,fname,cnic,address,dob,mobileno,emno,gender,marital_status,vaccine_status,program,session,Iboard,Igroup,It_marks,Iob_marks,I_percentage,Mboard,Tmarks,Obmarks,M_percentage,university,Subject,totalmarks,obtainedmarks,cgpa,email  

) VALUES(:sname, :fname, :cnic,:address,:dob,:mobileno,:emno,:gender,:marital_status,:vaccine_status,:program,:session,:Iboard,:Igroup,:It_marks,:Iob_marks,:I_percentage,:Mboard,:Tmarks,:Obmarks,:M_percentage,:university,:Subject,:totalmarks,:obtainedmarks,:cgpa,:email  )';
   $stmt = $conn->prepare($sql);
   $stat=$stmt->execute(['sname' => $sname, 'fname' => $fname, 'cnic' => $cnic,'address'=>$address,'dob' => $dob,'mobileno'=>$mobileno,'emno'=>$emno,'gender'=>$gender,'marital_status'=>$marital_status,'vaccine_status'=>$vaccine_status,'session'=>$session,'program' => $program,'Iboard' => $Iboard,'Igroup' => $Igroup
   ,'It_marks' => $It_marks,'Iob_marks'=>$Iob_marks,'I_percentage'=>$I_percentage,'Mboard'=>$Mboard,'Tmarks'=>$Tmarks,'Obmarks'=>$Obmarks,'M_percentage'=>$M_percentage,'university'=>$university,'Subject'=>$Subject,'totalmarks'=>$totalmarks,'obtainedmarks'=>$obtainedmarks,'cgpa'=>$cgpa,'email'=>$email  ]);

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