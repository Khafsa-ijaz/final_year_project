<?php
include('connection.php');
    $userid = $_GET['id'];
    $curr_date=date("Y-m-d");
    
    
    
$sqlsh = "SELECT * FROM itable2 where id='$userid'";
$resultsh = mysqli_query($conn, $sqlsh);
if (mysqli_num_rows($resultsh) != 0)
{
if (mysqli_num_rows($resultsh) > 0) {
  // output data of each row
  while($row421sh = mysqli_fetch_assoc($resultsh)) {
   $mnth=$row421sh['month'];
      $reg=$row421sh['accountnumber'];
          $fees=$row421sh['rcvdamt'];
          $rcvdvia=$row421sh['credit'];
      
      
      
    
  }
}
}







$sql2="SELECT month FROM itable2 where month='$mnth' and accountnumber=$reg";

if ($result2=mysqli_query($conn,$sql2))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result2);

  // Free result set
  mysqli_free_result($result2);
  }
  if ($rowcount>=2)
  {
      
     $delete_user = mysqli_query($conn,"DELETE FROM `itable2` WHERE id='$userid'");
      
      
      
      

$f=$mnth;
$sql421 = "SELECT mbalamt,rcvdamt FROM itable2 where accountnumber=$reg and month='$f'";
$result421 = mysqli_query($conn, $sql421);

if (mysqli_num_rows($result421) > 0) {
  // output data of each row
  while($row421 = mysqli_fetch_assoc($result421)) {
   $mbalamt=$row421['mbalamt'];
    $rcvdamt=$row421['rcvdamt'];
  }
} 

      
      
      
      
      
      $sqlumar = "SELECT DISTINCT  month FROM itabl2e where accountnumber=$reg";
$resultumar = $conn->query($sqlumar);

if ($resultumar->num_rows > 0) {
  // output data of each row
  while($rowumar = $resultumar->fetch_assoc()) {
 $period=$rowumar['month'];
  
   if ($period>$mnth)
  {
      $sql4200 = "update itable2 set presdues='$mbalamt'  where accountnumber=$reg and month='$period'";
       $resulttt = mysqli_query($conn,$sql4200);
      
       $sql420 = "update itable2 set mbalamt=monthlyinstallment+presdues-rcvdamt  where accountnumber=$reg and month='$period'";
       $resultt = mysqli_query($conn,$sql420);
       $sql422 = "SELECT * FROM itable2 where accountnumber=$reg and month='$period'";
$result422 = mysqli_query($conn, $sql422);

if (mysqli_num_rows($result422) > 0) {
  // output data of each row
  while($row422 = mysqli_fetch_assoc($result422)) {
   $mbalamt=$row422['mbalamt'];
    $rcvdamt=$row422['rcvdamt'];
  
    
  }
} 
       
       
  }
  
  }
}  
      
      
    echo "1";
      
      
  }


else
{



$sql = "update itable2 set rcvdamt='0',rcvddate='',credit='' where accountnumber=$reg and month='$mnth'";
$result = mysqli_query($conn,$sql);
$sql421 = "SELECT * FROM itable2 where accountnumber=$reg and month='$mnth'";
$result421 = mysqli_query($conn, $sql421);

if (mysqli_num_rows($result421) > 0) {
  // output data of each row
  while($row421 = mysqli_fetch_assoc($result421)) {
   $mbalamt=$row421['mbalamt'];
    $monthlyinstallment=$row421['monthlyinstallment'];
    $rcvdamt=$row421['rcvdamt'];
    $presdues=$row421['presdues'];
  }
} 
$sqll = "update itable2 set mbalamt=$monthlyinstallment+$presdues-$rcvdamt  where accountnumber=$reg and month='$mnth'";
$resultt = mysqli_query($conn,$sqll);
$f=$mnth;
$sql421 = "SELECT mbalamt,rcvdamt FROM itable2 where accountnumber=$reg and month='$f'";
$result421 = mysqli_query($conn, $sql421);

if (mysqli_num_rows($result421) > 0) {
  // output data of each row
  while($row421 = mysqli_fetch_assoc($result421)) {
   $mbalamt=$row421['mbalamt'];
    $rcvdamt=$row421['rcvdamt'];
  }
} 

$sqlumar = "SELECT DISTINCT  month FROM itable2 where accountnumber=$reg";
$resultumar = $conn->query($sqlumar);

if ($resultumar->num_rows > 0) {
  // output data of each row
  while($rowumar = $resultumar->fetch_assoc()) {
 $period=$rowumar['month'];
  
   if ($period>$mnth)
  {
      $sql4200 = "update itable2 set presdues='$mbalamt'  where accountnumber=$reg and month='$period'";
       $resulttt = mysqli_query($conn,$sql4200);
      
       $sql420 = "update itable2 set mbalamt=monthlyinstallment+presdues-rcvdamt  where accountnumber=$reg and month='$period'";
       $resultt = mysqli_query($conn,$sql420);
       $sql422 = "SELECT * FROM itable2 where accountnumber=$reg and month='$period'";
$result422 = mysqli_query($conn, $sql422);

if (mysqli_num_rows($result422) > 0) {
  // output data of each row
  while($row422 = mysqli_fetch_assoc($result422)) {
   $mbalamt=$row422['mbalamt'];
    $rcvdamt=$row422['rcvdamt'];
  
    
  }
} 
       
       
  }
  
  }
}  




$sqll320 = "SELECT * FROM banks where bankname='$rcvdvia' order by id DESC LIMIT 1 ";
                            if($resultt320 = mysqli_query($conn, $sqll320)){
                                     while($rowzz =  mysqli_fetch_array($resultt320)){
                                     
                                     //	$tp=$row['sale']+$tp;
                                     //	$tpp=$row['purch']+$tpp;   
                                     	//$tp=$row['sale']+$tp;
                                     	//$tpp=$row['purch']+$tpp; $khabes=$rowzz['balamt'];
                                     	$khabes=$rowzz['balamt'];

}
}
           $net=$khabes-$fees;
           
           
           
              mysqli_query($conn,"INSERT INTO banks (bankname,netamount,amountin,amountout,descrip,balamt,source,regno,month,date,accountnumber)
VALUES ('$rcvdvia','$net','0','$fees','Installment Reversed','$net','Installment Reversed','$reg','$mnth','$curr_date','$reg')");
           
           
           
           
    


    echo "1";

}


  
  

?>
 