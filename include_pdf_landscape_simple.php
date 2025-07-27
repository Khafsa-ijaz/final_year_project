<?php
include('connection.php');
ini_set('display_errors', '0');  
error_reporting(E_ALL | E_STRICT);
$sqlnav123 = "SELECT * FROM school_info";
$resultnav123 = $conn->query($sqlnav123);

if ($resultnav123->num_rows > 0) {
  // output data of each row
  while($rownav123 = $resultnav123->fetch_assoc()) {
$navname=$rownav123['name'];
$str=strtoupper($navname);
$navaddress=$rownav123['address'];
$navcontact=$rownav123['contact'];
  }
} 

$pdf->SetFont('Arial','I',20);
    // Move to the right
    $pdf->Cell(90);
    // Title
    $pdf->Cell(110,10,$str,'B',0,'C');
    $pdf->Ln(10);
    $pdf->Cell(90);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(16,5,'Address:',0,0,'L');

    $pdf->Cell(95,5,$navaddress,0,0,'L');
    $pdf->Ln(5);
    $pdf->Cell(90);

    //$pdf->Cell(26,5,'Phone Number:',0,0,'L');

    $pdf->Cell(27,5,$navcontact,0,0,'L');

    $pdf->Ln(6);
    $pdf->Cell(60);
    // Title

    $pdf->SetFont('Arial','I',15);



   
?>