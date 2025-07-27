<?php 
$sum=0;
$sum1=0;
include('connection.php');
$date=$_POST['date'];
$date1=$_POST['date1'];
$iname=$_POST['iname'];

$pdate=$dateulu;






  $counting=0;
  $total=0;
  $count=0;
  $sumc=0;
  $sumt=0;
  $navslogo="uploads/rlogo2.png";
include('connection.php');
include_once('libs/fpdf.php');
class PDF extends FPDF
{
function Header()
{
  
$date=$_POST['date'];
$date1=$_POST['date1'];
$iname=$_POST['iname'];
      
    // Line break
   // $this->Ln(10);
    if ($this->PageNo()==1) {
      # code...
     
   include('include_pdf_landscape_header2.php');

    $a1=date("M",strtotime($date));
      $a3=date("Y",strtotime($date));
      $a2=date("d",strtotime($date));
      $format=$a2."-".$a1."-".$a3;

      $b1=date("M",strtotime($date1));
      $b3=date("Y",strtotime($date1));
      $b2=date("d",strtotime($date1));
      $format1=$b2."-".$b1."-".$b3;

  
    
    
    
    $this->Ln(-3);
    
$this->SetTextColor(0,0,0);
      $this->SetFont('Arial','B',11);
   $this->SetTextColor(48, 74, 123);
    $this->Cell(190,10,$iname,0,0,'C');

$this->Ln();
   $this->SetTextColor(48, 74, 123);
   $this->cell(15);
    $this->Cell(160,10,$format.' *** '.$format1,0,0,'C');
    $this->Ln(4);    
    
    
    
    
    
    
    

 

    }
    else{
       $this->SetFillColor(48, 74, 123);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',8);
       $this->Cell(12,10,'S#',1,0,'C',1);
    $this->Cell(60,10,'DESCRIPTION',1,0,'C',1);
    
    $this->Cell(30,10,'DATE',1,0,'C',1);


    $this->Cell(25,10,'CREDIT',1,0,'C',1);
    $this->Cell(25,10,'DEBIT',1,0,'C',1);
    $this->Cell(40,10,'FROM',1,0,'C',1);

    
                 
    $this->Ln(10);
}
}

function Footer()
{
  // To be implemented in your own inherited class
  $this->Ln(12);
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


 
    
 $pdf->Ln(5);
    // Title

   $pdf->SetFillColor(48, 74, 123);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);

   $pdf->Cell(12,10,'S#',1,0,'C',1);
    $pdf->Cell(60,10,'DESCRIPTION',1,0,'C',1);
  
    $pdf->Cell(30,10,'DATE',1,0,'C',1);


    $pdf->Cell(25,10,'CREDIT',1,0,'C',1);
    $pdf->Cell(25,10,'DEBIT',1,0,'C',1);
      $pdf->Cell(40,10,'FROM',1,0,'C',1);
 
    $pdf->Ln(10);

   $pdf->SetFont('Arial','I',7.5);
   $pdf->SetTextColor(0,0,0);
   $count3=0;
  $sql = "SELECT * FROM banks where source='$iname' and date between '$date' and '$date1' order by date,id ";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  {
  


$pdf->Cell(12,6,++$counting,1,0,'C');
$pdf->SetFont('Arial','I',5.5);
$pdf->CellFitScale(60,6,$row['descrip'],1,0,'L');
$pdf->SetFont('Arial','I',7.5);

      $d1=date("M",strtotime($row['date']));
      $d3=date("Y",strtotime($row['date']));
      $d2=date("d",strtotime($row['date']));

      $dd=$d2."-".$d1."-".$d3;

$pdf->CellFitScale(30,6,$dd,1,0,'C');

$pdf->CellFitScale(25,6,number_format($row['amountin']),1,0,'C');
$pdf->CellFitScale(25,6,number_format($row['amountout']),1,0,'C');
$pdf->CellFitScale(40,6,$row['bankname'],1,0,'C');
$sum=$row['amountout']+$sum;
$sum1=$row['amountin']+$sum1;
$pdf->Ln(6);



}
}

$sql = "SELECT * FROM pettycash where source='$iname' and date between '$date' and '$date1' order by date,id ";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  {
  


$pdf->Cell(12,6,++$counting,1,0,'C');
$pdf->SetFont('Arial','I',5.5);
$pdf->CellFitScale(60,6,$row['descrip'],1,0,'L');
$pdf->SetFont('Arial','I',7.5);


      $d1=date("M",strtotime($row['date']));
      $d3=date("Y",strtotime($row['date']));
      $d2=date("d",strtotime($row['date']));

      $dd=$d2."-".$d1."-".$d3;

$pdf->CellFitScale(30,6,$dd,1,0,'C');

$pdf->CellFitScale(25,6,number_format($row['amountin']),1,0,'C');
$pdf->CellFitScale(25,6,number_format($row['amountout']),1,0,'C');

$sum=$row['amountout']+$sum;
$sum1=$row['amountin']+$sum1;


$pdf->CellFitScale(40,6,'PETTY CASH',1,0,'C');

$pdf->Ln(7);



}

}


$pdf->Ln(-1);
 $pdf->Cell(82);
 $pdf->SetFont('Arial','B',8);
$pdf->Cell(20,6,'SUBTOTAL:',0,0,'R');
 //$pdf->Cell(40);
$pdf->Cell(25,6,number_format($sum1),1,0,'C');
$pdf->Cell(25,6,number_format($sum),1,0,'C');
$pdf->Output();



 ?>
