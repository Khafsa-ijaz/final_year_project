<?php 
include('session_head.php');
  $counting=0;
  $total=0;
  $count=0;
  $sumc=0;
  $sumt=0;
  $pal=0;
  $a=0;
  $date=$_POST['date'];
    $date1=$_POST['date1'];
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
         
         
         
         
$a12=date("F",strtotime($date));
      $a22=date("Y",strtotime($date));
      $a32=date("d",strtotime($date));
      $format2=$a32."-".$a12."-".$a32;
      
      
      $a121=date("F",strtotime($date1));
      $a221=date("Y",strtotime($date1));
      $a321=date("d",strtotime($date1));
      $format3=$a321."-".$a121."-".$a321;


         
         
   include('include_pdf_landscape_header.php');
   $this->SetTextColor(0,0,0);
      $this->SetFont('Arial','B',13);
          $this->SetTextColor(48, 74, 123);
    $this->Cell(160,10,' DATEWISE TASK REPORT',0,0,'C');

 $this->Ln(7);
  $this->Cell(280,10,'DATE: ' .$format2.'***'.$format3,0,0,'C');
    $this->Ln(7);
    }
    else{
    $this->SetFillColor(48, 74, 123);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',8);

 $this->Cell(12,7,'S#',1,0,'C',1);
 $this->Cell(20,7,'DATE',1,0,'L',1);
    $this->Cell(40,7,'ASSIGN TO',1,0,'L',1);
    $this->Cell(40,7,'PROJECT',1,0,'L',1);
$this->Cell(110,7,'TASK',1,0,'L',1);
     $this->Cell(20,7,'PRIORITY',1,0,'L',1);
          $this->Cell(20,7,'STATUS',1,0,'L',1);
             $this->Cell(20,7,'DUEDATE',1,0,'L',1);
    $this->Ln(7);
}
}

function Footer()
{
  // To be implemented in your own inherited class
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
$pdf->Image('download.png',10,5,30);
$pdf->SetFont('Arial','',7);

  

 
    
 $pdf->Ln(5);
 
 

 
 
    $pdf->SetFillColor(48, 74, 123);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);

 $pdf->Cell(12,7,'S#',1,0,'C',1);
 $pdf->Cell(20,7,'DATE',1,0,'L',1);
    $pdf->Cell(40,7,'ASSIGN TO',1,0,'L',1);
    $pdf->Cell(40,7,'PROJECT',1,0,'L',1);
$pdf->Cell(110,7,'TASK',1,0,'L',1);
     $pdf->Cell(20,7,'PRIORITY',1,0,'L',1);
          $pdf->Cell(20,7,'STATUS',1,0,'L',1);
             $pdf->Cell(20,7,'DUEDATE',1,0,'L',1);
         
                    $pdf->Ln(7);
    // Title

$sql = "SELECT * FROM tasks where sdate between '$date' and '$date1' order by status";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  {


            
$sql23 = "SELECT name FROM employees where id='$row[empid]'";
$result23 = $conn->query($sql23);

if ($result23->num_rows > 0) {
  // output data of each row
  while($row23 = $result23->fetch_assoc()) {
    $name=$row23['name'];
  }
}



$a1=date("M",strtotime($row['edate']));
      $a2=date("Y",strtotime($row['edate']));
      $a3=date("d",strtotime($row['edate']));
      $format=$a3."-".$a1."-".$a2;





$a1a=date("M",strtotime($row['sdate']));
      $a2a=date("Y",strtotime($row['sdate']));
      $a3a=date("d",strtotime($row['sdate']));
      $formata=$a3a."-".$a1a."-".$a2a;







if ($row['status']=='Completed')
{
    ++$pal;
}


if ($row['status']=='Pending')
{
    ++$a;
}


 $pdf->SetFont('Arial','',7);

   $pdf->SetTextColor(0,0,0);
       $pdf->Cell(12,6,++$counting,1,0,'C');
       
$pdf->CellFitScale(20,6,$formata,1,0,'L');

$pdf->CellFitScale(40,6,$name,1,0,'L');
$pdf->CellFitScale(40,6,$row['project'],1,0,'L');
$pdf->CellFitScale(110,6,$row['task'],1,0,'L');
$pdf->CellFitScale(20,6,$row['priority'],1,0,'L');

$pdf->CellFitScale(20,6,$row['status'],1,0,'L');

$pdf->CellFitScale(20,6,$format,1,0,'L');
   

 $pdf->Ln(6);



          

}
}







$pdf->Ln(2);

    $pdf->Cell(112);

 $pdf->SetFont('Arial','B',10);

 //$pdf->Cell(40);
$pdf->SetFillColor(57,184,227);
    $pdf->SetTextColor(255,255,255);
$pdf->Cell(30,6,'Completed: '.number_format($pal),1,0,'L',1);
$pdf->Cell(30,6,'Pending: '.number_format($a),1,0,'L',1);



    



   
date_default_timezone_set("Asia/Karachi");
$pdf->Cell(90);
$data=date("Y-m-d");
$time=date("H:i:s");

     $d11=date("M",strtotime($data));
      $d33=date("Y",strtotime($data));
      $d22=date("d",strtotime($data));

      $dd1=$d22."-".$d11."-".$d33;

 $pdf->Ln(6);
  $pdf->SetFont('Arial','B',7);
  $pdf->SetTextColor(48,74,123);
$pdf->Cell(280,5,'Printed on Date '.$dd1.' Time '.$time. ' By '.$rowsession['username'],0,0,'C');
 $pdf->SetTextColor(0,0,0);
//output
    
 
   

$pdf->Output();



 ?>
