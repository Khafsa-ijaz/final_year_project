<?php 
include('session_head.php');
  $category="medical";
  $counting=0;
  $total=0;
  $count=0;
  $sumc=0;
  $sumt=0;
  $majeed=0;
  $kcg=0;
  $nkcg=0;
  $kusg=0;
  $nkucg=0;
  $oax=0;
  $arj=0;
  $month=$_POST['month'];

include('connection.php');
include_once('libs/fpdf.php');
$navslogo="uploads/rlogo2.png";

class PDF extends FPDF
{
function Header()
{include('connection.php');
  $month=$_POST['month'];

         $a1=date("M",strtotime($month));
      $a3=date("Y",strtotime($month));
      $a2=date("d",strtotime($month));
      $format=$a1."-".$a3;
    // Line break
   // $this->Ln(10);
    if ($this->PageNo()==1) {
      # code...
     
   include('include_pdf_landscape_headeraa.php');
   $this->SetTextColor(0,0,0);
      $this->SetFont('Arial','B',11);
   $this->SetTextColor(48, 74, 123);
        $this->Cell(30);
    $this->Cell(160,10,' MONTHLY INCOME REPORT '. $format,0,0,'C');

    $this->Ln(10);
      
                                
 $this->SetFillColor(48, 74, 123);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',8);
$this->Cell(-7);
  $this->CellFitScale(62,5,'TOKEN',1,0,'C',1);

  $this->SetFillColor(0, 100, 0);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',8);
    
     

  $this->CellFitScale(146,5,'DETAIL OF PAID SERVICES',1,0,'C',1);
  
    $this->SetFillColor(255, 0, 0);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',8);
     
     

  $this->CellFitScale(126,5,'DETAIL OF FREE SERVICES',1,0,'C',1);
  
  $this->Ln();
                                  $this->SetFillColor(48, 74, 123);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',8);
    
    
    
    
    
     $this->Cell(-7);
 
  $this->CellFitScale(12,10,'DATE',1,0,'C',1);
  
    $this->CellFitScale(10,10,'T.OPD',1,0,'C',1);
     $this->CellFitScale(10,10,'NO.PAID',1,0,'C',1);
    $this->CellFitScale(10,10,'NO.FREE',1,0,'C',1);

$this->CellFitScale(10,10,'AMT.FREE',1,0,'C',1);

$this->CellFitScale(10,10,'AMT.PAID',1,0,'C',1);



 $this->SetFillColor(0, 100, 0);
    $this->SetTextColor(255,255,255);
    

$this->CellFitScale(11,10,'MED.STORE',1,0,'C',1);

$this->CellFitScale(11,10,'NO.TESTS',1,0,'C',1);
$this->CellFitScale(11,10,'AMT.LAB',1,0,'C',1);
$this->CellFitScale(11,10,'NO.ECG',1,0,'C',1);
$this->CellFitScale(11,10,'AMT.ECG',1,0,'C',1);
$this->CellFitScale(11,10,'NO.USG',1,0,'C',1);
$this->CellFitScale(11,10,'AMT.USG',1,0,'C',1);

$this->CellFitScale(11,10,'AMB.KM',1,0,'C',1);
$this->CellFitScale(11,10,'AMT.AMB',1,0,'C',1);

$this->CellFitScale(18,10,'NO.DELIVERY/CTG',1,0,'C',1);
$this->CellFitScale(18,10,'AMT.DELIVERY/CTG',1,0,'C',1);
$this->CellFitScale(11,10,'TOTAL',1,0,'C',1);
   $this->SetFillColor(255, 0, 0);
    $this->SetTextColor(255,255,255);
     
     $this->CellFitScale(11,10,'NO.TESTS',1,0,'C',1);
$this->CellFitScale(11,10,'AMT.LAB',1,0,'C',1);




   $this->CellFitScale(16,10,'NO.MSTORE',1,0,'C',1);
$this->CellFitScale(11,10,'M.STORE',1,0,'C',1);






$this->CellFitScale(11,10,'NO.ECG',1,0,'C',1);
$this->CellFitScale(11,10,'AMT.ECG',1,0,'C',1);
$this->CellFitScale(11,10,'NO.USG',1,0,'C',1);
$this->CellFitScale(11,10,'AMT.USG',1,0,'C',1);
$this->CellFitScale(11,10,'AMB.KM',1,0,'C',1);
$this->CellFitScale(11,10,'AMT.AMB',1,0,'C',1);
$this->CellFitScale(11,10,'TOTAL',1,0,'C',1);

                                  $this->SetFillColor(48, 74, 123);
    $this->SetTextColor(255,255,255);
$this->CellFitScale(11,10,'G.TOTAL',1,0,'C',1);
 $this->Ln(10);

    }
    else{
       
}
}

function Footer()
{
  // To be implemented in your own inherited class
  $this->Ln(10);
  $this->Cell(130);
  $this->SetFont('Arial','I',8);
  $this->Cell(0, 5, "Page " . $this->PageNo() . "/{nb}", 0, 1);
  $this->Cell(120);
  $this->SetFont('Arial','I',5);
  $this->Cell(18, 5, "Proudly Presented By", 0, 0);
  $this->SetFont('Arial','B',5);
  $this->SetTextColor(51,153,0);
  $this->Cell(30, 5, "PAKSOFTWARES", 0, 0,1);
}
}
$pdf = new PDF();
$pdf->AddPage('L','Legal');

$pdf->AliasNbPages();

$pdf->Image($navslogo,10,5,50);


$pdf->SetFont('Arial','',7);

  


                    
                    
                    
                    
                    
    // Title
    

    $ecg=0;
    $usg=0;
    $not=0;
    $li=0;
    $oc=0;
    $dc=0;
    $nnot=0;
    $nli=0;
    
     $nnnot=0;
    $nnli=0;
    $necg=0;
    $nusg=0;
    
    
    
      $nnecg=0;
    $nnusg=0;
    
    $noc=0;
    $ndc=0;
    $nta=0;
    $ntk=0;

   






$lk11=0;





       $m=date('m',strtotime($month));
      $y=date('y',strtotime($month));
      $a3=date("d",strtotime($month));
      $format=$a1."-".$a2;


 $days=cal_days_in_month(CAL_GREGORIAN,$m,$y);

 $list3=array();
for($d=1; $d<=$days; $d++)
{
    $time=mktime(12, 0, 0, $m, $d, $y);
    if (date('m', $time)==$m)
        $list3[]=date('Y-m-d', $time);
}



$c=0;
for($e=1; $e<=$days; $e++)
{




    



 $sql2 = "SELECT  id,name,gender,status,ref FROM patients where date='$list3[$c]'";
    
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
    $id=$row2['id'];

    $ref=$row2['ref'];
 
    
    
    
    
      if ($row2['status']=='FREE')
 {

     
$sql1134 = "SELECT * FROM netmeds2 where mr='$id' and date='$list3[$c]'";
            $result1134 = mysqli_query($conn, $sql1134);

            if (mysqli_num_rows($result1134) > 0) {
            // output data of each row
             while($row1134 = mysqli_fetch_assoc($result1134))  {
                 
                      $unit=0;
                       ++$k113;
                
 $nm1=$row1134['qty']*$row113['oa']+$nm1;
             $tnm1=$row1134['qty']*$row113['oa']+$tnm1; 





                 
             }
            }
 
 
 }
 
 
    
     if ($row2['status']=='PAID')
 {
 
   
$sql113 = "SELECT * FROM netmeds2 where mr='$id' and date='$list3[$c]'";
            $result113 = mysqli_query($conn, $sql113);

            if (mysqli_num_rows($result113) > 0) {
            // output data of each row
             while($row113 = mysqli_fetch_assoc($result113))  {
                 
                      $unit=0;
                
if ($row113['unit']!='0')
{
  ++$five;


             $nm=$row113['qty']*$row113['unit']+$nm;   
             
             $tnm=$row113['qty']*$row113['unit']+$tnm; 

}





if ($row113['unit']=='0')
{

++$k113;

          $unit=0;
                
  
             
             $nm1=$row113['qty']*$row113['oa']+$nm1;
             $tnm1=$row113['qty']*$row113['oa']+$tnm1; 
}



             }
            }
 
 
 }
    
    
    
    
    
    
    
    $sql234 = "SELECT * FROM mrr2 where mr='$id' and date='$list3[$c]'";
            $result234 = mysqli_query($conn, $sql234);

            if (mysqli_num_rows($result234) > 0) {
            // output data of each row
             while($row234 = mysqli_fetch_assoc($result234))  {
                 

    $dc=$row234['amount']+$dc;

if ($row2['status']=='PAID')

{
    ++$four;
       $ndc=$row234['amount']+$ndc;
}
    
    

}
}
    
    
    if ($row2['status']=='FREE')

{
++$nnnot;
$nnli=$row['amount']+$nnli;


}

    
    
    
        if ($row2['status']=='PAID')

{




if ($ref!='SELF')
{
     ++$paid;
}


if ($ref=='SELF')
{
    

}
  








}

    
    
    
    
    
    
    
 $sql23 = "SELECT * FROM mrrs where mr='$id' and date='$list3[$c]'";
            $result23 = mysqli_query($conn, $sql23);

            if (mysqli_num_rows($result23) > 0) {
            // output data of each row
             while($row23 = mysqli_fetch_assoc($result23))  {
                 
                 
                 
   $mstore=0;
                 
                 
                 
if ($row2['status']=='FREE' && $row23['name']=='STITCHING/ASD')
{
    $k16=$row23['qty']+$k16;
    
         

$tqt11=$row23['oa']*$row23['qty'];
$tqt111=$row23['oa']*$row23['qty']+$tqt111;

}


                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 if ($row2['status']=='PAID' && $row23['name']=='DRIPS/INFUSION')
{
 
        if ($row23['amount']!='0')
                {
                     $seven=$row23['qty']+$seven;
    
                $tqt=0;
                $unit=0;
                
     

$tqt=$row23['amount']*$row23['qty'];


$tqt100=$row23['amount']*$row23['qty']+$tqt100;
}



if ($row23['amount']=='0')
{


  $k12=$row23['qty']+$k12;

     $tqt7=0;
                $unit=0;
                $oa=0;
                
   

$tqt7=$row23['oa']*$row23['qty'];
$tqt107=$row23['oa']*$row23['qty']+$tqt107;


}



}
                 
                 
                 
                 
                 
                 
                 
                if ($row2['status']=='PAID' && $row23['name']=='PHYSIOTHERAPY (IR/CHAIR)')
{
  
    
      if ($row23['amount']!='0')
                {
                    $nine=$row23['qty']+$nine;

      $tqt5=$row23['amount']*$row23['qty'];
$tqt105=$row23['amount']*$row23['qty']+$tqt105;
}








 if ($row23['amount']=='0')
  {


$K15=$row23['qty']+$K15;

                $tqt12=0;
                $unit=0;
                
   
    
$tqt5=$row23['oa']*$row23['qty'];
$tqt1055=$row23['oa']*$row23['qty']+$tqt1055;
    
  

  }













}
 
                 
                 
                 
                 
                 
                
                   if ($row2['status']=='PAID' && $row23['name']=='IRON INFUSION')
{
    
          if ($row23['amount']!='0')
                {
                  $six=$row23['qty']+$six;


$tqt1=$row23['amount']*$row23['qty'];

$tqt101=$row23['amount']*$row23['qty']+$tqt101;






                }

if ($row23['amount']=='0')
{




       $k13=$row23['qty']+$k13;
                $tqt8=0;
                $unit=0;
                
  

$tqt8=$row23['oa']*$row23['qty'];
$tqt108=$row23['oa']*$row23['qty']+$tqt108;

}


















}

if ($row2['status']=='PAID' && $row23['name']=='NEBULIZING')
{
    
       if ($row23['amount']!='0')
    {
      $eight=$row23['qty']+$eight;

$tqt3=$row23['amount']*$row23['qty'];
$tqt103=$row23['amount']*$row23['qty']+$tqt103;
}






if ($row23['amount']=='0')
{

   $k14=$row23['qty']+$k14;
  $tqt10=0;
                $unit=0;
                
  

$tqt10=$row23['oa']*$row23['qty'];
$tqt110=$row23['oa']*$row23['qty']+$tqt110;


}





}





    
                
                
                
                
                
                
                
if ($row2['status']=='PAID' && $row23['name']=='OXYGEN')
{






if ($row23['amount']!='0')
{
  
    $three=$row23['qty']+$three;
    
         
    

$tqt2=$row23['amount']*$row23['qty'];
$tqt102=$row23['amount']*$row23['qty']+$tqt102;
}



    if ($row23['amount']=='0')
    {



$k10=$row23['qty']+$k10;

   $bcode=$row['bcode'];
                
                $tqt9=0;
                $unit=0;
                
   

$tqt9=$row23['oa']*$row23['qty'];
$tqt109=$row23['oa']*$row23['qty']+$tqt109;





    }





}




if ($row2['status']=='PAID' && $row23['name']=='STITCHING/ASD')
{
    
         if ($row23['amount']!='0')
{$ten=$row23['qty']+$ten;

    

$tqt4=$row23['amount']*$row23['qty'];
$tqt104=$row23['amount']*$row23['qty']+$tqt104;
}


if ($row23['amount']=='0')
{
 $k16=$row23['qty']+$k16;

    

$tqt11=$row23['oa']*$row23['qty'];
$tqt111=$row23['oa']*$row23['qty']+$tqt111;

}




}







if ($row2['status']=='FREE' && $row23['name']=='DRIPS/INFUSION')
{
    $k12=$row23['qty']+$k12;

     $tqt7=0;
                $unit=0;
                $oa=0;
                
  
$tqt7=$row23['oa']*$row23['qty'];
$tqt107=$row23['oa']*$row23['qty']+$tqt107;


}






if ($row2['status']=='FREE' && $row23['name']=='OXYGEN')
{
    
    $k10=$row23['qty']+$k10;
    
     

  
    

$tqt9=$row23['oa']*$row23['qty'];
$tqt109=$row23['oa']*$row23['qty']+$tqt109;

}




if ($row2['status']=='FREE' && $row23['name']=='IRON INFUSION')
{
    $k13=$row23['qty']+$k13;
    
        
                $tqt8=0;
                $unit=0;
                
  

$tqt8=$row23['oa']*$row23['qty'];
$tqt108=$row23['oa']*$row23['qty']+$tqt108;

}




















if ($row2['status']=='FREE' && $row23['name']=='PHYSIOTHERAPY (IR/CHAIR)')
{
    $k15=$row23['qty']+$k15;
    
         $tqt12=0;
                $unit=0;
                
    

$tqt5=$row23['oa']*$row23['qty'];
$tqt1055=$row23['oa']*$row23['qty']+$tqt1055;
    



}









if ($row2['status']=='FREE' && $row23['name']=='NEBULIZING')
{
    $k14=$row23['qty']+$k14;
       $tqt10=0;
                $unit=0;
                


$tqt10=$row23['oa']*$row23['qty'];
$tqt110=$row23['oa']*$row23['qty']+$tqt110;


}




if ($row2['status']=='FREE' && $row23['name']=='OXYGEN')
{
    
         $bcode=$row23['bcode'];
                
                $tqt22=0;
                $unit=0;
                
 







$tqt22=$row23['oa']*$row23['qty'];
$tqt1022=$row23['oa']*$row23['qty']+$tqt1022;

}

















                 

}
}
   









    
    
    
    
    
   

   
   
   
   
   
   
   $sql11 = "SELECT  category,amount FROM cat";
$result11 = $conn->query($sql11);

if ($result11->num_rows > 0) {
  // output data of each row
  while($row11 = $result11->fetch_assoc()) {
      $category=$row11['category'];
   
   $sql = "SELECT * FROM mrr where mr='$id' and date='$list3[$c]' and category='$category' and first='1'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  {









                 
                 
if ($row2['status']=='PAID' && $row['name']!='USG' && $row['name']!='ECG ')

{


if ($row['amount']=='0')

{


++$k;
$fli=$row['oa']+$fli;

$fnli=$row['oa']+$fnli;



}



if ($row['amount']!='0')
{
  
 ++$fu;
$fuc=$row['amount']+$fuc;

$nli=$row['amount']+$nli;
}




}


if ($row2['status']=='PAID' && $row['name']=='ECG ')

{
    
    if ($row['amount']!='0')
{
    ++$one;

 $necg=$row['amount']+$necg;
}


if ($row['amount']=='0')
{
  ++$k1;
 $nnecg=$row['oa']+$nnecg;
 
  $fecg=$row['oa'];
}
 


}

if ($row2['status']=='PAID' && $row['name']=='USG')

{
  if ($row['amount']!='0')
{
++$two;
 $nusg=$row['amount']+$nusg;
   $usg=$row['amount'];
 }
if ($row['amount']=='0')
{
  ++$k2;
 $nnusg=$row['oa']+$nnusg;
  $fusg=$row['oa'];
}







}





if ($row2['status']=='FREE' && $row['name']=='ECG ')

{
++$k1;
 $nnecg=$row['amount']+$nnecg;
 
  $fecg=$row['amount'];

}

if ($row2['status']=='FREE' && $row['name']=='USG')

{
++$k2;
 $nnusg=$row['amount']+$nnusg;
  $fusg=$row['amount'];

}





if ($row2['status']=='FREE' && $row['name']!='USG' && $row['name']!='ECG ')

{


++$k;
$fli=$row['amount']+$fli;

$fnli=$row['amount']+$fnli;

}






                 
             }
            }
   
  }
}
}
}








         $a1=date("M",strtotime($list3[$c]));
      $a3=date("Y",strtotime($list3[$c]));
      $a2=date("d",strtotime($list3[$c]));
      $format=$a2."-".$a1."-".$a3;


$opd=$paid+$nnnot;

$pdf->Cell(-7);
   $pdf->SetFont('Arial','I',7.5);
   $pdf->SetTextColor(0,0,0);
       $pdf->CellFitScale(12,6,$format,1,0,'C');

         $pdf->CellFitScale(10,6,$opd,1,0,'C');

   
    $pdf->CellFitScale(10,6,$paid,1,0,'C');


$pdf->CellFitScale(10,6,$nnnot,1,0,'C');
   
   $as=$nnnot*100;
$pdf->CellFitScale(10,6,number_format($as),1,0,'C');
   

$np=$paid*100;

$pdf->CellFitScale(10,6,number_format($np),1,0,'C');
$mstore=$tnm+$tqt100+$tqt101+$tqt102+$tqt103+$tqt105+$tqt104;
$mstore1=$mstore+$mstore1;

   $pdf->CellFitScale(11,6,number_format($mstore),1,0,'C');


$pdf->CellFitScale(11,6,$fu,1,0,'C');
$pdf->CellFitScale(11,6,number_format($fuc),1,0,'C');




$pdf->CellFitScale(11,6,$one,1,0,'C');

$pdf->CellFitScale(11,6,number_format($necg),1,0,'C');


$pdf->CellFitScale(11,6,$two,1,0,'C');

$pdf->CellFitScale(11,6,number_format($nusg),1,0,'C');



$inc=0;
$sk=0;
$ek=0;
$inc=0;
$ambkm=0;
$sql22 = "SELECT * FROM km where date='$list3[$c]'";
$result22 = $conn->query($sql22);

if ($result22->num_rows > 0) {
  // output data of each row
  while($row22 = $result22->fetch_assoc()) {

$sk=$row22['sk']+$sk;
$ek=$row22['ek']+$ek;
$inc=$row22['inc']+$inc;

  
  }
}

$ambkm=$ek-$sk;


$pdf->CellFitScale(11,6,$ambkm,1,0,'C');
$pdf->CellFitScale(11,6,number_format($inc),1,0,'C');

$pdf->CellFitScale(18,6,$four,1,0,'C');


$pdf->CellFitScale(18,6,number_format($ndc),1,0,'C');

  $kohli=$ndc+$inc+$necg+$nusg+$np+$fuc+$mstore;

$pdf->CellFitScale(11,6,number_format($kohli),1,0,'C');



$pdf->CellFitScale(11,6,$k,1,0,'C');

$pdf->CellFitScale(11,6,number_format($fli),1,0,'C');



$jan=$k113+$k12+$k13+$k14+$k15+$k16+$k10;
$jan1=$jan+$jan1;

$pdf->CellFitScale(16,6,$jan,1,0,'C');



 $mstore5=$tqt111+$tqt1055+$tqt110+$tqt108+$tqt109+$tqt107+$tnm1+$nnusg+$nnecg+$fli;


$mstore6=$mstore5+$mstore6;


$pdf->CellFitScale(11,6,number_format($mstore5),1,0,'C');



$pdf->CellFitScale(11,6,$k1,1,0,'C');
$pdf->CellFitScale(11,6,number_format($nnecg),1,0,'C');



$pdf->CellFitScale(11,6,$k2,1,0,'C');

$pdf->CellFitScale(11,6,number_format($nnusg),1,0,'C');


$pdf->CellFitScale(11,6,'0',1,0,'C');

$pdf->CellFitScale(11,6,'0',1,0,'C');


  $kohli5=$nnusg+$nnecg+$fli+$as+$mstore5;

$pdf->CellFitScale(11,6,number_format($kohli5),1,0,'C');

$vk=$kohli+$kohli5;

$pdf->CellFitScale(11,6,number_format($vk),1,0,'C');






$amiropd=$opd+$amiropd;
$opd=0;


$amirpaid=$paid+$amirpaid;
$paid=0;


$amirnnnot=$nnnot+$amirnnnot;

$nnnot=0;


$amiras=$as+$amiras;
$as=0;

$amirnp=$np+$amirnp;
$np=0;

$amirfu=$fu+$amirfu;
$fu=0;

$amirfuc=$fuc+$amirfuc;
$fuc=0;

$amirone=$one+$amirone;
$one=0;


$amirnecg=$necg+$amirnecg;

$necg=0;




$amirtwo=$two+$amirtwo;

$two=0;




$amirnusg=$nusg+$amirnusg;

$nusg=0;
$sk=0;
$ek=0;




$amirinc=$inc+$amirinc;


$inc=0;


$tnm=0;
$tqt100=0;
$tqt101=0;
$tqt102=0;
$tqt103=0;
$tqt105=0;
$tqt104=0;
$mstore=0;

$jan=0;
$k113=0;
$k12=0;
$k13=0;
$k14=0;
$k15=0;
$k16=0;
$k10=0;


$tqt111=0;
$tqt1055=0;
$tqt110=0;
$tqt108=0;
$tqt109=0;
$tqt107=0;
$tnm1=0;


$mstore5=0;


$amirambkm=$ambkm+$amirambkm;


$ambkm=0;


$amirndc=$ndc+$amirndc;


$ndc=0;


$amirkohli=$kohli+$amirkohli;

$kohli=0;


$amirk=$k+$amirk;

$k=0;


$amirfli=$fli+$amirfli;

$fli=0;


$amirk1=$k1+$amirk1;

$k1=0;

$amirnnecg=$nnecg+$amirnnecg;

$nnecg=0;

$amirk2=$k2+$amirk2;

$k2=0;


$amirnnusg=$nnusg+$amirnnusg;

$nnusg=0;

$amirkohli=$kohli+$amirkohli;


$kohli=0;

$amirfour=$four+$amirfour;


$four=0;

$amirkohli5=$kohli5+$amirkohli5;

$kohli5=0;

$amirvk=$vk+$amirvk;
$vk=0;
$mstore=0;
$nnecg=0;
$nnusg=0;
++$c;
$fli=0;
$pdf->Ln(6);

}




$pdf->Ln(1);
 $pdf->Cell(-5);
 $pdf->SetFont('Arial','B',8);
$pdf->Cell(10,6,'TOTAL:',0,0,'R');
 //$pdf->Cell(40);
 $pdf->Cell(10,6,number_format($amiropd),1,0,'C');
$pdf->Cell(10,6,number_format($amirpaid),1,0,'C');


$pdf->Cell(10,6,number_format($amirnnnot),1,0,'C');

$pdf->Cell(10,6,number_format($amiras),1,0,'C');
$pdf->Cell(10,6,number_format($amirnp),1,0,'C');

$pdf->Cell(11,6,number_format($mstore1),1,0,'C');

$pdf->Cell(11,6,number_format($amirfu),1,0,'C');
$pdf->Cell(11,6,number_format($amirfuc),1,0,'C');

$pdf->Cell(11,6,number_format($amirone),1,0,'C');
$pdf->Cell(11,6,number_format($amirnecg),1,0,'C');




$pdf->Cell(11,6,number_format($amirtwo),1,0,'C');
$pdf->Cell(11,6,number_format($amirnusg),1,0,'C');











$pdf->Cell(11,6,number_format($amirambkm),1,0,'C');

$pdf->Cell(11,6,number_format($amirinc),1,0,'C');

$pdf->Cell(18,6,number_format($amirfour),1,0,'C');

$pdf->Cell(18,6,number_format($amirndc),1,0,'C');










$pdf->Cell(11,6,number_format($amirkohli),1,0,'C');


$pdf->Cell(11,6,number_format($amirk),1,0,'C');



$pdf->Cell(11,6,number_format($amirfli),1,0,'C');





$pdf->Cell(16,6,$jan1,1,0,'C');







$pdf->Cell(11,6,number_format($mstore6),1,0,'C');







$pdf->Cell(11,6,number_format($amirk1),1,0,'C');









$pdf->Cell(11,6,number_format($amirnnecg),1,0,'C');
$pdf->Cell(11,6,number_format($amirk2),1,0,'C');









$pdf->Cell(11,6,number_format($amirnnusg),1,0,'C');



$pdf->Cell(11,6,'0',1,0,'C');
$pdf->Cell(11,6,'0',1,0,'C');

$pdf->Cell(11,6,number_format($amirkohli5),1,0,'C');
$pdf->Cell(11,6,number_format($amirvk),1,0,'C');




date_default_timezone_set("Asia/Karachi");
$pdf->Cell(100);
$data=date("Y-m-d");
$time=date("H:i:s");

     $d11=date("M",strtotime($data));
      $d33=date("Y",strtotime($data));
      $d22=date("d",strtotime($data));

      $dd1=$d22."-".$d11."-".$d33;

 $pdf->Ln(6);
  $pdf->SetFont('Arial','B',7);
  $pdf->SetTextColor(0,0,0);
$pdf->Cell(300,5,'Printed on Date '.$dd1.' Time '.$time. ' By '.$rowsession['username'],0,0,'C');

//output
    
   

$pdf->Output();



 ?>
