<?php 
include('connection.php');
include('connection.php');
include_once('libs/fpdf.php');
$date=$_POST['date'];
$date1=$_POST['date1'];
$cname=0;
 $navslogo="uploads/rlogo2.png";
class PDF extends FPDF
{
function Header()
{
   $date=$_POST['date'];
$date1=$_POST['date1'];
  
    // Line break
   // $this->Ln(10);
    if ($this->PageNo()==1) {
      # code...
     
    $this->SetFont('Arial','I',20);
    // Move to the right
  include('include_pdf_landscape_header2.php');
      
  $this->SetTextColor(0,0,0);
      $this->SetFont('Arial','B',11);
   $this->SetTextColor(48, 74, 123);
    $this->Cell(130,10,'SUMMARY REPORT',0,0,'C');
   $a1=date("M",strtotime($date));
      $a3=date("Y",strtotime($date));
      $a2=date("d",strtotime($date));
      $format=$a2."-".$a1."-".$a3;

      $b1=date("M",strtotime($date1));
      $b3=date("Y",strtotime($date1));
      $b2=date("d",strtotime($date1));
      $format1=$b2."-".$b1."-".$b3;

$this->Ln();
   $this->SetTextColor(48, 74, 123);
   $this->cell(15);
    $this->Cell(160,10,$format.' *** '.$format1,0,0,'C');
    $this->Ln(4);    
    
    

    $this->Ln(5);

    }
    else{
     

$this->Ln(10);
}
}

function Footer()
{
  // To be implemented in your own inherited class
  $this->Ln(10);
  $this->SetFont('Arial','I',8);
  $this->Cell(130);
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
$pdf->AddPage('');
$pdf->AliasNbPages();
$pdf->Image($navslogo,1,1,30);

$pdf->SetFont('Arial','',7);

  $pdf->SetFillColor(48, 74, 123);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);

$pdf->CellFitScale(10,10,'S#',1,0,'C',1);
$pdf->CellFitScale(160,10,'INCOME HEAD NAME',1,0,'C',1);
$pdf->CellFitScale(20,10,'CREDIT',1,0,'C',1);
  
$pdf->Ln(10);
    // Title


$pdf->SetTextColor(0,0,0);
$counting=0;


$first=0;
$second=0;

$sql = "SELECT amountin FROM banks where date between '$date' and '$date1' and source='INSTALLMENT'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 $first=$row['amountin']+$first;
 
 $sum=$row['amountin']+$sum;
  }
} 
                                                    
$pdf->SetFont('Arial','I',8);

$pdf->CellFitScale(10,7,++$counting,1,0,'L');
$pdf->CellFitScale(160,7,'***INSTALLMENTS***',1,0,'L');

$pdf->CellFitScale(20,7,number_format($first),1,0,'C');



$pdf->Ln(7);


 $sql2 = "SELECT DISTINCT iname from income where type='Income' ";

                            if($resultt2 = mysqli_query($conn, $sql2)){
                            while($row2 =  mysqli_fetch_array($resultt2)){
                              
           
$sql = "SELECT amountin FROM banks where date between '$date' and '$date1' and source='$row2[iname]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 $second=$row['amountin']+$second;
  $sum=$row['amountin']+$sum;
  }
} 
                                                    
$pdf->SetFont('Arial','I',8);

if ($second!='0')
{

$pdf->CellFitScale(10,7,++$counting,1,0,'L');
$pdf->CellFitScale(160,7,$row2['iname'],1,0,'L');

$pdf->CellFitScale(20,7,number_format($second),1,0,'C');

$second=0;
                                                    


$pdf->Ln(8);

$balamtp=0;
}
}

}

      $pdf->Ln(0);                     
 $pdf->Cell(150);
 $pdf->SetFont('Arial','B',8);
$pdf->Cell(20,6,'SUBTOTAL:',0,0,'R');
 //$pdf->Cell(40);
$pdf->Cell(20,6,number_format($sum),1,0,'C');


     $pdf->Ln(); 

  $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial','B',11);
   $pdf->SetTextColor(48, 74, 123);
    $pdf->Cell(185,10,'BANK EXPENSES',0,0,'C');


$pdf->Ln(10);
 $pdf->SetFillColor(48, 74, 123);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);

$pdf->CellFitScale(10,10,'S#',1,0,'C',1);
$pdf->CellFitScale(160,10,'EXPENSE HEAD NAME',1,0,'C',1);
$pdf->CellFitScale(20,10,'DEBIT',1,0,'C',1);
  
$pdf->Ln(10);
    // Title


$pdf->SetTextColor(0,0,0);
$counting=0;


$first=0;
$second=0;

$pdf->Ln(1);


 $sql2 = "SELECT DISTINCT iname from ven ";

                            if($resultt2 = mysqli_query($conn, $sql2)){
                            while($row2 =  mysqli_fetch_array($resultt2)){
                              
           
$sql = "SELECT amountout FROM banks where date between '$date' and '$date1' and source='$row2[iname]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 $second=$row['amountout']+$second;
  $sum2=$row['amountout']+$sum2;
  }
} 
                                                    
$pdf->SetFont('Arial','I',8);

if ($second!='0')
{

$pdf->CellFitScale(10,7,++$counting,1,0,'L');
$pdf->CellFitScale(160,7,$row2['iname'],1,0,'L');

$pdf->CellFitScale(20,7,number_format($second),1,0,'C');

$second=0;
                                                    


$pdf->Ln(8);

$balamtp=0;
}
}

}





 $sql2 = "SELECT DISTINCT iname from income  where type='Expnse' ";

                            if($resultt2 = mysqli_query($conn, $sql2)){
                            while($row2 =  mysqli_fetch_array($resultt2)){
                              
           
$sql = "SELECT amountout FROM banks where date between '$date' and '$date1' and source='$row2[iname]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 $second=$row['amountout']+$second;
  $sum2=$row['amountout']+$sum2;
  }
} 
                                                    
$pdf->SetFont('Arial','I',8);

if ($second!='0')
{

$pdf->CellFitScale(10,7,++$counting,1,0,'L');
$pdf->CellFitScale(160,7,$row2['iname'],1,0,'L');

$pdf->CellFitScale(20,7,number_format($second),1,0,'C');

$second=0;
                                                    


$pdf->Ln(8);

$balamtp=0;
}
}

}
   $pdf->Ln(0);                     
 $pdf->Cell(150);
 $pdf->SetFont('Arial','B',8);
$pdf->Cell(20,6,'SUBTOTAL:',0,0,'R');
 //$pdf->Cell(40);
$pdf->Cell(20,6,number_format($sum2),1,0,'C');

  $pdf->Ln(); 

  $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial','B',11);
   $pdf->SetTextColor(48, 74, 123);
    $pdf->Cell(185,10,'PETTY CASH EXPENSES',0,0,'C');

$pdf->Ln(10);
 $pdf->SetFillColor(48, 74, 123);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);

$pdf->CellFitScale(10,10,'S#',1,0,'C',1);
$pdf->CellFitScale(160,10,'EXPENSE HEAD NAME',1,0,'C',1);
$pdf->CellFitScale(20,10,'DEBIT',1,0,'C',1);
  
$pdf->Ln(10);
    // Title


$pdf->SetTextColor(0,0,0);
$counting=0;


$first=0;
$second=0;




 $sql2 = "SELECT DISTINCT iname from income  where type='Expnse' ";

                            if($resultt2 = mysqli_query($conn, $sql2)){
                            while($row2 =  mysqli_fetch_array($resultt2)){
                              
           
$sql = "SELECT amountout FROM pettycash where date between '$date' and '$date1' and source='$row2[iname]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 $second=$row['amountout']+$second;
  $sum3=$row['amountout']+$sum3;
  }
} 
                                                    
$pdf->SetFont('Arial','I',8);

if ($second!='0')
{

$pdf->CellFitScale(10,7,++$counting,1,0,'L');
$pdf->CellFitScale(160,7,$row2['iname'],1,0,'L');

$pdf->CellFitScale(20,7,number_format($second),1,0,'C');

$second=0;
                                                    


$pdf->Ln(8);

$balamtp=0;
}
}

}
   $pdf->Ln(0);                     
 $pdf->Cell(150);
 $pdf->SetFont('Arial','B',8);
$pdf->Cell(20,6,'SUBTOTAL:',0,0,'R');
 //$pdf->Cell(40);
$pdf->Cell(20,6,number_format($sum3),1,0,'C');
   $pdf->Ln(8);                     
 $pdf->Cell(150);
 $pdf->SetFont('Arial','B',8);
$pdf->Cell(20,6,'NET EXPENSES:',0,0,'R');
 //$pdf->Cell(40);
 $sum4=$sum2+$sum3;
$pdf->Cell(20,6,number_format($sum4),1,0,'C');
$pdf->Ln(8);                     
 $pdf->Cell(150);
 $pdf->SetFont('Arial','B',8);
$pdf->Cell(20,6,'PROFIT/LOSS:',0,0,'R');
 //$pdf->Cell(40);
 $sum4=$sum2+$sum3;
 $summ=$sum-$sum4;
$pdf->Cell(20,6,number_format($summ),1,0,'C');



$pdf->Output();



 ?>
