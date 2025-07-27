<?php
include('connection.php');
ini_set('display_errors', '0');  
error_reporting(E_ALL | E_STRICT);
$this->SetFont('Times','B',20);
$this->SetFont('Times','U',20);



    $this->SetTextColor(48,74,123);
    // Move to the right
   $this->Cell(55);
    // Title
   //  $this->Cell(10);
   $this->SetTextColor(48,74,123);
    $this->Cell(100,5,'Women University of Ajk, Bagh',0,0,'C');
   // $this->Cell(100,10,$str,'0','C',0);
    $this->Ln(6);
    $this->Cell(50);
    $this->SetTextColor(48,74,123);
    $this->SetFont('Times','',10);
    $this->Cell(10,5,'Address:',0,0,'R');
    
$this->SetTextColor(48,74,123);
    $this->Cell(100,5,' WUBAJK Banipasri campus, near Roost Hotel Bagh AJK',0,0,'L');
    $this->Ln(5);
    $this->Cell(45);

    //$this->Cell(26,5,'Phone Number:',0,0,'L');
$this->Cell(38);
$this->SetTextColor(48,74,123);
    $this->Cell(27,5,'051-8448106-7',0,0,'L');

    $this->Ln(10);
    $this->Cell(30);
    // Title

//    $this->SetFont('Arial','I',15);



   
?>