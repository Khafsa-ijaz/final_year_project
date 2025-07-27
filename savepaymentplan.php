<?php
include('connection.php');
include('session_head.php');


$project = $_POST['project'];
$pno = $_POST['pno'];
$ptype = $_POST['ptype'];
$floor = $_POST['floor'];
$category =$_POST['category'];
$price = $_POST['price'];

$dim=$_POST['dim'];
$size=$_POST['size'];
$ratesqft=$_POST['ratesqft'];
$dueamount=$_POST['dueamount'];
$catcharges=$_POST['catcharges'];


$block=$_POST['blocka'];



$duplicate="duplicate";
$success="success";
$failed="failed";
$zero=0;
date_default_timezone_set('Asia/Karachi');


$d=date("Y-m-d");





 $query = "SELECT * from multistory  where project = '$project' and pno='$pno' and block='$block' ";
$resultlite = mysqli_query($conn,$query);

if(mysqli_num_rows($resultlite) > 0)
{
   $users_arr[] = array("duplicate" => $duplicate);
 echo json_encode($users_arr);
 exit();

}
else
{





$sql = "INSERT INTO multistory(project,pno,ptype,floor,category,price,bdate,name,cnic,remarks,spo,contact,remarks2,sp,status,dim,size,ratesqft,dueamount,catcharges,block) 
        VALUES ('$project','$pno','$ptype','$floor','$category','$price','','','','','','','','','','$dim','$size','$ratesqft','$dueamount','$catcharges','$block')";

if ($conn->query($sql) === TRUE) {
     $users_arr[] = array("success" => $success);
echo json_encode($users_arr);
 exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;

}
}
?>