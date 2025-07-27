<?php 
include('session_head.php');
  $counting=0;
  $total=0;
  $count=0;
  $sumc=0;
  $sumt=0;
  $date=$_POST['date'];
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
     
     $date=$_POST['date'];
     
     
     
     
      $a11=date("M",strtotime($date));
      $a21=date("Y",strtotime($date));
      $a31=date("d",strtotime($date));
      $format1=$a31."-".$a11."-".$a21;

     
     
     
     
     
   include('include_pdf_landscape_header.php');
   $this->SetTextColor(0,0,0);
      $this->SetFont('Arial','B',13);
          $this->SetTextColor(48, 74, 123);
    $this->Cell(160,10,'IN-ACTIVE EMPLOYEES LIST',0,0,'C');
    
     $this->Ln(7);
  $this->Cell(280,10,'DATE: ' .$format1,0,0,'C');
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
                  $this->Cell(20,7,'IN-ACTIVE',1,0,'L',1);
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
                  $pdf->Cell(20,7,'IN-ACTIVE',1,0,'L',1);
                    $pdf->Ln(7);
    // Title

$sql = "SELECT * FROM employees where status='In-Active' and iad='$date' order by iad DESC";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  {


              if ($row['status']=='Active')
              {


   $pdf->SetFont('Arial','I',7.5);
   $pdf->SetTextColor(0,0,0);
       $pdf->Cell(12,6,++$counting,1,0,'C');

$pdf->CellFitScale(50,6,$row['name'],1,0,'L');
$pdf->CellFitScale(50,6,$row['fname'],1,0,'L');
$pdf->CellFitScale(20,6,$row['mob'],1,0,'L');
$pdf->CellFitScale(30,6,$row['qualification'],1,0,'L');

$pdf->CellFitScale(30,6,$row['designation'],1,0,'L');

$pdf->CellFitScale(58,6,$row['address'],1,0,'L');
   
$pdf->CellFitScale(15,6,$row['jdate'],1,0,'L');
$pdf->CellFitScale(20,6,$row['status'],1,0,'L');
 $pdf->Ln(6);
}


              if ($row['status']=='In-Active')
              {
                  $a1=date("M",strtotime($row['jdate']));
      $a2=date("Y",strtotime($row['jdate']));
      $a3=date("d",strtotime($row['jdate']));
      $format=$a3."-".$a1."-".$a2;



    $a13=date("M",strtotime($row['iad']));
      $a23=date("Y",strtotime($row['iad']));
      $a33=date("d",strtotime($row['iad']));
      $format3=$a33."-".$a13."-".$a23;


                   $pdf->SetFont('Arial','',7);

 $pdf->SetFillColor(228, 30, 63);

                     $pdf->SetFont('Arial','',7);
   $pdf->SetTextColor(255,255,255);
       $pdf->Cell(12,6,++$counting,1,0,'C',1);

$pdf->CellFitScale(50,6,$row['name'],1,0,'L',1);
$pdf->CellFitScale(50,6,$row['fname'],1,0,'L',1);
$pdf->CellFitScale(20,6,$row['mob'],1,0,'L',1);
$pdf->CellFitScale(30,6,$row['qualification'],1,0,'L',1);

$pdf->CellFitScale(30,6,$row['designation'],1,0,'L',1);

$pdf->CellFitScale(58,6,$row['address'],1,0,'L',1);
 
$pdf->CellFitScale(15,6,$format,1,0,'L',1);
$pdf->CellFitScale(20,6,$format3,1,0,'L',1);
 $pdf->Ln(6);
}


}
}


   
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
