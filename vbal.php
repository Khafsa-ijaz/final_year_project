<?php 
include('connection.php');
include('connection.php');
include_once('libs/fpdf.php');

$cname=0;
 $navslogo="uploads/rlogo2.png";
class PDF extends FPDF
{
function Header()
{
   
  
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
    $this->Cell(130,10,'VENDORS BALANCE AMOUNT',0,0,'C');



    $this->Ln(10);

    }
    else{
    $this->SetFillColor(48, 74, 123);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',8);

$this->CellFitScale(10,10,'S#',1,0,'C',1);
$this->CellFitScale(160,10,'NAME',1,0,'C',1);
$this->CellFitScale(20,10,'BALANCE',1,0,'C',1);      

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
$pdf->CellFitScale(160,10,'NAME',1,0,'C',1);
$pdf->CellFitScale(20,10,'BALANCE',1,0,'C',1);
  
$pdf->Ln(10);
    // Title


$pdf->SetTextColor(0,0,0);
$counting=0;

 $sql = "SELECT DISTINCT iname from ven  ";

                            if($resultt = mysqli_query($conn, $sql)){
                            while($row =  mysqli_fetch_array($resultt)){
                              
           
                                                    
$pdf->SetFont('Arial','',7.5);

$pdf->CellFitScale(10,7,++$counting,1,0,'L');
$pdf->CellFitScale(160,7,$row['iname'],1,0,'L');

$sql23 = "SELECT DISTINCT date FROM ven  ";
$result23 = $conn->query($sql23);

if ($result23->num_rows > 0) {
  // output data of each row
  while($row23 = $result23->fetch_assoc()) {
        $dates[] = $row23['date'];
       
     
       
   
  }
} 
date_default_timezone_set("Asia/Karachi");
$pdate=date("Y-m-d");
$ostRecent= 0;
      foreach($dates as $date){
        $curDate = $date;
        if ($curDate >= $mostRecent && $curDate <= $pdate) {
         $mostRecent = $curDate;
         }
      }
      $mostRecent;


$sql12 = "SELECT amountin,amountout FROM ven where date between '2021-04-01' and '$mostRecent' and iname='$row[iname]'  ";
$result12 = $conn->query($sql12);

if ($result12->num_rows > 0) {
  // output data of each row
  while($row12 = $result12->fetch_assoc()) {
      
      
      if ($row12['amountout']!='0')
{
    $balamtp=$row12['amountout']+$balamtp;
}

if ($row12['amountin']!='0')
{
    $balamtp=$balamtp-$row12['amountin'];
}
   
  }
} 




$pdf->CellFitScale(20,7,number_format($balamtp),1,0,'C');

$sum=$balamtp+$sum;

$pdf->Ln(7);

$balamtp=0;
}

}

                           
 $pdf->Cell(150);
 $pdf->SetFont('Arial','B',8);
$pdf->Cell(20,6,'SUBTOTAL:',0,0,'R');
 //$pdf->Cell(40);
$pdf->Cell(20,6,number_format($sum),1,0,'C');

$pdf->Output();



 ?>
