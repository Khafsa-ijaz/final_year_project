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
   $this->Ln(5);
   $this->SetFont('Times','B',16);
    $this->Cell(280,10,'MONTHLY SUMMARY REPORT',0,0,'C');
 $this->Ln(7);

$this->Cell(280,10,'MONTH:'.$format1,0,0,'C');
 $this->Ln(7);

    }
    else{
    $this->SetFillColor (16, 144, 205);
$this->SetTextColor(0,0,0);
$this->SetFont('Arial','B',6.5);
//$pdf->Cell(90);
$this->Cell(5,10,'S#',1,0,'C',1);
$this->Cell(20,10,'',1,0,'C',1);



          for ($i=1; $i <=31 ; $i++) { 
            # code...
            $this->Cell(8,10,"D ".$i,1,0,'C',1);
            $list[]=$i;

          }
         // var_dump($list);
$this->Cell(12,10,"Total",1,0,'C',1);

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
  $this->Cell(18, 5, "Developed By:", 0, 0);
  $this->SetFont('Arial','B',5);
  $this->SetTextColor(51,153,0);
  $this->Cell(30, 5, "Khafsa Ijaz & Habeeba Mateen", 0, 0,1);
}
}
$pdf = new PDF();
$pdf->AddPage('L');
$pdf->AliasNbPages();

$pdf->SetFont('Arial','',7);
$pdf->Image('download.png',11,9,25);
    $pdf->SetFillColor(16, 144, 205);  
  
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',10);
$pdf->Cell(-10);



$pdf->Ln(5);



$pdf->Cell(5,7,'S#',1,0,'C',1);
$pdf->Cell(20,7,'Status',1,0,'C',1);




          for ($i=1; $i <=31 ; $i++) { 
            # code...
            $pdf->Cell(8,7,"D".$i,1,0,'R',1);
            $list[]=$i;

          }
         // var_dump($list);
$pdf->Cell(12,7,"Total",1,0,'R',1);


$pdf->Ln(7);
    // Title


$pdf->SetTextColor(0,0,0);
$counting=0;





$pdf->SetFont('Arial','',6);
//$pdf->Cell(90);
$pdf->Cell(5,7,++$counting,1,0,'L');
$pdf->SetFont('Arial','',6.5);
$pdf->Cell(20,7,'PRESENT',1,0,'L');  






         
    

                                                    
     



$present=0;
$absent=0;
$leave=0;
$list=array();






       $m=date('m',strtotime($month));
      $y=date('y',strtotime($month));
      $a3=date("d",strtotime($month));
      $format=$a1."-".$a2;



 $list3=array();
for($d=1; $d<=31; $d++)
{
    $time=mktime(12, 0, 0, $m, $d, $y);
    if (date('m', $time)==$m)
        $list3[]=date('Y-m-d', $time);
}



$c=0;
for($e=1; $e<=31; $e++)
{
    
    
   // $dd=$list3[$c];
    
$sqli450 = "SELECT status,emp_id FROM tattendence where  date='$list3[$c]'";

 $result450 = mysqli_query($conn, $sqli450);

            if (mysqli_num_rows($result450) > 0) {
            // output data of each row
             while($row450 = mysqli_fetch_assoc($result450))  {







$sql27 = "SELECT status FROM employees where status='Active' and id='$row450[emp_id]' and status='Active'";
$result27 = $conn->query($sql27);

if ($result27->num_rows > 0) {
  // output data of each row
  





//echo $d=$row450['date'];
  // $d[]=date("d",strtotime($row450['date']));

  # code...
 
 if ($row450['status']=='present')
  {
  
        ++$p;
        ++$tp;
        ++$pt;

  }
  
   if ($row450['status']=='Late')
  {
  
        ++$p;
        ++$pt;

  }
   
  

 




 }
}


$pdf->SetFont('Arial','',6.5);
$pdf->Cell(8,7,$p,1,0,'R');
$p=0;





}
else
{
    $pdf->SetFont('Arial','',6.5);
$pdf->Cell(8,7,' ',1,0,'L');


}

++$c;
}
$pdf->Cell(12,7,$pt,1,0,'R');





















$pdf->Ln();
$pdf->Cell(5,7,++$counting,1,0,'L');
$pdf->SetFont('Arial','',6.5);
$pdf->Cell(20,7,'ABSENT',1,0,'L'); 



$c=0;

for($e=1; $e<=31; $e++)
{
    
    
   // $dd=$list3[$c];
    
$sqli450 = "SELECT status,emp_id FROM tattendence where  date='$list3[$c]'";

 $result450 = mysqli_query($conn, $sqli450);

            if (mysqli_num_rows($result450) > 0) {
            // output data of each row
             while($row450 = mysqli_fetch_assoc($result450))  {







$sql27 = "SELECT status FROM employees where status='Active' and id='$row450[emp_id]' and status='Active'";
$result27 = $conn->query($sql27);

if ($result27->num_rows > 0) {
  // output data of each row
  





//echo $d=$row450['date'];
  // $d[]=date("d",strtotime($row450['date']));

  # code...
 
 if ($row450['status']=='Absent')
  {
  
        ++$a;
        ++$at;

  }
   
  

 




 }
}


$pdf->SetFont('Arial','',6.5);
$pdf->Cell(8,7,$a,1,0,'R');
$a=0;





}
else
{
    $pdf->SetFont('Arial','',6.5);
$pdf->Cell(8,7,' ',1,0,'L');


}

++$c;
}



$pdf->Cell(12,7,$at,1,0,'R');














$pdf->Ln();
$pdf->Cell(5,7,++$counting,1,0,'L');
$pdf->SetFont('Arial','',6.5);
$pdf->Cell(20,7,'LATE',1,0,'L'); 



$c=0;

for($e=1; $e<=31; $e++)
{
    
    
   // $dd=$list3[$c];
    
$sqli450 = "SELECT status,emp_id FROM tattendence where  date='$list3[$c]'";

 $result450 = mysqli_query($conn, $sqli450);

            if (mysqli_num_rows($result450) > 0) {
            // output data of each row
             while($row450 = mysqli_fetch_assoc($result450))  {







$sql27 = "SELECT status FROM employees where status='Active' and id='$row450[emp_id]' and status='Active'";
$result27 = $conn->query($sql27);

if ($result27->num_rows > 0) {
  // output data of each row
  





//echo $d=$row450['date'];
  // $d[]=date("d",strtotime($row450['date']));

  # code...
 
 if ($row450['status']=='Late')
  {
  
        ++$la;
        ++$lat;

  }
   
  

 




 }
}


$pdf->SetFont('Arial','',6.5);
$pdf->Cell(8,7,$la,1,0,'R');
$la=0;





}
else
{
    $pdf->SetFont('Arial','',6.5);
$pdf->Cell(8,7,' ',1,0,'L');


}

++$c;
}
$pdf->Cell(12,7,$lat,1,0,'R');







$pdf->Ln();
$pdf->Cell(5,7,++$counting,1,0,'L');
$pdf->SetFont('Arial','',6.5);
$pdf->Cell(20,7,'LEAVE',1,0,'L'); 



$c=0;

for($e=1; $e<=31; $e++)
{
    
    
   // $dd=$list3[$c];
    
$sqli450 = "SELECT status,emp_id FROM tattendence where  date='$list3[$c]'";

 $result450 = mysqli_query($conn, $sqli450);

            if (mysqli_num_rows($result450) > 0) {
            // output data of each row
             while($row450 = mysqli_fetch_assoc($result450))  {







$sql27 = "SELECT status FROM employees where status='Active' and id='$row450[emp_id]' and status='Active'";
$result27 = $conn->query($sql27);

if ($result27->num_rows > 0) {
  // output data of each row
  





//echo $d=$row450['date'];
  // $d[]=date("d",strtotime($row450['date']));

  # code...
 
 if ($row450['status']=='Leave')
  {
  
        ++$l;
        ++$lt;

  }
   
  

 




 }
}


$pdf->SetFont('Arial','',6.5);
$pdf->Cell(8,7,$l,1,0,'R');
$l=0;





}
else
{
    $pdf->SetFont('Arial','',6.5);
$pdf->Cell(8,7,' ',1,0,'L');


}

++$c;
}


$pdf->Cell(12,7,$lt,1,0,'R');




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




 ?>
