<?php
$numbers = array();
$count=0;
$obtmarkss =0;
include('connection.php');
include('sessionfinder.php');
include_once('libs/fpdf.php');
function getSubjectPosition($marksob, $classname, $subjectname, $termname){
   $key=0;
  include('connection.php');
  $sql2="SELECT total_obtained FROM result_entry WHERE class='$classname'
  AND termname='$termname' AND subject ='$subjectname' and session='$session'";
  if($result2 = mysqli_query($conn, $sql2)){
    while($row2 =  mysqli_fetch_assoc($result2)){
        $marks[] = $row2['total_obtained'];
         }
      }
      array_unique($marks);
      rsort($marks);
      $key = array_search($marksob, $marks);
      $key=$key+1;
      if($key == 1 || $key == 21 || $key == 31 || $key == 41){
        return $key."st";
      }
      elseif($key == 2 || $key == 22 || $key == 32 || $key == 42){
        return $key."nd";
      }elseif($key == 3 || $key == 23 || $key == 33 || $key == 43){
        return $key."rd";
      }else{
        return $key."th";
      }
      
}
function Grade($Percentage,$cgroup) {
  $Grade=[];
  include('connection.php');
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
function Position($pos){
  if($pos==1 || $pos==21 || $pos==31 || $pos==41 || $pos==51)
  {
    return $pos.'st';
  }
  elseif($pos==2 || $pos==22 || $pos==32 || $pos==42 || $pos==52)
  {
    return $pos.'nd';
  }
  elseif($pos==3 || $pos==23 || $pos==33 || $pos==43 || $pos==53)
  {
    return $pos.'rd';
  }
  else
  {
    return $pos.'th';
  }

}

$pdf = new FPDF();

$pdf->AddPage();
 include('include_pdf_portrait_simple.php');

  //
  //lines
$pdf->Line(45,62,110,62);
$pdf->Line(45,72,110,72);
//$pdf->Line(x1,y1,x2,y2);


$pdf->Line(159,72,195,72);

    // Title

    $pdf->Cell(110,10,'CLASS TERM POSTION REPORT',0,0,'C');
    // Line break
    $pdf->Ln(18);
    $pdf->Ln(8);
$pdf->SetTextColor(0,0,0);


  if(isset($_POST['submit']))
  {
    
     
     $c_name=$_POST['classname'];
     $t_name=$_POST['termname'];
     $sql1 = "SELECT cgroup FROM classes where id='$c_name'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
      $cgroup=$row1['cgroup'];
   
  }
}
     
     
     
     
     
     $sqll420 = "SELECT DISTINCT regno FROM result_entry WHERE  class='$c_name' AND termname='$t_name' and session='$session'" ;
                            if($resultt420 = mysqli_query($conn, $sqll420)){
                                     while($row420 =  mysqli_fetch_array($resultt420)){

  $reg=$row420['regno'];
$marks=0;
$obtmarks=0;
$t_percentage=0;
$T_Position=0;
$sqll4420 = "SELECT * FROM result_entry WHERE   termname='$t_name' AND class='$c_name' AND regno='$row420[regno]'" ;
                            if($resultt4420 = mysqli_query($conn, $sqll4420)){
                                     while($row4420 =  mysqli_fetch_array($resultt4420)){
$obtmarkss+=$row4420['total_obtained'];

}}
$numbers[] = $obtmarkss;
$obtmarkss=0;
}
}
$arr=array_unique($numbers);
      rsort($arr);

  
      
     
     
     
     
     
     
     
     
     
     
     

    $today = date("Y");

$today1= date("y",strtotime("+1 year"));

$today4= $today.'-'.$today1;




 $sql120 = "SELECT DISTINCT cname FROM classes where id='$c_name'";
      $result120 = $conn->query($sql120);
      $row120 = $result120->fetch_assoc();
$pdf->Cell(2);            
$pdf->SetFont('Arial','B',13);
$pdf->Cell(30,5,'Class Name:',0,0,'C');
$pdf->setFillColor(230,230,230);
$pdf->SetFont('Arial','I',13);
$pdf->CellFitScale(25,5,$row120['cname'],0,0,'L');
$pdf->Cell(65);


$pdf->Ln(10);
$pdf->SetFont('Arial','B',13);
$pdf->Cell(25,5,'Session:',0,0,'C');
$pdf->SetFont('Arial','I',13);
$pdf->CellFitScale(30,5,$session,0,0,'C');
$pdf->Cell(60);
$pdf->SetFont('Arial','B',13);
$pdf->Cell(30,5,'Term Name:',0,0,'C');
$pdf->SetFont('Arial','I',13);
$pdf->CellFitScale(30,5,$t_name,0,0,'C');

$pdf->Ln(12);

$pdf->Cell(2);
$pdf->SetFont('Arial','B',10);

$pdf->SetFillColor(61, 57, 57);
$pdf->SetTextColor(255,255,255);
$pdf->CellFitScale(10,10,'s.#',1,0,'C',1);
$pdf->CellFitScale(12,10,'Reg.#',1,0,'C',1);
$pdf->CellFitScale(52,10,'Student name',1,0,'C',1);
$pdf->CellFitScale(28,10,'Marks Obtained',1,0,'C',1);
$pdf->CellFitScale(20,10,'Total Marks',1,0,'C',1);
$pdf->CellFitScale(20,10,'Percentage',1,0,'C',1);
$pdf->CellFitScale(20,10,'Grade',1,0,'C',1);
$pdf->CellFitScale(20,10,'Status',1,0,'C',1);
$pdf->CellFitScale(15,10,'Position',1,0,'C',1);
$pdf->Ln(5);
$pdf->SetTextColor(0,0,0);

$marks=0;
$obtmarks=0;
$reg=0;

  


$sqll = "SELECT DISTINCT regno FROM result_entry WHERE  class='$c_name' AND termname='$t_name' and session='$session'" ;
                            if($resultt = mysqli_query($conn, $sqll)){
                                     while($row =  mysqli_fetch_array($resultt)){
                                  



$count++;
 $pdf->Ln(5);
 $pdf->Cell(2);
    $pdf->SetFont('Arial','',10);

    $pdf->SetFont('Arial','',10);

  $reg=$row['regno'];




  
 

  
$marks=0;
$obtmarks=0;
$t_percentage=0;
$T_Position=0;
$sqll4 = "SELECT * FROM result_entry WHERE   termname='$t_name'AND class='$c_name' AND regno='$row[regno]'" ;
                            if($resultt4 = mysqli_query($conn, $sqll4)){
                                     while($row4 =  mysqli_fetch_array($resultt4)){
                                         $name=$row4['name'];
                                           $pos=$row4['c_position'];

  




$obtmarks+=$row4['total_obtained'];

$marks+=$row4['total_marks'];
$T_Position = $row4['c_position'];





}}

$pdf->CellFitScale(10,5,$count,1,0,'C');

$pdf->CellFitScale(12,5,$row['regno'],1,0,'C');
$pdf->CellFitScale(52,5,$name,1,0,'L');
$t_percentage=ceil(($obtmarks/$marks)*100);
$pdf->CellFitScale(28,5,$obtmarks,1,0,'C');


   

      $key = array_search($obtmarks, $arr);
   
      $key=$key+1;
      
     $pos2=$key;








$pdf->CellFitScale(20,5,$marks,1,0,'C');
$pdf->CellFitScale(20,5,floor($t_percentage),1,0,'C');
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
  if ($Grade_Status[1]=='FAIL')
  {
        $pdf->CellFitScale(15,5,'0th',1,0,'C');
  }
  
  else
  {
  $pdf->CellFitScale(15,5,Position($pos2),1,0,'C');
  }
  

$key=0;
$pos2=0;
 $pdf->Cell(2);

 
 }
}
 

}



$conn->close();
  
   

$pdf->Output();

 ?>
  