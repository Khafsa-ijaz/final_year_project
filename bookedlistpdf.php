<?php 
include('session_head.php');

  $counting=0;
  $total=0;
  $count=0;
  $sumc=0;
  $sumt=0;
include('connection.php');
include_once('libs/fpdf.php');
$navslogo="uploads/rlogo2.png";

class PDF extends FPDF
{
function Header()
{include('connection.php');
    // Line break
   // $this->Ln(10);
    if ($this->PageNo()==1) {
      # code...
     
   include('include_pdf_landscape_header.php');
   $this->SetTextColor(0,0,0);
      $this->SetFont('Arial','B',11);
   $this->SetTextColor(48, 74, 123);
    $this->Cell(160,10,' BOOKED FLATS LIST ',0,0,'C');



    }
    else{
          $this->SetFillColor(48, 74, 123);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',8);
  
  $this->Cell(12,10,'S#',1,0,'C',1);
    $this->Cell(25,10,'FLOOR',1,0,'C',1);
    $this->Cell(20,10,'CATEGORY',1,0,'C',1);
     $this->Cell(15,10,'FLAT NO',1,0,'C',1);
    $this->Cell(25,10,'SIZE SQ FT',1,0,'C',1);
$this->Cell(25,10,'PER SQFT PRICE',1,0,'C',1);

$this->Cell(25,10,'Total Price',1,0,'C',1);

$this->Cell(25,10,'DOWN PAYMENT',1,0,'C',1);
$this->Cell(40,10,'DOWN PAYMENT VALUE',1,0,'C',1);
     $this->Cell(35,10,'REMANING AMOUNT',1,0,'C',1);
          $this->Cell(38,10,'QUATERLY INSTALLMENTS',1,0,'C',1);
                 
               $this->Ln(10);
       
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

  


                    
                    
                    
                    
                    
    // Title
    

    
 
    
    

$sql = "SELECT * FROM pricelist";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  {
                 $flatno=$row['flatno'];
                  $floor=$row['floor'];
                  
                  
        
        $sql2 = "SELECT * FROM itable where flatno='$flatno' and floor='$floor'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
 
      
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 if ($count==0)
                               {
    
     

                                      $pdf->SetFont('Arial','B',8);
                                       

   $pdf->SetFont('Arial','B',13);
   $pdf->Ln(5);
     // $pdf->cell(125);
     $pdf->SetTextColor(51,61,71);
  $pdf->Cell(80,10,'',0);
                                         $pdf->Ln(7.5);

                                  $pdf->SetFillColor(48, 74, 123);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);
  
  $pdf->Cell(12,10,'S#',1,0,'C',1);
    $pdf->Cell(25,10,'FLOOR',1,0,'C',1);
    $pdf->Cell(20,10,'CATEGORY',1,0,'C',1);
     $pdf->Cell(15,10,'FLAT NO',1,0,'C',1);
    $pdf->Cell(25,10,'SIZE SQ FT',1,0,'C',1);
$pdf->Cell(25,10,'PER SQFT PRICE',1,0,'C',1);

$pdf->Cell(25,10,'Total Price',1,0,'C',1);

$pdf->Cell(25,10,'DOWN PAYMENT',1,0,'C',1);
$pdf->Cell(40,10,'DOWN PAYMENT VALUE',1,0,'C',1);
     $pdf->Cell(35,10,'REMANING AMOUNT',1,0,'C',1);
          $pdf->Cell(38,10,'QUATERLY INSTALLMENTS',1,0,'C',1);
                 
               $pdf->Ln(4);
              
}
 $pdf->Ln(6);
$count++;

                 
                 
                 
                 
                 
                 $percent=$row['tp']*$row['dp'];
                 $percent1=$percent/100;


   $pdf->SetFont('Arial','I',7.5);
   $pdf->SetTextColor(0,0,0);
       $pdf->Cell(12,6,++$counting,1,0,'C');
$pdf->CellFitScale(25,6,$row['floor'],1,0,'L');
$pdf->CellFitScale(20,6,$row['category'],1,0,'L');

$pdf->CellFitScale(15,6,$row['flatno'],1,0,'C');
$pdf->CellFitScale(25,6,number_format($row['size']),1,0,'C');
$pdf->CellFitScale(25,6,number_format($row['per']),1,0,'C');
$pdf->CellFitScale(25,6,number_format($row['tp']),1,0,'C');

$pdf->CellFitScale(25,6,number_format($row['dp']).' %',1,0,'C');
$pdf->CellFitScale(40,6,number_format($percent1),1,0,'C');



$pdf->CellFitScale(35,6,number_format($row['ra']),1,0,'C');

$pdf->CellFitScale(38,6,number_format($row['qi']),1,0,'C');
 $pdf->Ln(1);

}




}
$count=0;
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
  $pdf->SetTextColor(0,0,0);
$pdf->Cell(300,5,'Printed on Date '.$dd1.' Time '.$time. ' By '.$rowsession['username'],0,0,'C');

//output
    
   

$pdf->Output();



 ?>
