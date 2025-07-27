<?php
  include('session_head.php');
  include("connection.php");
  include('sessionfinder.php');
  $reason="nill";
$count=0;
 date_default_timezone_set('Asia/Karachi');
$d=date('Y-m-d H:i:s');
$byy=$rowsession['username'];
$reg = $_POST['sregno'];  

$sqlj = "SELECT sname,mob FROM students where regno='$reg'";
$resultj = $conn->query($sqlj);

if ($resultj->num_rows > 0) {
  // output data of each row
  while($rowj = $resultj->fetch_assoc()) {
   $sname=$rowj['sname'];
   $mob=$rowj['mob'];
  }
} 
$fees = $_POST['rcvdfees'];  
$curr_date=$_POST['rcvddate'];  
$smonth=$_POST['smonth'];
$rcvdvia=$_POST['rcvdvia'];
$dis=$_POST['dis'];
$reason=$_POST['disreason'];
$netamt=$_POST['netamt'];
$nobody="nobody";
   $success="success";
   
   if ($dis=='')
   {
        
   
   
   
   
$sql1 = "SELECT rcvdamt FROM fees where regno='$reg' and feeperiod='$smonth'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
$rcvd=$row1['rcvdamt'];
  }
}

if ($rcvd=='0')
{

  $sql2 = "SELECT balamt FROM banks where bankname='$rcvdvia' order by id DESC LIMIT 1";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
$ba=$row2['balamt'];
  }
}
$net=$ba+$fees;
$sql1 = "INSERT INTO banks (bankname, netamount, amountin,amountout,descrip,balamt,source,regno,month,date)
VALUES ('$rcvdvia', '$net', '$fees','0','***Student Fee Received***','$net','','$reg','$smonth','$curr_date')";

if ($conn->query($sql1) === TRUE) {

}


$sql = "update fees set rcvdamt='$fees',rcvddate='$curr_date',rcvdvia='$rcvdvia',banktransfer='1'  where regno='$reg' and feeperiod='$smonth'";

$result = mysqli_query($conn,$sql);




$sqlhaz = "update students set pstatus='1' where regno='$reg'";

$resulthaz = mysqli_query($conn,$sqlhaz);



$sql = "SELECT * FROM fees where regno='$reg' and feeperiod='$smonth'";

$result = mysqli_query($conn,$sql);

while( $row = mysqli_fetch_array($result) ){
   $payablebdd=$row['payablebdd'];
   $rcvdamt=$row['rcvdamt'];
   $payableadd=$row['payableadd'];
   $duedate=$row['duedate'];

if ($curr_date>$duedate)
		{

   $sqll = "update fees set balamt=$payableadd-$rcvdamt  where regno='$reg' and feeperiod='$smonth'";



$resultt = mysqli_query($conn,$sqll);
}
else
{
   $sqll = "update fees set balamt=$payablebdd-$rcvdamt  where regno='$reg' and feeperiod='$smonth'";

$resultt = mysqli_query($conn,$sqll);

}
}



$sql420 = "SELECT balamt FROM fees where regno='$reg' and feeperiod='$smonth' ";
$result420 = $conn->query($sql420);

if ($result420->num_rows > 0) {
  // output data of each row
  while($row420 = $result420->fetch_assoc()) {
$balamt=$row420['balamt'];
  }
}

$sql1122 = "SELECT * FROM autosms where status='1' and id='3'";
$result1122 = $conn->query($sql1122);

if ($result1122->num_rows > 0) {
    
      
    
 $msg="Hi " .$sname. ", this message is to confirm that we received a Payment of Rs ".$fees."  on " .$curr_date. " Your Remaining Balance is ".$balamt."  Thank you!";
include('sms.php');
 
  // Send the POST request with cURL
  $ch = curl_init('http://outreach.pk/api/sendsms.php/sendsms/url?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
curl_close($ch);

}



$sqlumar = "SELECT DISTINCT  feeperiod FROM fees where regno='$reg'";
$resultumar = $conn->query($sqlumar);

if ($resultumar->num_rows > 0) {
  // output data of each row
  while($rowumar = $resultumar->fetch_assoc()) {
    $period=$rowumar['feeperiod'];
  
   if ($period>$smonth)
  {
       $sqll = "update fees set arrears='$balamt'  where regno='$reg' and feeperiod='$period'";
$resultt = mysqli_query($conn,$sqll);
  $sql420 = "update fees set payablebdd=monfee+arrears+admfee+secfee+annfee+examfee+miscfee+tfee+lfee,payableadd=monfee+arrears+admfee+secfee+annfee+examfee+miscfee+tfee+lfee+fine,balamt=monfee+arrears+admfee+secfee+annfee+examfee+miscfee+tfee+lfee-rcvdamt  where regno='$reg' and feeperiod='$period'";
       $resultt = mysqli_query($conn,$sql420);
           $sql422 = "SELECT balamt,rcvdamt FROM fees where regno='$reg' and feeperiod='$period'";
$result422 = mysqli_query($conn, $sql422);

if (mysqli_num_rows($result422) > 0) {
  // output data of each row
  while($row422 = mysqli_fetch_assoc($result422)) {
   $balamt=$row422['balamt'];
    $rcvdamt=$row422['rcvdamt'];
  }
} 


  }
}
}
  $users_arr[] = array("success" => $success);
 echo json_encode($users_arr);
 exit();
}



if ($rcvd!='0')
{

$sql = "SELECT * FROM fees where regno='$reg' and feeperiod='$smonth'";

$result = mysqli_query($conn,$sql);

while( $row = mysqli_fetch_array($result) ){
   $balamt=$row['balamt'];
   $rcvdamt=$row['rcvdamt'];

   $regno=$row['regno'];
     $rollno=$row['rollno'];
      $stuname=$row['sname'];
      $fathername=$row['fname'];
       $curr_class=$row['curr_class'];
      $issuedate=$row['issuedate'];
      $feeperiod=$row['feeperiod'];
      $duedate=$row['duedate'];
      $fine=$row['fine'];
        $monfee=$row['monfee'];
      $net=$balamt-$fees;


}
  $sql2 = "SELECT balamt FROM banks where bankname='$rcvdvia' order by id DESC LIMIT 1";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
$ba=$row2['balamt'];
  }
}
$netbal=$ba+$fees;
$sql1 = "INSERT INTO banks (bankname, netamount, amountin,amountout,descrip,balamt,source,regno,month,date)
VALUES ('$rcvdvia', '$netbal', '$fees','0','***Student Fee Received***','$netbal','','$reg','$smonth','$curr_date')";

if ($conn->query($sql1) === TRUE) {

}
$sql12 ="insert into fees (sname,fname,regno,rollno,mob,curr_class,issuedate, feeperiod,duedate,admfee, secfee, annfee, monfee, examfee, miscfee, tfee, lfee,fine, arrears, payablebdd, payableadd, rcvdamt, balamt, rcvddate, rcvdvia, session,pdfine,banktransfer,entry,pstatus,disreason,tempdisc,byy,datetimee)
values('$stuname','$fathername','$regno','$rollno','0','$curr_class','$issuedate','$feeperiod',
'$duedate','0','0','0','$monfee','0','0','0','0','0',
'$balamt','$balamt','$balamt','$fees','$net','$curr_date','$rcvdvia','$session','0','1','1','0','Nill','0','$byy','$d')";
    if ($conn->query($sql12) === TRUE) {

$sql1122 = "SELECT * FROM autosms where status='1' and id='3'";
$result1122 = $conn->query($sql1122);

if ($result1122->num_rows > 0) {
 $msg="Hi " .$sname. ", this message is to confirm that we received a Payment of Rs ".$fees."  on " .$curr_date. " Your Remaining Balance is Rs ".$net.". Thank you!";
include('sms.php');
 
  // Send the POST request with cURL
  $ch = curl_init('http://outreach.pk/api/sendsms.php/sendsms/url?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
curl_close($ch);

}


    } else {
          
    echo "Error: " . $sql . "<br>" . $conn->error;
  }




$sql420 = "SELECT balamt FROM fees where regno='$reg' and feeperiod='$smonth' order by billno DESC LIMIT 1 ";
$result420 = $conn->query($sql420);

if ($result420->num_rows > 0) {
  // output data of each row
  while($row420 = $result420->fetch_assoc()) {
$balamt=$row420['balamt'];
  }
}

$sqlumar = "SELECT DISTINCT  feeperiod FROM fees where regno='$reg'";
$resultumar = $conn->query($sqlumar);

if ($resultumar->num_rows > 0) {
  // output data of each row
  while($rowumar = $resultumar->fetch_assoc()) {
    $period=$rowumar['feeperiod'];
  
   if ($period>$smonth)
  {
       $sqll = "update fees set arrears='$balamt'  where regno='$reg' and feeperiod='$period'";
$resultt = mysqli_query($conn,$sqll);
  $sql420 = "update fees set payablebdd=monfee+arrears+admfee+secfee+annfee+examfee+miscfee+tfee+lfee,payableadd=monfee+arrears+admfee+secfee+annfee+examfee+miscfee+tfee+lfee+fine,balamt=monfee+arrears+admfee+secfee+annfee+examfee+miscfee+tfee+lfee-rcvdamt  where regno='$reg' and feeperiod='$period'";
       $resultt = mysqli_query($conn,$sql420);
           $sql422 = "SELECT balamt,rcvdamt FROM fees where regno='$reg' and feeperiod='$period'";
$result422 = mysqli_query($conn, $sql422);

if (mysqli_num_rows($result422) > 0) {
  // output data of each row
  while($row422 = mysqli_fetch_assoc($result422)) {
   $balamt=$row422['balamt'];
    $rcvdamt=$row422['rcvdamt'];
  }
} 


  }
}
}
  $users_arr[] = array("success" => $success);
 echo json_encode($users_arr);
 exit();
}




}










if ($dis!='' && $dis!='0')
   {
        
$fees1=$netamt-$dis-$fees;
$sql1 = "SELECT rcvdamt FROM fees where regno='$reg' and feeperiod='$smonth'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
$rcvd=$row1['rcvdamt'];
  }
}

if ($rcvd=='0')
{

  $sql2 = "SELECT balamt FROM banks where bankname='$rcvdvia'order by id DESC LIMIT 1";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
$ba=$row2['balamt'];
  }
}
$net=$ba+$fees;
$sql1 = "INSERT INTO banks (bankname, netamount, amountin,amountout,descrip,balamt,source,regno,month,date)
VALUES ('$rcvdvia', '$net', '$fees','0','***Student Fee Received***','$net','','$reg','$smonth','$curr_date')";

if ($conn->query($sql1) === TRUE) {

}


$sql = "update fees set rcvdamt='$fees',rcvddate='$curr_date',rcvdvia='$rcvdvia',banktransfer='1',tempdisc='$dis',disreason='$reason'  where regno='$reg' and feeperiod='$smonth'";

$result = mysqli_query($conn,$sql);




$sqlhaz = "update students set pstatus='1' where regno='$reg'";

$resulthaz = mysqli_query($conn,$sqlhaz);



$sql = "SELECT * FROM fees where regno='$reg' and feeperiod='$smonth'";

$result = mysqli_query($conn,$sql);

while( $row = mysqli_fetch_array($result) ){
   $payablebdd=$row['payablebdd'];
   $rcvdamt=$row['rcvdamt'];
   $payableadd=$row['payableadd'];
   $duedate=$row['duedate'];

if ($curr_date>$duedate)
		{

   $sqll = "update fees set balamt=$payableadd-$rcvdamt-$dis  where regno='$reg' and feeperiod='$smonth'";



$resultt = mysqli_query($conn,$sqll);
}
else
{
   $sqll = "update fees set balamt=$payablebdd-$rcvdamt-$dis  where regno='$reg' and feeperiod='$smonth'";

$resultt = mysqli_query($conn,$sqll);

}
}



$sql420 = "SELECT balamt FROM fees where regno='$reg' and feeperiod='$smonth' ";
$result420 = $conn->query($sql420);

if ($result420->num_rows > 0) {
  // output data of each row
  while($row420 = $result420->fetch_assoc()) {
$balamt=$row420['balamt'];
  }
}

$sql1122 = "SELECT * FROM autosms where status='1' and id='3'";
$result1122 = $conn->query($sql1122);

if ($result1122->num_rows > 0) {
    
      
    
 $msg="Hi " .$sname. ", this message is to confirm that we received a Payment of Rs ".$fees1."  on " .$curr_date. " Your Remaining Balance is ".$balamt."  Thank you!";
include('sms.php');
 
  // Send the POST request with cURL
  $ch = curl_init('http://outreach.pk/api/sendsms.php/sendsms/url?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
curl_close($ch);

}



$sqlumar = "SELECT DISTINCT  feeperiod FROM fees where regno='$reg'";
$resultumar = $conn->query($sqlumar);

if ($resultumar->num_rows > 0) {
  // output data of each row
  while($rowumar = $resultumar->fetch_assoc()) {
    $period=$rowumar['feeperiod'];
  
   if ($period>$smonth)
  {
       $sqll = "update fees set arrears='$balamt'  where regno='$reg' and feeperiod='$period'";
$resultt = mysqli_query($conn,$sqll);
  $sql420 = "update fees set payablebdd=monfee+arrears+admfee+secfee+annfee+examfee+miscfee+tfee+lfee,payableadd=monfee+arrears+admfee+secfee+annfee+examfee+miscfee+tfee+lfee+fine,balamt=monfee+arrears+admfee+secfee+annfee+examfee+miscfee+tfee+lfee-rcvdamt-tempdisc  where regno='$reg' and feeperiod='$period'";
       $resultt = mysqli_query($conn,$sql420);
           $sql422 = "SELECT balamt,rcvdamt FROM fees where regno='$reg' and feeperiod='$period'";
$result422 = mysqli_query($conn, $sql422);

if (mysqli_num_rows($result422) > 0) {
  // output data of each row
  while($row422 = mysqli_fetch_assoc($result422)) {
   $balamt=$row422['balamt'];
    $rcvdamt=$row422['rcvdamt'];
  }
} 


  }
}
}
  $users_arr[] = array("success" => $success);
 echo json_encode($users_arr);
 exit();
}



if ($rcvd!='0')
{

$sql = "SELECT * FROM fees where regno='$reg' and feeperiod='$smonth'";

$result = mysqli_query($conn,$sql);

while( $row = mysqli_fetch_array($result) ){
   $balamt=$row['balamt'];
   $rcvdamt=$row['rcvdamt'];

   $regno=$row['regno'];
     $rollno=$row['rollno'];
      $stuname=$row['sname'];
      $fathername=$row['fname'];
       $curr_class=$row['curr_class'];
      $issuedate=$row['issuedate'];
      $feeperiod=$row['feeperiod'];
      $duedate=$row['duedate'];
      $fine=$row['fine'];
        $monfee=$row['monfee'];
      $net=$balamt-$fees-$dis;


}
  $sql2 = "SELECT balamt FROM banks where bankname='$rcvdvia'order by id DESC LIMIT 1";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
$ba=$row2['balamt'];
  }
}
$netbal=$ba+$fees;
$sql1 = "INSERT INTO banks (bankname, netamount, amountin,amountout,descrip,balamt,source,regno,month,date)
VALUES ('$rcvdvia', '$netbal', '$fees','0','***Student Fee Received***','$netbal','','$reg','$smonth','$curr_date')";

if ($conn->query($sql1) === TRUE) {

}
$sql12 ="insert into fees (sname,fname,regno,rollno,mob,curr_class,issuedate, feeperiod,duedate,admfee, secfee, annfee, monfee, examfee, miscfee, tfee, lfee,fine, arrears, payablebdd, payableadd, rcvdamt, balamt, rcvddate, rcvdvia, session,pdfine,banktransfer,entry,pstatus,disreason,tempdisc,byy,datetimee)
values('$stuname','$fathername','$regno','$rollno','0','$curr_class','$issuedate','$feeperiod',
'$duedate','0','0','0','$monfee','0','0','0','0','0',
'$balamt','$balamt','$balamt','$fees','$net','$curr_date','$rcvdvia','$session','0','1','1','0','$reason','$dis','$byy','$d')";
    if ($conn->query($sql12) === TRUE) {

$sql1122 = "SELECT * FROM autosms where status='1' and id='3'";
$result1122 = $conn->query($sql1122);

if ($result1122->num_rows > 0) {
 $msg="Hi " .$sname. ", this message is to confirm that we received a Payment of Rs ".$fees."  on " .$curr_date. " Your Remaining Balance is Rs ".$net.". Thank you!";
include('sms.php');
 
  // Send the POST request with cURL
  $ch = curl_init('http://outreach.pk/api/sendsms.php/sendsms/url?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
curl_close($ch);

}


    } else {
          
    echo "Error: " . $sql . "<br>" . $conn->error;
  }




$sql420 = "SELECT balamt FROM fees where regno='$reg' and feeperiod='$smonth' order by billno DESC LIMIT 1 ";
$result420 = $conn->query($sql420);

if ($result420->num_rows > 0) {
  // output data of each row
  while($row420 = $result420->fetch_assoc()) {
$balamt=$row420['balamt'];
  }
}

$sqlumar = "SELECT DISTINCT  feeperiod FROM fees where regno='$reg'";
$resultumar = $conn->query($sqlumar);

if ($resultumar->num_rows > 0) {
  // output data of each row
  while($rowumar = $resultumar->fetch_assoc()) {
    $period=$rowumar['feeperiod'];
  
   if ($period>$smonth)
  {
       $sqll = "update fees set arrears='$balamt'  where regno='$reg' and feeperiod='$period'";
$resultt = mysqli_query($conn,$sqll);
  $sql420 = "update fees set payablebdd=monfee+arrears+admfee+secfee+annfee+examfee+miscfee+tfee+lfee,payableadd=monfee+arrears+admfee+secfee+annfee+examfee+miscfee+tfee+lfee+fine,balamt=monfee+arrears+admfee+secfee+annfee+examfee+miscfee+tfee+lfee-rcvdamt-tempdisc  where regno='$reg' and feeperiod='$period'";
       $resultt = mysqli_query($conn,$sql420);
           $sql422 = "SELECT balamt,rcvdamt FROM fees where regno='$reg' and feeperiod='$period'";
$result422 = mysqli_query($conn, $sql422);

if (mysqli_num_rows($result422) > 0) {
  // output data of each row
  while($row422 = mysqli_fetch_assoc($result422)) {
   $balamt=$row422['balamt'];
    $rcvdamt=$row422['rcvdamt'];
  }
} 


  }
}
}
  $users_arr[] = array("success" => $success);
 echo json_encode($users_arr);
 exit();
}




}





 if ($dis=='0')
   {
        
   
   
   
   
$sql1 = "SELECT rcvdamt FROM fees where regno='$reg' and feeperiod='$smonth'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
$rcvd=$row1['rcvdamt'];
  }
}

if ($rcvd=='0')
{

  $sql2 = "SELECT balamt FROM banks where bankname='$rcvdvia'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
$ba=$row2['balamt'];
  }
}
$net=$ba+$fees;
$sql1 = "INSERT INTO banks (bankname, netamount, amountin,amountout,descrip,balamt,source,regno,month,date)
VALUES ('$rcvdvia', '$net', '$fees','0','***Student Fee Received***','$net','','$reg','$smonth','$curr_date')";

if ($conn->query($sql1) === TRUE) {

}


$sql = "update fees set rcvdamt='$fees',rcvddate='$curr_date',rcvdvia='$rcvdvia',banktransfer='1'  where regno='$reg' and feeperiod='$smonth'";

$result = mysqli_query($conn,$sql);




$sqlhaz = "update students set pstatus='1' where regno='$reg'";

$resulthaz = mysqli_query($conn,$sqlhaz);



$sql = "SELECT * FROM fees where regno='$reg' and feeperiod='$smonth'";

$result = mysqli_query($conn,$sql);

while( $row = mysqli_fetch_array($result) ){
   $payablebdd=$row['payablebdd'];
   $rcvdamt=$row['rcvdamt'];
   $payableadd=$row['payableadd'];
   $duedate=$row['duedate'];

if ($curr_date>$duedate)
		{

   $sqll = "update fees set balamt=$payableadd-$rcvdamt  where regno='$reg' and feeperiod='$smonth'";



$resultt = mysqli_query($conn,$sqll);
}
else
{
   $sqll = "update fees set balamt=$payablebdd-$rcvdamt  where regno='$reg' and feeperiod='$smonth'";

$resultt = mysqli_query($conn,$sqll);

}
}



$sql420 = "SELECT balamt FROM fees where regno='$reg' and feeperiod='$smonth' ";
$result420 = $conn->query($sql420);

if ($result420->num_rows > 0) {
  // output data of each row
  while($row420 = $result420->fetch_assoc()) {
$balamt=$row420['balamt'];
  }
}

$sql1122 = "SELECT * FROM autosms where status='1' and id='3'";
$result1122 = $conn->query($sql1122);

if ($result1122->num_rows > 0) {
    
      
    
 $msg="Hi " .$sname. ", this message is to confirm that we received a Payment of Rs ".$fees."  on " .$curr_date. " Your Remaining Balance is ".$balamt."  Thank you!";
include('sms.php');
 
  // Send the POST request with cURL
  $ch = curl_init('http://outreach.pk/api/sendsms.php/sendsms/url?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
curl_close($ch);

}



$sqlumar = "SELECT DISTINCT  feeperiod FROM fees where regno='$reg'";
$resultumar = $conn->query($sqlumar);

if ($resultumar->num_rows > 0) {
  // output data of each row
  while($rowumar = $resultumar->fetch_assoc()) {
    $period=$rowumar['feeperiod'];
  
   if ($period>$smonth)
  {
       $sqll = "update fees set arrears='$balamt'  where regno='$reg' and feeperiod='$period'";
$resultt = mysqli_query($conn,$sqll);
  $sql420 = "update fees set payablebdd=monfee+arrears+admfee+secfee+annfee+examfee+miscfee+tfee+lfee,payableadd=monfee+arrears+admfee+secfee+annfee+examfee+miscfee+tfee+lfee+fine,balamt=monfee+arrears+admfee+secfee+annfee+examfee+miscfee+tfee+lfee-rcvdamt  where regno='$reg' and feeperiod='$period'";
       $resultt = mysqli_query($conn,$sql420);
           $sql422 = "SELECT balamt,rcvdamt FROM fees where regno='$reg' and feeperiod='$period'";
$result422 = mysqli_query($conn, $sql422);

if (mysqli_num_rows($result422) > 0) {
  // output data of each row
  while($row422 = mysqli_fetch_assoc($result422)) {
   $balamt=$row422['balamt'];
    $rcvdamt=$row422['rcvdamt'];
  }
} 


  }
}
}
  $users_arr[] = array("success" => $success);
 echo json_encode($users_arr);
 exit();
}



if ($rcvd!='0')
{

$sql = "SELECT * FROM fees where regno='$reg' and feeperiod='$smonth'";

$result = mysqli_query($conn,$sql);

while( $row = mysqli_fetch_array($result) ){
   $balamt=$row['balamt'];
   $rcvdamt=$row['rcvdamt'];

   $regno=$row['regno'];
     $rollno=$row['rollno'];
      $stuname=$row['sname'];
      $fathername=$row['fname'];
       $curr_class=$row['curr_class'];
      $issuedate=$row['issuedate'];
      $feeperiod=$row['feeperiod'];
      $duedate=$row['duedate'];
      $fine=$row['fine'];
        $monfee=$row['monfee'];
      $net=$balamt-$fees;


}
  $sql2 = "SELECT balamt FROM banks where bankname='$rcvdvia' order by id DESC LIMIT 1";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
$ba=$row2['balamt'];
  }
}
$netbal=$ba+$fees;
$sql1 = "INSERT INTO banks (bankname, netamount, amountin,amountout,descrip,balamt,source,regno,month,date)
VALUES ('$rcvdvia', '$netbal', '$fees','0','***Student Fee Received***','$netbal','','$reg','$smonth','$curr_date')";

if ($conn->query($sql1) === TRUE) {

}
$sql12 ="insert into fees (sname,fname,regno,rollno,mob,curr_class,issuedate, feeperiod,duedate,admfee, secfee, annfee, monfee, examfee, miscfee, tfee, lfee,fine, arrears, payablebdd, payableadd, rcvdamt, balamt, rcvddate, rcvdvia, session,pdfine,banktransfer,entry,pstatus,disreason,tempdisc,byy,datetimee)
values('$stuname','$fathername','$regno','$rollno','0','$curr_class','$issuedate','$feeperiod',
'$duedate','0','0','0','$monfee','0','0','0','0','0',
'$balamt','$balamt','$balamt','$fees','$net','$curr_date','$rcvdvia','$session','0','1','1','0','Nill','0','$byy','$d')";
    if ($conn->query($sql12) === TRUE) {

$sql1122 = "SELECT * FROM autosms where status='1' and id='3'";
$result1122 = $conn->query($sql1122);

if ($result1122->num_rows > 0) {
 $msg="Hi " .$sname. ", this message is to confirm that we received a Payment of Rs ".$fees."  on " .$curr_date. " Your Remaining Balance is Rs ".$net.". Thank you!";
include('sms.php');
 
  // Send the POST request with cURL
  $ch = curl_init('http://outreach.pk/api/sendsms.php/sendsms/url?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
curl_close($ch);

}


    } else {
          
    echo "Error: " . $sql . "<br>" . $conn->error;
  }




$sql420 = "SELECT balamt FROM fees where regno='$reg' and feeperiod='$smonth' order by billno DESC LIMIT 1 ";
$result420 = $conn->query($sql420);

if ($result420->num_rows > 0) {
  // output data of each row
  while($row420 = $result420->fetch_assoc()) {
$balamt=$row420['balamt'];
  }
}

$sqlumar = "SELECT DISTINCT  feeperiod FROM fees where regno='$reg'";
$resultumar = $conn->query($sqlumar);

if ($resultumar->num_rows > 0) {
  // output data of each row
  while($rowumar = $resultumar->fetch_assoc()) {
    $period=$rowumar['feeperiod'];
  
   if ($period>$smonth)
  {
       $sqll = "update fees set arrears='$balamt'  where regno='$reg' and feeperiod='$period'";
$resultt = mysqli_query($conn,$sqll);
  $sql420 = "update fees set payablebdd=monfee+arrears+admfee+secfee+annfee+examfee+miscfee+tfee+lfee,payableadd=monfee+arrears+admfee+secfee+annfee+examfee+miscfee+tfee+lfee+fine,balamt=monfee+arrears+admfee+secfee+annfee+examfee+miscfee+tfee+lfee-rcvdamt  where regno='$reg' and feeperiod='$period'";
       $resultt = mysqli_query($conn,$sql420);
           $sql422 = "SELECT balamt,rcvdamt FROM fees where regno='$reg' and feeperiod='$period'";
$result422 = mysqli_query($conn, $sql422);

if (mysqli_num_rows($result422) > 0) {
  // output data of each row
  while($row422 = mysqli_fetch_assoc($result422)) {
   $balamt=$row422['balamt'];
    $rcvdamt=$row422['rcvdamt'];
  }
} 


  }
}
}
  $users_arr[] = array("success" => $success);
 echo json_encode($users_arr);
 exit();
}




}










?>