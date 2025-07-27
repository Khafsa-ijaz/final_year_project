<?php
include('connection.php');
ini_set('display_errors', '0');  
error_reporting(E_ALL | E_STRICT);
$pdf->SetFont('Times','B',20);
$pdf->SetFont('Times','U',20);



    $pdf->SetTextColor(48,74,123);
    // Move to the right
   $pdf->Cell(55);
    // Title
   //  $pdf->Cell(10);
   $pdf->SetTextColor(48,74,123);
    $pdf->Cell(100,5,'Samara Builders & Developers',0,0,'C');
   // $pdf->Cell(100,10,$str,'0','C',0);
    $pdf->Ln(6);
    $pdf->Cell(50);
    $pdf->SetTextColor(48,74,123);
    $pdf->SetFont('Times','',10);
    $pdf->Cell(10,5,'Address:',0,0,'R');
    
$pdf->SetTextColor(48,74,123);
    $pdf->Cell(100,5,'RDF Centre, Mauve Area, 4th Floor, Office # 3, G9/1, Islamabad,44000',0,0,'L');
    $pdf->Ln(5);
    $pdf->Cell(45);

    //$pdf->Cell(26,5,'Phone Number:',0,0,'L');
$pdf->Cell(38);
$pdf->SetTextColor(48,74,123);
    $pdf->Cell(27,5,'051-8448106-7',0,0,'L');

    $pdf->Ln(10);
    $pdf->Cell(30);
    // Title

//    $pdf->SetFont('Arial','I',15);



   
?>