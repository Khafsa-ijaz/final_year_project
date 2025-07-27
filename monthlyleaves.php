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
     
    include('include_pdf_landscape_header2.php');
    $this->SetTextColor(0,0,0);
    $this->SetFont('Arial','B',13);
    $this->SetTextColor(48, 74, 123);
    $a11=date("F",strtotime($month));
    $a21=date("Y",strtotime($month));
    $a31=date("d",strtotime($month));
    $format1=$a11."-".$a21;
    $this->Ln(3);
    $this->Cell(40);
    $this->Cell(130,10,'MONTHWISE LEAVE REPORT',0,0,'C');
    $this->Ln(7);
    $this->Cell(40);
    $this->Cell(130,10,'MONTH:' .$format1,0,0,'C');
    $this->Ln(7);

    }
    else{

      $this->SetFillColor(6,47,79);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',10);

    $this->Cell(12,7,'S#',1,0,'C',1);
    $this->Cell(48,7,'EMPLOYEE NAME',1,0,'L',1);
    $this->Cell(35,7,'ALLOWED LEAVES',1,0,'L',1);
    $this->Cell(31,7,'LEAVES TAKEN',1,0,'L',1);
    $this->Cell(33,7,'ALLOWED SL',1,0,'L',1);
    $this->Cell(33,7,'TAKEN SL',1,0,'L',1);
    $this->Ln(7);
}
}

function Footer()
{
  // To be implemented in your own inherited class
  $this->Ln(10);
  $this->Cell(90);
  $this->SetFont('Arial','B',8);
  $this->Cell(0, 5, "Page " . $this->PageNo() . "/{nb}", 0, 1);
  $this->Cell(80);
  $this->SetFont('Arial','B',5);
  $this->Cell(18, 5, "Proudly Powered By", 0, 0);
  $this->SetFont('Arial','B',5);
  $this->SetTextColor(51,153,0);
  $this->Cell(30, 5, "PAKSOFTWARE", 0, 0,1);
}
}
$pdf = new PDF();
$pdf->AddPage('');
$pdf->AliasNbPages();

$pdf->SetFont('Arial','',7);

  
  $pdf->SetFillColor(6,47,79);


$pdf->Ln(1);

$pdf->Image('download.png',11,9,25);

$pdf->SetFont('Arial','',7);

 
 
  
//$pdf->Line(5, 150, 210-80, 80); // 20mm from each edge
//$pdf->Line(50, 45, 210-50, 45); // 50mm from each edge
 
    
 $pdf->Ln(4);
   $pdf->SetFillColor(6,47,79);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',10);




    $pdf->Cell(12,7,'S#',1,0,'C',1);
    $pdf->Cell(48,7,'EMPLOYEE NAME',1,0,'L',1);
    $pdf->Cell(35,7,'ALLOWED LEAVES',1,0,'L',1);
    $pdf->Cell(31,7,'LEAVES TAKEN',1,0,'L',1);
    $pdf->Cell(33,7,'ALLOWED SL',1,0,'L',1);
    $pdf->Cell(33,7,'TAKEN SL',1,0,'L',1); 

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
$pdf->Cell(12,7,++$counting,1,0,'L');
$pdf->SetFont('Arial','',6.5);
$pdf->CellFitScale(48,7,$sname,1,0,'L');
$pdf->CellFitScale(35,7,'1',1,0,'L'); 



$sqli450 = "SELECT status,date FROM tattendence where emp_id='$row[emp_id]' AND month = '$row[month]' order by date ASC ";

 $result450 = mysqli_query($conn, $sqli450);

            if (mysqli_num_rows($result450) > 0) {
            // output data of each row
             while($row450 = mysqli_fetch_assoc($result450))  {


  
  if ($row450['status']=='Leave')
  {
++$l;
  }
  

    
    
    if ($row450['status']=='SL')
  {
        ++$la;
  }
 

 }
}

  $pdf->CellFitScale(31,7,$l,1,0,'L');
  $pdf->CellFitScale(33,7,'2',1,0,'L');
  $pdf->CellFitScale(33,7,$la,1,0,'L'); 


$l=0;
$la=0;
$pdf->Ln(7);

}
}
}

$pdf->Ln(2);

   
date_default_timezone_set("Asia/Karachi");
$pdf->Cell(45);
$data=date("Y-m-d");
$time=date("H:i:s");

     $d11=date("M",strtotime($data));
      $d33=date("Y",strtotime($data));
      $d22=date("d",strtotime($data));

      $dd1=$d22."-".$d11."-".$d33;

 $pdf->Ln(10);
  $pdf->SetFont('Arial','B',7);
  $pdf->SetTextColor(48,74,123);
$pdf->Cell(200,5,'Printed on Date '.$dd1.' Time '.$time. ' By '.$rowsession['username'],0,0,'C');
 $pdf->SetTextColor(0,0,0);
//output
    
 
   

$pdf->Output();

 ?>
