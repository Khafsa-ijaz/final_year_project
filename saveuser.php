<?php
include('connection.php');
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];
     $password=password_hash($pwd, PASSWORD_DEFAULT);
$duplicate="duplicate";
$success="success";



$sql = "SELECT id FROM users where username='$uname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   $users_arr[] = array("duplicate" => $duplicate);
    echo json_encode($users_arr);
 exit();

}



else
{



  $sql = "INSERT INTO users (username,password,pwd)
VALUES ('$uname','$password','$pwd')";
 

if ($conn->query($sql) === TRUE) {
     $users_arr[] = array("success" => $success);

} 



$sql2 = "SELECT * FROM menu where user='Admin' order by id ASC";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
      $pagename=$row2['pagename'];
      $link=$row2['link'];
      $category=$row2['category'];
      $status=$row2['status'];
      
      
      $sql3 = "INSERT INTO menu (pagename, link, category,user,status)
VALUES ('$pagename', '$link', '$category','$uname','1')";

if ($conn->query($sql3) === TRUE) {

} 
      
      

  }
}



 echo json_encode($users_arr);
 exit();




}


?>
