<?php
include('connection.php');
        $month =$_POST['month'];

$delete_user = mysqli_query($conn,"DELETE FROM `salary` WHERE month='$month'");
$delete_user = mysqli_query($conn,"DELETE FROM `pettycash` WHERE month='$month' and source='Salary Expense'");

 
?>

 
v