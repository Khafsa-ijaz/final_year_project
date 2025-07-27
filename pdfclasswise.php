<?php 
include('connection.php');
$mnth=$_POST['month'];
$class=$_POST['class'];
include('connection.php');
include_once('libs/fpdf.php');

  include('connection.php');
									    $sqlha = "SELECT * FROM feesheads where id='1'";
$resultha = $conn->query($sqlha);

if ($resultha->num_rows > 0) {
  // output data of each row
  while($rowha = $resultha->fetch_assoc()) {
  $h1=$rowha['h1'];
 $h2=$rowha['h2'];
$h3=$rowha['h3'];
$h4=$rowha['h4'];
$h5=$rowha['h5'];
$h6=$rowha['h6'];
$h7=$rowha['h7'];

  }
} 

$cname=0;
class PDF extends FPDF
{
function Header()
{
      include('connection.php');
									    $sqlha = "SELECT * FROM feesheads where id='1'";
$resultha = $conn->query($sqlha);

if ($resultha->num_rows > 0) {
  // output data of each row
  while($rowha = $resultha->fetch_assoc()) {
  $h1=$rowha['h1'];
 $h2=$rowha['h2'];
$h3=$rowha['h3'];
$h4=$rowha['h4'];
$h5=$rowha['h5'];
$h6=$rowha['h6'];
$h7=$rowha['h7'];

  }
} 

    $mnth=$_POST['month'];
    $class=$_POST['class'];
    // Line break
   // $this->Ln(10);
    if ($this->PageNo()==1) {
      # code...
     
  include('include_pdf_landscape_header.php');
    include('connection.php');
    $sql1 = "SELECT cname FROM classes where id='$class'";
$result1 = $conn->query($sql1);


  // output data of each row
  $row1 = $result1->fetch_assoc();

$cname=$row1['cname'];
 

 $a1=date("F",strtotime($mnth));
      $a2=date("Y",strtotime($mnth));
      $format=$a1."-".$a2;

    $this->Cell(150,10,'Class Name: '.$cname.'  FeePeriod: '.$format,0,0,'C');

    $this->Ln(10);

    }
    else{
    $this->SetFillColor(61, 57, 57);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',7);
    

$this->CellFitScale(5,10,'S#',1,0,'C',1);
$this->CellFitScale(10,10,'Class Fee',1,0,'C',1);
$this->CellFitScale(10,10,'RegNo',1,0,'C',1);
$this->CellFitScale(25,10,'Student Name',1,0,'C',1);

$this->CellFitScale(10,10,'Piad Date',1,0,'C',1);
$this->Cell(10,10,'Due Date',1,0,'C',1);
$this->CellFitScale(12,10,'Month',1,0,'C',1);




$this->CellFitScale(15,10,$h1,1,0,'C',1);
$this->CellFitScale(15,10,$h3,1,0,'C',1);
$this->CellFitScale(15,10,$h2,1,0,'C',1);
$this->CellFitScale(13,10,$h4,1,0,'C',1);
$this->CellFitScale(15,10,'Monthly Fee',1,0,'C',1);
$this->CellFitScale(15,10,'Permanant Discount',1,0,'C',1);
$this->CellFitScale(15,10,'Temporary Discount',1,0,'C',1);
$this->CellFitScale(12,10,$h5,1,0,'C',1);
$this->CellFitScale(14,10,$h6,1,0,'C',1);
$this->CellFitScale(15,10,$h7,1,0,'C',1);

$this->CellFitScale(8,10,'Fine',1,0,'C',1);
$this->CellFitScale(10,10,'Arrears',1,0,'C',1);
$this->CellFitScale(10,10,'FeeBDD',1,0,'C',1);
$this->CellFitScale(10,10,'FeeADD',1,0,'C',1);
$this->CellFitScale(10,10,'Received',1,0,'C',1);
$this->CellFitScale(10,10,'Balance',1,0,'C',1);


            
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
    $pdf->SetFont('Arial','B',7);
    

$pdf->CellFitScale(5,10,'S#',1,0,'C',1);
$pdf->CellFitScale(10,10,'Class Fee',1,0,'C',1);
$pdf->CellFitScale(10,10,'RegNo',1,0,'C',1);
$pdf->CellFitScale(25,10,'Student Name ',1,0,'C',1);

$pdf->CellFitScale(10,10,'Paid Date',1,0,'C',1);
$pdf->CellFitScale(10,10,'Due Date',1,0,'C',1);
$pdf->CellFitScale(12,10,'Month',1,0,'C',1);

$pdf->CellFitScale(15,10,$h1,1,0,'C',1);
$pdf->CellFitScale(15,10,$h3,1,0,'C',1);
$pdf->CellFitScale(15,10,$h2,1,0,'C',1);
$pdf->CellFitScale(13,10,$h4,1,0,'C',1);
$pdf->CellFitScale(15,10,'Monthly Fee',1,0,'C',1);
$pdf->CellFitScale(15,10,'Permanant Discount',1,0,'C',1);
$pdf->CellFitScale(15,10,'Temporary Discount',1,0,'C',1);
$pdf->CellFitScale(12,10,$h5,1,0,'C',1);
$pdf->CellFitScale(14,10,$h6,1,0,'C',1);
$pdf->CellFitScale(15,10,$h7,1,0,'C',1);

$pdf->CellFitScale(8,10,'Fine',1,0,'C',1);
$pdf->CellFitScale(10,10,'Arrears',1,0,'C',1);
$pdf->CellFitScale(10,10,'FeeBDD',1,0,'C',1);
$pdf->CellFitScale(10,10,'FeeADD',1,0,'C',1);
$pdf->CellFitScale(10,10,'Received',1,0,'C',1);
$pdf->CellFitScale(10,10,'Balance',1,0,'C',1);  
 $pdf->Ln(10);
    // Title

$counting=0;
$a=0;
$ab=0;
$format=0;
$feemonth=0;
$pdf->SetTextColor(0,0,0);
 $sql = "SELECT * from fees where curr_class='$class' AND feeperiod='$mnth' ";
                            if($resultt = mysqli_query($conn, $sql)){
                                     while($row =  mysqli_fetch_array($resultt)){
                              
           
       
          $sql1 = "SELECT cname,cfees FROM classes where id='$class'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
 $cname=$row1['cname'];
  $cfees=$row1['cfees'];
  }
}
           
                $a11=date("M",strtotime($row['duedate']));
      $a22=date("Y",strtotime($row['duedate']));
      $a33=date("d",strtotime($row['duedate']));
      $format123=$a33."-".$a11."-".$a22;
                                                    
$pdf->SetFont('Arial','',6);
$pdf->CellFitScale(5,5,++$counting,1,0,'C');
$pdf->Cell(10,5,number_format($cfees),1,0,'L');
$pdf->CellFitScale(10,5,$row['regno'],1,0,'C');
$pdf->CellFitScale(25,5,$row['sname'],1,0,'C');

$a1=date("M",strtotime($row['rcvddate']));
      $a2=date("Y",strtotime($row['rcvddate']));
      $a3=date("d",strtotime($row['rcvddate']));
      $format=$a3."-".$a1."-".$a2;
      


$pdf->CellFitScale(10,5,$format,1,0,'C');
$pdf->CellFitScale(10,5,$format123,1,0,'L');
$format=$row['feeperiod'];

$a=date("M",strtotime($format));
$ab=date("y",strtotime($format));

$feemonth=$a.'-'.$ab;

$pdf->CellFitScale(12,5,$feemonth,1,0,'C');

$pdf->CellFitScale(15,5,number_format($row['admfee']),1,0,'C');
$pdf->CellFitScale(15,5,number_format($row['annfee']),1,0,'C');
$pdf->CellFitScale(15,5,number_format($row['secfee']),1,0,'C');
$pdf->CellFitScale(13,5,number_format($row['examfee']),1,0,'C');
$pdf->CellFitScale(15,5,number_format($row['monfee']),1,0,'C');




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

$pdf->CellFitScale(15,5,number_format($td),1,0,'l');
  }
} 
}
if ($tempdisc=='0')
{
   $td=$cfees-$row['monfee'];

$pdf->CellFitScale(15,5,number_format($td),1,0,'l');   
}



$pdf->Cell(15,5,number_format($row['tempdisc']),1,0,'L');








$pdf->CellFitScale(12,5,number_format($row['miscfee']),1,0,'C');
$pdf->CellFitScale(14,5,number_format($row['tfee']),1,0,'C');
$pdf->CellFitScale(15,5,number_format($row['lfee']),1,0,'C');

$pdf->CellFitScale(8,5,number_format($row['fine']),1,0,'C');
$pdf->CellFitScale(10,5,number_format($row['arrears']),1,0,'C');
$pdf->CellFitScale(10,5,number_format($row['payablebdd']),1,0,'C');
$pdf->CellFitScale(10,5,number_format($row['payableadd']),1,0,'C');
$pdf->CellFitScale(10,5,number_format($row['rcvdamt']),1,0,'C');
$pdf->CellFitScale(10,5,number_format($row['balamt']),1,0,'C'); 
$pdf->Ln(5);



}
}
$sql420 = "SELECT SUM(rcvdamt)  AS r,SUM(balamt) AS b,SUM(arrears) as ar FROM fees where curr_class='$class' and entry='1'";
$result420 = $conn->query($sql420);

if ($result420->num_rows > 0) {
  // output data of each row
  while($row420 = $result420->fetch_assoc()) {
    $rt=$row420['r'];
     $rb=$row420['b'];
        $ra=$row420['ar'];
  }
}



$sql = "SELECT SUM(admfee) AS adm,SUM(annfee) AS ann,SUM(secfee) AS sec,SUM(examfee) AS exam,
SUM(monfee) AS mon,SUM(miscfee) AS misc,SUM(tfee) AS tofee,SUM(lfee) AS lifee,SUM(fine) AS fne,
SUM(arrears) AS arrear,SUM(payablebdd) AS pbdd,SUM(payableadd) AS padd,
SUM(rcvdamt) AS rcv,SUM(balamt) AS bal
 from fees where curr_class='$class' AND feeperiod='$mnth' and entry='0' ";
                            if($resultt = mysqli_query($conn, $sql)){
                                     $row =  mysqli_fetch_array($resultt);

  $pdf->Cell(190);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,5,'TOTAL RECEIVED',0,0,'C');


$tta=$ra+$row['arrear'];

$ttr=$rt+$row['rcv'];
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,5,number_format($ttr),0,0,'L');




}
$pdf->Output();



 ?>
