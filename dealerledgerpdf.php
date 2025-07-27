<?php 
include('connection.php');
$balamt=0;
include('connection.php');

$dateulu=$_POST['date'];
$date1=$_POST['date1'];
$bankname=$_POST['bankname'];

$pdate=$dateulu;

$dates = array();

$sql23 = "SELECT DISTINCT date FROM banks where date!='$pdate' ";
$result23 = $conn->query($sql23);

if ($result23->num_rows > 0) {
  // output data of each row
  while($row23 = $result23->fetch_assoc()) {
       $dates[] = $row23['date'];
       
     
       
   
  }
} 


$mostRecent= 0;
      foreach($dates as $date){
        $curDate = $date;
        if ($curDate >= $mostRecent && $curDate <= $pdate) {
         $mostRecent = $curDate;
         }
      }
      $mostRecent;










$sql12 = "SELECT amountin,amountout FROM banks where date between '2021-04-01' and '$mostRecent' and bankname='$bankname'  ";
$result12 = $conn->query($sql12);

if ($result12->num_rows > 0) {
  // output data of each row
  while($row12 = $result12->fetch_assoc()) {
      
      
      if ($row12['amountin']!='0')
{
    $balamtp=$row12['amountin']+$balamtp;
}

if ($row12['amountout']!='0')
{
    $balamtp=$balamtp-$row12['amountout'];
}
   
  }
} 



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
  
$dateulu=$_POST['date'];
$date1=$_POST['date1'];
$bankname=$_POST['bankname'];

    // Line break
   // $this->Ln(10);
    if ($this->PageNo()==1) {
      # code...
     
   include('include_pdf_landscape_header.php');
   $this->SetTextColor(0,0,0);
      $this->SetFont('Arial','B',13);
          $this->SetTextColor(48, 74, 123);


    $a1=date("M",strtotime($dateulu));
      $a3=date("Y",strtotime($dateulu));
      $a2=date("d",strtotime($dateulu));
      $format=$a2."-".$a1."-".$a3;

      $b1=date("M",strtotime($date1));
      $b3=date("Y",strtotime($date1));
      $b2=date("d",strtotime($date1));
      $format1=$b2."-".$b1."-".$b3;

   

   $this->Ln(-5);
   $this->SetFont('Times','B',16);
    $this->Cell(280,10,'Dealer Ledger Report',0,0,'C');
 $this->Ln(7);

$this->Cell(280,10,$bankname.' ** '.$format.' ***** '.$format1,0,0,'C');



    $this->Ln(7);


    }
    else{
      $this->SetFillColor(6,47,79);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Times','I',11);


  
     $this->Cell(12,7,'S#',1,0,'C',1);
        $this->Cell(30,7,'Date',1,0,'L',1);
         
    
    
    $this->Cell(80,7,'Description/Heads',1,0,'L',1);
    $this->Cell(50,7,'Source',1,0,'L',1);
     $this->Cell(20,7,'Cheque #',1,0,'L',1);

    $this->Cell(30,7,'Credit',1,0,'R',1);
    $this->Cell(30,7,'Debit',1,0,'R',1);
    $this->Cell(30,7,'Balance',1,0,'R',1);
    $this->Ln(7);
}
}

function Footer()
{
$this->Ln();
  
  $this->Ln(10);
  $this->Cell(130);
  $this->SetFont('Arial','B',8);
  $this->Cell(0, 5, "Page " . $this->PageNo() . "/{nb}", 0, 1);
  $this->Cell(120);
  $this->SetFont('Arial','B',5);
  $this->Cell(18, 5, "Proudly Powered By", 0, 0);
  $this->SetFont('Arial','B',5);
  $this->SetTextColor(51,153,0);
  $this->Cell(30, 5, "PAKSOFTWARE", 0, 0,1);
}
}
$pdf = new PDF();
$pdf->AddPage('L');
$pdf->AliasNbPages();

$pdf->SetFont('Arial','',7);


 
    
$pdf->Image('download.png',10,5,30);
    // Title
 $pdf->SetDrawColor(6,47,79);
 $pdf->Ln(10);
 
    $pdf->SetFillColor(48, 74, 123);
    $pdf->SetTextColor(255,255,255);
     $pdf->SetFont('Arial','B',8);


  
    $pdf->Cell(12,7,'S#',1,0,'C',1);
        $pdf->Cell(30,7,'Date',1,0,'L',1);
         
    
    
    $pdf->Cell(80,7,'Description/Heads',1,0,'L',1);
    $pdf->Cell(50,7,'Source',1,0,'L',1);
     $pdf->Cell(20,7,'Cheque #',1,0,'L',1);

    $pdf->Cell(30,7,'Credit',1,0,'R',1);
    $pdf->Cell(30,7,'Debit',1,0,'R',1);
    $pdf->Cell(30,7,'Balance',1,0,'R',1);
    $pdf->Ln(7);


 $pdf->SetFont('Arial','',7);
   $pdf->SetTextColor(0,0,0);
   
  $sql = "SELECT * FROM banks where Vendor='$bankname'  and date between '$dateulu' AND '$date1' and descrip!='Installment Reversed' order by date,id   ";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  {
  


$pdf->Cell(12,6,++$counting,1,0,'C');
  $d1=date("M",strtotime($row['date']));
      $d3=date("Y",strtotime($row['date']));
      $d2=date("d",strtotime($row['date']));

      $dd=$d2."-".$d1."-".$d3;
$pdf->CellFitScale(30,6,$dd,1,0,'L');
 $c1=date("M",strtotime($row['month']));
      $c3=date("Y",strtotime($row['month']));
      
      $cc=$c1."-".$c3;

    
 if ($cc=='Jan-1970') {
  //      $pdf->Cell(15,6,' ',1,0,'C');
      } 
      else
      {   
//$pdf->CellFitScale(15,6,$cc,1,0,'C');
}


$sql12 = "SELECT sname,fname,curr_class FROM students where regno='$row[regno]'";
$result12 = $conn->query($sql12);

if ($result12->num_rows > 0) {
  // output data of each row
  while($row12 = $result12->fetch_assoc()) {
$sname=$row12['sname'];
$fname=$row12['fname'];

  }
}


$sql3 = "SELECT cname FROM classes where id='$row[class]'";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
  // output data of each row
  while($row3 = $result3->fetch_assoc()) {
  $cname=$row3['cname'];
  }
}


//$pdf->CellFitScale(40,6,$row['regno'],1,0,'L');
if ($row['regno']!='')
{
    
//$pdf->CellFitScale(40,6,$sname,1,0,'L');
//$pdf->CellFitScale(40,6,$fname,1,0,'L');
//$pdf->CellFitScale(20,6,$cname,1,0,'L');
}
else
{
    //$pdf->CellFitScale(40,6,'',1,0,'L');
//$pdf->CellFitScale(40,6,'',1,0,'L');
//$pdf->CellFitScale(20,6,'',1,0,'L');
}



$pdf->CellFitScale(80,6,$row['descrip'],1,0,'L');

if ($row['source']=='') {

  $pdf->Cell(50,6,'',1,0,'L');
  $pdf->Cell(20,6,' ',1,0,'L');
}
else
{

$pdf->CellFitScale(50,6,$row['source'],1,0,'L');

if ($row['accountnumber']=='')
{
    $pdf->CellFitScale(20,6,$row['cheque'],1,0,'L');
}
else
{
$pdf->CellFitScale(20,6,$row['accountnumber'],1,0,'L');
}

}










    $sumout=$row['amountout']+$sumout;






   $sumi=$row['amountin']+$sumi;


















    if ($row['amountout']!='0')
{
    $balamt=$row['amountout']+$balamt;
}

if ($row['amountin']!='0')
{
    $balamt=$balamt-$row['amountin'];
}


$pdf->CellFitScale(30,6,number_format($row['amountout'],2),1,0,'R');




if ($row['source']=='')
{
       
    if ($row['amountout']!='0')
    {
        $pdf->SetFillColor(0, 0, 0);
    $pdf->SetTextColor(255,255,153);
        $pdf->CellFitScale(30,6,number_format($row['amountin'],2),1,0,'R',1);
    }
    else
    {
          $pdf->SetFillColor(255, 255, 255);
         $pdf->SetTextColor(0,0,0);
$pdf->CellFitScale(30,6,number_format($row['amountin'],2),1,0,'R',1);
}
}

if ($row['source']!='')
{
    

       $pdf->SetTextColor(0,0,0);
$pdf->CellFitScale(30,6,number_format($row['amountin'],2),1,0,'R');
}

 $pdf->SetTextColor(0,0,0);
 
 if ($row['amountin']!='0')
 {
     $pdf->CellFitScale(30,6,number_format($balamt,2).' CR',1,0,'R');
 }
  if ($row['amountout']!='0')
 {
$pdf->CellFitScale(30,6,number_format($balamt,2).' DR',1,0,'R');
}
if ($row['amountin']=='0' && $row['amountout']=='0')
{
    $pdf->CellFitScale(30,6,number_format($balamt,2).' CR',1,0,'R');
}


$pdf->Ln(7);



}
}



$pdf->Cell(172);
 $pdf->SetFont('Times','B',10);
$pdf->Cell(20,6,'SUBTOTAL:',0,0,'R');
 //$pdf->Cell(40);
$pdf->SetFillColor(6,47,79);
    $pdf->SetTextColor(255,255,255);
     $pdf->SetDrawColor(255,255,255);
$pdf->CellFitScale(30,6,number_format($sumout,2),1,0,'R',1);
$pdf->CellFitScale(30,6,number_format($sumi,2),1,0,'R',1);
$pdf->CellFitScale(30,6,number_format($balamt,2),1,0,'R',1);





  

$pdf->Ln(6);

$pdf->Output();



 ?>
