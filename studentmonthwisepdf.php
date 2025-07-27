<?php 
include('connection.php');
include('sessionfinder.php');
$present=0;
$absent=0;
$leave=0;
$regno=$_POST['regno'];

include('connection.php');
include_once('libs/fpdf.php');

for ($i=1; $i <=31 ; $i++) { 
            # code...
            
            $list[]=$i;

          }

          //var_dump($list);
        //  echo"<br>";
$sqli = "SELECT DISTINCT month FROM attendence where regno='$regno' and session='$session' order by month ASC ";

 $result = mysqli_query($conn, $sqli);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  { 
             // echo $row['month'];
            //echo"<br>";
            $m=0;
            $y=0;
$sqliarray = "SELECT date FROM attendence where regno='$regno' and session='$session' AND month = '$row[month]' order by date ASC ";

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

     $sql ="INSERT INTO attendence (regno,date,month,status,class)
            values('$regno','$createdate','$createmonth','NA','NA')";
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
    
    $regno=$_POST['regno'];
    
    // Line break
   // $this->Ln(10);
    if ($this->PageNo()==1) {
      # code...
     
    include('include_pdf_landscape_header.php');
    include('connection.php');
    $sql1 = "SELECT sname FROM students where regno='$regno'";
    $result1 = $conn->query($sql1);


  // output data of each row
    $row1 = $result1->fetch_assoc();

    $sname=$row1['sname'];
 

       /*$a1=date("F",strtotime($date));
      $a2=date("Y",strtotime($date));
      $a3=date("d",strtotime($date));
      $format=$a3."-".$a1."-".$a2;



      $al1=date("F",strtotime($date1));
      $al2=date("Y",strtotime($date1));
      $al3=date("d",strtotime($date1));
      $format1=$al3."-".$al1."-".$al2;*/

    $this->Cell(150,10,'Student Name: '.$sname,0,0,'C');
     $this->Ln(10);
      $this->Cell(70);
         $this->Cell(150,10,'Reg No: '.$regno,0,0,'C');

    
    //$this->Cell(150,10,'Attendance From: '.$format." TO: ".$format1,0,0,'C');

    $this->Ln(10);

    }
    else{
    $this->SetFillColor(61, 57, 57);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',10);
    
//$this->Cell(90);
$this->Cell(5,10,'S#',1,0,'C',1);
$this->Cell(12,10,'Month',1,0,'C',1);

          for ($i=1; $i <=31 ; $i++) { 
            # code...
            $this->Cell(12,10,"D ".$day,1,0,'C',1);
          }
$this->Cell(12,10,"Present",1,0,'C',1);
$this->Cell(12,10,"Absent",1,0,'C',1);
$this->Cell(12,10,"Leave",1,0,'C',1);          
$this->Ln(10);
}
}

function Footer()
{
  // To be implemented in your own inherited class
  $this->Ln(10);
  $this->SetFont('Arial','I',8);
  $this->Cell(130);
  $this->Cell(0, 5, "Page " . $this->PageNo() . "/{nb}", 0, 1);
  $this->Cell(120);
  $this->SetFont('Arial','I',5);
  $this->Cell(18, 5, "Proudly Presented By", 0, 0);
  $this->SetFont('Arial','B',5);
  $this->SetTextColor(51,153,0);
  $this->Cell(30, 5, "PAKSOFTWARES", 0, 0,1);
}
}
$pdf = new PDF();
$pdf->AddPage('L');
$pdf->AliasNbPages();

$pdf->SetFont('Arial','',7);

  
$pdf->SetFillColor(61, 57, 57);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',6.5);
//$pdf->Cell(90);
$pdf->Cell(5,10,'S#',1,0,'C',1);
$pdf->Cell(12,10,'Month',1,0,'C',1);



          for ($i=1; $i <=31 ; $i++) { 
            # code...
            $pdf->Cell(7,10,"D ".$i,1,0,'C',1);
            $list[]=$i;

          }
         // var_dump($list);
$pdf->Cell(12,10,"Present",1,0,'C',1);
$pdf->Cell(12,10,"Absent",1,0,'C',1);
$pdf->Cell(12,10,"Leave",1,0,'C',1);          
$pdf->Ln(10);
    // Title


$pdf->SetTextColor(0,0,0);
$counting=0;

$sqli = "SELECT DISTINCT month FROM attendence where regno='$regno' and session='$session' order by month ASC ";




 $result = mysqli_query($conn, $sqli);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  {

      $l1=date("M",strtotime($row['month']));
      $ll2=date("y",strtotime($row['month']));
     $mint=date("m",strtotime($row['month']));
      $format4=$l1."-".$ll2;
                              
           
                                                    
$pdf->SetFont('Arial','',6);
//$pdf->Cell(90);
$pdf->Cell(5,7,++$counting,1,0,'L');
$pdf->SetFont('Arial','',6.5);
$pdf->Cell(12,7,$format4,1,0,'L');         



$present=0;
$absent=0;
$leave=0;


$sqli450 = "SELECT status,date FROM attendence where  regno='$regno'  AND month ='$row[month]' order by date ASC ";

 $result450 = mysqli_query($conn, $sqli450);

            if (mysqli_num_rows($result450) > 0) {
            // output data of each row
             while($row450 = mysqli_fetch_assoc($result450))  {

//echo $d=$row450['date'];
  // $d[]=date("d",strtotime($row450['date']));


if ($row450['status']=='Present') {
  # code...
  $pdf->Cell(7,7,"P",1,0,'C');
  $present++;
}

if ($row450['status']=='Absent') {
  # code...
  $pdf->Cell(7,7,"A",1,0,'C');
  $absent++;
}
 

 if ($row450['status']=='Leave') {
  # code...
  $pdf->Cell(7,7,"L",1,0,'C');
  $leave++;
}
 
 if ($row450['status']=='NA')
 {
  $pdf->Cell(7,7," ",1,0,'C');
 }



 }
}
$pdf->Cell(12,7,$present,1,0,'C');
$pdf->Cell(12,7,$absent,1,0,'C');
$pdf->Cell(12,7,$leave,1,0,'C');
//var_dump($d);
$pdf->Ln(7);

}
}
$pdf->Output();

$sqld ="DELETE FROM attendence WHERE status='NA'";

 if ($conn->query($sqld) === TRUE) 
            {} 
            else 
                 {
                    echo "Error: " . $sqld . "<br>" . $conn->error;
                   }


 ?>
