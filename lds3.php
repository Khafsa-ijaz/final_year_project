<?php
include('connection.php');
include('sessionfinder.php');
$date=date("Y-m-d");


     $class=$_POST['cc'];
      $termname=$_POST['tt'];
$users_arr = array();
     $query = "SELECT DISTINCT subject FROM child_marks WHERE  class='$class' and termname='$termname' and session='$session'";
      $resultlite = mysqli_query($conn,$query);
    while( $row = mysqli_fetch_array($resultlite) ){
    $sname = $row['subject'];
    
    
    $query1 = "SELECT * FROM result_entry WHERE subject='$sname' and class='$class' and termname='$termname' and session='$session'";
      $resultlitee = mysqli_query($conn,$query1);
    if(mysqli_num_rows($resultlitee) > 0)
{

}
    
else
{
     $users_arr[] = array("sname" => $sname);
}
    
}

echo json_encode($users_arr);

?>