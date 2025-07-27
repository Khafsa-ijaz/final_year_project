<?php 
include('session_head.php');
  $counting=0;
  $total=0;
  $count=0;
  $sumc=0;
  $sumt=0;
  $sum=0;
include('connection.php');
include_once('libs/fpdf.php');


class PDF extends FPDF
{
function Header()
{

      
    // Line break
   // $this->Ln(10);
    if ($this->PageNo()==1) {
      # code...
     
   include('include_pdf_landscape_header.php');
   $this->SetTextColor(0,0,0);
      $this->SetFont('Arial','B',13);
          $this->SetTextColor(48, 74, 123);
    $this->Cell(160,10,'BASIC SALARY REPORT',0,0,'C');

    $this->Ln(7);
    }
    else{
    $this->SetFillColor(48, 74, 123);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',8);

 $this->Cell(12,7,'S#',1,0,'C',1);
    $this->Cell(50,7,'NAME',1,0,'L',1);
    $this->Cell(50,7,'FATHER NAME',1,0,'L',1);
$this->Cell(20,7,'MOBILE',1,0,'L',1);
     $this->Cell(30,7,'QUALIFICATION',1,0,'L',1);
          $this->Cell(30,7,'DESIGNATION',1,0,'L',1);
             $this->Cell(58,7,'ADDRESS',1,0,'L',1);
             $this->Cell(15,7,'JOIN',1,0,'L',1);
                  $this->Cell(20,7,'SALARY',1,0,'R',1);
    $this->Ln(7);
}
}

function Footer()
{
  // To be implemented in your own inherited class
  $this->Ln(10);
  $this->Cell(130);
  $this->SetFont('Arial','B',8);
  $this->Cell(0, 5, "Page " . $this->PageNo() . "/{nb}", 0, 1);
  $this->Cell(120);
  $this->SetFont('Arial','B',5);
  $this->Cell(18, 5, "Proudly Powered By", 0, 0);
  $this->SetFont('Arial','B',5);
  $this->SetTextColor(51,153,0);
  $this->Cell(30, 5, "PAKSOFTWARE", 0, 0,1);
}
}
$pdf = new PDF();
$pdf->AddPage('L');
$pdf->AliasNbPages();
$pdf->Image('download.png',10,5,30);
$pdf->SetFont('Arial','',7);

  

 
    
 $pdf->Ln(5);
 
 

 
 
    $pdf->SetFillColor(48, 74, 123);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);

 $pdf->Cell(12,7,'S#',1,0,'C',1);
    $pdf->Cell(50,7,'NAME',1,0,'L',1);
    $pdf->Cell(50,7,'FATHER NAME',1,0,'L',1);
$pdf->Cell(20,7,'MOBILE',1,0,'L',1);
     $pdf->Cell(30,7,'QUALIFICATION',1,0,'L',1);
          $pdf->Cell(30,7,'DESIGNATION',1,0,'L',1);
             $pdf->Cell(58,7,'ADDRESS',1,0,'L',1);
             $pdf->Cell(15,7,'JOIN',1,0,'L',1);
                  $pdf->Cell(20,7,'SALARY',1,0,'R',1);
                    $pdf->Ln(7);
    // Title

$sql = "SELECT * FROM employees where status='Active' order by ID DESC";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  {


              if ($row['status']=='Active')
              {


 $pdf->SetFont('Arial','',7);

   $pdf->SetTextColor(0,0,0);
       $pdf->Cell(12,6,++$counting,1,0,'C');

$pdf->CellFitScale(50,6,$row['name'],1,0,'L');
$pdf->CellFitScale(50,6,$row['fname'],1,0,'L');
$pdf->CellFitScale(20,6,$row['mob'],1,0,'L');
$pdf->CellFitScale(30,6,$row['qualification'],1,0,'L');

$pdf->CellFitScale(30,6,$row['designation'],1,0,'L');

$pdf->CellFitScale(58,6,$row['address'],1,0,'L');
   
  $sum=$row['salary']+$sum; 
   
$pdf->CellFitScale(15,6,$row['jdate'],1,0,'L');
$pdf->CellFitScale(20,6,number_format($row['salary']),1,0,'R');
 $pdf->Ln(6);
}


              if ($row['status']=='In-Active')
              {
                  
                  
                   $pdf->SetFont('Arial','',7);

 $pdf->SetFillColor(228, 30, 63);
    $pdf->SetTextColor(255,255,255);

   $pdf->SetTextColor(255,255,255);
       $pdf->Cell(12,6,++$counting,1,0,'C',1);




$pdf->CellFitScale(50,6,$row['name'],1,0,'L',1);
$pdf->CellFitScale(50,6,$row['fname'],1,0,'L',1);
$pdf->CellFitScale(20,6,$row['mob'],1,0,'L',1);
$pdf->CellFitScale(30,6,$row['qualification'],1,0,'L',1);

$pdf->CellFitScale(30,6,$row['designation'],1,0,'L',1);

$pdf->CellFitScale(58,6,$row['address'],1,0,'L',1);
 
$pdf->CellFitScale(15,6,$row['jdate'],1,0,'L',1);
$pdf->CellFitScale(20,6,$row['salary'],1,0,'L',1);
 $pdf->Ln(6);
}


}
}




    $pdf->Cell(245);
 $pdf->SetFont('TIMES','B',10);
$pdf->Cell(20,6,'TOTAL:',0,0,'R');
 //$pdf->Cell(40);
$pdf->SetFillColor(57,184,227);
    $pdf->SetTextColor(255,255,255);
$pdf->CellFitScale(20,6,number_format($sum),1,0,'R',1);

   
date_default_timezone_set("Asia/Karachi");
$pdf->Cell(90);
$data=date("Y-m-d");
$time=date("H:i:s");

     $d11=date("M",strtotime($data));
      $d33=date("Y",strtotime($data));
      $d22=date("d",strtotime($data));

      $dd1=$d22."-".$d11."-".$d33;

 $pdf->Ln(6);
  $pdf->SetFont('Arial','B',7);
  $pdf->SetTextColor(48,74,123);
$pdf->Cell(280,5,'Printed on Date '.$dd1.' Time '.$time. ' By '.$rowsession['username'],0,0,'C');
 $pdf->SetTextColor(0,0,0);
//output
    
 
   

$pdf->Output();



 ?>
