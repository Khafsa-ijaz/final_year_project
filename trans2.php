<?php
include('connection.php');
include('session_head.php');
include('session_finder.php');
$iname = $_POST['iname'];
$amount = $_POST['amount']; 
$transferto = $_POST['transferto'];
$description = $_POST['description']; 
$date = $_POST['date'];  
$cheque = $_POST['cheque'];  
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

if ($iname!='petty cash')
{
$sql2 = "SELECT balamt FROM banks where bankname='$iname'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
$balamt2=$row2['balamt'];
  }
} else {

}
$netamt=$balamt2-$amount;
}

if ($iname=='petty cash')
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
$netamt=$balamt2-$amount;
}



if ($iname!='petty cash')
{



if ($cheque!='')

{
    
    
     $query = "SELECT id from banks  where cheque ='$cheque' and bankname='$iname'";
$resultlite = mysqli_query($conn,$query);

if(mysqli_num_rows($resultlite) > 0)
{

   $users_arr[] = array("duplicate" => $duplicate);
 echo json_encode($users_arr);
 exit();

}
    
    
    
    else
    {
    
    
    
    
    
    if ($amount>0)
    {
  $sql3 = "INSERT INTO banks (bankname, netamount, amountin,amountout,descrip,balamt,source,regno,month,date,cheque)
VALUES ('$iname', '$netamt', '0','$amount','$description','$netamt','$transferto','','$date','$date','$cheque')";

if ($conn->query($sql3) === TRUE) {
}
}

if ($amount<0)
    {
  $sql3 = "INSERT INTO banks (bankname, netamount, amountin,amountout,descrip,balamt,source,regno,month,date,cheque)
VALUES ('$iname', '$netamt', '$amount','0','$description','$netamt','$transferto','','$date','$date','$cheque')";

if ($conn->query($sql3) === TRUE) {
}
}



$sql = "INSERT INTO income (iname, netamount, amountin,amountout,descrip,balamt,type,transferto,date)
VALUES ('$transferto', '$net', '$amount','0','$description','$net','','$iname','$date')";

if ($conn->query($sql) === TRUE) {
     $users_arr[] = array("success" => $success);
 echo json_encode($users_arr);
 exit();
} else {

}

}




}





if ($cheque=='')
{
    
    
    
    
    
    if ($amount>0)
    {
  $sql3 = "INSERT INTO banks (bankname, netamount, amountin,amountout,descrip,balamt,source,regno,month,date,cheque)
VALUES ('$iname', '$netamt', '0','$amount','$description','$netamt','$transferto','','$date','$date','$cheque')";

if ($conn->query($sql3) === TRUE) {
}
}

if ($amount<0)
    {
  $sql3 = "INSERT INTO banks (bankname, netamount, amountin,amountout,descrip,balamt,source,regno,month,date,cheque)
VALUES ('$iname', '$netamt', '$amount','0','$description','$netamt','$transferto','','$date','$date','$cheque')";

if ($conn->query($sql3) === TRUE) {
}
}



$sql = "INSERT INTO income (iname, netamount, amountin,amountout,descrip,balamt,type,transferto,date)
VALUES ('$transferto', '$net', '$amount','0','$description','$net','','$iname','$date')";

if ($conn->query($sql) === TRUE) {
     $users_arr[] = array("success" => $success);
 echo json_encode($users_arr);
 exit();
} else {

}






}






}

if ($iname=='petty cash')
{
    if ($amount>0)
    {
  $sql3 = "INSERT INTO pettycash (name, netamount, amountin,amountout,descrip,balamt,source,date,cheque,adate,atime,session,eid,month)
VALUES ('petty cash', '$netamt', '0','$amount','$description','$netamt','$transferto','$date','$cheque','$adate','$atime','$session','','')";

if ($conn->query($sql3) === TRUE) {
}
}

if ($amount<0)
    {
  $sql3 = "INSERT INTO pettycash (name, netamount, amountin,amountout,descrip,balamt,source,date,cheque,adate,atime,session,eid,month)
VALUES ('petty cash', '$netamt', '$amount','0','$description','$netamt','$transferto','$date','$cheque','$adate','$atime','$session','','')";

if ($conn->query($sql3) === TRUE) {
}
}


}


  
?>