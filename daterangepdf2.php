<?php 
  $date1=$_POST['date1'];
  $date2=$_POST['date2'];
   
$a1=date("F",strtotime($date1));
      $a2=date("Y",strtotime($date1));
      $a3=date("d",strtotime($date1));
      $format=$a3."-".$a1."-".$a2;

$a1=date("F",strtotime($date2));
      $a2=date("Y",strtotime($date2));
      $a3=date("d",strtotime($date2));
      $format1=$a3."-".$a1."-".$a2;

                  
 $type=$_POST['type'];
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
{
 $date1=$_POST['date1'];
  $date2=$_POST['date2'];
  $a1=date("M",strtotime($date1));
      $a2=date("Y",strtotime($date1));
      $a3=date("d",strtotime($date1));
      $format=$a3."-".$a1."-".$a2;

$a1=date("M",strtotime($date2));
      $a2=date("Y",strtotime($date2));
      $a3=date("d",strtotime($date2));
      $format1=$a3."-".$a1."-".$a2;
 $type=$_POST['type'];
      
    // Line break
   // $this->Ln(10);
    if ($this->PageNo()==1) {
      # code...
     
   include('include_pdf_landscape_header.php');
    $this->Cell(200,10,'Fees Collection Date : '.$format.'***'.$format1.' Deposit In : ' .$type,0,0,'C');

    $this->Ln(5);

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
}}
$pdf = new PDF();
$pdf->AddPage('L');
$pdf->AliasNbPages();

$pdf->SetFont('Arial','',7);

  

 
    
 $pdf->Ln(5);
    // Title

$query = "
 SELECT Distinct curr_class FROM fees GROUP BY curr_class 
";
  if($resulttt = mysqli_query($conn, $query)){
                                     while($row =  mysqli_fetch_array($resulttt)){
$classname=$row['curr_class'];
$sql1 = "SELECT cname,cfees FROM classes where id='$classname'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
 $cname=$row1['cname'];
  $cfees=$row1['cfees'];
  }
}
$sqll = "SELECT * FROM fees where rcvddate between '$date1' and '$date2' AND curr_class='$classname' and rcvdvia='$type'" ;
                            if($resultt = mysqli_query($conn, $sqll)){
                                     while($row =  mysqli_fetch_array($resultt)){
                                         $re=$row['regno'];
                                     $sql420 = "SELECT mob,newfee FROM students where regno='$re'";
$result420 = $conn->query($sql420);

if ($result420->num_rows > 0) {
  // output data of each row
  while($row420 = $result420->fetch_assoc()) {
    $mob=$row420['mob'];
     $a=$row420['newfee'];
  }
}
                                     
$r=$row['rcvddate'];

$r1=date("M",strtotime($r));
      $r2=date("Y",strtotime($r));
      $r3=date("d",strtotime($r));
      $rdate=$r3."-".$r1."-".$r2;
                                      if ($count==0)
                               {
    
     

                                      $pdf->SetFont('Arial','B',8);
                                       

   $pdf->SetFont('Arial','B',10);
  $pdf->Cell(80,10,$cname,0);
                                         $pdf->Ln(7.5);

                                     $pdf->SetFillColor(61, 57, 57);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);
  

     $pdf->CellFitScale(8,10,'S#',1,0,'C',1);
        $pdf->CellFitScale(15,10,'ReceivedDate',1,0,'C',1);
     $pdf->CellFitScale(10,10,'Regno',1,0,'C',1);
     $pdf->CellFitScale(35,10,'Name',1,0,'C',1);
 $pdf->CellFitScale(35,10,'Father Name',1,0,'C',1);
  $pdf->CellFitScale(20,10,'Class Fees',1,0,'C',1);
   $pdf->CellFitScale(20,10,'Student Fees',1,0,'C',1);
    $pdf->CellFitScale(20,10,'Permanant Discount',1,0,'C',1);
        $pdf->CellFitScale(20,10,'Temporary Discount',1,0,'C',1);
                $pdf->CellFitScale(20,10,'Arrears',1,0,'C',1);
      $pdf->CellFitScale(20,10,'FeesBDD',1,0,'C',1);
           $pdf->CellFitScale(20,10,'FeesADD',1,0,'C',1);
             $pdf->CellFitScale(20,10,'Received',1,0,'C',1);
              $pdf->CellFitScale(20,10,'Balance',1,0,'C',1);
                 
               $pdf->Ln(4);
              
}
 $pdf->Ln(6);
$count++;


    

$sumc=$row['rcvdamt']+$sumc;
$sumt=$row['rcvdamt']+$sumt;
   $pdf->SetFont('Arial','I',7.5);
   $pdf->SetTextColor(0,0,0);
       $pdf->CellFitScale(8,6,++$counting,1,0,'C');
   $pdf->CellFitScale(15,6,$rdate,1,0,'L');
$pdf->CellFitScale(10,6,$row['regno'],1,0,'L');
$pdf->CellFitScale(35,6,$row['sname'],1,0,'L');
$pdf->CellFitScale(35,6,$row['fname'],1,0,'L');




$pdf->CellFitScale(20,6,number_format($cfees),1,0,'C');

$pdf->CellFitScale(20,6,number_format($a),1,0,'C');

$tempdisc=$row['tempdisc'];
if ($tempdisc!='0')
{
    $r=$row['regno'];
    $sql420 = "SELECT newfee from students where regno='$r'";
$result420 = $conn->query($sql420);

if ($result420->num_rows > 0) {
  // output data of each row
  while($row420 = $result420->fetch_assoc()) {
      $nf=$row420['newfee'];
  $td=$cfees-$nf;

$pdf->CellFitScale(20,6,number_format($td),1,0,'C');
  }
} 
}
if ($tempdisc=='0')
{
   $td=$cfees-$row['monfee'];

$pdf->CellFitScale(20,6,number_format($td),1,0,'C');   
}




$pdf->CellFitScale(20,6,number_format($row['tempdisc']),1,0,'C');
$pdf->CellFitScale(20,6,number_format($row['arrears']),1,0,'C');
$pdf->CellFitScale(20,6,number_format($row['payablebdd']),1,0,'C');
$pdf->CellFitScale(20,6,number_format($row['payableadd']),1,0,'C');
$pdf->CellFitScale(20,6,number_format($row['rcvdamt']),1,0,'C');
$pdf->CellFitScale(20,6,number_format($row['balamt']),1,0,'C');


}
if ($sumc!=0)
{
$pdf->SetFont('Arial','B',8);
     $pdf->SetTextColor(0,0,0);
 $pdf->Ln(4);
          $pdf->Cell(135);
            $pdf->Cell(130,10,$cname.' Total Collection : ' .number_format($sumc),0,0,'C');
            $pdf->Ln(4.5);
}
$sumc=0;
     




}
$count=0;

}

}

    
 
     $pdf->Ln(2.5);
$pdf->SetFont('Arial','I',10);
     $pdf->SetTextColor(0,0,0);

          $pdf->Cell(170);
            $pdf->Cell(60,10,'Net Collection : Rs ' .number_format($sumt),0,0,'C');
            $pdf->Ln(4.5);


$pdf->Output();



 ?>
