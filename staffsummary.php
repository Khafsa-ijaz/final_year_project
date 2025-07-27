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
     
   include('include_pdf_landscape_header2.php');
   $this->SetTextColor(0,0,0);
      $this->SetFont('Arial','B',13);
          $this->SetTextColor(48, 74, 123);
    $this->Cell(130,10,'STAFF SUMMARY REPORT',0,0,'C');

    $this->Ln(7);
    }
    else{
    $this->SetFillColor(16, 144, 205);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',8);

 $pdf->Cell(12,7,'S#',1,0,'C',1);
    $pdf->Cell(90,7,'DEPARTMENT',1,0,'L',1);
    $pdf->Cell(30,7,'ACTIVE',1,0,'C',1);
$pdf->Cell(30,7,'IN-ACTIVE',1,0,'C',1);
     $pdf->Cell(30,7,'TOTAL',1,0,'C',1);
    $this->Ln(7);
}
}

function Footer()
{
  // To be implemented in your own inherited class
  $this->Ln(10);
  $this->Cell(90);
  $this->SetFont('Arial','B',8);
  $this->Cell(0, 5, "Page " . $this->PageNo() . "/{nb}", 0, 1);
  $this->Cell(80);
  $this->SetFont('Arial','B',5);
  $this->Cell(18, 5, "Developed By", 0, 0);
  $this->SetFont('Arial','B',5);
  $this->SetTextColor(51,153,0);
  $this->Cell(30, 5, "Khafsa Ijaz & Habeeba Mateen", 0, 0,1);
}
}
$pdf = new PDF();
$pdf->AddPage('');
$pdf->AliasNbPages();
$pdf->Image('download.png',10,5,25);
$pdf->SetFont('Arial','',7);

  

 
    
 $pdf->Ln(5);
 
 

 
 
    $pdf->SetFillColor(16, 144, 205);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);

 $pdf->Cell(12,7,'S#',1,0,'C',1);
    $pdf->Cell(90,7,'DEPARTMENT',1,0,'L',1);
    $pdf->Cell(30,7,'ACTIVE',1,0,'C',1);
$pdf->Cell(30,7,'IN-ACTIVE',1,0,'C',1);
     $pdf->Cell(30,7,'TOTAL',1,0,'C',1);
         
                    $pdf->Ln(7);
    // Title

 $sql = "SELECT DISTINCT department from employees";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  {
               $department=$row['department'];


     
          $sum=0;
            
             $sql2 = "SELECT id FROM employees where department='$department'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
   ++$sum;
    ++$sums;
  }
}
         
           $sum21=0;
           
                        $sql21 = "SELECT id FROM employees where department='$department' and status='Active'";
$result21 = $conn->query($sql21);

if ($result21->num_rows > 0) {
  // output data of each row
  while($row21 = $result21->fetch_assoc()) {
   ++$sum21;
   ++$sum21s;
  }
}
         
       
         $sum212=0;
           
                        $sql212 = "SELECT id FROM employees where department='$department' and status='In-Active'";
$result212 = $conn->query($sql212);

if ($result212->num_rows > 0) {
  // output data of each row
  while($row212 = $result212->fetch_assoc()) {
   ++$sum212;
     ++$sum212s;
  }
}
                 
     
    
     
     
     


   $pdf->SetFont('Arial','',7);
   $pdf->SetTextColor(0,0,0);
       $pdf->Cell(12,6,++$counting,1,0,'C');

$pdf->Cell(90,6,$department,1,0,'L');

$pdf->Cell(30,6,number_format($sum),1,0,'C');
$pdf->Cell(30,6,number_format($sum212),1,0,'C');
$pdf->Cell(30,6,number_format($sum21),1,0,'C');


 $pdf->Ln(6);


}
}



    $pdf->Cell(82);

 $pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'TOTAL:',0,0,'R');
 //$pdf->Cell(40);
$pdf->SetFillColor(91, 131, 67);
    $pdf->SetTextColor(255,255,255);
$pdf->Cell(30,6,number_format($sums),1,0,'C',1);
$pdf->Cell(30,6,number_format($sum212s),1,0,'C',1);
$pdf->Cell(30,6,number_format($sum21s),1,0,'C',1);



    


//output
    
 
   


   
date_default_timezone_set("Asia/Karachi");
$pdf->Cell(45);
$data=date("Y-m-d");
$time=date("H:i:s");

     $d11=date("M",strtotime($data));
      $d33=date("Y",strtotime($data));
      $d22=date("d",strtotime($data));

      $dd1=$d22."-".$d11."-".$d33;

 $pdf->Ln(10);
  $pdf->SetFont('Arial','B',7);
  $pdf->SetTextColor(48,74,123);
$pdf->Cell(200,5,'Printed on Date '.$dd1.' Time '.$time. ' By '.$rowsession['username'],0,0,'C');
 $pdf->SetTextColor(0,0,0);
//output
    
 
   

$pdf->Output();



 ?>
