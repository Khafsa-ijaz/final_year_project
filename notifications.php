<?php 
include('session_head.php');
  $counting=0;
  $total=0;
  $count=0;
  $sumc=0;
  $sumt=0;
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
     
   include('potrait.php');
   $this->SetTextColor(0,0,0);
      $this->SetFont('Arial','B',13);
          $this->SetTextColor(48, 74, 123);
    $this->Cell(145,10,'CLASSES LIST',0,0,'C');

    $this->Ln(7);
    }
    else{
    $this->SetFillColor( 16, 144, 205);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',8);



 $this->Cell(12,10,'S#',1,0,'C',1);
    $this->Cell(50,10,' CLASS NAME',1,0,'L',1);
    $this->Cell(50,10,'GROUP',1,0,'L',1);
$this->Cell(20,10,'SESSION',1,0,'L',1);

    $this->Ln(7);
}
}

function Footer()
{
  // To be implemented in your own inherited class
  $this->Ln(10);
  $this->Cell(80);
  $this->SetFont('Arial','B',8);
  $this->Cell(0, 5, "Page " . $this->PageNo() . "/{nb}", 0, 1);
  $this->Cell(80);
  $this->SetFont('Arial','B',5);
  $this->Cell(18, 5, "Developed BY:", 0, 0);
  $this->SetFont('Arial','B',5);
  $this->SetTextColor(16, 144, 205);
  $this->Cell(30, 5, "KHAFSA_IJAZ", 0, 0);
}
}
$pdf = new PDF();
$pdf->AddPage('');
$pdf->AliasNbPages();
$pdf->Image('download.png',10,5,30);
$pdf->SetFont('Arial','',7);

  

 
    
 $pdf->Ln(5);
 
 

 
 
    $pdf->SetFillColor(16, 144, 205);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);

     $pdf->Cell(30);
 $pdf->Cell(12,7,'S#',1,0,'C',1);
    $pdf->Cell(50,7,'CLASS NAME',1,0,'L',1);
    $pdf->Cell(50,7,'GROUP',1,0,'L',1);
$pdf->Cell(20,7,'SESSION',1,0,'L',1);
     
                    $pdf->Ln(7);
    // Title

$sql = "SELECT * FROM classes  ";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  {


         

$a1=date("M",strtotime($row['jdate']));
      $a2=date("Y",strtotime($row['jdate']));
      $a3=date("d",strtotime($row['jdate']));
      $format=$a3."-".$a1."-".$a2;

         $pdf->Cell(30);
                   $pdf->SetFont('Arial','',7);
   $pdf->SetTextColor(0,0,0);
       $pdf->Cell(12,6,++$counting,1,0,'C');





$pdf->CellFitScale(50,6,$row['cname'],1,0,'L');
$pdf->CellFitScale(50,6,$row['cgroup'],1,0,'L');
$pdf->CellFitScale(20,6,$row['session'],1,0,'L');

 $pdf->Ln(6);





}
}


   $pdf->Cell(30);
date_default_timezone_set("Asia/Karachi");

$data=date("Y-m-d");
$time=date("H:i:s");

     $d11=date("M",strtotime($data));
      $d33=date("Y",strtotime($data));
      $d22=date("d",strtotime($data));

      $dd1=$d22."-".$d11."-".$d33;

 $pdf->Ln(4);
  $pdf->SetFont('Arial','B',7);
  $pdf->SetTextColor(48,74,123);

     $pdf->Cell(-35);
$pdf->Cell(280,5,'Printed on Date '.$dd1.' Time '.$time. ' By '.$rowsession['username'],0,0,'C');
 $pdf->SetTextColor(0,0,0);
//output
    
 
   

$pdf->Output();



 ?>
