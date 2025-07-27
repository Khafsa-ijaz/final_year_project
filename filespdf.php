<?php 
include('session_head.php');
  $counting=0;
  $total=0;
  $count=0;
  $sumc=0;
  $sumt=0;
include('connection.php');
include_once('libs/fpdf.php');
 $id=$_GET['id'];
$sql = "SELECT id,sname FROM students where id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id=$row['id'];
    $sname=$row['sname'];
        $program=$row['program'];

  }
}

class PDF extends FPDF
{
function Header()
{
    include('connection.php');
 $id=$_GET['id'];
$sql = "SELECT * FROM students where id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id=$row['id'];
    $sname=$row['sname'];
        $program=$row['program'];

  }
}

      
      
    // Line break
   // $this->Ln(10);
    if ($this->PageNo()==1) {
      # code...
     
   include('include_pdf_landscape_header2.php');
   $this->SetTextColor(0,0,0);
      $this->SetFont('Arial','B',13);
          $this->SetTextColor(48, 74, 123);


 $this->Cell(130,10,'CHECK LIST FOR MS/M.PHILL STUDENT FILES',0,0,'C');

    $this->Ln(7);

    $this->Cell(200,10,'NAME : ' .strtoupper($sname),0,0,'C');

    $this->Ln(7);




    $this->Cell(200,10,'DEGREE NAME : ' .strtoupper($program),0,0,'C');

     $this->Ln(7);




    $this->Cell(200,10,'REG NO : ' .strtoupper($id),0,0,'C');
    $this->Ln(7);

    }
    else{
    $this->SetFillColor(48, 74, 123);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',8);

 $pdf->Cell(12,7,'S#',1,0,'C',1);
    $pdf->Cell(90,7,'NAME OF DOCUMENT',1,0,'L',1);
    $pdf->Cell(30,7,'YES',1,0,'C',1);
$pdf->Cell(30,7,'NO',1,0,'C',1);
$pdf->Cell(30,7,'N/A',1,0,'C',1);
     //$pdf->Cell(30,7,'TOTAL',1,0,'C',1);
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
  $this->Cell(18, 5, "Developed By", 0, 0);
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
    $pdf->Cell(90,7,'FILE NAME',1,0,'L',1);
    $pdf->Cell(30,7,'YES',1,0,'C',1);
$pdf->Cell(30,7,'NO',1,0,'C',1);
$pdf->Cell(30,7,'N/A',1,0,'C',1);
     //$pdf->Cell(30,7,'TOTAL',1,0,'C',1);
         
                    $pdf->Ln(7);
    // Title

       
     
      $sql23 = "SELECT name FROM file_heads";
            $result23 = mysqli_query($conn, $sql23);

            if (mysqli_num_rows($result23) > 0) {
            // output data of each row
             while($row23= mysqli_fetch_assoc($result23))  {


                  



            $sql = "SELECT * FROM files where reg_no='$id' and file_name='$row23[name]' ";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  {
         
   $pdf->SetFont('Arial','',7);
   $pdf->SetTextColor(0,0,0);
       $pdf->Cell(12,6,++$counting,1,0,'C');

$pdf->CellFitScale(90,6,$row23['name'],1,0,'L');

$pdf->Cell(30,6,'Yes',1,0,'C');
$pdf->Cell(30,6,'',1,0,'C');
$pdf->Cell(30,6,'',1,0,'C');


 $pdf->Ln(6);
 }
}

else
{
        $pdf->SetFont('Arial','',7);
   $pdf->SetTextColor(0,0,0);
       $pdf->Cell(12,6,++$counting,1,0,'C');

$pdf->CellFitScale(90,6,$row23['name'],1,0,'L');

$pdf->Cell(30,6,'',1,0,'C');
$pdf->Cell(30,6,'No',1,0,'C');
$pdf->Cell(30,6,'',1,0,'C');


 $pdf->Ln(6);
}
     
     
     





}
}







    


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
