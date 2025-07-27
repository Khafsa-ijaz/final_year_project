<?php
$count=0;
include('connection.php');
$classname="nill";
$sqlnav124 = "SELECT * FROM school_info";
$resultnav124 = $conn->query($sqlnav124);

if ($resultnav124->num_rows > 0) {
  // output data of each row
  while($rownav124 = $resultnav124->fetch_assoc()) {
$navname=$rownav124['name'];
$str=strtoupper($navname);
$navaddress=$rownav124['address'];
$navcontact=$rownav124['contact'];
$navslogoo=$rownav124['slogo'];
$navslogo="uploads/$navslogoo";
$navblogoo=$rownav124['blogo'];
$navblogo="uploads/$navblogoo";
$navba=$rownav124['ba'];
$navwebsite=$rownav124['website'];
  }
} 

require('./code39/code39.php');

$pdf = new PDF_Code39();


    
      $regno=$_POST['regno'];
      $m_name=$_POST['monthname'];
     $a1=date("m",strtotime($m_name));
      $a2=date("Y",strtotime($m_name));
      $format=$a2."-".$a1;
                              
$querry1 = "SELECT * FROM fees WHERE regno='$regno' AND feeperiod='$format'";
 if($resultt1 = mysqli_query($conn, $querry1)){
  $row1 =  mysqli_fetch_array($resultt1);


$pdf->AddPage('L');
$pdf->code39(13,24,$row1['regno'],1.3,6);
$pdf->code39(103,24,$row1['regno'],1.3,6);
$pdf->code39(195,24,$row1['regno'],1.3,6);

$pdf->Image($navslogo,40,77,30);
$pdf->Image($navslogo,130,77,30);
$pdf->Image($navslogo,225,77,30);

$pdf->Image($navblogo,50,98,15);
$pdf->Image($navblogo,140,98,15);
$pdf->Image($navblogo,230,98,15);
  //
  //lines

//$pdf->Line(x1,y1,x2,y2);


//feechalan border
$pdf->Line(10,18,95,18);
$pdf->Line(10,23,92,23);
//$pdf->Line(10,27,55,27);

$pdf->Line(10,200,95,200);

$pdf->Line(100,18,187,18);
$pdf->Line(100,23,184,23);
$pdf->Line(100,200,187,200);

$pdf->Line(192,18,279,18);
$pdf->Line(192,23,276,23);
//$pdf->Line(192,27,239,27);

$pdf->Line(192,200,279,200);

//vertical lines
$pdf->Line(10,18,10,200);
$pdf->Line(95,18,95,200);

$pdf->Line(100,18,100,200);
$pdf->Line(187,18,187,200);

$pdf->Line(192,18,192,200);
$pdf->Line(279,18,279,200);


//horrizontal sign lines 
$pdf->Line(12,129,53,129);
$pdf->Line(12,148,53,148);

$pdf->Line(55,129,93,129);
$pdf->Line(55,148,93,148);


$pdf->Line(103,129,143,129);
$pdf->Line(103,148,143,148);

$pdf->Line(145,129,183,129);
$pdf->Line(145,148,183,148);


$pdf->Line(193,129,233,129);
$pdf->Line(193,148,233,148);

$pdf->Line(235,129,275,129);
$pdf->Line(235,148,275,148);

//verticle sign lines

$pdf->Line(12,129,12,148);
$pdf->Line(53,129,53,148);

$pdf->Line(55,129,55,148);
$pdf->Line(93,129,93,148);



$pdf->Line(103,129,103,148);
$pdf->Line(143,129,143,148);

$pdf->Line(145,129,145,148);
$pdf->Line(183,129,183,148);



$pdf->Line(193,129,193,148);
$pdf->Line(233,129,233,148);

$pdf->Line(235,129,235,148);
$pdf->Line(275,129,275,148);

 $pdf->SetFont('Times','',10);
 $pdf->SetFont('Times','B',10);
 $pdf->Cell(35);
$pdf->Cell(20,8,'Bank Copy',0,0,'C');

//$pdf->Cell(35,8,'Bill # '.$row1['billno'],0,0,'L');
$pdf->Cell(70);
$pdf->Cell(20,8,'Office Copy',0,0,'C');
//$pdf->Cell(35,8,'Bill # '.$row1['billno'],0,0,'L');
$pdf->Cell(70);
$pdf->Cell(22,8,'Student Copy',0,0,'C');
//$pdf->Cell(35,8,'Bill # '.$row1['billno'],0,0,'L');
$pdf->Ln(6);

$pdf->Cell(35);
$pdf->SetFont('Times','B',12);
$pdf->Cell(40,10,$str,0,0,'R');
$pdf->Cell(50);
$pdf->Cell(40,10,$str,0,0,'R');
$pdf->Cell(55);
$pdf->Cell(40,10,$str,0,0,'R');
$pdf->Ln(4);
/*
$pdf->SetFont('Times','',10);
$pdf->Cell(1);
$pdf->Cell(40,10,'Focus School System',0,0,'L');

$pdf->Cell(50);
$pdf->Cell(40,10,'Focus School System',0,0,'L');
$pdf->Cell(52);
$pdf->Cell(40,10,'Focus School System',0,0,'L');
*/
$pdf->Ln(4);
$pdf->SetFont('Times','',10);
$pdf->Cell(67);
$pdf->Cell(15,8,'',0,0,'C');
$pdf->Cell(77);
$pdf->Cell(15,8,'',0,0,'C');
$pdf->Cell(77);
$pdf->Cell(15,8,'',0,0,'C');
$pdf->Ln(8);
$pdf->Cell(15,8,$navba,0,0,'L');
$pdf->Cell(76);
$pdf->Cell(15,8,$navba,0,0,'L');
$pdf->Cell(76);
$pdf->Cell(15,8,$navba,0,0,'L');



$pdf->SetFont('Times','B',8);
$pdf->Ln(4);
$pdf->Cell(40,8,$navwebsite,0,0,'L');
$pdf->Cell(22);
$pdf->Cell(20,8,$navcontact,0,0,'L');
$pdf->Cell(8);
$pdf->Cell(40,8,$navwebsite,0,0,'L');
$pdf->Cell(25);
$pdf->Cell(20,8,$navcontact,0,0,'L');
$pdf->Cell(7);
$pdf->Cell(40,8,$navwebsite,0,0,'L');
$pdf->Cell(25);
$pdf->Cell(20,8,$navcontact,0,0,'L');
$pdf->Cell(4);

$pdf->Ln(5);
$pdf->SetFont('Times','',8);
$pdf->Cell(85, 1, '', 'B', 0, 'L');
$pdf->Cell(5);
$pdf->Cell(87, 1, '', 'B', 0, 'L');
$pdf->Cell(5);
$pdf->Cell(87, 1, '', 'B', 0, 'L');
$pdf->Ln(.1);
$pdf->SetFont('Times','B',10);

$pdf->Cell(15,8,'Student Name:',0,0,'L');
$pdf->SetFont('Times','B',8);
$pdf->Cell(10);
$pdf->Cell(50,8,$row1['sname'],0,0,'L');
$pdf->Cell(15);
$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,'Student Name:',0,0,'L');
$pdf->SetFont('Times','B',8);
$pdf->Cell(10);
$pdf->Cell(50,8,$row1['sname'],0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(17);
$pdf->Cell(15,8,'Student Name:',0,0,'L');
$pdf->SetFont('Times','B',8);
$pdf->Cell(10);
$pdf->Cell(50,8,$row1['sname'],0,0,'L');

$pdf->Ln(4);
$pdf->SetFont('Times','B',10);

$pdf->Cell(15,8,'Father Name:',0,0,'L');
$pdf->SetFont('Times','',10);
$pdf->Cell(10);
$pdf->Cell(50,8,$row1['fname'],0,0,'L');
$pdf->Cell(15);
$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,'Father Name:',0,0,'L');
$pdf->SetFont('Times','',10);
$pdf->Cell(10);
$pdf->Cell(50,8,$row1['fname'],0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(17);
$pdf->Cell(15,8,'Father Name:',0,0,'L');
$pdf->SetFont('Times','',10);
$pdf->Cell(10);
$pdf->Cell(50,8,$row1['fname'],0,0,'L');

$pdf->Ln(4);
$pdf->SetFont('Times','B',10);

$pdf->Cell(15,8,'Registration No:',0,0,'L');
$pdf->SetFont('Times','',10);
$pdf->Cell(10);
$pdf->Cell(10,8,$row1['regno'],0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(10);
$pdf->Cell(15,8,'Roll No:',0,0,'L');
$pdf->SetFont('Times','',10);

$pdf->Cell(3);
$pdf->Cell(10,8,$row1['rollno'],0,0,'L');
$pdf->Cell(17);
$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,'Registration No:',0,0,'L');
$pdf->SetFont('Times','',10);
$pdf->Cell(10);
$pdf->Cell(10,8,$row1['regno'],0,0,'L');
$pdf->Cell(5);
$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,'Roll No:',0,0,'L');
$pdf->SetFont('Times','',10);
$pdf->Cell(3);
$pdf->Cell(10,8,$row1['rollno'],0,0,'L');

$pdf->SetFont('Times','B',10);
$pdf->Cell(24);
$pdf->Cell(15,8,'Registration No:',0,0,'L');
$pdf->SetFont('Times','',10);
$pdf->Cell(10);
$pdf->Cell(10,8,$row1['regno'],0,0,'L');
$pdf->Cell(5);
$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,'Roll No:',0,0,'L');
$pdf->SetFont('Times','',10);
$pdf->Cell(3);
$pdf->Cell(10,8,$row1['rollno'],0,0,'L');

$pdf->Ln(4);
$pdf->SetFont('Times','B',10);



 $query56="SELECT DISTINCT cname from classes where id='$row1[curr_class]'";
                  $result56 = mysqli_query($conn,$query56);

                    $row56 = mysqli_fetch_assoc($result56);
            
                  $class123 = $row56['cname'];
$pdf->Cell(15,8,'Class/Section:',0,0,'L');
$pdf->SetFont('Times','',10);
$pdf->Cell(10);
$pdf->Cell(15,8,$class123,0,0,'L');
$pdf->Cell(50);
$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,'Class/Section:',0,0,'L');
$pdf->SetFont('Times','',10);
$pdf->Cell(10);
$pdf->Cell(15,8,$class123,0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(52);
$pdf->Cell(15,8,'Class/Section:',0,0,'L');
$pdf->SetFont('Times','',10);
$pdf->Cell(10);
$pdf->Cell(15,8,$class123,0,0,'L');
$pdf->Ln(5);
$pdf->Cell(85, 1, '', 'B', 0, 'L');
$pdf->Cell(5);
$pdf->Cell(87, 1, '', 'B', 0, 'L');
$pdf->Cell(5);
$pdf->Cell(87, 1, '', 'B', 0, 'L');




$nmonth1 = date("m", strtotime($row1['feeperiod']));
$nyear = date("Y", strtotime($row1['feeperiod']));
$month_name = date("F", mktime(0, 0, 0, $nmonth1, 10)); 
   $format1=$month_name.-$nyear;


$pdf->Ln(1);
$pdf->SetFont('Times','B',10);

$pdf->Cell(15,8,'Fee Period:',0,0,'L');
$pdf->SetFont('Times','',10);
$pdf->Cell(3);
$pdf->Cell(15,8,$format1,0,0,'L');
$pdf->Cell(57);
$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,'Fee Period:',0,0,'L');
$pdf->SetFont('Times','',10);
$pdf->Cell(3);
$pdf->Cell(15,8,$format1,0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(59);
$pdf->Cell(15,8,'Fee Period:',0,0,'L');
$pdf->SetFont('Times','',10);
$pdf->Cell(3);
$pdf->Cell(15,8,$format1,0,0,'L');

$nmonth2 = date("m", strtotime($row1['duedate']));
$ndate2 = date("d",strtotime($row1['duedate']));
$nyear2 = date("Y", strtotime($row1['duedate']));
$month_name2 = date("F", mktime(0, 0, 0, $nmonth2, 10)); 
   $format2=$month_name2.-$ndate2.-$nyear2;
   



$pdf->Ln(7);
$pdf->SetFont('Times','B',10);

$pdf->Cell(15,4,'Due Date: ','L,T,B',0,'L');
$pdf->SetFont('Times','B',10);

$pdf->Cell(32,4,$format2,'T,B,R',0,'L');
$pdf->SetFont('Times','B',8);

$pdf->Cell(27,4,'Fine After Due Date',0,0,'L');
$pdf->SetFont('Times','',8);

$pdf->Cell(10,4,$row1['fine'],0,0,'L');

$pdf->Cell(6);

$pdf->SetFont('Times','B',10);
$pdf->Cell(15,4,'Due Date:','L,T,B',0,'L');
$pdf->SetFont('Times','B',10);

$pdf->Cell(32,4,$format2,'T,B,R',0,'L');

$pdf->SetFont('Times','B',8);
$pdf->Cell(27,4,'Fine After Due Date:',0,0,'L');
$pdf->SetFont('Times','',8);

$pdf->Cell(10,4,$row1['fine'],0,0,'L');

$pdf->SetFont('Times','B',10);
$pdf->Cell(8);
$pdf->Cell(15,4,'Due Date:','L,T,B',0,'L');
$pdf->SetFont('Times','B',10);

$pdf->Cell(32,4,$format2,'T,B,R',0,'L');

$pdf->SetFont('Times','B',8);
$pdf->Cell(27,4,'Fine After Due Date:',0,0,'L');
$pdf->SetFont('Times','',8);

$pdf->Cell(10,4,$row1['fine'],0,0,'L');




$nmonth3 = date("m", strtotime($row1['issuedate']));
$ndate3 = date("d",strtotime($row1['issuedate']));
$nyear3 = date("Y", strtotime($row1['issuedate']));
$month_name3 = date("F", mktime(0, 0, 0, $nmonth3, 10)); 
   $format3=$month_name3.-$ndate3.-$nyear3;

$pdf->Ln(4);
$pdf->SetFont('Times','B',10);

$pdf->Cell(15,8,'Issue Date:',0,0,'L');
$pdf->SetFont('Times','',10);
$pdf->Cell(3);
$pdf->Cell(15,8,$format3,0,0,'L');
$pdf->Cell(57);
$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,'Issue Date:',0,0,'L');
$pdf->SetFont('Times','',10);
$pdf->Cell(3);
$pdf->Cell(15,8,$format3,0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(59);
$pdf->Cell(15,8,'Issue Date:',0,0,'L');
$pdf->SetFont('Times','',10);
$pdf->Cell(3);
$pdf->Cell(15,8,$format3,0,0,'L');



$pdf->Ln(5);
$pdf->Cell(85, 1, '', 'B', 0, 'L');
$pdf->Cell(5);
$pdf->Cell(87, 1, '', 'B', 0, 'L');
$pdf->Cell(5);
$pdf->Cell(87, 1, '', 'B', 0, 'L');
$pdf->Ln(1);
   
									    include('connection.php');
									    $sql = "SELECT * FROM feesheads where id='1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
$h1=$row['h1'];
$h2=$row['h2'];
$h3=$row['h3'];
$h4=$row['h4'];
$h5=$row['h5'];
$h6=$row['h6'];
$h7=$row['h7'];

  }
} 

$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,$h1,0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(60);
$pdf->Cell(8,8,$row1['admfee'],0,0,'L');
$pdf->Cell(7);
$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,$h1,0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(61);
$pdf->Cell(8,8,$row1['admfee'],0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(8);
$pdf->Cell(15,8,$h1,0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(64);
$pdf->Cell(8,8,$row1['admfee'],0,0,'L');
$pdf->Ln(4);



$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,$h2,0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(60);
$pdf->Cell(8,8,$row1['secfee'],0,0,'L');
$pdf->Cell(7);
$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,$h2,0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(61);
$pdf->Cell(8,8,$row1['secfee'],0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(8);
$pdf->Cell(15,8,$h2,0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(64);
$pdf->Cell(8,8,$row1['secfee'],0,0,'L');


$pdf->Ln(4);

$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,$h3,0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(60);
$pdf->Cell(8,8,$row1['annfee'],0,0,'L');
$pdf->Cell(7);
$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,$h3,0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(61);
$pdf->Cell(8,8,$row1['annfee'],0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(8);
$pdf->Cell(15,8,$h3,0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(64);
$pdf->Cell(8,8,$row1['annfee'],0,0,'L');



$pdf->Ln(4);

$pdf->SetFont('Times','B',10);
$pdf->Cell(20,8,'Monthly Fee:',0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(55);
$pdf->Cell(8,8,$row1['monfee'],0,0,'L');
$pdf->Cell(7);
$pdf->SetFont('Times','B',10);
$pdf->Cell(20,8,'Monthly Fee:',0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(56);
$pdf->Cell(8,8,$row1['monfee'],0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(8);
$pdf->Cell(20,8,'Monthly Fee:',0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(59);
$pdf->Cell(8,8,$row1['monfee'],0,0,'L');




$pdf->Ln(4);

$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,$h4,0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(60);
$pdf->Cell(8,8,$row1['examfee'],0,0,'L');
$pdf->Cell(7);
$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,$h4,0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(61);
$pdf->Cell(8,8,$row1['examfee'],0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(8);
$pdf->Cell(15,8,$h4,0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(64);
$pdf->Cell(8,8,$row1['examfee'],0,0,'L');


$pdf->Ln(4);


$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,$h6,0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(60);
$pdf->Cell(8,8,$row1['tfee'],0,0,'L');
$pdf->Cell(7);
$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,$h6,0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(61);
$pdf->Cell(8,8,$row1['tfee'],0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(8);
$pdf->Cell(15,8,$h6,0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(64);
$pdf->Cell(8,8,$row1['tfee'],0,0,'L');



$pdf->Ln(4);


$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,$h7,0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(60);
$pdf->Cell(8,8,$row1['lfee'],0,0,'L');
$pdf->Cell(7);
$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,$h7,0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(61);
$pdf->Cell(8,8,$row1['lfee'],0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(8);
$pdf->Cell(15,8,$h7,0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(64);
$pdf->Cell(8,8,$row1['lfee'],0,0,'L');



$pdf->Ln(4);



$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,$h5,0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(58);
$pdf->Cell(8,8,$row1['miscfee'],0,0,'C');
$pdf->Cell(9);
$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,$h5,0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(61);
$pdf->Cell(8,8,$row1['miscfee'],0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(8);
$pdf->Cell(15,8,$h5,0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(64);
$pdf->Cell(8,8,$row1['miscfee'],0,0,'L');


$pdf->Ln(4);

$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,'Per day Fine:',0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(60);
$pdf->Cell(8,8,$row1['pdfine'],0,0,'L');
$pdf->Cell(7);
$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,'Per day Fine:',0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(61);
$pdf->Cell(8,8,$row1['pdfine'],0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(8);
$pdf->Cell(15,8,'Per day Fine:',0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(64);
$pdf->Cell(8,8,$row1['pdfine'],0,0,'L');


$pdf->Ln(4);

$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,'Arrears:',0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(60);
$pdf->Cell(8,8,$row1['arrears'],0,0,'L');
$pdf->Cell(7);
$pdf->SetFont('Times','B',10);
$pdf->Cell(15,8,'Arrears:',0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(61);
$pdf->Cell(8,8,$row1['arrears'],0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(8);
$pdf->Cell(15,8,'Arrears:',0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(64);
$pdf->Cell(8,8,$row1['arrears'],0,0,'L');



$pdf->Ln(5);
$pdf->Cell(85, 1, '', 'B', 0, 'L');
$pdf->Cell(5);
$pdf->Cell(87, 1, '', 'B', 0, 'L');
$pdf->Cell(5);
$pdf->Cell(87, 1, '', 'B', 0, 'L');
$pdf->Ln(1);




$pdf->SetFont('Times','B',10);
$pdf->Cell(25,8,'Net Payable Within Due Date:',0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(50);
$pdf->Cell(8,8,$row1['payablebdd'],0,0,'L');
$pdf->Cell(18);
$pdf->SetFont('Times','B',10);
$pdf->Cell(25,8,'Net Payable Within Due Date:',0,0,'C');
$pdf->SetFont('Times','',8);
$pdf->Cell(40);
$pdf->Cell(8,8,$row1['payablebdd'],0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(8);
$pdf->Cell(25,8,'Net Payable Within Due Date:',0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(54);
$pdf->Cell(8,8,$row1['payablebdd'],0,0,'L');

$pdf->Ln(4);

$pdf->SetFont('Times','B',10);
$pdf->Cell(25,8,'Net Payable After Due Date:',0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(50);
$pdf->Cell(8,8,$row1['payableadd'],0,0,'L');
$pdf->Cell(7);
$pdf->SetFont('Times','B',10);
$pdf->Cell(25,8,'Net Payable After Due Date:',0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(51);
$pdf->Cell(8,8,$row1['payableadd'],0,0,'L');
$pdf->SetFont('Times','B',10);
$pdf->Cell(8);
$pdf->Cell(25,8,'Net Payable After Due Date:',0,0,'L');
$pdf->SetFont('Times','',8);
$pdf->Cell(54);
$pdf->Cell(8,8,$row1['payableadd'],0,0,'L');

$pdf->Ln(8);
$pdf->Cell(5);
$pdf->SetFont('Times','B',8);
$pdf->Cell(35,4,'Principal/MD if Required','B',0,'L');
$pdf->Cell(10);
$pdf->Cell(20,4,'Cashier','B',0,'C');

$pdf->Cell(25);
$pdf->SetFont('Times','B',8);
$pdf->Cell(35,4,'Principal/MD if Required','B',0,'L');
$pdf->Cell(10);
$pdf->Cell(20,4,'Cashier','B',0,'C');

$pdf->Cell(25);
$pdf->SetFont('Times','B',8);
$pdf->Cell(35,4,'Principal/MD if Required','B',0,'L');
$pdf->Cell(10);
$pdf->Cell(20,4,'Cashier','B',0,'C');



$pdf->Ln(18);
$pdf->SetFont('Times','',8);
$pdf->Cell(85, 1, '', 'B', 0, 'L');
$pdf->Cell(5);
$pdf->Cell(87, 1, '', 'B', 0, 'L');
$pdf->Cell(5);
$pdf->Cell(87, 1, '', 'B', 0, 'L');
$pdf->Ln(1);

$pdf->SetFont('Times','B',8);
$pdf->Cell(7,4,'Bill #','B',0,'L');
$pdf->Cell(5);
$pdf->Cell(15,4,'Fee Period','B',0,'L');
$pdf->Cell(5);
$pdf->Cell(12,4,'P/A BDD','B',0,'L');

$pdf->Cell(5);
$pdf->Cell(12,4,'P/A ADD','B',0,'L');

$pdf->Cell(5);
$pdf->Cell(7,4,'Paid','B',0,'L');

$pdf->Cell(5);
$pdf->Cell(7,4,'Bal','B',0,'L');



$pdf->Cell(7);



$pdf->SetFont('Times','B',8);
$pdf->Cell(7,4,'Bill #','B',0,'L');
$pdf->Cell(5);
$pdf->Cell(15,4,'Fee Period','B',0,'L');
$pdf->Cell(5);
$pdf->Cell(12,4,'P/A BDD','B',0,'L');

$pdf->Cell(5);
$pdf->Cell(12,4,'P/A ADD','B',0,'L');

$pdf->Cell(5);
$pdf->Cell(7,4,'Paid','B',0,'L');

$pdf->Cell(5);
$pdf->Cell(7,4,'Bal','B',0,'L');


$pdf->Cell(7);

$pdf->SetFont('Times','B',8);
$pdf->Cell(7,4,'Bill #','B',0,'L');
$pdf->Cell(5);
$pdf->Cell(15,4,'Fee Period','B',0,'L');
$pdf->Cell(5);
$pdf->Cell(12,4,'P/A BDD','B',0,'L');

$pdf->Cell(5);
$pdf->Cell(12,4,'P/A ADD','B',0,'L');

$pdf->Cell(5);
$pdf->Cell(7,4,'Paid','B',0,'L');

$pdf->Cell(5);
$pdf->Cell(7,4,'Bal','B',0,'L');

$pdf->Ln(4);







$querry4 = "SELECT * FROM fees  WHERE regno='$regno' 
AND feeperiod != '$format' ORDER BY  feeperiod DESC LIMIT 12";

   if($resultt4 = mysqli_query($conn, $querry4)){

    while ( $row4 =  mysqli_fetch_array($resultt4)) {

      $f1=0;
      $f2=0;
      $formated=0;
      $f1=date("M",strtotime($row4['feeperiod']));
      $f2=date("Y",strtotime($row4['feeperiod']));
      $formated=$f1."-".$f2;

      $pdf->SetFont('Times','',6);
$pdf->Cell(7,4,$row4['billno'],'',0,'L');
$pdf->Cell(5);
$pdf->Cell(15,4,$formated,'',0,'L');
$pdf->Cell(5);
$pdf->Cell(12,4,$row4['payablebdd'],'',0,'L');

$pdf->Cell(5);
$pdf->Cell(12,4,$row4['payableadd'],'',0,'L');

$pdf->Cell(5);
$pdf->Cell(7,4,$row4['rcvdamt'],'',0,'L');

$pdf->Cell(5);
$pdf->Cell(7,4,$row4['balamt'],'',0,'L');



$pdf->Cell(7);



$pdf->Cell(7,4,$row4['billno'],'',0,'L');
$pdf->Cell(5);
$pdf->Cell(15,4,$formated,'',0,'L');
$pdf->Cell(5);
$pdf->Cell(12,4,$row4['payablebdd'],'',0,'L');

$pdf->Cell(5);
$pdf->Cell(12,4,$row4['payableadd'],'',0,'L');

$pdf->Cell(5);
$pdf->Cell(7,4,$row4['rcvdamt'],'',0,'L');

$pdf->Cell(5);
$pdf->Cell(7,4,$row4['balamt'],'',0,'L');


$pdf->Cell(7);


$pdf->Cell(7,4,$row4['billno'],'',0,'L');
$pdf->Cell(5);
$pdf->Cell(15,4,$formated,'',0,'L');
$pdf->Cell(5);
$pdf->Cell(12,4,$row4['payablebdd'],'',0,'L');

$pdf->Cell(5);
$pdf->Cell(12,4,$row4['payableadd'],'',0,'L');

$pdf->Cell(5);
$pdf->Cell(7,4,$row4['rcvdamt'],'',0,'L');

$pdf->Cell(5);
$pdf->Cell(7,4,$row4['balamt'],'',0,'L');

$pdf->Ln(4);





    }
  







}
}


$pdf->Output();
$conn->close();
?>