<?php
include('connection.php');
$id=$_GET['id'];


    $delete_user = mysqli_query($conn,"UPDATE enquiry set status='1' WHERE id='$userid' ");


echo "Your email Verified Successfully";


 ?>