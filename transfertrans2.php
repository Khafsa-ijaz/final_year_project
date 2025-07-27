<?php
include('connection.php');
$iname = $_POST['iname'];
$amount = $_POST['amount']; 
$transferto = $_POST['transferto'];
$description = $_POST['description'];  
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
$netamt=$balamt2+abs($amount);
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









if ($transferto!='petty cash')
{
    
      $sql3 = "INSERT INTO income (iname, netamount, amountin,amountout,descrip,balamt,type,transferto,date)
VALUES ('$iname', '$net', '0','$amount','$description','$net','PAYABLE/RECEVIABLE','$transferto','$date')";

if ($conn->query($sql3) === TRUE) {
}
   
  $sql = "INSERT INTO banks (bankname, netamount, amountin,amountout,descrip,balamt,source,date)
VALUES ('$transferto', '$netamt', '$amount','0','$description','$netamt','$iname','$date')";

if ($conn->query($sql) === TRUE) {
     $users_arr[] = array("success" => $success);
 echo json_encode($users_arr);
 exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




}


if ($transferto=='petty cash')
{
    
    
$net2=$balamt-$amount;

if ($amount>0)
{
  $sql3 = "INSERT INTO income (iname, netamount, amountin,amountout,descrip,balamt,type,transferto,date)
VALUES ('$iname', '$net', '0','$amount','$description','$net2','PAYABLE/RECEVIABLE','$transferto','$date')";

if ($conn->query($sql3) === TRUE) {
}

else {
  echo "Error: " . $sql3. "<br>" . $conn->error;
  exit();
}

}


if ($amount<0)

{
    
  $sql3 = "INSERT INTO income (iname, netamount, amountin,amountout,descrip,balamt,type,transferto,date)
VALUES ('$iname', '$net', '$amount','0','$description','$net2','PAYABLE/RECEVIABLE','$transferto','$date')";

if ($conn->query($sql3) === TRUE) {
}

else {
  echo "Error: " . $sql3. "<br>" . $conn->error;
  exit();
}


}

if ($amount>0)
{

  $sql = "INSERT INTO pettycash (name, netamount, amountin,amountout,descrip,balamt,source,date,adate,atime,session,eid,month)
VALUES ('petty cash', '$netamt', '$amount','0','$description','$netamt','$iname','$date','$adate','$atime','$session','','')";

if ($conn->query($sql) === TRUE) {
     $users_arr[] = array("success" => $success);
 echo json_encode($users_arr);
 exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}


if ($amount<0)
{

  $sql = "INSERT INTO pettycash (name, netamount, amountin,amountout,descrip,balamt,source,date,adate,atime,session,eid,month)
VALUES ('petty cash', '$netamt', '0','$amount','$description','$netamt','$iname','$date','$adate','$atime','$session','','')";

if ($conn->query($sql) === TRUE) {
     $users_arr[] = array("success" => $success);
 echo json_encode($users_arr);
 exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}


}
?>