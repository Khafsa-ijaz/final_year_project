<?php 
include('session_head.php');
   $date=$_POST['date'];
 $date1=$_POST['date1'];

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
     $date=$_POST['date'];
$date1=$_POST['date1'];

$a1=date("M",strtotime($date));
      $a2=date("Y",strtotime($date));
      $a3=date("d",strtotime($date));
      $format=$a3."-".$a1."-".$a2;

$a1=date("M",strtotime($date1));
      $a2=date("Y",strtotime($date1));
      $a3=date("d",strtotime($date1));
      $format1=$a3."-".$a1."-".$a2;

   include('include_pdf_landscape_header.php');
   $this->SetTextColor(0,0,0);
      $this->SetFont('Arial','B',11);
   $this->SetTextColor(48, 74, 123);
    $this->Cell(160,10,'INSTALLMENT COLLECTION DATE : '.$format.'***'.$format1,0,0,'C');



    }
    else{
          $this->SetFillColor(48, 74, 123);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',8);
  
$this->Cell(12,10,'S#',1,0,'C',1);
    $this->Cell(15,10,'FORM NO',1,0,'C',1);
    $this->Cell(50,10,'NAME',1,0,'C',1);
     $this->Cell(50,10,'CNIC',1,0,'C',1);
    $this->Cell(25,10,'CONTACT NO',1,0,'C',1);
$this->Cell(30,10,'FLOOR',1,0,'C',1);

$this->Cell(15,10,'FLATNO',1,0,'C',1);

$this->Cell(15,10,'DATE',1,0,'C',1);
$this->Cell(15,10,'MONTH',1,0,'C',1);
     $this->Cell(25,10,'RCVD',1,0,'C',1);
          $this->Cell(25,10,'BALANCE',1,0,'C',1);
                 
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
    

    
 
    
    

            // output data of each row
        
                  
                  
        
        $sql2 = "SELECT * FROM itable where rcvddate between '$date' and '$date1' and rcvd!='0'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
 
           while($row2 = mysqli_fetch_assoc($result2))  {
               
                 
                 
                $sql3 = "SELECT mmm,hcpn,cn FROM registration where no='$row2[no]'";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
  // output data of each row
  while($row3 = $result3->fetch_assoc()) {
    $mmm=$row3['mmm'];
$hcpn=$row3['hcpn'];    
$cn=$row3['cn'];
  }
} 
                 

                 
                 
                 
                 
                 
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
    $pdf->Cell(15,10,'FORM NO',1,0,'C',1);
    $pdf->Cell(50,10,'NAME',1,0,'C',1);
     $pdf->Cell(50,10,'CNIC',1,0,'C',1);
    $pdf->Cell(25,10,'CONTACT NO',1,0,'C',1);
$pdf->Cell(30,10,'FLOOR',1,0,'C',1);

$pdf->Cell(15,10,'FLATNO',1,0,'C',1);

$pdf->Cell(15,10,'DATE',1,0,'C',1);
$pdf->Cell(15,10,'MONTH',1,0,'C',1);
     $pdf->Cell(25,10,'RCVD',1,0,'C',1);
          $pdf->Cell(25,10,'BALANCE',1,0,'C',1);
               $pdf->Ln(4);
              
}
 $pdf->Ln(6);
$count++;

                 
                 $r=$row2['rcvddate'];

$r1=date("M",strtotime($r));
      $r2=date("Y",strtotime($r));
      $r3=date("d",strtotime($r));
      $rdate=$r3."-".$r1."-".$r2;
      
       $r1=$row2['month'];

$r11=date("M",strtotime($r1));
      $r21=date("Y",strtotime($r1));
      $r31=date("d",strtotime($r1));
      $rdate1=$r11."-".$r21;
                 
                 
                 
                 $percent=$row['tp']*$row['dp'];
                 $percent1=$percent/100;


   $pdf->SetFont('Arial','I',7.5);
   $pdf->SetTextColor(0,0,0);
       $pdf->Cell(12,6,++$counting,1,0,'C');
$pdf->CellFitScale(15,6,$row2['no'],1,0,'L');
$pdf->CellFitScale(50,6,$mmm,1,0,'L');

$pdf->CellFitScale(50,6,$hcpn,1,0,'L');
$pdf->CellFitScale(25,6,$cn,1,0,'L');
$pdf->CellFitScale(30,6,$row2['floor'],1,0,'L');
$pdf->CellFitScale(15,6,$row2['flatno'],1,0,'C');

$pdf->CellFitScale(15,6,$rdate,1,0,'L');
$pdf->CellFitScale(15,6,$rdate1,1,0,'L');

$sum=$row2['rcvd']+$sum;
$sum1=$row2['balance']+$sum1;

$pdf->CellFitScale(25,6,number_format($row2['rcvd']),1,0,'C');

$pdf->CellFitScale(25,6,number_format($row2['balance']),1,0,'C');
 $pdf->Ln(1);

}
}





$count=0;



    
 $pdf->Ln(5);
 $pdf->Cell(207);
 $pdf->SetFont('Arial','B',8);
$pdf->Cell(20,6,'SUBTOTAL:',0,0,'R');
 //$pdf->Cell(40);
$pdf->Cell(25,6,number_format($sum),1,0,'C');
$pdf->Cell(25,6,number_format($sum1),1,0,'C');
 
 
 
   
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
