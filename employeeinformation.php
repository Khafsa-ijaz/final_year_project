<?php 
include('session_head.php');
include('session_finder.php');
date_default_timezone_set("Asia/Karachi");
$adate=date("Y-m-d");
$atime=date("H:i:s");
$byy=$rowsession['username'];
include('connection.php');
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    
    $userid = $_GET['id'];
    $get_user = mysqli_query($conn,"SELECT * FROM employees WHERE id='$userid'");
    
    if(mysqli_num_rows($get_user) === 1){
        
        $roww = mysqli_fetch_assoc($get_user);
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

      
    // Line break
   // $this->Ln(10);
    if ($this->PageNo()==1) {
      # code...
     
   include('inc.php');
   $this->Ln(10);
   $this->SetFont('Times','B',16);
    $this->Cell(200,10,'Employee Information Sheet',0,0,'C');

    $this->Ln(7);
    }
    else{
        
        
        
        
}
}

function Footer()
{
  // To be implemented in your own inherited class
  $this->Ln(5);
  
 
}
}
$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();




$pdf->Image('download.png',11,9,25);

$pdf->SetFont('Arial','',7);

       
         $sqll1122 = "SELECT  image FROM employees where id='$roww[id]' " ;
 if($resultt1122 = mysqli_query($conn, $sqll1122)){
 while($row2 =  mysqli_fetch_array($resultt1122)){
     $i=$row2['image'];
 }
 }
  
/*  $month=$_POST['termname'];
  $year =date('Y', strtotime($month));
      $monnth= date('M', strtotime($month));
      $date=$monnth."-".$year;*/

  
                            
if ($i=='Nill')
{
   $pdf->Image('uploads/noimage.png',170,27,25); 
}
else
{

$pdf->Image('uploads/'.$i,170,27,25);
}
      
 
  
//$pdf->Line(5, 150, 210-80, 80); // 20mm from each edge
//$pdf->Line(50, 45, 210-50, 45); // 50mm from each edge
 
    
 $pdf->Ln(5);
   $pdf->SetFillColor(6,47,79);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',11);


    $pdf->CellFitScale(194,7,'Personal Information',1,0,'C',1);
   

                 $pdf->Ln(10);

    $pdf->Cell(2);
    $pdf->SetTextColor(0,0,0);
    // Title







$a1=date("M",strtotime($roww['jdate']));
      $a2=date("Y",strtotime($roww['jdate']));
      $a3=date("d",strtotime($roww['jdate']));
      $format=$a3."-".$a1."-".$a2;





$a11=date("M",strtotime($roww['bdate']));
      $a21=date("Y",strtotime($roww['bdate']));
      $a31=date("d",strtotime($roww['bdate']));
      $format1=$a31."-".$a11."-".$a21;




 $pdf->SetFont('Times','',9);
$pdf->Cell(30,5,'NAME:',0,0,'L');
$pdf->setFillColor(230,230,230);
$pdf->SetFont('Times','B',10);
$pdf->Cell(-3);
    $pdf->SetTextColor(0,0,0);
$pdf->CellFitScale(54,5,$roww['name'],'B',0,'L');
$pdf->Cell(20);
$pdf->SetFont('Times','',9);
    $pdf->SetTextColor(0,0,0);
$pdf->Cell(30,5,'FATHER NAME:',0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(1);
    $pdf->SetTextColor(0,0,0);
$pdf->CellFitScale(54,5,$roww['fname'],'B',0,'L');
      

$pdf->Ln(14);
$pdf->Cell(2);
 $pdf->SetFont('Times','',9);
$pdf->Cell(30,5,'CNIC:',0,0,'L');
$pdf->setFillColor(230,230,230);
$pdf->SetFont('Times','B',10);
$pdf->Cell(-3);
    $pdf->SetTextColor(0,0,0);
$pdf->CellFitScale(54,5,$roww['cnic'],'B',0,'L');
$pdf->Cell(20);
$pdf->SetFont('Times','',9);
    $pdf->SetTextColor(0,0,0);
$pdf->Cell(30,5,'DATE OF BIRTH:',0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(1);
    $pdf->SetTextColor(0,0,0);
$pdf->CellFitScale(54,5,$format1,'B',0,'L');


$pdf->Ln(14);
$pdf->Cell(2);
 $pdf->SetFont('Times','',9);
$pdf->Cell(30,5,'MOBILE:',0,0,'L');
$pdf->setFillColor(230,230,230);
$pdf->SetFont('Times','B',10);
$pdf->Cell(-3);
    $pdf->SetTextColor(0,0,0);
$pdf->CellFitScale(54,5,$roww['mob'],'B',0,'L');
$pdf->Cell(20);
$pdf->SetFont('Times','',9);
    $pdf->SetTextColor(0,0,0);
$pdf->Cell(30,5,'MARITAL:',0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(1);
    $pdf->SetTextColor(0,0,0);
$pdf->CellFitScale(54,5,$roww['marital'],'B',0,'L');
      $pdf->Ln(14);



$pdf->Cell(2);
 $pdf->SetFont('Times','',9);
$pdf->Cell(30,5,'GENDER:',0,0,'L');
$pdf->setFillColor(230,230,230);
$pdf->SetFont('Times','B',10);
$pdf->Cell(-3);
    $pdf->SetTextColor(0,0,0);
$pdf->CellFitScale(54,5,$roww['gender'],'B',0,'L');
$pdf->Cell(20);
$pdf->SetFont('Times','',9);
    $pdf->SetTextColor(0,0,0);
$pdf->Cell(30,5,'VACCINE:',0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(1);
    $pdf->SetTextColor(0,0,0);
$pdf->CellFitScale(54,5,$roww['vaccine'],'B',0,'L');
      $pdf->Ln(14);

 



$pdf->Cell(2);
 $pdf->SetFont('Times','',9);
$pdf->Cell(30,5,'MOBILE-2:',0,0,'L');
$pdf->setFillColor(230,230,230);
$pdf->SetFont('Times','B',10);
$pdf->Cell(-3);
    $pdf->SetTextColor(0,0,0);
$pdf->CellFitScale(54,5,$roww['en1'],'B',0,'L');
$pdf->Cell(20);
$pdf->SetFont('Times','',9);
    $pdf->SetTextColor(0,0,0);
$pdf->Cell(30,5,'MOBILE-3:',0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(1);
    $pdf->SetTextColor(0,0,0);
$pdf->CellFitScale(54,5,$roww['en2'],'B',0,'L');
      $pdf->Ln(14);

$pdf->Cell(2);
 $pdf->SetFont('Times','',9);
$pdf->Cell(30,5,'ADDRESS:',0,0,'L');
$pdf->setFillColor(230,230,230);
$pdf->SetFont('Times','B',10);
$pdf->Cell(-3);
    $pdf->SetTextColor(0,0,0);
$pdf->CellFitScale(160,5,$roww['address'],'B',0,'L');



$pdf->Ln(14);



   $pdf->SetFillColor(6,47,79);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',11);


    $pdf->CellFitScale(194,7,'Academics Information',1,0,'C',1);


    
                 $pdf->Ln(14);

    $pdf->Cell(2);
    $pdf->SetTextColor(0,0,0);
    // Title

 $pdf->SetFont('Times','',9);
$pdf->CellFitScale(30,5,'QUALIFICATION:',0,0,'L');
$pdf->setFillColor(230,230,230);
$pdf->SetFont('Times','B',10);
$pdf->Cell(-3);
    $pdf->SetTextColor(0,0,0);
$pdf->CellFitScale(54,5,$roww['qualification'],'B',0,'L');
$pdf->Cell(20);
$pdf->SetFont('Times','',9);
    $pdf->SetTextColor(0,0,0);
$pdf->Cell(30,5,'DEPARTMENT:',0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(1);
    $pdf->SetTextColor(0,0,0);
$pdf->CellFitScale(54,5,$roww['department'],'B',0,'L');
      

$pdf->Ln(14);
$pdf->Cell(2);
 $pdf->SetFont('Times','',9);
$pdf->Cell(30,5,'DESIGNATION:',0,0,'L');
$pdf->setFillColor(230,230,230);
$pdf->SetFont('Times','B',10);
$pdf->Cell(-3);
    $pdf->SetTextColor(0,0,0);
$pdf->CellFitScale(54,5,$roww['designation'],'B',0,'L');
$pdf->Cell(20);
$pdf->SetFont('Times','',9);
    $pdf->SetTextColor(0,0,0);
$pdf->Cell(30,5,'JOIN DATE:',0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(1);
    $pdf->SetTextColor(0,0,0);
$pdf->CellFitScale(54,5,$format,'B',0,'L');


$pdf->Ln(14);
$pdf->Cell(2);
 $pdf->SetFont('Times','',9);
$pdf->Cell(30,5,'SALARY:',0,0,'L');
$pdf->setFillColor(230,230,230);
$pdf->SetFont('Times','B',10);
$pdf->Cell(-3);
    $pdf->SetTextColor(0,0,0);
$pdf->CellFitScale(54,5,$roww['salary'],'B',0,'L');
$pdf->Cell(20);
$pdf->SetFont('Times','',9);
    $pdf->SetTextColor(0,0,0);
$pdf->Cell(30,5,'STATUS:',0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(1);
    $pdf->SetTextColor(0,0,0);
$pdf->CellFitScale(54,5,$roww['status'],'B',0,'L');
      $pdf->Ln(14);



$pdf->Cell(2);
 $pdf->SetFont('Times','',9);
$pdf->Cell(30,5,'REMARKS:',0,0,'L');
$pdf->setFillColor(230,230,230);
$pdf->SetFont('Times','B',10);
$pdf->Cell(-3);
    $pdf->SetTextColor(0,0,0);
$pdf->CellFitScale(160,5,$roww['remarks'],'B',0,'L');


//output

$pdf->Ln(14);



   $pdf->SetFillColor(6,47,79);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',11);


    $pdf->CellFitScale(194,7,'Signatures',1,0,'C',1);


    
                 $pdf->Ln(14);
    
 
   


    $pdf->Cell(2);
    $pdf->SetTextColor(0,0,0);
    // Title

 $pdf->SetFont('Times','B',9);
$pdf->Cell(30,5,'EMPLOYEE SIGN:',0,0,'L');
$pdf->setFillColor(230,230,230);
$pdf->SetFont('Times','B',10);
$pdf->Cell(-3);
    $pdf->SetTextColor(0,0,0);
$pdf->CellFitScale(54,5,'','B',0,'L');
$pdf->Cell(20);
$pdf->SetFont('Times','B',9);
    $pdf->SetTextColor(0,0,0);
//$pdf->Cell(30,5,'PRINCIPAL SIGN:',0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(1);
    $pdf->SetTextColor(0,0,0);
//$pdf->CellFitScale(54,5,'','B',0,'L');
$pdf->Output();



 ?>
