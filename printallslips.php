<?php 
include('session_head.php');
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


     
     include('include_pdf_landscape_header2.php');
   $this->SetTextColor(0,0,0);
      $this->SetFont('Arial','B',11);
    $this->Ln(-7);
    $this->Image('download.png',11,9,25);
 $this->Ln(10);

}

function Footer()
{
  // To be implemented in your own inherited class

}
}

$pdf = new PDF();
$pdf->AddPage('');
$pdf->AliasNbPages();
$pdf->SetFont('Arial','',7);


  
                            
$pdf->Image('download.png',11,9,25);



      $m_name=$_POST['month'];
      
      
      $sql = "SELECT DISTINCT teacher FROM salary where month='$m_name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
$id=$row['teacher'];
    
      
      
      
      
       $a2=date("Y",strtotime($m_name));
      $a3=date("F",strtotime($m_name));
      $format=$a3."-".$a2;

$querry1 = "SELECT * FROM salary WHERE teacher='$id' AND month='$m_name'";
 if($resultt1 = mysqli_query($conn, $querry1)){
  $row1 =  mysqli_fetch_array($resultt1);
 
  
  $ide=$row1['teacher'];
  $querry12 = "SELECT * FROM employees WHERE id='$ide'";
 if($resultt12 = mysqli_query($conn, $querry12)){
  $row12 =  mysqli_fetch_array($resultt12);
  $name=$row12['name'];
    $fname=$row12['fname'];
     $department=$row12['department'];
          $ba=$row12['ba'];
                $bn=$row12['bn'];
      $designation=$row12['designation'];
           $jdate=$row12['jdate'];
                $nic=$row12['cnic'];
                $ww=$row1['fwd'];
                
                
                
                  $d11=date("M",strtotime($jdate));
      $d33=date("Y",strtotime($jdate));
      $d22=date("d",strtotime($jdate));

      $jdate1=$d22."-".$d11."-".$d33;
                
                
                
 }
 
$sp=$row1['hod']+$row1['ct'];
$ut=$row1['mo']+$row1['fuel']+$row1['con'];
$te=$sp+$ut+$row1['salary']+$row1['inc'];
$td=$row1['pf']+$row1['eobi']+$row1['dc']+$row1['loan']+$row1['wh']+$row1['ded']+$row1['advance'];


 
     
     
     
     
     
       $pdf->SetTextColor(48, 74, 123);
    
    
        $pdf->SetFont('Times','B','14');
        $pdf->Cell(37);
        $pdf->Cell(120,8,'Salary Slip',0,0,'C');
        $pdf->SetFont('Times','B','11');
        $pdf->Ln(8);
        $pdf->Cell(37);
               $pdf->SetTextColor(48, 74, 123);
    
          
        $pdf->Cell(120,8,'For the Month of '.$format,0,0,'C');
        $pdf->SetFont('Arial','',8);
        $pdf->Ln(10);
        $pdf->Cell(25);
          $pdf->SetTextColor(0,0,0);
        $pdf->Cell(25,8,'Employee ID',0,0,'L');
        $pdf->Cell(25,8,$id,0,0,'L');
        $pdf->Ln(10);
        $pdf->Cell(25);
        $pdf->Cell(25,8,'Name',0,0,'L');
         $pdf->SetFont('Arial','B',8);
        $pdf->CellFitScale(25,8,strtoupper($name),0,0,'L');
         $pdf->SetFont('Arial','',8);
        $pdf->Ln(10);
        $pdf->Cell(25);
        $pdf->Cell(25,8,'Date of Joining',0,0,'L');
        $pdf->Cell(25,8,$jdate1,0,0,'L');
        $pdf->Ln(5);
        $pdf->Cell(25);
        $pdf->Cell(25,8,'Department',0,0,'L');
        $pdf->Cell(25,8,$department,0,0,'L');
        $pdf->Ln(5);
        $pdf->Cell(25);
        $pdf->Cell(25,8,'Designation',0,0,'L');
              $pdf->SetFont('Arial','B',8);
        $pdf->Cell(25,8,$designation,0,0,'L');
              $pdf->SetFont('Arial','',8);
        $pdf->Ln(-30);
        $pdf->Cell(115);
        $pdf->Cell(20,8,'CNIC',0,0,'L');
        $pdf->Cell(25,8,$nic,0,0,'L');
        $pdf->Ln(20);
        $pdf->Cell(115);
        $pdf->Cell(20,8,'Bank A/C #',0,0,'L');
        $pdf->Cell(25,8,$ba,0,0,'L');
        $pdf->Ln(5);
        $pdf->Cell(115);
        $pdf->Cell(20,8,'Bank Name',0,0,'L');
        $pdf->Cell(25,8,$bn,0,0,'L');
        $pdf->Ln(5);
        $pdf->Cell(115);
        $pdf->Cell(20,8,'Working Days',0,0,'L');
              $pdf->SetFont('Arial','B',8);
          $pdf->Cell(25,8,$ww,0,0,'L');
                $pdf->SetFont('Arial','',8);
        $pdf->Ln(7);
        $pdf->Cell(25);
         $pdf->SetFillColor(6,47,79);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Times','B',12);
        $pdf->Cell(70,7,'SALARY & ALLOWANCES',0,0,'L',1);
     
           $pdf->SetFillColor(57,184,227);
    $pdf->SetTextColor(255,255,255);
        $pdf->Cell(70,7,'DEDUCTIONS',0,0,'L',1);
        $pdf->Ln(6);
        $pdf->Cell(25);
            $pdf->SetTextColor(0,0,0);
              $pdf->SetFont('Courier','B',9);
        $pdf->Cell(55,8,'Basic Salary',0,0,'L');
        $pdf->CellFitScale(25,8,number_format($row1['salary']),0,0,'L');
        $pdf->Ln(7);
        $pdf->Cell(25);
        $pdf->Cell(55,8,'Special Allowance',0,0,'L');
        $pdf->CellFitScale(25,8,number_format($sp),0,0,'L');
        $pdf->Ln(7);
        $pdf->Cell(25);
        $pdf->Cell(55,8,'Utility Allowance',0,0,'L');
        $pdf->CellFitScale(25,8,number_format($ut),0,0,'L');
        $pdf->Ln(7);
        $pdf->Cell(25);
        $pdf->Cell(55,8,'Misc.',0,0,'L');
        $pdf->CellFitScale(25,8,number_format($row1['inc']),0,0,'L');
        $pdf->Ln(-21);
        $pdf->Cell(95);
        $pdf->Cell(55,8,'P.Fund',0,0,'L');
        $pdf->CellFitScale(25,8,number_format($row1['pf']),0,0,'L');
        $pdf->Ln(7);
        $pdf->Cell(95);
        $pdf->Cell(55,8,'Day Care Charges',0,0,'L');
        $pdf->CellFitScale(25,8,number_format($row1['dc']),0,0,'L');
        $pdf->Ln(7);
        $pdf->Cell(95);
        $pdf->Cell(55,8,'Withholding Tax',0,0,'L');
        $pdf->CellFitScale(25,8,number_format($row1['wh']),0,0,'L');
        $pdf->Ln(7);
        $pdf->Cell(95);
        $pdf->Cell(55,8,'Loan Deduction',0,0,'L');
        $pdf->CellFitScale(25,8,number_format($row1['loan']),0,0,'L');
        $pdf->Ln(7);
        $pdf->Cell(95);
        $pdf->Cell(55,8,'EOBI',0,0,'L');
        $pdf->CellFitScale(25,8,number_format($row1['eobi']),0,0,'L');
        $pdf->Ln(7);
        $pdf->Cell(95);
        $pdf->Cell(55,8,'Misc/Adv.',0,0,'L');


        $pdf->CellFitScale(25,8,number_format($row1['ded']+$row1['advance']),0,0,'L');
        $pdf->Ln(7);
        $pdf->Cell(25);
           $pdf->SetFillColor(6,47,79);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Times','B',10);
        $pdf->Cell(55,6,'Total Earnings:',0,0,'L',1);

        $pdf->CellFitScale(15,6,number_format($te),0,0,'L',1);
     
       $pdf->SetFillColor(57,184,227);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Times','B',10);
        $pdf->Cell(55,6,'Total Deductions:',0,0,'L',1);
        $pdf->CellFitScale(15,6,number_format($td),0,0,'L',1);
        $pdf->Ln(6);
        $pdf->Cell(95);
          $pdf->SetFillColor(6,47,79);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Times','B',10);
        $pdf->Cell(55,6,'Net Salary:',0,0,'L',1);

        $pdf->CellFitScale(15,6,number_format($row1['gs']),0,0,'L',1);
        $pdf->Ln(30);
            $pdf->SetTextColor(0,0,0);
        $pdf->Cell(30);
        $pdf->Cell(30,8,"Employer's Signature",'T',0,'L');
        $pdf->Cell(70);
        $pdf->Cell(30,8,"Employer's Signature",'T',0,'L');
        $pdf->Ln(100);
        $sp=0;
$ut=0;
$te=0;
$td=0;
     
  }
}
}


$pdf->Output();

$conn->close();
  
 ?>
  