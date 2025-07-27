<?php
include('connection.php');
ini_set('display_errors', '0');  
error_reporting(E_ALL | E_STRICT);
$sqlnav124 = "SELECT * FROM school_info";
$resultnav124 = $conn->query($sqlnav124);

if ($resultnav124->num_rows > 0) {
  // output data of each row
  while($rownav124 = $resultnav124->fetch_assoc()) {
$navname=$rownav124['name'];
$str=strtoupper($navname);
$navaddress=$rownav124['address'];
$navcontact=$rownav124['contact'];
$slogo="uploads/".$rownav124['slogo'];
  }
} 

$pdf->SetFont('Times','B',20);
$pdf->SetFont('Times','U',20);

$pdf->Image($slogo,15,5,30);   
    // Move to the right
  $pdf->Cell(50);
    // Title
   //  $this->Cell(10);
     $pdf->SetTextColor(48,74,123);
    $pdf->Cell(100,5,$str,0,0,'C');
   // $this->Cell(100,10,$str,'0','C',0);
    $pdf->Ln(6);
    $pdf->Cell(60);
 
    $pdf->SetFont('Times','',10);
      $pdf->SetTextColor(48,74,123);
    $pdf->Cell(10,5,'Address:',0,0,'R');
    

    $pdf->Cell(100,5,$navaddress,0,0,'L');
    $pdf->Ln(5);
    $pdf->Cell(50);

    //$this->Cell(26,5,'Phone Number:',0,0,'L');
$pdf->Cell(82);
    $pdf->Cell(27,5,$navcontact,0,0,'L');

    $pdf->Ln(10);
    $pdf->Cell(60);
    // Title

//    $this->SetFont('Arial','I',15);



   
?>