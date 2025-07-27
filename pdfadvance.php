<?php
include('connection.php');
include('session_head.php');
                            
$count=0;
$tp=0;
include_once('libs/fpdf.php');


$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();

    # code...
 //$month='0';
   $teacher=$_GET['id'];
      $month=$_GET['month'];
   
    //$month=$_GET['termname'];
    
  /*$year =date('Y', strtotime($month));
      $monnth= date('M', strtotime($month));
      $date=$monnth."-".$year;
*/
  
                            

    
   include('include_pdf_landscape_header22.php');

//echo 'gdbfgndfgn';

$pdf->Ln();

    $sqll = "SELECT * from advance where eid='$teacher' order by id desc limit 1" ;
    if($resultt = mysqli_query($conn, $sqll)){
$row1=  mysqli_fetch_array($resultt);
  

 
$a12=date("F",strtotime($month));
      $a22=date("Y",strtotime($month));

      $format=$a12."-".$a22;

$pdf->Image('download.png',11,9,25);

$pdf->Cell(40);

  $pdf->SetFont('Times','B',16);
$pdf->Cell(120,8,'Advance Salary Slip ',0,0,'C');

$pdf->Ln(7);


$pdf->Cell(200,10,'For the Month of '. $format,0,0,'C');



    $pdf->Ln(7);
 $pdf->SetTextColor(0,0,0);
$pdf->Ln(15);
  $pdf->SetFont('Arial','',10);

$pdf->Cell(40,10,'Employee ID:',0,0,'L');


$pdf->SetFont('Arial','B',10);
$pdf->Cell(10);
$pdf->Cell(20, 10, $teacher,0,0, 'L');
$pdf->Cell(45);
$pdf->SetFont('Arial','',10);
$pdf->Cell(40, 10, 'Paid on:',0,0, 'L');
$pdf->Cell(10);
   $b1=$row1['date'];
     $b2 =date('Y', strtotime($b1));
      $b3= date('M', strtotime($b1));
      $b4= date('d', strtotime($b1));
      $b5=$b4."-".$b3."-".$b2;
$pdf->SetFont('Arial','B',10);
$pdf->Cell(25, 10,$b5,0,0, 'L');
$pdf->Ln(10);

$pdf->SetFont('Arial','',10);
$pdf->Cell(40,10,'Employee Name:',0,0,'L');

$sqllname = "SELECT * from employees WHERE id='$teacher'" ;
 if($resulttname = mysqli_query($conn, $sqllname)){
 $rowname =  mysqli_fetch_array($resulttname);
 //$name=$rowname['name'];
$pdf->Cell(10);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(65, 10,$rowname['name'], 0, 0, 'L');

//$pdf->Ln(10);

$pdf->SetFont('Arial','',10);
$pdf->Cell(40,10,'Designation:',0,0,'L');

$pdf->Cell(10);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(33, 10,$rowname['designation'],0, 0, 'L');

$pdf->Ln(10);
$pdf->SetFont('Arial','',10);
$pdf->Cell(40,10,'Department:',0,0,'L');

$pdf->Cell(10);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(65, 10,$rowname['department'],0, 0, 'L');
$pdf->Ln(2);
$pdf->Cell(190, 10,'','B', 0, 'L');
 
//DATA
//$pdf->Cell(52, 6, $mob, 'B', 0, 'L');
$pdf->Ln(15);
$pdf->SetFont('courier','B',10);
$pdf->Ln(2);
$pdf->Cell(30);
 $pdf->SetFillColor(6,47,79);
    $pdf->SetTextColor(255,255,255);
$pdf->Cell(60,8,'Basic Salary:',1,0,'L',1);
//$pdf->Cell(10);
 $pdf->SetTextColor(0,0,0);
$pdf->SetFont('Courier','B',10);
$pdf->Cell(60, 8,number_format($rowname['salary'])." /-",1,0,'L');
}
else{
    echo "Error: " . $sqllname . "<br>" . $conn->error;
}
$pdf->Cell(20);


$pdf->Ln(8);
$pdf->Cell(30);
   $pdf->SetFillColor(97,200,231);
    $pdf->SetTextColor(255,255,255);
$pdf->SetFont('Courier','B',10);
$pdf->Cell(60,8," Advance Salary: ",1, 0, 'L',1);
//$pdf->Cell(10);
$pdf->SetFont('Courier','B',10);
 $pdf->SetTextColor(0,0,0);
$pdf->Cell(60,8,number_format($row1['amount'])." /-",1, 0, 'L');



$pdf->Ln(20);





$pdf->Cell(20,5,'',0,0,'L');



$pdf->Cell(110);
$pdf->SetFont('Arial','',12);
$pdf->Cell(45,7.5,'Employee Signature','B',0,'C');
$pdf->Ln(28);

$pdf->SetFont('Arial','B',8);
$pdf->Cell(30);
$pdf->Cell(20,5,'Verified By:',0,0,'L');
$pdf->SetFont('Arial','',12);
$pdf->Cell(30,7.5,'Accountant','B',0,'C');

$pdf->SetFont('Arial','B',8);
$pdf->Cell(15);

$pdf->Cell(20,5,'Approved By:',0,0,'L');
$pdf->Cell(15);

$pdf->SetFont('Arial','',12);
$pdf->Cell(30,7.5,'Principal','B',0,'C');

/*$pdf->Cell(15);

$pdf->Cell(30,6,'Customer','B',0,'C');*/


$pdf->ln(30);
/*$pdf->Cell(180,5,'Air Foundation',0,0,'C');
*/
$pdf->ln(10);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(50,8,'Remarks:',0,0,'L');
$pdf->ln(8);
$pdf->SetFont('Arial','',10);

$pdf->MultiCell(180,8,$row1['description'],1);

}
else{
    echo "Error: " . $sqll . "<br>" . $conn->error;
}
$pdf->Output();


$conn->close();
  
 ?>
