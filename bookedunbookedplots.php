<?php 
include('session_head.php');
  $counting=0;
  $total=0;
  $count=0;
  $sumc=0;
  $sumt=0;
include('connection.php');
include_once('libs/fpdf.php');
$prname=$_POST['project'];

$bool=$_POST['bool'];

class PDF extends FPDF
{
function Header()
{
    
    
$prname=$_POST['project'];
$bool=$_POST['bool'];
    // Line break
   // $this->Ln(10);
    if ($this->PageNo()==1) {
      # code...
     
   include('include_pdf_landscape_header.php');
   
   $this->SetTextColor(0,0,0);
      $this->SetFont('Arial','BU',13);
          $this->SetTextColor(48, 74, 123);
    $this->Cell(160,10,strtoupper($prname),0,0,'C');
    $this->Ln(7);
    $this->SetFont('Arial','U',12);
    $this->Cell(60);
    
    if ($bool=='0')
    {
         $this->Cell(160,10,'BOOKED PLOTS REPORT',0,0,'C');
    }
    
    
     if ($bool=='1')
    {
         $this->Cell(160,10,'UN-BOOKED PLOTS REPORT',0,0,'C');
    }
    
   
    $this->Ln(7);
    }
    else{


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

  

 $ub=0;
    
 $pdf->Ln(5);
 
    $sql = "SELECT * FROM block where projects='$prname'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $block=$row["block"];
    
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','B',13);
    $pdf->SetTextColor(48, 74, 123);
    $pdf->Cell(30,10,'BLOCK NAME: '.strtoupper($block),0,0,'L');
    $pdf->Ln(10);


$sql1 = "SELECT DISTINCT st FROM plot where block='$block'";
            $result1 = mysqli_query($conn, $sql1);

            if (mysqli_num_rows($result1) > 0) {
            // output data of each row
             while($row1 = mysqli_fetch_assoc($result1))  {
        
        $street=$row1['st'];

    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','U',11);
    $pdf->SetTextColor(48, 74, 123);
    $pdf->Cell(10);
    $pdf->CellFitScale(100,6,'STREET : '.$row1['st'],0,0,'L');
 $pdf->Ln(8);
 
 
 
     $pdf->SetFillColor(48, 74, 123);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);
    
 
  $pdf->Cell(10,7,'S#',1,0,'C',1);
  $pdf->Cell(20,7,'Plot Number',1,0,'C',1);
    $pdf->Cell(30,7,'Project Category',1,0,'L',1);
    $pdf->Cell(25,7,'Plot Category',1,0,'L',1);
    $pdf->Cell(25,7,'Plot Area',1,0,'L',1);
       $pdf->Cell(20,7,'Plot Size',1,0,'L',1);
          $pdf->Cell(30,7,'CUSTOMER NAME',1,0,'L',1);
             $pdf->Cell(30,7,'SPO',1,0,'L',1);
                $pdf->Cell(30,7,'CONTACT',1,0,'L',1);
                    $pdf->Cell(30,7,'REMARKS',1,0,'L',1);
                        $pdf->Cell(30,7,'STATUS',1,0,'L',1);

 $pdf->Ln(7);
$counting=0;

if ($bool=='0')

{$sql12 = "SELECT * FROM plot where block='$block' and st='$street' and name!='' order by pno asc";



}

if ($bool=='1')

{$sql12 = "SELECT * FROM plot where block='$block' and st='$street' and name='' order by pno asc";


}
  

  
            $result12 = mysqli_query($conn, $sql12);

            if (mysqli_num_rows($result12) > 0) {
            // output data of each row
             while($row12 = mysqli_fetch_assoc($result12))  {

 $pdf->SetFont('Arial','',7);

   $pdf->SetTextColor(0,0,0);

     
     if ($row12['name']=='')
     {
         ++$ubl;
     }
      if ($row12['name']!='')
     {
         ++$ub;
     }
     
     
     
       $pdf->Cell(10,6,++$counting,1,0,'C');
       $pdf->CellFitScale(20,6,$row12['pno'],1,0,'L');
       $pdf->CellFitScale(30,6,$row12['category'],1,0,'L');
       $pdf->CellFitScale(25,6,$row12['pc'],1,0,'L');
       $pdf->CellFitScale(25,6,$row12['size'].' '.$row12['mk'],1,0,'L');
       $pdf->CellFitScale(20,6,$row12['km'],1,0,'L');
$pdf->CellFitScale(30,6,$row12['name'],1,0,'L');
$pdf->CellFitScale(30,6,$row12['spo'],1,0,'L');
$pdf->CellFitScale(30,6,$row12['contact'],1,0,'L');
$pdf->CellFitScale(30,6,$row12['remarks'],1,0,'L');
$pdf->CellFitScale(30,6,$row12['status'],1,0,'L');

 $pdf->Ln(6);
 
 
 
 
 



           

}
}
 $counting=0;
 
 $pdf->Ln(5);
 



           

}
}
    
    
    
    
  }
} 


$pdf->Ln(2);

    $pdf->Cell(110);

 $pdf->SetFont('Arial','B',10);

 //$pdf->Cell(40);
$pdf->SetFillColor(57,184,227);
    $pdf->SetTextColor(255,255,255);
    
    
    if ($bool=='0')
    {
    
$pdf->Cell(60,6,'TOTAL BOOKED PLOTS: '.number_format($ub),1,0,'L',1);
}



    if ($bool=='1')
    {
    
$pdf->Cell(60,6,'TOTAL UN-BOOKED PLOTS: '.number_format($ubl),1,0,'L',1);
}





   
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
