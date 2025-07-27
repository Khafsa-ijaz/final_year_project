<?php
include('connection.php');
    $userid = $_GET['id'];



$sql = "SELECT * FROM banks where id='$userid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $bankname=$row['bankname'];
    $amountin=$row['amountin'];
    $amountout=$row['amountout'];
    $descrip=$row['descrip'];
    $source=$row['source'];
    $date=$row['date'];
   
  }
}







if ($source=='petty cash')
{

    $delete_user2 = mysqli_query($conn,"DELETE FROM `pettycash` WHERE name='petty cash' and amountin='$amountout' and amountout='$amountin' and descrip='$descrip' and source='$bankname' and date='$date'");



    $delete_user = mysqli_query($conn,"DELETE FROM `banks` WHERE id='$userid'");
        echo 1;
    exit;
}











$sql22 = "SELECT DISTINCT bankname FROM banks";
$result22 = $conn->query($sql22);

if ($result22->num_rows > 0) {
  // output data of each row
  while($row22 = $result22->fetch_assoc()) {
    $bankname2=$row22['bankname'];


if ($source==$bankname2)
{

    $delete_user2 = mysqli_query($conn,"DELETE FROM `banks` WHERE bankname='$source' and amountin='$amountout' and amountout='$amountin' and descrip='$descrip' and source='$bankname' and date='$date'");



    $delete_user = mysqli_query($conn,"DELETE FROM `banks` WHERE id='$userid'");
        echo 1;
    exit;
}





 
  }
}











$sql2 = "SELECT type FROM income where iname='$source' order by id ASC LIMIT 1";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
    $type=$row2['type'];
  
  }
}





if ($type=='Income')
{


    $delete_user2 = mysqli_query($conn,"DELETE FROM `income` WHERE iname='$source' and amountin='$amountin' and amountout='$amountout' and descrip='$descrip' and transferto='$bankname' and date='$date'");



    $delete_user = mysqli_query($conn,"DELETE FROM `banks` WHERE id='$userid'");
        echo 1;
    exit;
}
 






if ($type=='Expnse')
{


    $delete_user2 = mysqli_query($conn,"DELETE FROM `income` WHERE iname='$source' and amountin='$amountout' and amountout='$amountin' and descrip='$descrip' and transferto='$bankname' and date='$date'");



    $delete_user = mysqli_query($conn,"DELETE FROM `banks` WHERE id='$userid'");
        echo 1;
    exit;
}



if ($type=='Payable')
{


    $delete_user2 = mysqli_query($conn,"DELETE FROM `income` WHERE iname='$source' and amountin='$amountout' and amountout='$amountin' and descrip='$descrip' and transferto='$bankname' and date='$date'");



    $delete_user = mysqli_query($conn,"DELETE FROM `banks` WHERE id='$userid'");
        echo 1;
    exit;
}



  $delete_user = mysqli_query($conn,"DELETE FROM `banks` WHERE id='$userid'");
        echo 1;
    exit;

?>
