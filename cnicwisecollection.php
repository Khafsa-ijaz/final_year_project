<?php 
   $date=$_POST['date'];


   $date1=$_POST['date1'];

   $nic=$_POST['nic'];



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
{include('connection.php');
    // Line break
   // $this->Ln(10);
    if ($this->PageNo()==1) {
      # code...
   $date=$_POST['date'];


   $date1=$_POST['date1'];

   $nic=$_POST['nic'];




   include('include_pdf_landscape_header.php');
   $this->SetTextColor(0,0,0);
      $this->SetFont('Arial','B',11);
   $this->SetTextColor(48, 74, 123);
    $this->Cell(160,10,strtoupper($nic). ' DATEWISE COLLECTION REPORT : '.$date.'***'.$date1,0,0,'C');



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
$pdf->Image('download.png',10,5,30);
//$pdf->Image($navslogo,10,5,35);
$pdf->SetFont('Arial','',7);

  


                    
                    
                    
                    
                    
    // Title
    

    
 
    
    
$ginti=0;
            // output data of each row
        
                  
                  $advance=0;
                  
                  
                  
                  
           
  
          
                  
                  
        
        $sql2 = "SELECT * FROM itable2 where rcvddate between '$date' and '$date1'  ";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
 
           while($row2 = mysqli_fetch_assoc($result2))  {
               
               
               
          
            $id=$row2['id'];          
                 $advance=0;
                 
                 
                 
                 
                 
                       $sql222 = "SELECT id FROM plot where cnic='$nic' and id='$row2[accountnumber]' ";
$result222 = $conn->query($sql222);

if ($result222->num_rows > 0) {
 
   
                 
                 
                 
                 
                 
                 
            
                 

                 
                 
                 
                 
                 
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
    $pdf->Cell(10,10,'FORM',1,0,'C',1);
        $pdf->Cell(10,10,'UNIT',1,0,'C',1);
    $pdf->Cell(50,10,'NAME',1,0,'C',1);
    
          
    $pdf->Cell(40,10,'PROJECT',1,0,'C',1);
    
    
    $pdf->Cell(30,10,'BOOKING PRICE',1,0,'C',1);
    
    
         $pdf->Cell(30,10,'RCVD DATE',1,0,'C',1);
    
        $pdf->Cell(30,10,' RCVD',1,0,'C',1);
        
        
        $pdf->Cell(30,10,'DEFAULT AMOUNT',1,0,'C',1);
        
        
        
          $pdf->Cell(30,10,' TOTAL BALANCE',1,0,'C',1);
    
    
   






               $pdf->Ln(4);
              
}
 $pdf->Ln(6);
$count++;

                 
             


           $sql211 = "SELECT pno,totalcost FROM plot where id='$row2[accountnumber]'";
$result211 = $conn->query($sql211);

if ($result211->num_rows > 0) {
  // output data of each row
  while($row211 = $result211->fetch_assoc()) {

    $pno=$row211['pno'];
  
  
   $totalcost=$row211['totalcost'];
  
  
  }
}



   
  $sqlaa = "SELECT * FROM itable2 where accountnumber='$row2[accountnumber]' order by month,id";
            $resultaa = mysqli_query($conn, $sqlaa);

            if (mysqli_num_rows($resultaa) > 0) {
            // output data of each row
             while($rowaa = mysqli_fetch_assoc($resultaa))  {
                 
     
     
     
     
          $tc=$rowaa['rcvdamt']+$tc;
     
        
    $tb=$rowaa['mbalamt'];
    
    
             }
            }











$ff=date("Y-m");
  
  $sqlaa = "SELECT * FROM itable2 where accountnumber='$row2[accountnumber]' and month='$ff' order by month,id";
            $resultaa = mysqli_query($conn, $sqlaa);

            if (mysqli_num_rows($resultaa) > 0) {
            // output data of each row
             while($rowaa = mysqli_fetch_assoc($resultaa))  {
                 
     
     
     
     
          $tc=$rowaa['rcvdamt']+$tc;
     
        
    $tbb=$rowaa['mbalamt'];
    
    
             }
            }





 






   $pdf->SetFont('Arial','I',7.5);
   $pdf->SetTextColor(0,0,0);
       $pdf->Cell(12,6,++$counting,1,0,'C');
$pdf->Cell(10,6,$row2['accountnumber'],1,0,'L');

$pdf->Cell(10,6,$pno,1,0,'L');



$pdf->CellFitScale(50,6,$row2['name'],1,0,'L');
$pdf->CellFitScale(40,6,$row2['product'],1,0,'L');
$pdf->Cell(30,6,number_format($totalcost),1,0,'C');





$pdf->CellFitScale(30,6,$row2['rcvddate'],1,0,'L');


$pdf->Cell(30,6,number_format($row2['rcvdamt']),1,0,'C');

$pdf->Cell(30,6,number_format($tbb),1,0,'C');
$pdf->Cell(30,6,number_format($tb),1,0,'C');


$balance=$row2['rcvdamt']+$balance;



  $pno='';
  $totalcost='';

$tb=0;
$tc=0;
$tbb=0;



$ginti=0;





$advance=0;




$sum4=$pa2+$sum4;

$pa=0;
$pa2=0;
$pp=0;

$advance=0;

 $pdf->Ln(1);
}
}
}
   



$count=0;



    
 $pdf->Ln(5);
 $pdf->Cell(162);
 $pdf->SetFont('Arial','B',8);
$pdf->Cell(20,6,'SUBTOTAL:',0,0,'R');
 //$pdf->Cell(40);
$pdf->Cell(30,6,number_format($balance),1,0,'C');



 //$pdf->Cell(40);
 



 
 
 
   
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
