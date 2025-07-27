<?php 
$count=0;
include('connection.php');
include('sessionfinder.php');
include_once('libs/fpdf.php');


$pdf = new FPDF();

$pdf->AddPage();
 include('include_pdf_portrait_simple.php');
    // Line break
   
 
  //
  //lines
$pdf->Line(45,62,110,62);
$pdf->Line(45,72,110,72);
//$pdf->Line(x1,y1,x2,y2);

$pdf->Line(164,62,195,62);
$pdf->Line(159,72,195,72);

    // Title
 $today = date("Y");

$today1= date("y",strtotime("+1 year"));
$pdf->Cell(10);
$today4= $today.'-'.$today1;
    $pdf->Cell(75,10,'SUBJECT CHILD SHEET',0,0,'C');
    // Line break
    $pdf->Ln(15);
    $pdf->Ln(8);
$pdf->SetTextColor(0,0,0);


  if(isset($_POST['submit']))
  {
    include('sessionfinder.php');
     $s_name=$_POST['subjectname'];
     $c_name=$_POST['classname'];
     $t_name=$_POST['termname'];

 $sql120 = "SELECT DISTINCT cname FROM classes where id='$c_name' and csession='$session'";
      $result120 = $conn->query($sql120);
      $row120 = $result120->fetch_assoc();
         
$pdf->Cell(2); 
$pdf->SetFont('Arial','B',13);
$pdf->Cell(30,5,'Class Name:',0,0,'C');
$pdf->setFillColor(230,230,230);
$pdf->SetFont('Arial','I',13);
$pdf->CellFitScale(19,5,$row120['cname'],0,0,'C');
$pdf->Cell(65);
$pdf->SetFont('Arial','B',13);
$pdf->CellFitScale(30,5,'Subject name:',0,0,'R');
$pdf->SetFont('Arial','I',13);
$pdf->CellFitScale(30,5,$s_name,0,0,'C');

$pdf->Ln(10);
$pdf->SetFont('Arial','B',13);
$pdf->Cell(25,5,'Session:',0,0,'C');
$pdf->SetFont('Arial','I',13);
$pdf->CellFitScale(30,5,$today4,0,0,'R');
$pdf->Cell(60);
$pdf->SetFont('Arial','B',13);
$pdf->Cell(35,5,'Term Name:',0,0,'L');
$pdf->SetFont('Arial','I',13);
$pdf->CellFitScale(30,5,$t_name,0,0,'R');
}
$pdf->Ln(12);








  if(isset($_POST['submit']))
  {
    include('sessionfinder.php');
    
     $s_name=$_POST['subjectname'];
     $c_name=$_POST['classname'];
     $t_name=$_POST['termname'];




  $sqll2 = "SELECT * FROM child_marks WHERE subject='$s_name' AND class='$c_name' AND termname='$t_name' and session='$session'" ;
                            if($resultt2 = mysqli_query($conn, $sqll2)){
                                
                                
                                
                                
                                
                                     while($row2 =  mysqli_fetch_array($resultt2)){
                                         $ch1=$row2['child_1'];
                                          $ch2=$row2['child_2'];
                                           $ch3=$row2['child_3'];
                                            $ch4=$row2['child_4'];
$pdf->Cell(2);
$pdf->SetFont('Arial','B',10);

$pdf->SetFillColor(61, 57, 57);
$pdf->SetTextColor(255,255,255);

                                         $pdf->Cell(10,10,'s.#',1,0,'C',1);
$pdf->Cell(15,10,'Reg.#',1,0,'C',1);
$pdf->Cell(35,10,'Student name',1,0,'C',1);
if ($row2['child_1']!='None')
{
    $pdf->CellFitScale(23,10,$row2['child_1']."(".$row2['t1'].")",1,0,'C',1);
}
else
{
    
}


if ($row2['child_2']!='None')
{
    $pdf->CellFitScale(23,10,$row2['child_2']."(".$row2['t1'].")",1,0,'C',1);
}
else
{
    
}
if ($row2['child_3']!='None')
{
    $pdf->CellFitScale(23,10,$row2['child_3']."(".$row2['t1'].")",1,0,'C',1);
}
else
{
    
}
if ($row2['child_4']!='None')
{
  $pdf->CellFitScale(23,10,$row2['child_1']."(".$row2['t1'].")",1,0,'C',1);
}
else
{
    
}

$pdf->Cell(23,10,'Obtained',1,0,'C',1);
$pdf->Cell(23,10,'Total Marks',1,0,'C',1);
                        $pdf->Ln(5);                 
                                     }
                            }





      $sqll = "SELECT * FROM result_entry WHERE subject='$s_name' AND class='$c_name' AND termname='$t_name' and session='$session'" ;
                            if($resultt = mysqli_query($conn, $sqll)){
                                     while($row =  mysqli_fetch_array($resultt)){
$count++;
 $pdf->Ln(5);
 $pdf->Cell(2);
 $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
$pdf->CellFitScale(10,5,$count,1,0,'C');

$pdf->CellFitScale(15,5,$row['regno'],1,0,'C');



$pdf->CellFitScale(35,5,$row['name'],1,0,'L');


if ($ch1!='None')
{
    
    if ($row['mark1']=='0A')
    {
           
$pdf->CellFitScale(23,5,'0',1,0,'C'); 
    }
    else
    {$pdf->CellFitScale(23,5,$row['mark1'],1,0,'C');
        
    }
    

}
else
{
    
}

if ($ch2!='None')
{
 if ($row['mark2']=='0A')
    {
           
$pdf->CellFitScale(23,5,'0',1,0,'C'); 
    }
    else
    {$pdf->CellFitScale(23,5,$row['mark2'],1,0,'C');
        
    }
}
else
{
    
}
if ($ch3!='None')
{
 if ($row['mark3']=='0A')
    {
           
$pdf->CellFitScale(23,5,'0',1,0,'C'); 
    }
    else
    {$pdf->CellFitScale(23,5,$row['mark3'],1,0,'C');
        
    }
}
else
{
    
}
if ($ch4!='None')
{
 if ($row['mark4']=='0A')
    {
           
$pdf->CellFitScale(23,5,'0',1,0,'C'); 
    }
    else
    {$pdf->CellFitScale(23,5,$row['mark4'],1,0,'C');
        
    }
}
else
{
    
}




$pdf->CellFitScale(23,5,$row['total_obtained'],1,0,'C');
$pdf->CellFitScale(23,5,$row['total_marks'],1,0,'C');





}
}
}

  

 



 

$conn->close();
  
   

$pdf->Output();

 ?>
 