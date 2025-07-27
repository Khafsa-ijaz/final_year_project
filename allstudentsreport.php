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

      
    // Line break
   // $this->Ln(10);
    if ($this->PageNo()==1) {
      # code...
     
   include('include_pdf_landscape_header.php');
   $this->SetTextColor(0,0,0);
      $this->SetFont('Arial','B',13);
          $this->SetTextColor(48, 74, 123);
    $this->Cell(160,10,'ALL STUDENTS LIST',0,0,'C');

    $this->Ln(7);
    }
    else{
    $this->SetFillColor (16, 144, 205);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',8);


$this->Cell(12,7,'S#',1,0,'C',1);
    $this->Cell(20,7,'NAME',1,0,'L',1);
   $this->Cell(25,7,'FATHER NAME',1,0,'L',1);
$this->Cell(20,7,'MOBILE',1,0,'L',1);

     $this->Cell(20,7,'DOB',1,0,'L',1);
          
            $this->Cell(50,7,'ADDRESS',1,0,'L',1);
             
                  $this->Cell(20,7,'STATUS',1,0,'L',1);
                  
             $this->Cell(20,7,'PROGRAM',1,0,'L',1);
                  $this->Cell(15,7,'CGPA',1,0,'L',1);
                           $this->Cell(30,7,'TOTAL MARKS',1,0,'L',1);
             $this->Cell(30,7,'OBTAINED MARKS',1,0,'L',1);
             $this->Cell(20,7,'SESSION',1,0,'L ',1);
                  //$this->Cell(20,7,'STATUS',1,0,'L',1);
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
  $this->Cell(18, 5, " Developed By:", 0, 0);
  $this->SetFont('Arial','B',5);
  $this->SetTextColor(51,153,0);
  $this->Cell(30, 5, "Khafsa Ijaz And Habeeba Mateen", 0, 0,1);
}
}
$pdf = new PDF();
$pdf->AddPage('L');
$pdf->AliasNbPages();
$pdf->Image('download.png',10,5,30);
$pdf->SetFont('Arial','',7);

  

 
    
 $pdf->Ln(5);
 
 

 
 
    $pdf->SetFillColor(16, 144, 205);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);

 $pdf->Cell(12,7,'S#',1,0,'C',1);
    $pdf->Cell(20,7,'NAME',1,0,'L',1);
    $pdf->Cell(25,7,'FATHER NAME',1,0,'L',1);
$pdf->Cell(20,7,'MOBILE',1,0,'L',1);
//$pdf->Cell(20,7,'EMERGENCY NO',1,0,'L',1);
     $pdf->Cell(20,7,'DOB',1,0,'L',1);
          //$pdf->Cell(30,7,'QUALIFICATION',1,0,'L',1);
             $pdf->Cell(40,7,'ADDRESS',1,0,'L',1);
             
                  $pdf->Cell(40,7,'EMAIL',1,0,'L',1);
                  //$pdf->Cell(20,7,'GENDER',1,0,'L',1);
         // $pdf->Cell(20,7,'MERITAL STATUS',1,0,'L',1);
             //$pdf->Cell(20,7,'VACCINE STATUS',1,0,'L',1);
             $pdf->Cell(20,7,'PROGRAM',1,0,'L',1);
                  $pdf->Cell(15,7,'CGPA',1,0,'L',1);
                           $pdf->Cell(23,7,'TOTAL MARKS',1,0,'L',1);
             $pdf->Cell(27,7,'OBTAINED MARKS',1,0,'L',1);
             $pdf->Cell(20,7,'SESSION',1,0,'L ',1);
                  //$pdf->Cell(20,7,'INACTIVE_DATE',1,0,'L',1);
                //   $pdf->Cell(20,7,'REMARKS',1,0,'L',1);
                    $pdf->Ln(7);
    // Title

$sql = "SELECT * FROM extrastudents order by ID DESC";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  {


              // if ($row['status']=='Active')
              // {



$a1=date("M",strtotime($row['jdate']));
      $a2=date("Y",strtotime($row['jdate']));
      $a3=date("d",strtotime($row['jdate']));
      $format=$a3."-".$a1."-".$a2;


 $pdf->SetFont('Arial','',7);

   $pdf->SetTextColor(0,0,0);
       $pdf->Cell(12,6,++$counting,1,0,'C');

$pdf->Cell(20,6,$row['sname'],1,0,'L');
$pdf->Cell(25,6,$row['fname'],1,0,'L');
$pdf->Cell(20,6,$row['emno'],1,0,'L');
$pdf->Cell(20,6,$row['dob'],1,0,'L');

$pdf->Cell(40,6,$row['address'],1,0,'L');
$pdf->Cell(40,6,$row['email'],1,0,'L');
$pdf->Cell(20,6,$row['program'],1,0,'L');
$pdf->Cell(15,6,$row['cgpa'],1,0,'L');   
$pdf->Cell(23,6,$row['It_marks'],1,0,'L');
$pdf->Cell(27,6,$row['Iob_marks'],1,0,'L');
$pdf->Cell(20,6,$row['session'],1,0,'L');


 $pdf->Ln(6);



//               if ($row['status']=='In-Active')
//               {
                  
                  
                  
//                   $a1=date("M",strtotime($row['jdate']));
//       $a2=date("Y",strtotime($row['jdate']));
//       $a3=date("d",strtotime($row['jdate']));
//       $format=$a3."-".$a1."-".$a2;

                  
//                    $pdf->SetFont('Arial','',7);

//  $pdf->SetFillColor(228, 30, 63);
//     $pdf->SetTextColor(255,255,255);

//    $pdf->SetTextColor(255,255,255);
//        $pdf->Cell(12,6,++$counting,1,0,'C',1);

// $pdf->Cell(50,6,$row['name'],1,0,'L',1);
// $pdf->Cell(50,6,$row['fname'],1,0,'L',1);
// $pdf->Cell(20,6,$row['mob'],1,0,'L',1);
// $pdf->Cell(30,6,$row['dob'],1,0,'L',1);

// $pdf->Cell(30,6,$row['designation'],1,0,'L',1);

// $pdf->Cell(58,6,$row['address'],1,0,'L',1);
 
// $pdf->Cell(15,6,$format,1,0,'L',1);
// $pdf->Cell(20,6,$row['status'],1,0,'L',1);
//  $pdf->Ln(6);
// }


// }
}
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

