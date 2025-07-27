<?php
include('connection.php');
include('session_head.php');
$session="2022-23";
$iname = $_POST['iname'];
$amount = $_POST['amount']; 

$description = $_POST['description']; 
$date = $_POST['date'];  
$cheque = $_POST['cheque']; 
$emp = $_POST['emp'];  
$salary= $_POST['salary']; 
$month= $_POST['month']; 
$duplicate="duplicate";
$success="success";
date_default_timezone_set("Asia/Karachi");
$adate=date("Y-m-d");
$atime=date("H:i:s");
$byy=$rowsession['username'];
$failed="failed";
$zero=0;
$sql1 = "SELECT balamt FROM income where iname='$transferto'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
$balamt=$row1['balamt'];
  }
} else {

}

$net=$balamt+$amount;







if ($iname=='petty cash')
{
   
  $sql3 = "INSERT INTO pettycash (name, netamount, amountin,amountout,descrip,balamt,source,date,cheque,adate,atime,byy,session,eid,month)
VALUES ('petty cash', '0', '0','$amount','$description','$netamt','Salary Expense','$date','$cheque','$adate','$atime','$byy','$session','$emp','$month')";

if ($conn->query($sql3) === TRUE) {
}




}


  $sql = "INSERT INTO advance (eid, amount, month,date,adate,atime,byy,session,fromm)
VALUES ('$emp', '$amount', '$month','$date','$adate','$atime','$byy','$session','$iname')";

if ($conn->query($sql) === TRUE) {
     $users_arr[] = array("success" => $success);
 echo json_encode($users_arr);
 exit();
} else {
  echo "Error: " . $sql3 . "<br>" . $conn->error;
}
?>