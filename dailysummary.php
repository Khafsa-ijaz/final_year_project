<?php 
include('session_head.php');
  $counting=0;
  $total=0;
  $count=0;
  $sumc=0;
  $sumt=0;
   $a=0;
  $l=0;
  $le=0;
  $pal=0;
  $sl=0;
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
    $this->Cell(130,10,'DAILY ATTENDANCE SUMMARY REPORT',0,0,'C');



    $this->Ln(7);
  $this->Cell(190,10,'DATE: ' .$format1,0,0,'C');

   
    $this->Ln(7);
    }
    else{
    $this->SetFillColor(48, 74, 123);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',8);

  $this->Cell(90,7,'NAME',1,0,'L',1);
    $this->Cell(60,7,'DESIGNATION',1,0,'L',1);
$this->Cell(30,7,'STATUS',1,0,'L',1);
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

 $pdf->Cell(12,7,'S#',1,0,'C',1);
    $pdf->Cell(35,7,'ACTIVE STAFF',1,0,'R',1);
    $pdf->Cell(30,7,'ABSENT',1,0,'R',1);
$pdf->Cell(30,7,'LATE',1,0,'R',1);
$pdf->Cell(30,7,'LEAVE',1,0,'R',1);

$pdf->Cell(30,7,'SHORT LEAVE',1,0,'R',1);
$pdf->Cell(30,7,'PRESENT',1,0,'R',1);
  
         
                    $pdf->Ln(7);
    // Title


$sql2="SELECT id FROM employees where status='Active'";

if ($result2=mysqli_query($conn,$sql2))
  {
  // Return the number of rows in result set
  $rowcount2=mysqli_num_rows($result2);

  // Free result set
  mysqli_free_result($result2);
  }

 $sql = "SELECT * from tattendence where date='$date' ";

                            if($resultt = mysqli_query($conn, $sql)){
                            while($row =  mysqli_fetch_array($resultt)){
                                
                                
                                
                                      
                                $query2="SELECT * FROM employees where id='$row[emp_id]'";
              $result22 = mysqli_query($conn, $query2);
            
             $row22 = mysqli_fetch_assoc($result22);
             
             if ($row22['status']=='Active')
             {
                                
                           ++$ac;     
                    
                                
                                
                                
                                
                              
                              if ($row['status']=='Absent')
                              {
                                  ++$a;
                              }
                              if ($row['status']=='Late')
                              {
                                  ++$l;
                                  ++$pal;
                              }
                              if ($row['status']=='Leave')
                              {
                                  ++$le;
                              }
                              
                              
                              if ($row['status']=='SL')
                              {
                                  ++$sl;
                                     ++$pal;
                              }
                              
                              if ($row['status']=='Present')
                              {
                                  ++$pal;
                              }
                              
                              
           
                            }
                            }
                                   
                            }                 

   $pdf->SetFont('Arial','',8);
   $pdf->SetTextColor(0,0,0);

$pdf->Cell(12,6,++$count,1,0,'C');
$pdf->Cell(35,6,$ac,1,0,'R');
$pdf->Cell(30,6,$a,1,0,'R');
$pdf->Cell(30,6,$l,1,0,'R');
$pdf->Cell(30,6,$le,1,0,'R');
$pdf->Cell(30,6,$sl,1,0,'R');
$pdf->Cell(30,6,$pal,1,0,'R');



$pdf->Ln(7);
 
    $pdf->SetFillColor(48, 74, 123);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);


$pdf->Cell(12,7,'S#',1,0,'C',1);
$pdf->Cell(35,7,'Staff Name',1,0,'L',1);
$pdf->Cell(35,7,'Designation',1,0,'L',1);
$pdf->Cell(35,7,'Absent/Late/Leave',1,0,'L',1);
$pdf->Cell(35,7,'Total Absent',1,0,'R',1);
$pdf->Cell(17,7,'T.Leave',1,0,'R',1);
$pdf->Cell(17,7,'T.Late',1,0,'R',1);

$pdf->Ln(7);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',7.5);
 $sql23 = "SELECT * from tattendence where date='$date' and status='Absent' ";

                            if($resultt23 = mysqli_query($conn, $sql23)){
                            while($row23 =  mysqli_fetch_array($resultt23)){
                                
                                
                                      
                                
                                
                                if ($row23['status']=='Absent')
                                {
                                    
                                    
                                    
                                    
                                    
                                    $sql4="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Absent' ";

if ($result4=mysqli_query($conn,$sql4))
  {
  // Return the number of rows in result set
  $rowcount4=mysqli_num_rows($result4);

  // Free result set
  mysqli_free_result($result4);
  }
  
          
                                    $sql5="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Leave' ";

if ($result5=mysqli_query($conn,$sql5))
  {
  // Return the number of rows in result set
  $rowcount5=mysqli_num_rows($result5);

  // Free result set
  mysqli_free_result($result5);
  }
          
          
    
             
                 $sql520="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Late' ";

if ($result520=mysqli_query($conn,$sql520))
  {
  // Return the number of rows in result set
  $rowcount520=mysqli_num_rows($result520);

  // Free result set
  mysqli_free_result($result520);
  }
           
             
              
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                     $query="SELECT * FROM employees where id='$row23[emp_id]'";
              $result2 = mysqli_query($conn, $query);
            
             $row2 = mysqli_fetch_assoc($result2);


 $pdf->SetFont('Arial','',8);
   $pdf->SetTextColor(0,0,0);

$pdf->Cell(12,7,++$counting,1,0,'C');
$pdf->CellFitScale(35,7,$row2['name'],1,0,'L');
$pdf->CellFitScale(35,7,$row2['designation'],1,0,'L');
$pdf->Cell(35,7,$row23['status'],1,0,'L');
$pdf->Cell(35,7,$rowcount4,1,0,'R');
$pdf->Cell(17,7,$rowcount5,1,0,'R');
$pdf->Cell(17,7,$rowcount520,1,0,'R');
$pdf->Ln(7);
                                    
                                    
                                }
                                
                                 if ($row23['status']=='Leave')
                                {
                                    
                                    
                                    
                                    
                                    
                                    $sql4="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Absent' ";

if ($result4=mysqli_query($conn,$sql4))
  {
  // Return the number of rows in result set
  $rowcount4=mysqli_num_rows($result4);

  // Free result set
  mysqli_free_result($result4);
  }
  
          
                                    $sql5="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Leave' ";

if ($result5=mysqli_query($conn,$sql5))
  {
  // Return the number of rows in result set
  $rowcount5=mysqli_num_rows($result5);

  // Free result set
  mysqli_free_result($result5);
  }
                                    
                                    
                                    
                       
                       
                      $sql520="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Late' ";

if ($result520=mysqli_query($conn,$sql520))
  {
  // Return the number of rows in result set
  $rowcount520=mysqli_num_rows($result520);

  // Free result set
  mysqli_free_result($result520);
  }
           
             
           
                       
                       
                       
                       
                       
                                    
                                    
                                    
                                    
                                     $query="SELECT * FROM employees where id='$row23[emp_id]'";
              $result2 = mysqli_query($conn, $query);
            
             $row2 = mysqli_fetch_assoc($result2);

              $pdf->SetFont('Arial','',8);
   $pdf->SetTextColor(0,0,0);
$pdf->Cell(12,7,++$counting,1,0,'C');
$pdf->CellFitScale(35,7,$row2['name'],1,0,'L');
$pdf->CellFitScale(35,7,$row2['designation'],1,0,'L');
$pdf->Cell(35,7,$row23['status'],1,0,'L');
$pdf->Cell(35,7,$rowcount4,1,0,'R');
$pdf->Cell(17,7,$rowcount5,1,0,'R');
$pdf->Cell(17,7,$rowcount520,1,0,'R');
$pdf->Ln(7);
                                    
                                }    
                                
                                
                                  if ($row23['status']=='Late')
                                {
                                    
                                    
                                    
                                    
                                    
                                    $sql4="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Absent' ";

if ($result4=mysqli_query($conn,$sql4))
  {
  // Return the number of rows in result set
  $rowcount4=mysqli_num_rows($result4);

  // Free result set
  mysqli_free_result($result4);
  }
  
          
                                    $sql5="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Leave' ";

if ($result5=mysqli_query($conn,$sql5))
  {
  // Return the number of rows in result set
  $rowcount5=mysqli_num_rows($result5);

  // Free result set
  mysqli_free_result($result5);
  }
                                    
                                    
            
             $sql520="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Late' ";

if ($result520=mysqli_query($conn,$sql520))
  {
  // Return the number of rows in result set
  $rowcount520=mysqli_num_rows($result520);

  // Free result set
  mysqli_free_result($result520);
  }
           
             
                                   
                                    
                                    
                                    
                                    
                                     $query="SELECT * FROM employees where id='$row23[emp_id]'";
              $result2 = mysqli_query($conn, $query);
            
             $row2 = mysqli_fetch_assoc($result2);


                $pdf->SetFont('Arial','',8);
   $pdf->SetTextColor(0,0,0);
$pdf->Cell(12,7,++$counting,1,0,'C');
$pdf->CellFitScale(35,7,$row2['name'],1,0,'L');
$pdf->CellFitScale(35,7,$row2['designation'],1,0,'L');
$pdf->Cell(35,7,$row23['status'],1,0,'L');
$pdf->Cell(35,7,$rowcount4,1,0,'R');
$pdf->Cell(17,7,$rowcount5,1,0,'R');
$pdf->Cell(17,7,$rowcount520,1,0,'R');
$pdf->Ln(7);
                                    
                                }  
                                
                                
                                
                            }
                            }
                            
                            
                   $sql23 = "SELECT * from tattendence where date='$date' and status='Leave' ";

                            if($resultt23 = mysqli_query($conn, $sql23)){
                            while($row23 =  mysqli_fetch_array($resultt23)){
                                
                                
                                      
                                
                                
                                if ($row23['status']=='Absent')
                                {
                                    
                                    
                                    
                                    
                                    
                                    $sql4="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Absent' ";

if ($result4=mysqli_query($conn,$sql4))
  {
  // Return the number of rows in result set
  $rowcount4=mysqli_num_rows($result4);

  // Free result set
  mysqli_free_result($result4);
  }
  
          
                                    $sql5="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Leave' ";

if ($result5=mysqli_query($conn,$sql5))
  {
  // Return the number of rows in result set
  $rowcount5=mysqli_num_rows($result5);

  // Free result set
  mysqli_free_result($result5);
  }
          
          
    
             
                 $sql520="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Late' ";

if ($result520=mysqli_query($conn,$sql520))
  {
  // Return the number of rows in result set
  $rowcount520=mysqli_num_rows($result520);

  // Free result set
  mysqli_free_result($result520);
  }
           
             
              
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                     $query="SELECT * FROM employees where id='$row23[emp_id]'";
              $result2 = mysqli_query($conn, $query);
            
             $row2 = mysqli_fetch_assoc($result2);
             $pdf->SetFont('Arial','',8);
   $pdf->SetTextColor(0,0,0);
$pdf->Cell(12,7,++$counting,1,0,'C');
$pdf->CellFitScale(35,7,$row2['name'],1,0,'L');
$pdf->CellFitScale(35,7,$row2['designation'],1,0,'L');
$pdf->Cell(35,7,$row23['status'],1,0,'L');
$pdf->Cell(35,7,$rowcount4,1,0,'R');
$pdf->Cell(17,7,$rowcount5,1,0,'R');
$pdf->Cell(17,7,$rowcount520,1,0,'R');
$pdf->Ln(7);
                                    
                                    
                                }
                                
                                 if ($row23['status']=='Leave')
                                {
                                    
                                    
                                    
                                    
                                    
                                    $sql4="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Absent' ";

if ($result4=mysqli_query($conn,$sql4))
  {
  // Return the number of rows in result set
  $rowcount4=mysqli_num_rows($result4);

  // Free result set
  mysqli_free_result($result4);
  }
  
          
                                    $sql5="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Leave' ";

if ($result5=mysqli_query($conn,$sql5))
  {
  // Return the number of rows in result set
  $rowcount5=mysqli_num_rows($result5);

  // Free result set
  mysqli_free_result($result5);
  }
                                    
                                    
                                    
                       
                       
                      $sql520="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Late' ";

if ($result520=mysqli_query($conn,$sql520))
  {
  // Return the number of rows in result set
  $rowcount520=mysqli_num_rows($result520);

  // Free result set
  mysqli_free_result($result520);
  }
           
             
           
                       
                       
                       
                       
                       
                                    
                                    
                                    
                                    
                                     $query="SELECT * FROM employees where id='$row23[emp_id]'";
              $result2 = mysqli_query($conn, $query);
            
             $row2 = mysqli_fetch_assoc($result2);
                $pdf->SetFont('Arial','',8);
   $pdf->SetTextColor(0,0,0);
$pdf->Cell(12,7,++$counting,1,0,'C');
$pdf->CellFitScale(35,7,$row2['name'],1,0,'L');
$pdf->CellFitScale(35,7,$row2['designation'],1,0,'L');
$pdf->Cell(35,7,$row23['status'],1,0,'L');
$pdf->Cell(35,7,$rowcount4,1,0,'R');
$pdf->Cell(17,7,$rowcount5,1,0,'R');
$pdf->Cell(17,7,$rowcount520,1,0,'R');
$pdf->Ln(7);
                                    
                                }    
                                
                                
                                  if ($row23['status']=='Late')
                                {
                                    
                                    
                                    
                                    
                                    
                                    $sql4="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Absent' ";

if ($result4=mysqli_query($conn,$sql4))
  {
  // Return the number of rows in result set
  $rowcount4=mysqli_num_rows($result4);

  // Free result set
  mysqli_free_result($result4);
  }
  
          
                                    $sql5="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Leave' ";

if ($result5=mysqli_query($conn,$sql5))
  {
  // Return the number of rows in result set
  $rowcount5=mysqli_num_rows($result5);

  // Free result set
  mysqli_free_result($result5);
  }
                                    
                                    
            
             $sql520="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Late' ";

if ($result520=mysqli_query($conn,$sql520))
  {
  // Return the number of rows in result set
  $rowcount520=mysqli_num_rows($result520);

  // Free result set
  mysqli_free_result($result520);
  }
           
             
                                   
                                    
                                    
                                    
                                    
                                     $query="SELECT * FROM employees where id='$row23[emp_id]'";
              $result2 = mysqli_query($conn, $query);
            
             $row2 = mysqli_fetch_assoc($result2);
                $pdf->SetFont('Arial','',8);
   $pdf->SetTextColor(0,0,0);
$pdf->Cell(12,7,++$counting,1,0,'C');
$pdf->CellFitScale(35,7,$row2['name'],1,0,'L');
$pdf->CellFitScale(35,7,$row2['designation'],1,0,'L');
$pdf->Cell(35,7,$row23['status'],1,0,'L');
$pdf->Cell(35,7,$rowcount4,1,0,'R');
$pdf->Cell(17,7,$rowcount5,1,0,'R');
$pdf->Cell(17,7,$rowcount520,1,0,'R');
$pdf->Ln(7);
                                    
                                }  
                                
                                
                                
                            }
                            }          
                            
                            
                            
                            
                            
                            
                            
                            
                    
                    
                            
                            
                            
                            
                            
                            






 $sql23 = "SELECT * from tattendence where date='$date' and status='Late' ";

                            if($resultt23 = mysqli_query($conn, $sql23)){
                            while($row23 =  mysqli_fetch_array($resultt23)){
                                
                                
                                      
                                
                                
                                if ($row23['status']=='Absent')
                                {
                                    
                                    
                                    
                                    
                                    
                                    $sql4="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Absent' ";

if ($result4=mysqli_query($conn,$sql4))
  {
  // Return the number of rows in result set
  $rowcount4=mysqli_num_rows($result4);

  // Free result set
  mysqli_free_result($result4);
  }
  
          
                                    $sql5="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Leave' ";

if ($result5=mysqli_query($conn,$sql5))
  {
  // Return the number of rows in result set
  $rowcount5=mysqli_num_rows($result5);

  // Free result set
  mysqli_free_result($result5);
  }
          
          
    
             
                 $sql520="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Late' ";

if ($result520=mysqli_query($conn,$sql520))
  {
  // Return the number of rows in result set
  $rowcount520=mysqli_num_rows($result520);

  // Free result set
  mysqli_free_result($result520);
  }
           
             
              
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                     $query="SELECT * FROM employees where id='$row23[emp_id]'";
              $result2 = mysqli_query($conn, $query);
            
             $row2 = mysqli_fetch_assoc($result2);
$pdf->Cell(12,7,++$counting,1,0,'C');
$pdf->CellFitScale(35,7,$row2['name'],1,0,'L');
$pdf->CellFitScale(35,7,$row2['designation'],1,0,'L');
$pdf->Cell(35,7,$row23['status'],1,0,'L');
$pdf->Cell(35,7,$rowcount4,1,0,'R');
$pdf->Cell(17,7,$rowcount5,1,0,'R');
$pdf->Cell(17,7,$rowcount520,1,0,'R');
$pdf->Ln(7);
                                    
                                    
                                }
                                
                                 if ($row23['status']=='Leave')
                                {
                                    
                                    
                                    
                                    
                                    
                                    $sql4="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Absent' ";

if ($result4=mysqli_query($conn,$sql4))
  {
  // Return the number of rows in result set
  $rowcount4=mysqli_num_rows($result4);

  // Free result set
  mysqli_free_result($result4);
  }
  
          
                                    $sql5="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Leave' ";

if ($result5=mysqli_query($conn,$sql5))
  {
  // Return the number of rows in result set
  $rowcount5=mysqli_num_rows($result5);

  // Free result set
  mysqli_free_result($result5);
  }
                                    
                                    
                                    
                       
                       
                      $sql520="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Late' ";

if ($result520=mysqli_query($conn,$sql520))
  {
  // Return the number of rows in result set
  $rowcount520=mysqli_num_rows($result520);

  // Free result set
  mysqli_free_result($result520);
  }
           
             
           
                       
                       
                       
                       
                       
                                    
                                    
                                    
                                    
                                     $query="SELECT * FROM employees where id='$row23[emp_id]'";
              $result2 = mysqli_query($conn, $query);
            
             $row2 = mysqli_fetch_assoc($result2);
 $pdf->SetFont('Arial','',8);
   $pdf->SetTextColor(0,0,0);
$pdf->Cell(12,7,++$counting,1,0,'C');
$pdf->CellFitScale(35,7,$row2['name'],1,0,'L');
$pdf->CellFitScale(35,7,$row2['designation'],1,0,'L');
$pdf->Cell(35,7,$row23['status'],1,0,'L');
$pdf->Cell(35,7,$rowcount4,1,0,'R');
$pdf->Cell(17,7,$rowcount5,1,0,'R');
$pdf->Cell(17,7,$rowcount520,1,0,'R');
$pdf->Ln(7);
                                    
                                }    
                                
                                
                                  if ($row23['status']=='Late')
                                {
                                    
                                    
                                    
                                    
                                    
                                    $sql4="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Absent' ";

if ($result4=mysqli_query($conn,$sql4))
  {
  // Return the number of rows in result set
  $rowcount4=mysqli_num_rows($result4);

  // Free result set
  mysqli_free_result($result4);
  }
  
          
                                    $sql5="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Leave' ";

if ($result5=mysqli_query($conn,$sql5))
  {
  // Return the number of rows in result set
  $rowcount5=mysqli_num_rows($result5);

  // Free result set
  mysqli_free_result($result5);
  }
                                    
                                    
            
             $sql520="SELECT id from tattendence where emp_id='$row23[emp_id]' and status='Late' ";

if ($result520=mysqli_query($conn,$sql520))
  {
  // Return the number of rows in result set
  $rowcount520=mysqli_num_rows($result520);

  // Free result set
  mysqli_free_result($result520);
  }
           
             
                                   
                                    
                                    
                                    
                                    
                                     $query="SELECT * FROM employees where id='$row23[emp_id]'";
              $result2 = mysqli_query($conn, $query);
            
             $row2 = mysqli_fetch_assoc($result2);
              $pdf->SetFont('Arial','',8);
   $pdf->SetTextColor(0,0,0);
$pdf->Cell(12,7,++$counting,1,0,'C');
$pdf->CellFitScale(35,7,$row2['name'],1,0,'L');
$pdf->CellFitScale(35,7,$row2['designation'],1,0,'L');
$pdf->Cell(35,7,$row23['status'],1,0,'L');
$pdf->Cell(35,7,$rowcount4,1,0,'R');
$pdf->Cell(17,7,$rowcount5,1,0,'R');
$pdf->Cell(17,7,$rowcount520,1,0,'R');
$pdf->Ln(6);
                                    
                                }  
                                
                                
                                
                            }
                            }











   
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
