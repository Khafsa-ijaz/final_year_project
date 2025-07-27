<?php 
include('session_head.php');
  $counting=0;
  $total=0;
  $count=0;
  $sumc=0;
  $sumt=0;
include('connection.php');
include_once('libs/fpdf.php');
$contact=$_POST['contact'];

class PDF extends FPDF
{
function Header()
{
    
    include('connection.php');
$contact=$_POST['contact'];




$sql = "SELECT name FROM dealer where mob='$contact'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   $name=$row['name'];
  }
}








    // Line break
   // $this->Ln(10);
    if ($this->PageNo()==1) {
      # code...
     
   include('include_pdf_landscape_header.php');
   
   $this->SetTextColor(0,0,0);
      $this->SetFont('Arial','BU',13);
          $this->SetTextColor(48, 74, 123);
    $this->Cell(160,10,strtoupper($name),0,0,'C');
    $this->Ln(7);
    $this->SetFont('Arial','U',12);
    $this->Cell(60);
    $this->Cell(160,10,'DEALERS LEDGER : '.$contact,0,0,'C');
    $this->Ln(7);
    }
    else{


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
    
     $pdf->Cell(-7);
  $pdf->Cell(10,7,'S#',1,0,'C',1);
  $pdf->Cell(12,7,'Plot#',1,0,'C',1);
    $pdf->Cell(20,7,'Project Cat',1,0,'L',1);
    $pdf->Cell(25,7,'Plot Cat',1,0,'L',1);
    $pdf->Cell(25,7,'Plot Area',1,0,'L',1);
       $pdf->Cell(20,7,'Plot Size',1,0,'L',1);
          $pdf->Cell(30,7,'CUSTOMER NAME',1,0,'L',1);
                 $pdf->Cell(25,7,'CNIC',1,0,'L',1);
          
             $pdf->Cell(30,7,'SPO',1,0,'L',1);
                $pdf->Cell(30,7,'CONTACT',1,0,'L',1);
                    $pdf->Cell(30,7,'REMARKS',1,0,'L',1);
                        $pdf->Cell(30,7,'STATUS',1,0,'L',1);

 $pdf->Ln(7);
$counting=0;
$sql12 = "SELECT * FROM plot where contact='$contact'  order by pno asc";
            $result12 = mysqli_query($conn, $sql12);

            if (mysqli_num_rows($result12) > 0) {
            // output data of each row
             while($row12 = mysqli_fetch_assoc($result12))  {

 $pdf->SetFont('Arial','',7);

   $pdf->SetTextColor(0,0,0);

    $pdf->Cell(-7);
   ++$tc;
       $pdf->Cell(10,6,++$counting,1,0,'C');
       $pdf->CellFitScale(12,6,$row12['pno'],1,0,'L');
       $pdf->CellFitScale(20,6,$row12['category'],1,0,'L');
       $pdf->CellFitScale(25,6,$row12['pc'],1,0,'L');
       $pdf->CellFitScale(25,6,$row12['size'].' '.$row12['mk'],1,0,'L');
       $pdf->CellFitScale(20,6,$row12['km'],1,0,'L');
$pdf->CellFitScale(30,6,$row12['name'],1,0,'L');
$pdf->CellFitScale(25,6,$row12['cnic'],1,0,'L');
$pdf->CellFitScale(30,6,$row12['spo'],1,0,'L');
$pdf->CellFitScale(30,6,$row12['contact'],1,0,'L');
$pdf->CellFitScale(30,6,$row12['remarks'],1,0,'L');
$pdf->CellFitScale(30,6,$row12['status'],1,0,'L');

 $pdf->Ln(6);
 
 

 
 



           

}
}
 $counting=0;
 
 $pdf->Ln(5);
 





$pdf->Ln(2);

    $pdf->Cell(110);

 $pdf->SetFont('Arial','B',10);

 //$pdf->Cell(40);
$pdf->SetFillColor(57,184,227);
    $pdf->SetTextColor(255,255,255);
    
    
   
    
$pdf->Cell(60,6,'TOTAL PLOTS: '.number_format($tc),1,0,'L',1);




   
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
