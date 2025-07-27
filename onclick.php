<?php
include('connection.php');
$userid = $_GET['id'];

 $update_user = mysqli_query($conn,"UPDATE enquiry SET status='1' WHERE id='$userid'");
echo 1;
exit;
?>