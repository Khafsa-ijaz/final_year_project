<?php 
   $month=$_POST['month'];


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
      $month=$_POST['month'];


$a1=date("M",strtotime($month));
      $a2=date("Y",strtotime($month));
      $a3=date("d",strtotime($month));
      $format=$a1."-".$a2;



   include('include_pdf_landscape_header.php');
   $this->SetTextColor(0,0,0);
      $this->SetFont('Arial','B',11);
   $this->SetTextColor(48, 74, 123);
    $this->Cell(160,10,'INSTALLMENT DEFAULTERS MONTH : '.$format,0,0,'C');



    }
    else{
          $this->SetFillColor(48, 74, 123);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',8);
  
$this->Cell(12,10,'S#',1,0,'C',1);
    $this->Cell(25,10,'FORM NO',1,0,'C',1);
    $this->Cell(60,10,'NAME',1,0,'C',1);
     $this->Cell(50,10,'PAID DATE',1,0,'C',1);
    $this->Cell(50,10,'PROJECT',1,0,'C',1);
$this->Cell(30,10,'INSTALLMENT',1,0,'C',1);
$this->Cell(15,10,'RCVD',1,0,'C',1);

$this->Cell(15,10,'BALANCE',1,0,'C',1);


                 
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
$pdf->Image('download.png',10,5,30);
//$pdf->Image($navslogo,10,5,35);
$pdf->SetFont('Arial','',7);

  


                    
                    
                    
                    
                    
    // Title
    

    
 
    
    

            // output data of each row
        
                  
                  
        
        $sql2 = "SELECT * FROM itable WHERE  month='$month' and mbalamt>0";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
 
           while($row2 = mysqli_fetch_assoc($result2))  {
               
                 
                 
            
                 
                 
                 
                 
                 
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
    $pdf->Cell(25,10,'FORM NO',1,0,'C',1);
    $pdf->Cell(60,10,'NAME',1,0,'C',1);
     $pdf->Cell(50,10,'PAID DATE',1,0,'C',1);
    $pdf->Cell(50,10,'PROJECT',1,0,'C',1);
$pdf->Cell(30,10,'INSTALLMENT',1,0,'C',1);
$pdf->Cell(15,10,'RCVD',1,0,'C',1);
$pdf->Cell(15,10,'BALANCE',1,0,'C',1);
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











  

if ($row2['rcvddate']=='' || $row2['rcvddate']=='0')
{
    
    $rdater='';
}
else
{

$r1r=date("M",strtotime($row2['rcvddate']));
      $r2r=date("Y",strtotime($row2['rcvddate']));
      $r3r=date("d",strtotime($row2['rcvddate']));
      $rdater=$r3r."-".$r1r."-".$r2r;
}




   $pdf->SetFont('Arial','I',7.5);
   $pdf->SetTextColor(0,0,0);
       $pdf->Cell(12,6,++$counting,1,0,'C');
$pdf->Cell(25,6,$row2['accountnumber'],1,0,'L');
$pdf->Cell(60,6,$row2['name'],1,0,'L');

$pdf->Cell(50,6,$rdater,1,0,'L');
$pdf->Cell(50,6,$row2['product'],1,0,'L');
$pdf->Cell(30,6,number_format($row2['monthlyinstallment']),1,0,'C');

$pdf->Cell(15,6,number_format($row2['rcvdamt']),1,0,'C');
$pdf->Cell(15,6,number_format($row2['mbalamt']),1,0,'C');




$sum=$row2['mbalamt']+$sum;


 $pdf->Ln(1);

}
}





$count=0;



    
 $pdf->Ln(5);
 $pdf->Cell(222);
 $pdf->SetFont('Arial','B',8);
$pdf->Cell(20,6,'SUBTOTAL:',0,0,'R');
 //$pdf->Cell(40);
$pdf->Cell(15,6,number_format($sum),1,0,'C');

 
 
 
   
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
