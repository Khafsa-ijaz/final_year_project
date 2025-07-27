<?php 
include('session_head.php');

 $date=$_POST['date'];
  $date1=$_POST['date1'];
    $a1=date("M",strtotime($date));
      $a3=date("Y",strtotime($date));
      $a2=date("d",strtotime($date));
      $format=$a2."-".$a1."-".$a3;







 $a11=date("M",strtotime($date1));
      $a31=date("Y",strtotime($date1));
      $a21=date("d",strtotime($date1));
      $format1=$a21."-".$a11."-".$a31;
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
  $date=$_POST['date'];
  $date1=$_POST['date1'];
    $a1=date("M",strtotime($date));
      $a3=date("Y",strtotime($date));
      $a2=date("d",strtotime($date));
      $format=$a2."-".$a1."-".$a3;







 $a11=date("M",strtotime($date1));
      $a31=date("Y",strtotime($date1));
      $a21=date("d",strtotime($date1));
      $format1=$a21."-".$a11."-".$a31;


      
    // Line break
   // $this->Ln(10);
    if ($this->PageNo()==1) {
      # code...
     
   include('include_pdf_landscape_header.php');
   $this->SetTextColor(0,0,0);
      $this->SetFont('Arial','B',11);
   $this->SetTextColor(48, 74, 123);
    $this->Cell(160,10,' AMBULANCE KM RECORD DATE '.$format.' *** '.$format1,0,0,'C');

    $this->Ln(4);

    }
    else{
       
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

$pdf->Image($navslogo,10,5,50);
$pdf->SetFont('Arial','',7);

  


                    
                    
                    
                    
                    
    // Title
    

    
   
    
    

$sql = "SELECT * FROM km where date between '$date' and '$date1' order by date,id";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  {
                 
                 if ($count==0)
                               {
    
     

                                      $pdf->SetFont('Arial','B',8);
                                       

   $pdf->SetFont('Arial','B',13);
   $pdf->Ln(7);
     // $pdf->cell(125);
     $pdf->SetTextColor(51,61,71);
  $pdf->Cell(80,10,$f,0);
                                         $pdf->Ln(7.5);

                                  $pdf->SetFillColor(48, 74, 123);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);
      $pdf->Cell(12,10,'S#',1,0,'C',1);
         $pdf->Cell(20,10,'DATE',1,0,'C',1);

    $pdf->Cell(50,10,'AMBULANCE',1,0,'C',1);
    $pdf->Cell(50,10,'DRIVER',1,0,'C',1);
     $pdf->Cell(30,10,'STARTING KM',1,0,'C',1);
    $pdf->Cell(30,10,'ENDING KM',1,0,'C',1);
    $pdf->Cell(30,10,'INCOME',1,0,'C',1);
  
  
    $pdf->Cell(60,10,'DESCRIPTION',1,0,'C',1);



                 
               $pdf->Ln(4);
              
}
 $pdf->Ln(6);
$count++;

                 
                 
                 
                
                 
         


   $pdf->SetFont('Arial','I',7.5);
   $pdf->SetTextColor(0,0,0);
       $pdf->Cell(12,6,++$counting,1,0,'C');


$pdf->CellFitScale(20,6,$row['date'],1,0,'C');
$pdf->CellFitScale(50,6,$row['amb'],1,0,'L');
$pdf->CellFitScale(50,6,$row['drv'],1,0,'C');
$pdf->CellFitScale(30,6,$row['sk'],1,0,'C');
$pdf->CellFitScale(30,6,$row['ek'],1,0,'C');
$pdf->CellFitScale(30,6,$row['inc'],1,0,'C');

$pdf->CellFitScale(60,6,$row['descrip'],1,0,'C');



 $pdf->Ln(1);
                
      
                          
                 
                 
                 

}




}
$count=0;



   
 
   
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
