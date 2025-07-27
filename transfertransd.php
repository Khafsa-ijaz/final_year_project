<?php
include('connection.php');
include('session_head.php');
include('session_finder.php');
$iname = $_POST['iname'];
date_default_timezone_set("Asia/Karachi");
$adate=date("Y-m-d");
$atime=date("H:i:s");
$byy=$rowsession['username'];
$amount = $_POST['amount']; 
$transferto = $_POST['transferto'];
$description = $_POST['description'];  
$date = $_POST['date'];  

$cheque = $_POST['cheque'];  

$duplicate="duplicate";
$success="success";
$failed="failed";
$zero=0;



$sql1 = "SELECT balamt FROM banks where bankname='$iname'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
$balamt=$row1['balamt'];
  }
} else {

}

$net=$balamt-abs($amount);

if ($transferto!='petty cash')
{
$sql2 = "SELECT balamt FROM banks where bankname='$transferto'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
$balamt2=$row2['balamt'];
  }
} else {

}
$netamt=$balamt2+$amount;
}

if ($transferto=='petty cash')
{
$sql2 = "SELECT balamt FROM pettycash order by id DESC LIMIT 1";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
$balamt2=$row2['balamt'];
  }
} else {

}
$netamt=$balamt2+$amount;
}










    
      $sql3 = "INSERT INTO banks (bankname, netamount, amountin,amountout,descrip,balamt,source,regno,month,date,cheque,Vendor)
VALUES ('$iname', '$net', '0','$amount','$description','$net','$transferto','','$date','$date','$cheque','$transferto')";

if ($conn->query($sql3) === TRUE) {

     $users_arr[] = array("success" => $success);
 echo json_encode($users_arr);
 exit();

}








?>