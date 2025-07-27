<?php
include('connection.php');
$iname = $_POST['iname'];
$amount = $_POST['amount']; 
$transferto = $_POST['transferto'];
$description = $_POST['description']; 
date_default_timezone_set('Asia/Karachi');
$d=date('Y-m-d H:i:s');
$date = $_POST['date'];     
$duplicate="duplicate";
$success="success";
$failed="failed";
$zero=0;
$sql1 = "SELECT balamt FROM income where iname='$iname'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
$balamt=$row1['balamt'];
  }
} else {

}

$net=$balamt+$amount;


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
if ($amount>0)
{
  $sql3 = "INSERT INTO banks (bankname, netamount, amountin,amountout,descrip,balamt,source,regno,month,date)
VALUES ('$transferto', '$netamt', '$amount','0','$description','$netamt','$iname','','$date','$date')";

if ($conn->query($sql3) === TRUE) {
}
}

if ($amount<0)
{
  $sql3 = "INSERT INTO banks (bankname, netamount, amountin,amountout,descrip,balamt,source,date)
VALUES ('$transferto', '$netamt', '0','$amount','$description','$netamt','$iname','$date')";

if ($conn->query($sql3) === TRUE) {
}
}



$sql22 = "SELECT id FROM banks order by id DESC LIMIT 1";
$result22 = $conn->query($sql22);

if ($result22->num_rows > 0) {
  // output data of each row
  while($row22 = $result22->fetch_assoc()) {
      $tcode=$row22['id'];
  
  }
}









if ($amount<0)
{
  $sql = "INSERT INTO income (iname, netamount, amountin,amountout,descrip,balamt,type,transferto,date)
VALUES ('$iname', '$net', '0','$amount','$description','$net','','$transferto','$date')";

if ($conn->query($sql) === TRUE) {
     $users_arr[] = array("success" => $success);
 echo json_encode($users_arr);
 exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

if ($amount>0)
{
  $sql = "INSERT INTO income (iname, netamount, amountin,amountout,descrip,balamt,type,transferto,date)
VALUES ('$iname', '$net', '$amount','0','$description','$net','','$transferto','$date')";

if ($conn->query($sql) === TRUE) {
     $users_arr[] = array("success" => $success);
 echo json_encode($users_arr);
 exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}



?>