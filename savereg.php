<?php
include('session_head.php');
include('config.php');
$no = $_POST['no'];
$mmm = $_POST['mmm']; 
$swd = $_POST['swd']; 
$hcpn = $_POST['hcpn']; 
$ma = $_POST['ma']; 
$city = $_POST['city']; 
$tn = $_POST['tn'];
$country = $_POST['country'];
$fax = $_POST['fax'];
$cn = $_POST['cn'];
$email = $_POST['email'];
$nn = $_POST['nn'];
$sdw = $_POST['sdw'];
$nc = $_POST['nc'];
$pn = $_POST['pn'];
$rwa = $_POST['rwa'];
$type = $_POST['type'];
$bua = $_POST['bua'];


$pa = $_POST['pa'];

$floor= $_POST['floor'];

$bpr = $_POST['bpr'];

$tca = $_POST['tca'];

$dpp = $_POST['dpp'];

$pmc = $_POST['pmc'];
$dated = $_POST['dated'];

$bd = $_POST['bd'];
$dpd = $_POST['dpd'];






$duplicate="duplicate";
$success="success";
$failed="failed";
date_default_timezone_set('Asia/Karachi');
$d=date('Y-m-d H:i:s');
$byy=$rowsession['username'];

    $pwd=password_hash("school123", PASSWORD_DEFAULT);
$stmt = $conn->prepare('SELECT * FROM registration WHERE no = ?');
   $stmt->execute([$no]);
   $postCount = $stmt->rowCount();
   if ($postCount>0)
   {
  $users_arr[] = array("duplicate" => $duplicate);
  echo json_encode($users_arr);
  exit();
   }
   else
   {    
      include('config.php');    
 $sql = 'INSERT INTO registration(no,mmm,swd,hcpn,ma,city,tn,country,fax,cn,email,nn,sdw,nc,pn,rwa,type,bua,pa,floor,bpr,tca,dpp,pmc,dated,bd,dpd
) VALUES(:no, :mmm,:swd,:hcpn,:ma,:city,:tn,:country,:fax,:cn,:email,:nn,:sdw,:nc,:pn,:rwa,:type,:bua,:pa,:floor,:bpr,:tca,:dpp,:pmc,:dated,:bd,:dpd)';
   $stmt = $conn->prepare($sql);
   $stat=$stmt->execute(['no' => $no, 'mmm' => $mmm, 'swd' => $swd, 'hcpn' => $hcpn,'ma' => $ma,'city'=>$city,'tn' => $tn,'country' => $country,'fax' => $fax,'cn' => $cn,'email' => $email,'nn' => $nn,'sdw'=>$sdw,'nc'=>$nc,'pn'=>$pn,'rwa'=>$rwa
   ,'type'=>$type,'bua'=>$bua,'pa'=>$pa,'floor'=>$floor,'bpr'=>$bpr,'tca'=>$tca,'dpp'=>$dpp,'pmc'=>$pmc,'dated'=>$dated,
'bd'=>$bd,'dpd'=>$dpd
 ]);

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



}

?>