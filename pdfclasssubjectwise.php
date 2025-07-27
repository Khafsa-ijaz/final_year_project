<?php 
$count=0;
include('connection.php');
include('sessionfinder.php');
include_once('libs/fpdf.php');

$today = date("Y");

$today1= date("y",strtotime("+1 year"));

$today4= $today.'-'.$today1;
$pdf = new FPDF();

$pdf->AddPage('L');
$pdf->AliasNbPages();
 include('include_pdf_landscape_simple.php');
  
  $pdf->Cell(40);
  //
  //lines
$pdf->Line(60,62,125,62);
$pdf->Line(50,72,125,72);
//$pdf->Line(x1,y1,x2,y2);


$pdf->Line(194,72,259,72);

    // Title

    $pdf->Cell(75,10,'CLASS SUBJECT WISE  SHEET',0,0,'C');
    // Line break
    
    $pdf->Ln(25);
$pdf->SetTextColor(0,0,0);


  if(isset($_POST['submit']))
  {
    include('sessionfinder.php');
    
     
     $c_name=$_POST['classname'];
     $t_name=$_POST['termname'];

 $sql120 = "SELECT DISTINCT cname FROM classes where id='$c_name' and csession='$session'";
      $result120 = $conn->query($sql120);
      $row120 = $result120->fetch_assoc();

$pdf->Cell(20);        

$pdf->SetFont('Arial','B',13);
$pdf->CellFitScale(30,5,'Class Name:',0,0,'C');
$pdf->setFillColor(230,230,230);
$pdf->SetFont('Arial','I',13);
$pdf->CellFitScale(25,5,$row120['cname'],0,0,'L');



$pdf->Ln(10);
$pdf->Cell(15);
$pdf->SetFont('Arial','B',13);
$pdf->Cell(30,5,'Session:',0,0,'C');
$pdf->SetFont('Arial','I',13);
$pdf->CellFitScale(30,5,$session,0,0,'C');
$pdf->Cell(80);
$pdf->SetFont('Arial','B',13);
$pdf->Cell(30,5,'Term Name:',0,0,'C');
$pdf->SetFont('Arial','I',13);
$pdf->Cell(15);
$pdf->CellFitScale(30,5,$t_name,0,0,'C');

$pdf->Ln(20);

$pdf->Cell(2);
$pdf->SetFont('Arial','B',10);

$pdf->SetFillColor(61, 57, 57);
$pdf->SetTextColor(255,255,255);
$pdf->CellFitScale(10,10,'s.#',1,0,'C',1);
$pdf->CellFitScale(12,10,'Reg.#',1,0,'C',1);
$pdf->CellFitScale(42,10,'Student name',1,0,'C',1);
$pdf->Ln(0);
$pdf->cell(66);


$marks=0;
$obtmarks=0;
$reg=0;

    $sqll1 = "SELECT Distinct subject FROM result_entry WHERE  class='$c_name' AND termname='$t_name' and session='$session'" ;
                            if($resultt1 = mysqli_query($conn, $sqll1)){
                                     while($row1=  mysqli_fetch_array($resultt1)){
                                  

$count++;
     $pdf->SetFont('Arial','',6);

$pdf->CellFitScale(15,5,$row1['subject'],1,0,'C',1);

}
$pdf->SetFont('Arial','',10);
$pdf->CellFitScale(15,10,'T.Obt',1,0,'C',1);
  $pdf->CellFitScale(15,10,'T.Marks',1,0,'C',1);

}

$pdf->Ln(5);
$pdf->cell(66);

$sqll2 = "SELECT DISTINCT subject FROM result_entry WHERE class='$c_name' AND termname='$t_name' and session='$session'" ;
                            if($resultt2 = mysqli_query($conn, $sqll2)){

                                     while($row2=  mysqli_fetch_array($resultt2)){
                                      $count++;
                                      
$sqll7 = "SELECT total_marks FROM result_entry WHERE class='$c_name' AND termname='$t_name' and subject='$row2[subject]'" ;
                            if($resultt7 = mysqli_query($conn, $sqll7)){
                              $row7=  mysqli_fetch_array($resultt7) ;   


 
    $pdf->SetFont('Arial','',10);
   

$pdf->CellFitScale(15,5,$row7['total_marks'],1,0,'C',1);
}
}
}
$pdf->Ln(0);
$pdf->Cell(4);
$pdf->SetTextColor(0,0,0);
$count=0;

    $sqll3 = "SELECT Distinct regno,name FROM result_entry WHERE  class='$c_name' AND termname='$t_name' and session='$session'" ;
                            if($resultt3 = mysqli_query($conn, $sqll3)){
                                     while($row3 =  mysqli_fetch_array($resultt3)){
                                  

$count++;
 $pdf->Ln(5);
 $pdf->Cell(2);
    $pdf->SetFont('Arial','',10);

 $reg=$row3['regno'];
 $name=$row3['name'];

  
$marks=0;
$obtmarks=0;
$t_percentage=0;

$sqll4 = "SELECT * FROM result_entry WHERE regno='$reg' AND termname='$t_name'AND class='$c_name' and session='$session'" ;
                            if($resultt4 = mysqli_query($conn, $sqll4)){
                                     while($row4 =  mysqli_fetch_array($resultt4)){



$obtmarks+=$row4['total_obtained'];

$marks+=$row4['total_marks'];




}}
$pdf->CellFitScale(10,5,$count,1,0,'C');

$pdf->CellFitScale(12,5,$row3['regno'],1,0,'L');
 $pdf->SetFont('Arial','',7.5);
$pdf->CellFitScale(42,5,$name,1,0,'L');
 $pdf->SetFont('Arial','',10);
$t_percentage=ceil(($obtmarks/$marks)*100);
$sqll5 = "SELECT total_obtained,total_marks FROM result_entry WHERE regno='$reg' AND termname='$t_name'AND class='$c_name' and session='$session'" ;
                            if($resultt5 = mysqli_query($conn, $sqll5)){
                                     while($row5 =  mysqli_fetch_array($resultt5)){

$pdf->CellFitScale(15,5,$row5['total_obtained'],1,0,'C');


}}
$pdf->CellFitScale(15,5,$obtmarks,1,0,'C');
$pdf->CellFitScale(15,5,$marks,1,0,'C');


 $pdf->Cell(2);

 
 }
}
 

}

 

$conn->close();
  
   

$pdf->Output();

 ?>
