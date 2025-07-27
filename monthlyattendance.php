<?php 
include('connection.php');
$present=0;
$absent=0;
$leave=0;
$advance=0;
$p=0;
$a=0;
$l=0;
$la=0;
$as=0;
$ls=0;
$las=0;
$month=$_POST['month'];
include('connection.php');
include_once('libs/fpdf.php');

for ($i=1; $i <=31 ; $i++) { 
            # code...
            
            $list[]=$i;

          }

          //var_dump($list);
        //  echo"<br>";
$sqli = "SELECT DISTINCT month,emp_id FROM tattendence where month='$month' order by month ASC ";

 $result = mysqli_query($conn, $sqli);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  { 
                 $emp_id=$row['emp_id'];
             // echo $row['month'];
            //echo"<br>";
            $m=0;
            $y=0;
$sqliarray = "SELECT date FROM tattendence where emp_id='$emp_id' AND month = '$row[month]' order by date ASC ";

 $resultarray = mysqli_query($conn, $sqliarray);

            if (mysqli_num_rows($resultarray) > 0) {
            // output data of each row
             while($row450 = mysqli_fetch_assoc($resultarray))  {


   $d[]=date("d",strtotime($row450['date']));
   $m=date("m",strtotime($row450['date']));
   $y=date("Y",strtotime($row450['date']));

}
}
//echo"<br>";
//var_dump($d);
$day = array_map('intval', $d);

//echo"<br>";
//var_dump($day);    
// echo "<br>";   

for ($i=0; $i <31 ; $i++) { 
  # code...


if (!in_array($list[$i],$day))

{
  $numlength = strlen((string)$list[$i]);
  $numlength ;
 if ($numlength=='1') {
   # code...
   $createdate=$y."-".$m."-"."0".$list[$i];
 }
 else
 {
   $createdate=$y."-".$m."-".$list[$i];
}
  
  $createmonth=$y."-".$m;
  //echo $list[$i];
  //echo "<br>";

     $sql ="INSERT INTO tattendence (emp_id,date,month,status)
            values('$emp_id','$createdate','$createmonth','')";
            if ($conn->query($sql) === TRUE) 
            {} 
            else 
                 {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                   }

}

}
unset($day);
unset($d);
}
}

$cname=0;
class PDF extends FPDF
{
function Header()
{
    
$month=$_POST['month'];
    
    // Line break
   // $this->Ln(10);
    if ($this->PageNo()==1) {
      # code...
     
   include('include_pdf_landscape_header.php');
   $this->SetTextColor(0,0,0);
      $this->SetFont('Arial','B',13);
          $this->SetTextColor(48, 74, 123);

      $a11=date("F",strtotime($month));
      $a21=date("Y",strtotime($month));
      $a31=date("d",strtotime($month));
      $format1=$a11."-".$a21;
   $this->Ln(3);
  
    $this->Cell(280,10,'MONTHWISE ATTENDANCE CHART',0,0,'C');
 $this->Ln(7);

$this->Cell(280,10,'MONTH:' .$format1,0,0,'C');
 $this->Ln(10);

    }
    else{

      $this->SetFillColor(6,47,79);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',10);

//$pdf->Cell(90);
$this->Cell(5,10,'S#',1,0,'C',1);
$this->Cell(20,10,'Name',1,0,'L',1);



          for ($i=1; $i <=31 ; $i++) { 
            # code...
            $this->CellFitScale(6,10,"D ".$i,1,0,'C',1);
            $list[]=$i;

          }
         // var_dump($list);
$this->CellFitScale(12,10,"Days",1,0,'R',1);
$this->CellFitScale(12,10,"Present",1,0,'R',1);
$this->CellFitScale(12,10,"Absent",1,0,'R',1);
$this->CellFitScale(12,10,"Late",1,0,'R',1);
$this->CellFitScale(12,10,"Absent",1,0,'R',1);
$this->CellFitScale(12,10,"Late",1,0,'R',1);  
$this->Ln(10);
}
}

function Footer()
{
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

$pdf->SetFont('Arial','',7);

  
  $pdf->SetFillColor(6,47,79);


  
    $pdf->SetFillColor(57,184,227);
       $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','B',11);
$pdf->Cell(25);

 $a1=date("F",strtotime($month));
      $a2=date("Y",strtotime($month));
      $a3=date("d",strtotime($month));
      $format=$a1."-".$a2;
       $pdf->SetTextColor(255,255,255);
$pdf->CellFitScale(186,5,"DATE",1,0,'C',1);
$pdf->CellFitScale(48,5,$format,1,0,'C',1);
$pdf->CellFitScale(24,5,"Total",1,0,'C',1);

$pdf->Ln(1);

$pdf->Image('download.png',11,9,25);

$pdf->SetFont('Arial','',7);

 
 
  
//$pdf->Line(5, 150, 210-80, 80); // 20mm from each edge
//$pdf->Line(50, 45, 210-50, 45); // 50mm from each edge
 
    
 $pdf->Ln(4);
   $pdf->SetFillColor(6,47,79);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',10);


$pdf->Cell(5,7,'S#',1,0,'C',1);
$pdf->Cell(20,7,'Name',1,0,'L',1);



          for ($i=1; $i <=31 ; $i++) { 
            # code...
            $pdf->CellFitScale(6,7,"D ".$i,1,0,'C',1);
            $list[]=$i;

          }
         // var_dump($list);
$pdf->CellFitScale(12,7,"Days",1,0,'R',1);
$pdf->CellFitScale(12,7,"Present",1,0,'R',1);
$pdf->CellFitScale(12,7,"Absent",1,0,'R',1);
$pdf->CellFitScale(12,7,"Late",1,0,'R',1);
$pdf->CellFitScale(12,7,"Absent",1,0,'R',1);
$pdf->CellFitScale(12,7,"Late",1,0,'R',1);   

$pdf->Ln(7);
    // Title


$pdf->SetTextColor(0,0,0);
$counting=0;

$sqli = "SELECT DISTINCT month,emp_id FROM tattendence where month='$month' order by month ASC ";




 $result = mysqli_query($conn, $sqli);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  {

      $l1=date("M",strtotime($row['month']));
      $ll2=date("y",strtotime($row['month']));
     $mint=date("m",strtotime($row['month']));
      $format4=$l1."-".$ll2;
                              
           
           
           
             $sqlta = "SELECT name,status FROM employees where id='$row[emp_id]'";
$resultta = $conn->query($sqlta);

if ($resultta->num_rows > 0) {
  // output data of each row
  while($rowta = $resultta->fetch_assoc()) {
$sname=$rowta['name'];
$status=$rowta['status'];
  }
}

if ($status=='Active')
{

         
    
           
                                                    
$pdf->SetFont('Arial','',6);
//$pdf->Cell(90);
$pdf->Cell(5,7,++$counting,1,0,'L');
$pdf->SetFont('Arial','',6.5);
$pdf->CellFitScale(20,7,$sname,1,0,'L');         



$present=0;
$absent=0;
$leave=0;


$sqli450 = "SELECT status,date FROM tattendence where emp_id='$row[emp_id]' AND month = '$row[month]' order by date ASC ";

 $result450 = mysqli_query($conn, $sqli450);

            if (mysqli_num_rows($result450) > 0) {
            // output data of each row
             while($row450 = mysqli_fetch_assoc($result450))  {

//echo $d=$row450['date'];
  // $d[]=date("d",strtotime($row450['date']));






  # code...
  






  
  
  if ($row450['status']=='Absent')
  {
      
        $pdf->SetFillColor(255, 0, 0);
    $pdf->SetTextColor(255,255,255);
      
        $pdf->CellFitScale(6,7,'A',1,0,'C',1);
        $a++;
  }
  
  
 else if ($row450['status']=='Present')
  {
      
        $pdf->SetFillColor(0, 204, 102);
    $pdf->SetTextColor(255,255,255);
      
        $pdf->CellFitScale(6,7,'P',1,0,'C',1);
        ++$p;

  }
  
  
  else if ($row450['status']=='Leave')
  {
        $pdf->SetFillColor(255, 0, 255);
    $pdf->SetTextColor(255,255,255);
    
      
      
      
        $pdf->CellFitScale(6,7,'L',1,0,'C',1);
++$l;
  }
  
  
  else if ($row450['status']=='Late')
  {
        $pdf->SetFillColor(255, 140, 0);
    $pdf->SetTextColor(255,255,255);
      
      
        $pdf->CellFitScale(6,7,'La',1,0,'C',1);
        ++$la;
        ++$p;

  }
  
  
  
    else if ($row450['status']=='SL')
  {
        $pdf->SetFillColor(0, 255, 0);
    $pdf->SetTextColor(0,0,0);
      
      
        $pdf->CellFitScale(6,7,'SL',1,0,'C',1);
        ++$la;
        ++$p;

  }
  
  
  
  else
  {
      $pdf->SetTextColor(0,0,0);
  $pdf->CellFitScale(6,7,$row450['status'],1,0,'C');
  $sum=$row450['status']+$sum;
  }



 

 $pdf->SetTextColor(0,0,0);


 }
}
//$pdf->Cell(12,7,$sum,1,0,'C');
   




 $pdf->SetTextColor(0,0,0);
 $y= substr($month,0,4);

 $m= substr($month,5,2);
 
 $ym=cal_days_in_month(CAL_GREGORIAN, $m, $y);
 
 
 
 
 
 
 
 $sqli4501 = "SELECT status,date FROM tattendence where emp_id='$row[emp_id]' and date >='2022-03-01' order by date ASC ";

 $result4501 = mysqli_query($conn, $sqli4501);

            if (mysqli_num_rows($result4501) > 0) {
            // output data of each row
             while($row4501 = mysqli_fetch_assoc($result4501))  {
                 
                 
                 
                  
  if ($row4501['status']=='Absent')
  {
      
       
        $as++;
  }
  
   if ($row4501['status']=='Late')
  {
      
       
        $las++;
  }
  
                 
                 
             }
            }
 
 
 
 
 
 
 
 
 
 

$pdf->Cell(12,7,$ym,1,0,'R');
$pdf->Cell(12,7,$p,1,0,'R');
$pdf->Cell(12,7,$a,1,0,'R');
$pdf->Cell(12,7,$la,1,0,'R');
$pdf->Cell(12,7,$as,1,0,'R');
$pdf->Cell(12,7,$la,1,0,'R');

$p=0;
$a=0;
$l=0;
$la=0;
$as=0;
$las=0;
//var_dump($d);
$pdf->Ln(7);

}
}
}

$pdf->Ln(2);

   
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
$pdf->Cell(280,5,'Printed on Date '.$dd1.' Time '.$time,0,0,'C');
 $pdf->SetTextColor(0,0,0);
//output
    
 
   


    

$pdf->Output();

$sqld ="DELETE FROM tattendence WHERE status=''";

 if ($conn->query($sqld) === TRUE) 
            {} 
            else 
                 {
                    echo "Error: " . $sqld . "<br>" . $conn->error;
                   }


 ?>
