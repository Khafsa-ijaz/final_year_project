<?php 
$count=0;
$numbers = array();
include('connection.php');
include_once('libs/fpdf.php');
include('sessionfinder.php');
$obtmarkss=0;

function getSubjectPosition($marksob, $classname, $subjectname, $termname){
   $key=0;
  include('connection.php');
  $sql2="SELECT total_obtained FROM result_entry WHERE class='$classname'
  AND termname='$termname' AND subject ='$subjectname'";
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




$today = date("Y");

$today1= date("y",strtotime("+1 year"));

$today4= $today.'-'.$today1;




$pdf = new FPDF();


  if(isset($_POST['submit']))
  {
    
     $classname=$_POST['classname'];
      $sql1 = "SELECT cgroup FROM classes where id='$classname'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
      $cgroup=$row1['cgroup'];
   
  }
}
     
     $termname=$_POST['termname'];
     
     
     
     $sqll420 = "SELECT DISTINCT regno FROM result_entry WHERE  class='$classname' AND termname='$termname' and session='$session'" ;
                            if($resultt420 = mysqli_query($conn, $sqll420)){
                                     while($row420 =  mysqli_fetch_array($resultt420)){

  $reg=$row420['regno'];
$marks=0;
$obtmarks=0;
$t_percentage=0;
$T_Position=0;
$sqll4420 = "SELECT * FROM result_entry WHERE   termname='$termname'AND class='$classname' AND regno='$row420[regno]'" ;
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

     

    $sql0="SELECT DISTINCT regno FROM result_entry WHERE class='$classname'
    AND termname='$termname' and session='$session'";
    $count++;
    if($result0 = mysqli_query($conn, $sql0)){
    while($row0 =  mysqli_fetch_assoc($result0)){



   
 $pdf->AliasNbPages();
$pdf->AddPage();                              
//$pdf->Image('download.jpg',10,5,45);
$pdf->Image('comment.PNG',10,200,194);
$pdf->Image('sign.PNG',-2,275,206);
 include('include_pdf_portrait_simple.php');
   

    $pdf->Cell(110,10,$termname. ' REPORT CARD',0,0,'C');
    // Line break
    $pdf->Ln(23);
   
$pdf->SetTextColor(0,0,0);
//lines
$pdf->Line(44,60,110,60);
$pdf->Line(41,70,110,70);
$pdf->Line(41,80,110,80);

$pdf->Line(150,60,195,60);
$pdf->Line(150,70,195,70);
$pdf->Line(151,80,195,80);
 
 $querry = "SELECT * FROM result_entry WHERE regno='$row0[regno]' AND termname='$termname'" ;
                            if($resultt = mysqli_query($conn, $querry)){
                              $row =  mysqli_fetch_array($resultt);
    $pdf->Cell(2);
    $pdf->SetFont('Arial','',12); 
                             
$pdf->Cell(30,5,'Student Name:',0,0,'C');
$pdf->setFillColor(230,230,230);
$pdf->SetFont('Arial','B',12);
$pdf->CellFitScale(70,5,$row['name'],0,0,'L');

$pdf->Cell(10);
$pdf->SetFont('Arial','',12);
$pdf->Cell(30,5,'Reg No:',0,0,'C');
$pdf->SetFont('Arial','B',12);
$pdf->CellFitScale(30,5,$row['regno'],0,0,'C');



$sql120 = "SELECT DISTINCT cname FROM classes where id='$row[class]'";
      $result120 = $conn->query($sql120);
      $row120 = $result120->fetch_assoc();
$pdf->Ln(10);
$pdf->SetFont('Arial','',12);
$pdf->Cell(30,5,'Class Name:',0,0,'C');
$pdf->SetFont('Arial','B',12);
$pdf->CellFitScale(70,5,$row120['cname'],0,0,'L');
$pdf->Cell(9);
$pdf->SetFont('Arial','',12);
$pdf->Cell(30,5,'Roll No:',0,0,'C');
$pdf->SetFont('Arial','B',12);
$pdf->CellFitScale(30,5,$row['rollno'],0,0,'C');
$pdf->Ln(10);

$querry = "SELECT * FROM students WHERE regno='$row0[regno]' and session='$session'" ;
                            if($resultt = mysqli_query($conn, $querry)){
                              $row =  mysqli_fetch_array($resultt);
                              $pdf->SetFont('Arial','',12);
$pdf->Cell(30,5,'Father Name:',0,0,'C');
$pdf->SetFont('Arial','B',12);
$pdf->CellFitScale(70,5,$row['fname'],0,0,'L');
$pdf->Cell(10);
       $pdf->SetFont('Arial','',12);
$pdf->Cell(30,5,'Session:',0,0,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(5);
$pdf->SetFont('Arial','B',12);
$pdf->CellFitScale(30,5,$session,0,0,'C');
}



$pdf->Ln(10);

$pdf->Cell(2);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(59,17,'Subjects',1,0,'C');

$pdf->CellFitScale(128,10,$termname,1,0,'C');

}



$pdf->Ln(10);
$pdf->Cell(61);
$pdf->CellFitScale(25,7,'Total Marks',1,0,'C');
$pdf->CellFitScale(28,7,'Obtained Marks',1,0,'C');
$pdf->CellFitScale(20,7,'Percentage',1,0,'C');
$pdf->CellFitScale(20,7,'Grades',1,0,'C');
$pdf->CellFitScale(20,7,'Status',1,0,'C');
$pdf->CellFitScale(15,7,'Position',1,0,'C');

$subpercal=[];
$marksarray=[];
$obtmarksarray=[];
$subnamearray=[];
$pdf->Ln(0);
     

    $sqll = "SELECT * FROM result_entry WHERE regno='$row0[regno]'AND termname='$termname'" ;
                            if($resultt = mysqli_query($conn, $sqll)){
                                     while($row =  mysqli_fetch_array($resultt)){
                                         $pos=$row['c_position'];
      if($row['Grade'] == "F"){
            $p=0;
        }
        else{
          $p =getSubjectPosition($row['total_obtained'], $row['class'], $row['subject'],
           $termname);
        }
$count++;
 $pdf->Ln(7);
 $pdf->Cell(2);
    $pdf->SetFont('Arial','',10);
$pdf->CellFitScale(59,7,strtoupper($row['subject']),1,0,'C');
$subnamearray=$row['subject'];
$pdf->CellFitScale(25,7,$row['total_marks'],1,0,'C');

$marksarray[]=$row['total_marks'];

$pdf->CellFitScale(28,7,$row['total_obtained'],1,0,'C');

$obtmarksarray[]=$row['total_obtained'];

$pdf->CellFitScale(20,7,floor($row['Percentage']),1,0,'C');
if ($row['Grade']=='Aplus')
{
 $pdf->CellFitScale(20,7,'A+',1,0,'C'); 
}
if ($row['Grade']=='Bplus')
{
 $pdf->CellFitScale(20,7,'B+',1,0,'C'); 
}

if ($row['Grade']!='Aplus' && $row['Grade']!='Bplus' )
{

$pdf->CellFitScale(20,7,$row['Grade'],1,0,'C');
}
$pdf->CellFitScale(20,7,$row['status'],1,0,'C');
$pdf->CellFitScale(15,7, $p,1,0,'C');


}
}

//subject percentage calculations
$lenarray=sizeof($marksarray);
for ($i=0; $i <$lenarray ; $i++) { 
  $subpercal[$i]=floor(($obtmarksarray[$i]/$marksarray[$i])*100);
  
}
 
$pdf->Ln(7);
$pdf->Cell(2);
$pdf->CellFitScale(59,7,'Total',1,0,'C');
$m_total=0;
$om_total=0;


  $sql6="SELECT * from result_entry WHERE regno='$row0[regno]' and termname='$termname'";
  if($result6 = mysqli_query($conn, $sql6)){
                                     while($row4 =  mysqli_fetch_array($result6)){
$count++;
$m_total+=$row4['total_marks'];
$om_total+=$row4['total_obtained'];

}
  }







      $key = array_search($om_total, $arr);
   
      $key=$key+1;
      
     $pos2=$key;



//total percentage calculation
  $t_percent=0;
  $pdf->CellFitScale(25,7,$m_total,1,0,'C');
  $pdf->CellFitScale(28,7,$om_total,1,0,'C');
  $t_percent=floor($om_total/$m_total*100);
  $pdf->CellFitScale(20,7,floor($t_percent),1,0,'C');
  $Grade_Status=[];
  $Grade_Status=Grade($t_percent,$cgroup);
  if ($Grade_Status[0]=='Aplus')
{
     $pdf->CellFitScale(20,7,'A+',1,0,'C');
}

  if ($Grade_Status[0]=='Bplus')
{
     $pdf->CellFitScale(20,7,'B+',1,0,'C');
}
if ($Grade_Status[0]!='Aplus' && $Grade_Status[0]!='Bplus' )
{
     $pdf->CellFitScale(20,7,$Grade_Status[0],1,0,'C');
}
$pdf->CellFitScale(20,7,$Grade_Status[1],1,0,'C');
 // $T_Position = $pos;
 
 if ($Grade_Status[1]=='FAIL')
 {
   $pdf->CellFitScale(15,7,'0th',1,0,'C');  
 }
 else
 {
  $pdf->CellFitScale(15,7,Position($pos2),1,0,'C');
 }
  $pdf->Ln(20);






}
}
}
$pdf->Output();

$conn->close();
  
   



 ?>
