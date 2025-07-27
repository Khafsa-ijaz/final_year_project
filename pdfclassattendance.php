<?php 
$p=0;
$a=0;
$l=0;
$pp=0;
$aa=0;
$ll=0;
include('connection.php');
include('sessionfinder.php');
 $date=$_POST['date'];
  $date1=$_POST['date1'];
$class=$_POST['class'];
include_once('libs/fpdf.php');

$cname=0;
class PDF extends FPDF
{
function Header()
{
  include('sessionfinder.php');
   $date=$_POST['date'];
   $date1=$_POST['date1'];
  $class=$_POST['class'];
    // Line break
   // $this->Ln(10);
    if ($this->PageNo()==1) {
      # code...
     
   include('include_pdf_landscape_header.php');
    include('connection.php');
    $sql1 = "SELECT cname FROM classes where id='$class' and csession='$session'";
    $result1 = $conn->query($sql1);


  // output data of each row
    $row1 = $result1->fetch_assoc();

    $cname=$row1['cname'];
 

       $a1=date("F",strtotime($date));
      $a2=date("Y",strtotime($date));
      $a3=date("d",strtotime($date));
      $format=$a3."-".$a1."-".$a2;
      
      
      
      
      
      $al1=date("F",strtotime($date1));
      $al2=date("Y",strtotime($date1));
      $al3=date("d",strtotime($date1));
      $format1=$al3."-".$al1."-".$al2;
      
      

    
     $this->Ln(10);
     $this->Cell(70);
    $this->Cell(150,10,$cname.' Attendance List from :'.$format." TO: ".$format1 ,0,0,'C');

    $this->Ln(10);

    }
    else{
    $this->SetFillColor(61, 57, 57);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',10);
    
$this->Cell(90);
$this->Cell(5,10,'S#',1,0,'C',1);
$this->Cell(30,10,'Date',1,0,'C',1);
$this->Cell(15,10,'RegNo',1,0,'C',1);
$this->Cell(70,10,'Student Name',1,0,'C',1);
$this->Cell(30,10,'Status',1,0,'C',1);         
$this->Ln(10);
}
}

function Footer()
{
  // To be implemented in your own inherited class
  $this->Ln(10);
  $this->SetFont('Arial','I',8);
  $this->Cell(130);
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

$pdf->SetFont('Arial','',7);

  
$pdf->SetFillColor(61, 57, 57);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(90);
$pdf->Cell(5,10,'S#',1,0,'C',1);
$pdf->Cell(30,10,'Date',1,0,'C',1);
$pdf->Cell(15,10,'RegNo',1,0,'C',1);
$pdf->Cell(70,10,'Student Name',1,0,'C',1);
$pdf->Cell(30,10,'Status',1,0,'C',1);
$pdf->Ln(10);
    // Title


$pdf->SetTextColor(0,0,0);
$counting=0;

 $sql = "SELECT status,date,regno from attendence where class='$class' and date BETWEEN '$date' AND '$date1' and session='$session' ";

                            if($resultt = mysqli_query($conn, $sql)){
                            while($row =  mysqli_fetch_array($resultt)){
                              
            $s=$row['status'];
                 if ($s=='Present')
                 {
                     $p=++$pp;
                 }
                  if ($s=='Absent')
                 {
                      $a=++$aa;
                 }
                  if ($s=='Leave')
                 { $l=++$ll;
                     
                 }
                 
                 
                 
                 
                   $l1=date("F",strtotime($row['date']));
      $ll2=date("Y",strtotime($row['date']));
      $ll3=date("d",strtotime($row['date']));
      $format4=$ll3."-".$l1."-".$ll2;
                 
                 
                 
                                                    
$pdf->SetFont('Arial','',7.5);
$pdf->Cell(90);
$pdf->Cell(5,7,++$counting,1,0,'L');

$pdf->SetFont('Arial','',7.5);
$pdf->Cell(30,7,$format4,1,0,'L');


$pdf->Cell(15,7,$row['regno'],1,0,'L');

$query="SELECT sname FROM students where regno='$row[regno]' and session='$session'";
              $result2 = mysqli_query($conn, $query);
            
             $row2 = mysqli_fetch_assoc($result2);

$pdf->Cell(70,7,$row2['sname'],1,0,'L');
$pdf->Cell(30,7,$row['status'],1,0,'L');
$pdf->Ln(7);


}
}
$pdf->Ln(2.5);
$pdf->SetFont('Arial','I',10);
     $pdf->SetTextColor(0,0,0);

          $pdf->Cell(170);
            $pdf->Cell(60,10,'Total Presents : ' .number_format($p),0,0,'C');
            $pdf->Ln(4.5);
            
                 $pdf->Ln(2.5);
$pdf->SetFont('Arial','I',10);
     $pdf->SetTextColor(0,0,0);

          $pdf->Cell(170);
            $pdf->Cell(60,10,'Total Absents : ' .number_format($a),0,0,'C');
            $pdf->Ln(4.5);
     $pdf->Ln(2.5);
$pdf->SetFont('Arial','I',10);
     $pdf->SetTextColor(0,0,0);

          $pdf->Cell(170);
            $pdf->Cell(60,10,'Total Leaves : ' .number_format($l),0,0,'C');
            $pdf->Ln(4.5);



$pdf->Output();



 ?>
