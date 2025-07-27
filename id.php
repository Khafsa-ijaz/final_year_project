<?php
include('session_head.php');
?>
<?php
ob_start();
include('connection.php');
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $userid = $_GET['id'];
    
    $sql = "SELECT * FROM feeperiod where id='$userid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   $month=$row['month'];
      $duedate=$row['duedate'];
         $fine=$row['fine'];
  }
}
    
    $delete_user = mysqli_query($conn,"DELETE FROM `feeperiod` WHERE id='$userid'");
    
    $sql1 = "INSERT INTO feeperiod (month, duedate, fine)
VALUES ('$month', '$duedate', '$fine')";

if ($conn->query($sql1) === TRUE) {

header("Location: index.php");
    
    
}
}

