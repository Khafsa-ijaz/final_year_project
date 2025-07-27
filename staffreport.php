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

     
     
     
      
      
      
   include('include_pdf_landscape_header2.php');
   $this->SetTextColor(0,0,0);
      $this->SetFont('Arial','B',13);
          $this->SetTextColor(48, 74, 123);
    $this->Cell(130,10,'STAFF LOGIN REPORT',0,0,'C');



   
    $this->Ln(7);
    }
    else{
    $this->SetFillColor(48, 74, 123);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',8);
 $this->Cell(12,7,'ID',1,0,'C',1);
    $this->Cell(90,7,'NAME',1,0,'L',1);
    $this->Cell(60,7,'DESIGNATION',1,0,'L',1);
$this->Cell(30,7,'PORTAL STATUS',1,0,'L',1);
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
  $this->Cell(18, 5, "Proudly Powered By", 0, 0);
  $this->SetFont('Arial','B',5);
  $this->SetTextColor(51,153,0);
  $this->Cell(30, 5, "PAKSOFTWARE", 0, 0,1);
}
}
$pdf = new PDF();
$pdf->AddPage('');
$pdf->AliasNbPages();
$pdf->Image('download.png',10,5,25);
$pdf->SetFont('Arial','',7);

  

 
    
 $pdf->Ln(5);
 
 

 
 
    $pdf->SetFillColor(48, 74, 123);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);

 $pdf->Cell(12,7,'ID',1,0,'C',1);
    $pdf->Cell(90,7,'NAME',1,0,'L',1);
    $pdf->Cell(60,7,'DESIGNATION',1,0,'L',1);
$pdf->Cell(30,7,'PORTAL STATUS',1,0,'L',1);
  
         
                    $pdf->Ln(7);
    // Title

         
           $sum1=0;
                 $sum2=0;
                       $sql = "SELECT * from employees where status='Active' ";

                            if($resultt = mysqli_query($conn, $sql)){
                            while($row =  mysqli_fetch_array($resultt)){
                                
                              
                              if ($row['pstatus']=='1')
                              {
                                  ++$act;
                              }
                              if ($row['pstatus']=='0')
                              {
                                 ++$inc;
                              }
                             

   $pdf->SetFont('Arial','',9);
   $pdf->SetTextColor(0,0,0);

$pdf->Cell(12,6,$row['id'],1,0,'C');
$pdf->Cell(90,6,$row['name'],1,0,'L');
$pdf->Cell(60,6,$row['designation'],1,0,'L');


if ($row['pstatus']=='1')
{
$pdf->Cell(30,6,'Enabled',1,0,'L');
}

if ($row['pstatus']=='0')
{
$pdf->Cell(30,6,'Disabled',1,0,'L');
}




$pdf->Ln(7);

   }
                                   
                            }  


$pdf->Ln(2);

    $pdf->Cell(52);

 $pdf->SetFont('Arial','B',10);

 //$pdf->Cell(40);
$pdf->SetFillColor(57,184,227);
    $pdf->SetTextColor(255,255,255);
$pdf->Cell(50,6,'Enabled Portals: '.number_format($act),1,0,'L',1);
$pdf->Cell(50,6,'Disabled Portals: '.number_format($inc),1,0,'L',1);



    


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
