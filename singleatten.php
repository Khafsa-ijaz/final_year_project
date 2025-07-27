<?php 
include('session_head.php');
  $counting=0;
  $total=0;
  $count=0;
  $sumc=0;
  $sumt=0;
  $date=$_POST['date'];
    $date1=$_POST['date1'];
      $id=$_POST['id'];
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
    $date1=$_POST['date1'];
      $id=$_POST['id'];
      
      
      
      include('connection.php');
      $sql = "SELECT name FROM employees where id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 $name=$row['name'];
  }
}
      
        
     
      $a11=date("M",strtotime($date));
      $a21=date("Y",strtotime($date));
      $a31=date("d",strtotime($date));
      $format1=$a31."-".$a11."-".$a21;

     
     
     
           $a112=date("M",strtotime($date1));
      $a212=date("Y",strtotime($date1));
      $a312=date("d",strtotime($date1));
      $format12=$a312."-".$a112."-".$a212;
     
     
      
      
      
   include('include_pdf_landscape_header2.php');
   $this->SetTextColor(0,0,0);
      $this->SetFont('Arial','B',13);
          $this->SetTextColor(48, 74, 123);
    $this->Cell(130,10,strtoupper($name). ' ATTENDANCE REPORT',0,0,'C');



    $this->Ln(7);
  $this->Cell(190,10,'DATE: ' .$format1.'***'.$format12,0,0,'C');

   
    $this->Ln(7);
    }
    else{
    $this->SetFillColor(16, 144, 205);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',8);


 $this->Cell(12,7,'S#',1,0,'C',1);
    $this->Cell(60,7,'NAME',1,0,'L',1);

    
    
        $this->Cell(20,7,'IN-TIME',1,0,'L',1);
        
            $this->Cell(20,7,'OUT-TIME',1,0,'L',1);
    
    
$this->Cell(20,7,'STATUS',1,0,'L',1);
              $this->Cell(60,7,'REMARKS',1,0,'L',1);
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
  $this->Cell(18, 5, "Developed By:", 0, 0);
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
 
     $pdf->Cell(60,7,'DATE',1,0,'L',1);
 


    
    
        $pdf->Cell(20,7,'IN-TIME',1,0,'L',1);
        
            $pdf->Cell(20,7,'OUT-TIME',1,0,'L',1);
    
    
$pdf->Cell(20,7,'STATUS',1,0,'L',1);
              $pdf->Cell(60,7,'REMARKS',1,0,'L',1);
         
                    $pdf->Ln(7);
    // Title

         
           $sum1=0;
                 $sum2=0;
                       $sql = "SELECT * from tattendence where date between '$date' and '$date1' and emp_id='$id' ";

                            if($resultt = mysqli_query($conn, $sql)){
                            while($row =  mysqli_fetch_array($resultt)){
                                
                                
                                
                                
                                
                                
                                
                                $a11a=date("M",strtotime($row['date']));
      $a21a=date("Y",strtotime($row['date']));
      $a31a=date("d",strtotime($row['date']));
      $format1a=$a31a."-".$a11a."-".$a21a;
    
                                
                                
                                      
                                $query2="SELECT * FROM employees where id='$row[emp_id]'";
              $result22 = mysqli_query($conn, $query2);
            
             $row22 = mysqli_fetch_assoc($result22);
             
             
             
             $ihour = substr("$row[itime]",0,2);
             $imin = substr("$row[itime]",3,2);
             $ohour = substr("$row[otime]",0,1);
             $osts = substr("$row[otime]",4,2);



             if ($row22['status']=='Active')
             {
                                
                           ++$ac;     
                    
                                
                                
                                
                                
                              
                              if ($row['status']=='absent'||$row['status']=='Absent')
                              {
                                  ++$a;
                              }
                              if ($row['status']=='Late'||$row['status']=='late')
                              {
                                  ++$l;
                                  ++$pal;
                              }
                              
                              
                                if ($row['status']=='SL'||$row['status']=='sl')
                              {
                                  ++$sl;
                                  ++$pal;
                              }
                              
                              
                              
                              if ($row['status']=='Leave'||$row['status']=='leave')
                              {
                                  ++$le;
                              }
                              if ($row['status']=='present'||$row['status']=='Present')
                              {
                                  ++$pal;
                              }
                              
                              
           
                            }
                         
















  

      
 
 


   

   $pdf->SetFont('Arial','B',9);
   $pdf->SetTextColor(0,0,0);
   
      //$pdf->SetFillColor(255,255,0);

$pdf->Cell(12,6,++$count,1,0,'C');
$pdf->Cell(60,6,  $format1a,1,0,'L');


$pdf->Cell(20,6,$row['itime'],1,0,'L');
$pdf->Cell(20,6,$row['otime'],1,0,'L');

$pdf->Cell(20,6,$row['status'],1,0,'L');

$pdf->Cell(60,6,'',1,0,'L');
$pdf->Ln(7);












}
}





$pdf->Ln(2);

    $pdf->Cell(20);

 $pdf->SetFont('Arial','B',10);

 //$pdf->Cell(40);
$pdf->SetFillColor(57,184,227);
    $pdf->SetTextColor(255,255,255);
$pdf->Cell(30,6,'Presents: '.number_format($pal),1,0,'L',1);

$pdf->Cell(30,6,'Short Leave: '.number_format($sl),1,0,'L',1);
$pdf->Cell(30,6,'Absents: '.number_format($a),1,0,'L',1);
$pdf->Cell(30,6,'Leaves: '.number_format($le),1,0,'L',1);
$pdf->Cell(30,6,'Lates: '.number_format($l),1,0,'L',1);


    


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
