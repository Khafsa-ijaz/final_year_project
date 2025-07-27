<?php
include('connection.php');
    $userid = $_GET['id'];
    




$sql234 = "DELETE FROM ref WHERE id='$userid'";

if ($conn->query($sql234) === TRUE) {

    echo "1";
} 










  
  

?>
 