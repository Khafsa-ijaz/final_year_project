<?php
include('session_head.php');
include('config.php');
$category = $_POST['category'];
$size = $_POST['size']; 
$per = $_POST['per']; 
$tp = $_POST['tp']; 
$dp = $_POST['dp']; 
$ra = $_POST['ra']; 
$qi = $_POST['qi'];
$floor = $_POST['floor'];
$dsc = $_POST['dsc'];
$flatno = $_POST['flatno'];
$ss = $_POST['ss'];


$image="Nill";
$doc1="Nill";
$doc2="Nill";
$doc3="Nill";
$duplicate="duplicate";
$success="success";
$failed="failed";
date_default_timezone_set('Asia/Karachi');
$d=date('Y-m-d H:i:s');
$byy=$rowsession['username'];


      include('config.php');
      
      
      
for ($i=0;$i<$dsc;$i++)
{
     if ($i=='0')
     {
         $f=$flatno;
         
         $stmt = $conn->prepare('SELECT * FROM pricelist WHERE floor = ? and flatno = ?');
   $stmt->execute([$floor,$flatno]);
   $postCount = $stmt->rowCount();
   if ($postCount>0)
   {
   }
   else
   { 
         
         
 $sql = 'INSERT INTO pricelist(category,size,per,tp,dp,ra,qi,floor,flatno,ss
) VALUES(:category, :size,:per,:tp,:dp,:ra,:qi,:floor,:flatno,:ss)';
   $stmt = $conn->prepare($sql);
   $stat=$stmt->execute(['category' => $category, 'size' => $size, 'per' => $per, 'tp' => $tp,'dp' => $dp,'ra'=>$ra,'qi' => $qi,'floor' => $floor,'flatno' => $flatno,'ss' => $ss]);
     }
     }
     else
     {     
         $f=$f+1;
         $stmt = $conn->prepare('SELECT * FROM pricelist WHERE floor = ? and flatno = ?');
   $stmt->execute([$floor,$f]);
   $postCount = $stmt->rowCount();
   if ($postCount>0)
   {
   }
   else
   { 
 $sql = 'INSERT INTO pricelist(category,size,per,tp,dp,ra,qi,floor,flatno,ss
) VALUES(:category, :size,:per,:tp,:dp,:ra,:qi,:floor,:flatno,:ss)';
   $stmt = $conn->prepare($sql);
   $stat=$stmt->execute(['category' => $category, 'size' => $size, 'per' => $per, 'tp' => $tp,'dp' => $dp,'ra'=>$ra,'qi' => $qi,'floor' => $floor,'flatno' => $f,'ss' => $ss]);
         
   } 
}
}



if ($stat)
{
    $users_arr[] = array("success" => $success);
 echo json_encode($users_arr);
 exit();
}
else
{
 $users_arr[] = array("failed" => $failed);
 echo json_encode($users_arr);
  exit();
}






?>