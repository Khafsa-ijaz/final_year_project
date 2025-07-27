<?php 
include('connection.php');

include_once('libs/fpdf.php');
$cname=0;

 $date=$_POST['date'];

 $navslogo="uploads/rlogo2.png";
class PDF extends FPDF
{
function Header()
{
  include('connection.php');

  $date=$_POST['date'];

   $a1=date("M",strtotime($date));
      $a3=date("Y",strtotime($date));
      $a2=date("d",strtotime($date));
      $format=$a2."-".$a1."-".$a3;
   
  
    // Line break
   // $this->Ln(10);
    if ($this->PageNo()==1) {
      # code...
     
    $this->SetFont('Arial','I',20);
    // Move to the right
  include('include_pdf_landscape_header2.php');
  $this->Ln(3);
       $this->Cell(130); 
   $this->SetTextColor(0,0,255);
         $this->SetFont('Times','B',12);
    $this->Cell(25,10,"DAILY INCOME VOUCHER REPORT DATE: ". $format,0,0,'R');
$this->Ln(3);


    }
    else{
     


}
}

function Footer()
{
  // To be implemented in your own inherited class

}
}
$pdf = new PDF();
$pdf->AddPage('');
$pdf->AliasNbPages();
$pdf->Image($navslogo,5,5,50);

$pdf->SetFont('Arial','',7);

  $pdf->SetFillColor(48, 74, 123);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);




    // Title


$pdf->SetTextColor(0,0,0);
$counting=0;


$first=0;
$second=0;

 
                                                    
$pdf->SetFont('Arial','I',8);






 $pdf->Ln(10);
      $pdf->Cell(56); 
   $pdf->SetTextColor(0,0,255);
         $pdf->SetFont('Times','B',12);
    $pdf->Cell(25,10,"PAID PATIENTS RECEPTION DETAILS ",0,0,'R');


                                      $pdf->SetFont('Arial','B',8);
                                       

   $pdf->SetFont('Arial','B',13);

     // $pdf->cell(125);
     $pdf->SetTextColor(51,61,71);
  $pdf->Cell(80,10,$row23['f'],0);
                                         $pdf->Ln(8.5);

                                  $pdf->SetFillColor(48, 74, 123);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);

$pdf->SetFont('Arial','',7);

  $pdf->SetFillColor(48, 74, 123);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);


$pdf->CellFitScale(70,10,'NAME',1,0,'C',1);
$pdf->CellFitScale(25,10,'TOTAL',1,0,'C',1);
$pdf->CellFitScale(70,10,'NAME',1,0,'C',1);
$pdf->CellFitScale(25,10,'INCOME',1,0,'C',1);

 $pdf->ln();

    // Title


$pdf->SetTextColor(0,0,0);


$lk11=0;
 $sql2 = "SELECT  id,name,gender,status,ref FROM patients where date='$date'";
    
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
    $id=$row2['id'];

    $ref=$row2['ref'];
 
    
    
    
    
      if ($row2['status']=='FREE')
 {

     
$sql1134 = "SELECT * FROM netmeds2 where mr='$id' and date='$date'";
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
 
   
$sql113 = "SELECT * FROM netmeds2 where mr='$id' and date='$date'";
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
    
    
    
    
    
    
    
    $sql234 = "SELECT * FROM mrr2 where mr='$id' and date='$date'";
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

    
    
    
    
    
    
    
    
    
    
    
    
   
   
   
   $sql23 = "SELECT * FROM mrrs where mr='$id' and date='$date'";
            $result23 = mysqli_query($conn, $sql23);

            if (mysqli_num_rows($result23) > 0) {
            // output data of each row
             while($row23 = mysqli_fetch_assoc($result23))  {
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
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
   
   $sql = "SELECT * FROM mrr where mr='$id' and date='$date' and category='$category' and first='1'";
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




 $pdf->SetFont('Arial','I',8);

$pdf->CellFitScale(70,10,'TOTAL OPD',1,0,'L');

$np=$paid*100;
  $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,$paid,1,0,'C');
 $pdf->SetFont('Arial','I',8);

$pdf->CellFitScale(70,10,'INCOME OF OPD',1,0,'L');
  $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,number_format($np),1,0,'C');
$nnot=0;
$li=0;
$pdf->ln(10);



 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'NO OF LAB TESTS',1,0,'L');
$pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,$fu,1,0,'C');

 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'INCOME OF LAB TESTS',1,0,'L');
$pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,number_format($fuc),1,0,'C');
$nnot=0;
$li=0;
$pdf->ln(10);
 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'NO OF ECG',1,0,'L');
$pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,$one,1,0,'C');
 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'INCOME OF ECG',1,0,'L');
$pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,number_format($necg),1,0,'C');
$nnot=0;
$li=0;
$one=0;


$pdf->ln(10);

 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'NO OF USG',1,0,'L');
$pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,$two,1,0,'C');
 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'INCOME OF USG',1,0,'L');
$pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,number_format($nusg),1,0,'C');

$pdf->ln(10);





$inc=0;
$sk=0;
$ek=0;
$inc=0;
$ambkm=0;
$sql22 = "SELECT * FROM km where date='$date'";
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


 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'AMBULANCE KM',1,0,'L');
$pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,$ambkm,1,0,'C');
 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'INCOME OF AMBULANCE',1,0,'L');
$pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,number_format($inc),1,0,'C');


$pdf->ln(10);

 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'NO.OF OXYGEN',1,0,'L');
$pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,'0',1,0,'C');
 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'INCOME OF OXYGEN',1,0,'L');
$pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,'0',1,0,'C');





$pdf->ln(10);

 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'NO.OF DELIVERIES/CTG',1,0,'L');
$pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,$four,1,0,'C');
 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'INCOME OF DELIVERIES/CTG',1,0,'L');
$pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,number_format($ndc),1,0,'C');


  $kohli=$li+$nusg+$ndc+$np+$nli+$necg+$inc;


$nnot=0;
$li=0;
$one=0;
$necg=0;
$nusg=0;
$two=0;


     
$pdf->Ln(10);
 $pdf->Cell(145);
 $pdf->SetFont('Arial','B',8);
$pdf->Cell(20,6,'SUBTOTAL:',0,0,'R');
 //$pdf->Cell(40);
 $pdf->Cell(25,6,number_format($kohli),1,0,'C');
  
  
  
  
$pdf->ln(5);
  
  
  
  
  
      $pdf->SetFont('Arial','B',8);
                                       

   $pdf->SetFont('Arial','B',13);

     // $pdf->cell(125);
     $pdf->SetTextColor(51,61,71);
  $pdf->Cell(80,10,$row23['f'],0);
  
  
  
  
 $pdf->Ln(5);
      $pdf->Cell(34); 
   $pdf->SetTextColor(0,0,255);
         $pdf->SetFont('Times','B',12);
    $pdf->Cell(25,10,"MEDICAL STORE DETAILS ",0,0,'R');
  
                                         $pdf->Ln(8.5);

                                  $pdf->SetFillColor(48, 74, 123);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);

$pdf->SetFont('Arial','',7);

  $pdf->SetFillColor(48, 74, 123);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);


$pdf->CellFitScale(70,10,'NAME',1,0,'C',1);
$pdf->CellFitScale(25,10,'TOTAL',1,0,'C',1);
$pdf->CellFitScale(70,10,'NAME',1,0,'C',1);
  $pdf->CellFitScale(25,10,'INCOME',1,0,'C',1);
  
$pdf->ln(10);

$pdf->SetTextColor(0,0,0);


 $pdf->SetFont('Arial','I',8);

$pdf->CellFitScale(70,10,'PAID MEDICINES ',1,0,'L');

 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,$five,1,0,'C');
 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'INCOME OF PAID MEDICINES',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,number_format($tnm),1,0,'C');
$pdf->ln(10);

$pdf->SetTextColor(0,0,0);

 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'NO.OF IRON INFUSIONS',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,$six,1,0,'C');

 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'INCOME OF IRON INFUSIONS',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,number_format($tqt101),1,0,'C');
$pdf->ln(10);

$pdf->SetTextColor(0,0,0);
 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'NO.OF DRIPS INFUSIONS',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,$seven,1,0,'C');
 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'INCOME OF DRIPS INFUSIONS',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,number_format($tqt100),1,0,'C');

$pdf->ln(10);

$pdf->SetTextColor(0,0,0);
 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'NO.OF OXYGEN',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,$three,1,0,'C');
 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'INCOME OF DRIPS OXYGENS',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,number_format($tqt102),1,0,'C');


$pdf->ln(10);

$pdf->SetTextColor(0,0,0);
 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'NO.OF NEBULIZATIONS',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,$eight,1,0,'C');
 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'INCOME OF NEBULIZATIONS',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,number_format($tqt103),1,0,'C');


$pdf->ln(10);

$pdf->SetTextColor(0,0,0);
 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'NO.OF PHYSIOTHERAPIES',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,$nine,1,0,'C');
 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'INCOME OF  PHYSIOTHERAPIES',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,number_format($tqt105),1,0,'C');

$pdf->ln(10);

$pdf->SetTextColor(0,0,0);
 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'NO.OF STITCHES/ASD',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,$ten,1,0,'C'); $pdf->SetFont('Arial','I',8);

$pdf->CellFitScale(70,10,'INCOME OF  STITCHES/ASD',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,number_format($tqt104),1,0,'C');
  
  
  
  
  
  $kohli2=$tnm+$tqt100+$tqt101+$tqt102+$tqt103+$tqt105+$tqt104;
  $pdf->Ln(10);
 $pdf->Cell(145);
 $pdf->SetFont('Arial','B',8);
$pdf->Cell(20,6,'SUBTOTAL:',0,0,'R');
 //$pdf->Cell(40);
 $pdf->Cell(25,6,number_format($kohli2),1,0,'C');
  
  
  
  
  
    $kohli3=$kohli+$kohli2;
  $pdf->Ln(7);
 $pdf->Cell(145);
 $pdf->SetFont('Arial','B',8);
$pdf->Cell(20,6,'RECEPTION+MEDICAL STORE:',0,0,'R');
 //$pdf->Cell(40);
 $pdf->Cell(25,6,number_format($kohli3),1,0,'C');
   $pdf->Ln(10);
   
   
   
    $pdf->Ln(10);
      $pdf->Cell(105); 
   $pdf->SetTextColor(0,0,255);
         $pdf->SetFont('Times','B',12);
    $pdf->Cell(25,10,"DETAILS OF FREE PATIENTS (RECEPTION/MEDICAL STORE) ",0,0,'R');
  
    $pdf->Ln(10);

                                  $pdf->SetFillColor(48, 74, 123);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);

$pdf->SetFont('Arial','',7);

  $pdf->SetFillColor(48, 74, 123);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);


$pdf->CellFitScale(70,10,'NAME',1,0,'C',1);
$pdf->CellFitScale(25,10,'TOTAL',1,0,'C',1);
$pdf->CellFitScale(70,10,'NAME',1,0,'C',1);
  $pdf->CellFitScale(25,10,'INCOME',1,0,'C',1);
  
$pdf->ln(10);

$pdf->SetTextColor(0,0,0);

 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'NO.OF FREE TOKEN',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,$nnnot,1,0,'C');


$as=$nnnot*100;
 $pdf->SetFont('Arial','I',8);

$pdf->CellFitScale(70,10,'AMOUNT OF FREE TOKENS',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,number_format($as),1,0,'C');



$pdf->ln(10);




$pdf->SetTextColor(0,0,0);
 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'NO.OF FREE LAB TEST',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,$k,1,0,'C');

 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'AMOUNT OF FREE LAB TEST',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,number_format($fli),1,0,'C');




$pdf->ln(10);










$pdf->SetTextColor(0,0,0);
 $pdf->SetFont('Arial','I',8);

$pdf->CellFitScale(70,10,'NO.OF FREE ECG',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,$k1,1,0,'C');

 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'AMOUNT OF FREE ECG',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,number_format($nnecg),1,0,'C');


$pdf->ln(10);





$pdf->SetTextColor(0,0,0);
 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'NO.OF FREE USG',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,$k2,1,0,'C');

 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'AMOUNT OF FREE USG',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,number_format($nnusg),1,0,'C');


$pdf->ln(10);










$pdf->SetTextColor(0,0,0);
 $pdf->SetFont('Arial','I',8);

$pdf->CellFitScale(70,10,'NO.OF FREE KM AMBUALNCE',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,'0',1,0,'C');
 $pdf->SetFont('Arial','I',8);

$pdf->CellFitScale(70,10,'AMOUNT OF FREE KM AMBUALNCE',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,number_format(0),1,0,'C');


$pdf->ln(10);



$pdf->SetTextColor(0,0,0);
 $pdf->SetFont('Arial','I',8);


$pdf->CellFitScale(70,10,'NO.OF FREE OXYGEN',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,$k10,1,0,'C');

 $pdf->SetFont('Arial','I',8);

$pdf->CellFitScale(70,10,'AMOUNT OF FREE OXYGEN',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,number_format($tqt109),1,0,'C');



$pdf->ln(10);










$pdf->SetTextColor(0,0,0);
 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'NO.OF FREE MEDICINES',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,$k113,1,0,'C');

 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'AMOUNT OF FREE MEDICINES ISSUED',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,number_format($tnm1),1,0,'C');







$pdf->ln(10);










$pdf->SetTextColor(0,0,0);
 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'NO.OF FREE DRIPS/INFUSIONS',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,$k12,1,0,'C');

 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'AMOUNT OF FREE  DRIPS/INFUSIONS',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,number_format($tqt107),1,0,'C');




$pdf->ln(10);
$pdf->SetTextColor(0,0,0);
 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'NO.OF FREE IRON/INFUSIONS',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,$k13,1,0,'C');

 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'AMOUNT OF FREE  IRON/INFUSIONS',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,number_format($tqt108),1,0,'C');






$pdf->ln(10);
$pdf->SetTextColor(0,0,0);
 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'NO.OF FREE NEBULIZATIONS',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,$k14,1,0,'C');

 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'AMOUNT OF FREE  NEBULIZATIONS',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,number_format($tqt110),1,0,'C');






$pdf->ln(10);
$pdf->SetTextColor(0,0,0);
 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'NO.OF FREE PHYSIOTHERAPIES',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,$k15,1,0,'C');

 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'AMOUNT OF FREE PHYSIOTHERAPIES',1,0,'L');
 $pdf->SetFont('Arial','B',8);
$pdf->CellFitScale(25,10,number_format($tqt1055),1,0,'C');





$pdf->ln(10);
$pdf->SetTextColor(0,0,0);
 $pdf->SetFont('Arial','I',8);
$pdf->CellFitScale(70,10,'NO.OF FREE STITCHES/ASD',1,0,'L');
 $pdf->SetFont('Arial','B',8);

$pdf->CellFitScale(25,10,$k16,1,0,'C');
 $pdf->SetFont('Arial','I',8);

$pdf->CellFitScale(70,10,'AMOUNT OF FREE STITCHES/ASD',1,0,'L');
 $pdf->SetFont('Arial','B',8);

$pdf->CellFitScale(25,10,number_format($tqt111),1,0,'C');








  $kohli5=$tqt111+$tqt1055+$tqt110+$tqt108+$tqt109+$tqt107+$tnm1+$nnusg+$nnecg+$fli+$as;
  $pdf->Ln(10);
 $pdf->Cell(145);
 $pdf->SetFont('Arial','B',8);
$pdf->Cell(20,6,'SUBTOTAL:',0,0,'R');
 //$pdf->Cell(40);
 $pdf->Cell(25,6,number_format($kohli5),1,0,'C');



  $kohli6=$kohli1+$kohli2+$kohli4+$kohli5+$kohli;
  $pdf->Ln(10);
 $pdf->Cell(145);
 $pdf->SetFont('Arial','B',8);
$pdf->Cell(20,6,'GRAND TOTAL:',0,0,'R');
 //$pdf->Cell(40);
 $pdf->Cell(25,6,number_format($kohli6),1,0,'C');


$pdf->Output();



 ?>
