<?php 
include('connection.php');
  $month=$_POST['month'];
  $curr_class=$_POST['curr_class'];
   $pfd=$_POST['pfd'];
  $counting=0;
  $total=0;
  $count=0;
  $sumc=0;
  $sumt=0;
    $sql1 = "SELECT cname FROM classes where id='$curr_class'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
  $cc=$row1['cname'];
  }
}
include('connection.php');
include_once('libs/fpdf.php');


class PDF extends FPDF
{
function Header()
{
  include('connection.php');
  $month=$_POST['month'];
  $curr_class=$_POST['curr_class'];
   $pfd=$_POST['pfd'];
       $sql1 = "SELECT cname FROM classes where id='$curr_class'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
  $cc=$row1['cname'];
  }
}
      
    // Line break
   // $this->Ln(10);
    if ($this->PageNo()==1) {
      # code...
     
     include('include_pdf_landscape_header.php');
 $this->SetTextColor(255,0,0);
  $a2=date("Y",strtotime($month));
      $a3=date("F",strtotime($month));
      $format=$a3."-".$a2;
    $this->Cell(150,10,'Fee Defaulters Month : '.$format.' Class : ' .$cc,0,0,'C');

    $this->Ln(1);

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

$pdf->SetFont('Arial','',7);

  

 
    
 $pdf->Ln(5);
    // Title


$classname=$curr_class;
$sql1 = "SELECT cname FROM classes where id='$classname'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
 $cname=$row1['cname'];
  }
}
if ($pfd=='1')
{
   $sqll = "SELECT DISTINCT regno FROM fees where curr_class='$curr_class' and feeperiod='$month' and PayableAdd!=balamt and balamt>0 order by billno DESC  ";
}
if ($pfd=='0')
{
   $sqll = "SELECT DISTINCT regno FROM fees where curr_class='$curr_class' and feeperiod='$month' and balamt>0 order by billno DESC";
}
                            if($resultt = mysqli_query($conn, $sqll)){
                                     while($row =  mysqli_fetch_array($resultt)){
                                     $re=$row['regno'];
if ($pfd=='1')
{
$sql4201 = "SELECT balamt,sname,payablebdd,payableadd,rcvdamt,fname FROM fees where regno='$re' and feeperiod='$month' and PayableAdd!=balamt and balamt>0 and curr_class='$curr_class' order by billno DESC LIMIT 1";
}
if ($pfd=='0')
{
$sql4201 = "SELECT * FROM fees where regno='$re' and feeperiod='$month'   and curr_class='$curr_class' order by billno DESC LIMIT 1";
}
$result4201 = $conn->query($sql4201);

if ($result4201->num_rows > 0) {
  // output data of each row
  while($row4201 = $result4201->fetch_assoc()) {
    $balamt=$row4201['balamt'];
      $sname=$row4201['sname'];
        $fname=$row4201['fname'];
          $payablebdd=$row4201['payablebdd'];
            $payableadd=$row4201['payableadd'];
              $rcvdamt=$row4201['rcvdamt'];
  }
} 
   

if ($balamt!='0')
{
$sql420 = "SELECT mob FROM students where regno='$re'";
$result420 = $conn->query($sql420);

if ($result420->num_rows > 0) {
  // output data of each row
  while($row420 = $result420->fetch_assoc()) {
    $mob=$row420['mob'];
  }
}
                                      if ($count==0)
                               {
    
     

                                      $pdf->SetFont('Arial','B',8);
                                       

  $pdf->SetTextColor(255,0,0);
   $pdf->SetFont('Arial','B',10);
  $pdf->Cell(80,10,$cname,0);
                                         $pdf->Ln(7.5);

                                     $pdf->SetFillColor(61, 57, 57);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);


     $pdf->Cell(12,10,'S#',1,0,'C',1);
     $pdf->Cell(25,10,'Regno',1,0,'C',1);
     $pdf->Cell(60,10,'Name',1,0,'C',1);
 $pdf->Cell(60,10,'Father Name',1,0,'C',1);
      $pdf->Cell(20,10,'FeesBDD',1,0,'C',1);
           $pdf->Cell(20,10,'FeesADD',1,0,'C',1);
             $pdf->Cell(20,10,'Received',1,0,'C',1);
              $pdf->Cell(20,10,'Balance',1,0,'C',1);
              $pdf->Cell(45,10,'Contact',1,0,'C',1);
              $pdf->Ln(10);
}
$count++;


 

$sumc=$balamt+$sumc;
$sumt=$balamt+$sumt;
   $pdf->SetFont('Arial','I',7.5);
   $pdf->SetTextColor(0,0,0);
       $pdf->Cell(12,6,++$counting,1,0,'C');

$pdf->Cell(25,6,$re,1,0,'L');
$pdf->Cell(60,6,$sname,1,0,'L');
$pdf->Cell(60,6,$fname,1,0,'L');
$pdf->Cell(20,6,number_format($payablebdd),1,0,'C');
$pdf->Cell(20,6,number_format($payableadd),1,0,'C');
$pdf->Cell(20,6,number_format($rcvdamt),1,0,'C');
$pdf->Cell(20,6,number_format($balamt),1,0,'C');
$pdf->Cell(45,6,$mob,1,0,'C');
$pdf->Ln(6);


}
}
if ($sumc!=0)
{
$pdf->SetFont('Arial','B',8);
     $pdf->SetTextColor(0,0,0);

          $pdf->Cell(178);
            $pdf->Cell(50,10,$cname.' Total Balance : Rs ' .number_format($sumc),0,0,'C');
            $pdf->Ln(0);
}
$sumc=0;
     




}
$count=0;


    
 

$pdf->Output();



 ?>
