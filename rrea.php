
<?php
include('connection.php');
    $userid = $_GET['id'];
    
$sql2 = "SELECT * FROM bill where id='$userid'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
$inv=$row2['inv'];

$vendor=$row2['vendor'];
}
}
$sql3 = "SELECT * FROM inn where inn='$inv' and vendor='$vendor'";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
  // output data of each row
  while($row3 = $result3->fetch_assoc()) {
$qty=$row3['qty'];

$bcode=$row3['bcode'];
$id=$row3['id'];



$sql23456 = "DELETE FROM medicine2 WHERE tcode='$id'";

if ($conn->query($sql23456) === TRUE) {

    
} 







$sql2345 = "DELETE FROM inn WHERE bcode='$bcode'";

if ($conn->query($sql2345) === TRUE) {

   
} 



  }
}

$sql2346 = "DELETE FROM bill WHERE id='$userid'";

if ($conn->query($sql2346) === TRUE) {

 
} 

$sql2346s = "DELETE FROM ven WHERE tcode='$inv' and iname='$vendor'";

if ($conn->query($sql2346s) === TRUE) {

    echo "1";
}








  
  

?>
 