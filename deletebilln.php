<?php
include('connection.php');
  $userid = $_GET['id'];
$sql = "SELECT regno,feeperiod,banktransfer,rcvdamt,rcvdvia FROM fees where billno='$userid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
$regno=$row['regno'];
$feeperiod=$row['feeperiod'];
$banktransfer=$row['banktransfer'];
$fees=$row['rcvdamt'];
$rcvdvia=$row['rcvdvia'];
  }
} 
if ($banktransfer=='1')
{
$sql2 = "SELECT balamt FROM banks where bankname='$rcvdvia'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
$ba=$row2['balamt'];
  }
}
$netbal=$ba-$fees;

$d=date("Y-m-d");
$sql12 = "INSERT INTO banks (bankname, netamount, amountin,amountout,descrip,balamt,source,regno,month,date)
VALUES ('$rcvdvia', '$netbal', '0','$fees','***Student Fee Reversed***','$netbal','','$regno','$feeperiod','$d')";

if ($conn->query($sql12) === TRUE) {
$delete_user = mysqli_query($conn,"DELETE FROM `fees` WHERE billno='$userid'");
        echo 1;
    exit;
}
}
if ($banktransfer=='0')
{

$delete_user = mysqli_query($conn,"DELETE FROM `fees` WHERE billno='$userid'");
        echo 1;
    exit;
}


   
?>