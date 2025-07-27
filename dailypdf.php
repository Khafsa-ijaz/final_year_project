<?php 
include('connection.php');
 $date=$_POST['date'];

include('connection.php');
include_once('libs/fpdf.php');

$cname=0;
class PDF extends FPDF
{
function Header()
{
   $date=$_POST['date'];

    // Line break
   // $this->Ln(10);
    if ($this->PageNo()==1) {
      # code...
     
   include('include_pdf_landscape_header.php');
    include('connection.php');
    
 

       $a1=date("F",strtotime($date));
      $a2=date("Y",strtotime($date));
      $a3=date("d",strtotime($date));
      $format=$a3."-".$a1."-".$a2;

    $this->Cell(150,10,' Date: '.$format,0,0,'C');
     $this->Ln(10);
     $this->Cell(70);
    $this->Cell(150,10,'Staff Attendance List ',0,0,'C');

    $this->Ln(10);

    }
    else{
    $this->SetFillColor(61, 57, 57);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',10);
    
$this->Cell(90);
$this->Cell(5,10,'S#',1,0,'C',1);
$this->Cell(15,10,'ID',1,0,'C',1);
$this->Cell(70,10,'Employee Name',1,0,'C',1);  
$this->Cell(30,10,'Status',1,0,'C',1);        
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
$pdf->AddPage('L');
$pdf->AliasNbPages();

$pdf->SetFont('Arial','',7.5);

  
$pdf->SetFillColor(61, 57, 57);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(90);
$pdf->Cell(5,10,'S#',1,0,'C',1);
$pdf->Cell(15,10,'ID',1,0,'C',1);
$pdf->Cell(70,10,'Employee Name',1,0,'C',1);
$pdf->Cell(30,10,'Status',1,0,'C',1);
$pdf->Ln(10);
    // Title


$pdf->SetTextColor(0,0,0);
$counting=0;

 $sql = "SELECT emp_id,status from tattendence  where date='$date'  ";

                            if($resultt = mysqli_query($conn, $sql)){
                            while($row =  mysqli_fetch_array($resultt)){
                              
           
                                                    
$pdf->SetFont('Arial','',7.5);
$pdf->Cell(90);
$pdf->Cell(5,7,++$counting,1,0,'L');
$pdf->Cell(15,7,$row['emp_id'],1,0,'L');

 $query="SELECT name FROM employees where id='$row[emp_id]'";
              $result2 = mysqli_query($conn, $query);
            
             $row2 = mysqli_fetch_assoc($result2);

$pdf->Cell(70,7,$row2['name'],1,0,'L');
$pdf->Cell(30,7,$row['status'],1,0,'C');
$pdf->Ln(7);


}
}


$pdf->Output();



 ?>
