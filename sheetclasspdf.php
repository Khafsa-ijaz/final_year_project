<?php 

function Grade($Percentage,$cgroup) {
  $Grade=[];
  include('connection.php');
  include('sessionfinder.php');
    $sql="SELECT * from grade_setting WHERE class_group='$cgroup'";
      $result = mysqli_query($conn, $sql);
                while($row = $result->fetch_assoc()) {
                $Aplus = $row['Aplus'];
              $A = $row['A'];
              $Bplus = $row['Bplus'];
              $B = $row['B'];
              $C = $row['C'];
              $D = $row['D'];
              $E = $row['E'];
                }
              if($Percentage >=$Aplus)
              {
                $Grade[0] = "Aplus";
                $Grade[1] = "PASS";
                
              }elseif($Percentage >=$A)
              {
                $Grade[0] = "A";
                $Grade[1] = "PASS";
                
              }elseif($Percentage >=$Bplus)
              {
                $Grade[0] = "Bplus";
                $Grade[1] = "PASS";
                
              }elseif($Percentage >=$B)
              {
                $Grade[0] = "B";
                $Grade[1] = "PASS";
                
              }elseif($Percentage >=$C)
              {
                $Grade[0] = "C";
                $Grade[1] = "PASS";
                
              }elseif($Percentage >=$D)
              {
                $Grade[0] = "D";
                $Grade[1] = "PASS";
                
              }
              elseif($Percentage >=$E)
              {
                $Grade[0] = "E";
                $Grade[1] = "PASS";
                
              }else{
                $Grade[0] = "F";
                $Grade[1] = "FAIL";
                
              }
              return $Grade;
}

$count=0;
include('connection.php');
include_once('libs/fpdf.php');


$pdf = new FPDF();

$pdf->AddPage();
 include('include_pdf_portrait_simple.php');
$pdf->Line(45,62,110,62);
$pdf->Line(45,72,110,72);
//$pdf->Line(x1,y1,x2,y2);


$pdf->Line(159,72,195,72);

    // Title
    
    $pdf->Cell(115,10,'CLASS WISE RESULT REPORT',0,0,'C');
    // Line break
    $pdf->Ln(18);
    $pdf->Ln(8);
$pdf->SetTextColor(0,0,0);
$today = date("Y");

$today1= date("y",strtotime("+1 year"));

$today4= $today.'-'.$today1;

  if(isset($_POST['submit']))
  {
    include('sessionfinder.php');
     
     $c_name=$_POST['classname'];
          $sql1 = "SELECT cgroup FROM classes where id='$c_name'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
      $cgroup=$row1['cgroup'];
   
  }
}
     
     $t_name=$_POST['termname'];


$sql120 = "SELECT DISTINCT cname FROM classes where id='$c_name'";
      $result120 = $conn->query($sql120);
      $row120 = $result120->fetch_assoc();
    
$pdf->Cell(2);   
$pdf->SetFont('Arial','B',13);
$pdf->Cell(30,5,'Class Name:',0,0,'C');
$pdf->setFillColor(230,230,230);
$pdf->SetFont('Arial','I',8);
$pdf->SetFont('Arial','',13);
$pdf->CellFitScale(25,5,$row120['cname'],0,0,'L');
$pdf->Cell(65);


$pdf->Ln(10);
$pdf->SetFont('Arial','B',13);
$pdf->Cell(25,5,'Session:',0,0,'C');
$pdf->SetFont('Arial','I',12);
$pdf->CellFitScale(30,5,$session,0,0,'C');
$pdf->Cell(60);
$pdf->SetFont('Arial','B',13);
$pdf->Cell(30,5,'Term Name:',0,0,'C');
$pdf->SetFont('Arial','I',12);
$pdf->CellFitScale(30,5,$t_name,0,0,'C');
}
$pdf->Ln(12);

$pdf->Cell(2);
$pdf->SetFont('Arial','B',10);
$pdf->SetFillColor(61, 57, 57);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(10,10,'s.#',1,0,'C',1);
$pdf->Cell(12,10,'Reg.#',1,0,'C',1);
$pdf->Cell(42,10,'Student name',1,0,'C',1);
$pdf->Cell(30,10,'Marks Obtained',1,0,'C',1);
$pdf->Cell(25,10,'Total Marks',1,0,'C',1);
$pdf->Cell(25,10,'Percentage',1,0,'C',1);
$pdf->Cell(20,10,'Grade',1,0,'C',1);
$pdf->Cell(20,10,'Status',1,0,'C',1);
$pdf->Ln(5);
$pdf->SetTextColor(0,0,0);

$marks=0;
$obtmarks=0;
$reg=0;

  if(isset($_POST['submit']))
  {
    
     include('sessionfinder.php');
     $c_name=$_POST['classname'];
     $sql1 = "SELECT cgroup FROM classes where id='$c_name'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
      $cgroup=$row1['cgroup'];
   
  }
}
     $t_name=$_POST['termname'];


    $sqll = "SELECT Distinct regno,name FROM result_entry WHERE  class='$c_name' AND termname='$t_name'and session='$session'" ;
                            if($resultt = mysqli_query($conn, $sqll)){
                                     while($row =  mysqli_fetch_array($resultt)){
                                  

$count++;
 $pdf->Ln(5);
 $pdf->Cell(2);
    $pdf->SetFont('Arial','',10);

 $reg=$row['regno'];
 $name=$row['name'];




  
 

  
$marks=0;
$obtmarks=0;
$t_percentage=0;

$sqll4 = "SELECT * FROM result_entry WHERE regno='$reg' AND termname='$t_name'AND class='$c_name'" ;
                            if($resultt4 = mysqli_query($conn, $sqll4)){
                                     while($row4 =  mysqli_fetch_array($resultt4)){



$obtmarks+=$row4['total_obtained'];

$marks+=$row4['total_marks'];




}}
$pdf->CellFitScale(10,5,$count,1,0,'C');

$pdf->CellFitScale(12,5,$row['regno'],1,0,'C');
$pdf->SetFont('Arial','',7.5);
$pdf->CellFitScale(42,5,$name,1,0,'L');
$pdf->SetFont('Arial','',10);
$t_percentage=ceil(($obtmarks/$marks)*100);
$pdf->CellFitScale(30,5,$obtmarks,1,0,'C');
$pdf->CellFitScale(25,5,$marks,1,0,'C');
$pdf->CellFitScale(25,5,floor($t_percentage),1,0,'C');
 $Grade_Status=[];
  $Grade_Status=Grade($t_percentage,$cgroup);

  
  if ($Grade_Status[0]=='Aplus')
  {
  $pdf->CellFitScale(20,5,'A+',1,0,'C');
  }
   if ($Grade_Status[0]=='Bplus')
  {
  $pdf->CellFitScale(20,5,'B+',1,0,'C');
  }
   if ($Grade_Status[0]!='Bplus' && $Grade_Status[0]!='Aplus' )
  {
  $pdf->CellFitScale(20,5,$Grade_Status[0],1,0,'C');
  }
  
    $pdf->CellFitScale(20,5,$Grade_Status[1],1,0,'C');
  
  
  // $T_Position = $pos;
 
 $pdf->Cell(2);

}







 
 }
}
 



 

$conn->close();
  
   

$pdf->Output();

 ?>
 