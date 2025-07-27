<?php 
include('session_head.php');
  $counting=0;
  $total=0;
  $count=0;
  $sumc=0;
  $sumt=0;

include('connection.php');
include_once('libs/fpdf.php');
$sqlnav124 = "SELECT * FROM school_info";
$resultnav124 = $conn->query($sqlnav124);

if ($resultnav124->num_rows > 0) {
  // output data of each row
  while($rownav124 = $resultnav124->fetch_assoc()) {

$navslogoo=$rownav124['slogo'];
$navslogo="uploads/$navslogoo";
  }
} 
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
      $this->SetFont('Arial','B',11);
     $this->Cell(180,10,'Classes List',0,0,'C');

    $this->Ln(7);
    }
    else{
   $this->SetFillColor(48, 74, 123);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',8);


    $this->Cell(12,10,'S#',1,0,'C',1);
    $this->Cell(60,10,'Class Name',1,0,'C',1);
    $this->Cell(60,10,'Class Teacher',1,0,'C',1);
$this->Cell(30,10,'Class Fees',1,0,'C',1);
     $this->Cell(20,10,'Class Group',1,0,'C',1);
          $this->Cell(20,10,'Class Periods',1,0,'C',1);
         
    $this->Ln(5);
}
}

function Footer()
{
  // To be implemented in your own inherited class
  $this->Ln(10);
  $this->Cell(130);
  $this->SetFont('Arial','I',8);
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
$pdf->AddPage('L');
$pdf->AliasNbPages();
$pdf->Image($navslogo,10,5,35);

$pdf->SetFont('Arial','',7);

  

 
    
 $pdf->Ln(5);
 $pdf->cell(45);
   $pdf->SetFillColor(48, 74, 123);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(12,10,'S#',1,0,'C',1);
    $pdf->Cell(60,10,'Class Name',1,0,'C',1);
    $pdf->Cell(60,10,'Class Teacher',1,0,'C',1);
$pdf->Cell(30,10,'Class Fees',1,0,'C',1);
     $pdf->Cell(20,10,'Class Group',1,0,'C',1);
          $pdf->Cell(20,10,'Class Periods',1,0,'C',1);
                    $pdf->Ln(10);
    // Title

 $sql = "SELECT * FROM classes order by ID DESC";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  {
              $id=$row['cteacher'];

$sql1 = "SELECT name FROM employees where id='$id'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1= $result1->fetch_assoc()) {
$tname=$row1['name'];
  }
} 
     

    $pdf->cell(45);
   $pdf->SetFont('Arial','I',7.5);
   $pdf->SetTextColor(0,0,0);
       $pdf->Cell(12,6,++$counting,1,0,'C');

$pdf->Cell(60,6,$row['cname'],1,0,'L');
$pdf->Cell(60,6,$tname,1,0,'L');
$pdf->Cell(30,6,number_format($row['cfees']),1,0,'C');
$pdf->Cell(20,6,$row['cgroup'],1,0,'L');
$pdf->Cell(20,6,$row['cperiods'],1,0,'C');

 $pdf->Ln(6);


}
}



    
 date_default_timezone_set("Asia/Karachi");
$pdf->Cell(100);
$data=date("Y-m-d");
$time=date("H:i:s");

     $d11=date("M",strtotime($data));
      $d33=date("Y",strtotime($data));
      $d22=date("d",strtotime($data));

      $dd1=$d22."-".$d11."-".$d33;

 $pdf->Ln(6);
  $pdf->SetFont('Arial','B',7);
  $pdf->SetTextColor(48,74,123);
$pdf->Cell(300,5,'Printed on Date '.$dd1.' Time '.$time. ' By '.$rowsession['username'],0,0,'C');
 $pdf->SetTextColor(0,0,0);
   

$pdf->Output();



 ?>
