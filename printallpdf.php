<?php 
include('session_head.php');
  $counting=0;
  $total=0;
  $count=0;
  $sumc=0;
  $sumt=0;
  $cc=0;
include('connection.php');
include_once('libs/fpdf.php');
$id =$_GET['id'];


class PDF extends FPDF
{
function Header()
{

      
    // Line break
   // $this->Ln(10);
    if ($this->PageNo()==1) {
      # code...
     
 
    }
    else{
 
}
}

function Footer()
{


}
}
$pdf = new PDF();

$pdf->AliasNbPages();
$uploadsDir = __DIR__ . '/uploads/';


$sql = "SELECT file FROM files where reg_no='$id'";
$result = $conn->query($sql);


  // output data of each row
  while($row = $result->fetch_assoc()) {


    $fileName = $row['file'];
     $filePath = $uploadsDir . $fileName;
$pdf->AddPage('');

$pdf->Image($filePath,5,5,195);


$pdf->Ln(250);
  $pdf->SetFont('Arial','',7);
   $pdf->SetTextColor(0,0,0);
   $pdf->Cell(75);
  $pdf->Cell(20,6,'Page No :'.++$cc,0,0,'C');

 
  }








  

 
    

$pdf->Output();



 ?>
