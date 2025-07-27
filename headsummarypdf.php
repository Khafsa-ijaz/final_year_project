<?php 
include('connection.php');
include('sessionfinder.php');

$month=$_POST['month'];
  $counting=0;
  $total=0;
  $count=0;
  $sumc=0;
  $sumt=0;
  $tbal=0;
include('connection.php');
include_once('libs/fpdf.php');


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

    $a1=date("F",strtotime($month));
      $a2=date("Y",strtotime($month));
      $format=$a1."-".$a2;

    $this->Cell(150,10,'Head Wise Fee Summary : '.$format,0,0,'C');

    $this->Ln(5);

    }
    else{
    $this->SetFillColor(61, 57, 57);
    $this->SetTextColor(255,255,255);
    $this->SetFont('Arial','B',8);
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


    $this->Cell(12,10,'S#',1,0,'C',1);
    $this->Cell(35,10,'ClassName',1,0,'C',1);
    $this->CellFitScale(20,10,$h1,1,0,'C',1);
  $this->CellFitScale(15,10,$h2,1,0,'C',1);
     $this->CellFitScale(15,10,$h3,1,0,'C',1);
          $this->Cell(15,10,'Monfee',1,0,'C',1);
                $this->CellFitScale(15,10,$h4,1,0,'C',1);
                      $this->CellFitScale(15,10,$h5,1,0,'C',1);
                            $this->CellFitScale(15,10,$h6,1,0,'C',1);
                             $this->CellFitScale(15,10,$h7,1,0,'C',1);
                              $this->Cell(15,10,'Fine',1,0,'C',1);
                               $this->Cell(25,10,'Arrears',1,0,'C',1);
                                $this->Cell(20,10,'PayableBDD',1,0,'C',1);
                                 $this->Cell(20,10,'PayableADD',1,0,'C',1);
                                  $this->Cell(15,10,'Received',1,0,'C',1);
                                   $this->Cell(15,10,'Balance',1,0,'C',1);
            
    $this->Ln(10);
}
}

function Footer()
{
  // To be implemented in your own inherited class
  $this->Ln(12);
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

$sumadm=0;
$summsec=0;
$summon=0;
$sumtann=0;
$sumtfee=0;
$sumlunchfee=0;
$sumfine=0;
$sumarrears=0;
$sumexam=0;
$summisc=0;

$sumpayablebdd=0;
$sumpayableadd=0;
$sumreceived=0;
$sumbalance=0;
 
    
 $pdf->Ln(5);
    // Title
      
 $pdf->SetFillColor(61, 57, 57);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);
    
    
    
     
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

    
    
    $pdf->Cell(12,10,'S#',1,0,'C',1);
    $pdf->Cell(35,10,'ClassName',1,0,'C',1);
    $pdf->CellFitScale(20,10,$h1,1,0,'C',1);
  $pdf->CellFitScale(15,10,$h2,1,0,'C',1);
     $pdf->CellFitScale(15,10,$h3,1,0,'C',1);
          $pdf->Cell(15,10,'Monfee',1,0,'C',1);
                $pdf->CellFitScale(15,10,$h4,1,0,'C',1);
                      $pdf->CellFitScale(15,10,$h5,1,0,'C',1);
                            $pdf->CellFitScale(15,10,$h6,1,0,'C',1);
                             $pdf->CellFitScale(15,10,$h7,1,0,'C',1);
                              $pdf->Cell(15,10,'Fine',1,0,'C',1);
                               $pdf->Cell(25,10,'Arrears',1,0,'C',1);
                                $pdf->Cell(20,10,'PayableBDD',1,0,'C',1);
                                 $pdf->Cell(20,10,'PayableADD',1,0,'C',1);
                                  $pdf->Cell(15,10,'Received',1,0,'C',1);
                                   $pdf->Cell(15,10,'Balance',1,0,'C',1);
            
         



 $pdf->Ln(10);

$sql1 = "SELECT DISTINCT curr_class FROM fees where feeperiod='$month' and session='$session'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
    $cc=$row1['curr_class'];

 $sql2 = "SELECT SUM(rcvdAmt) as a,SUM(balAmt) as b FROM fees where curr_class='$cc' and feeperiod='$month' and entry='1'";

           
            $result2 = mysqli_query($conn, $sql2);

            if (mysqli_num_rows($result2) > 0) {
            // output data of each row
             while($row2 = mysqli_fetch_assoc($result2))  {
$r=$row2['a'];
$ba=$row2['b'];

}
}


   $sql = "SELECT SUM(admfee),SUM(secfee),SUM(annfee),SUM(monfee),SUM(examfee),SUM(miscfee),SUM(tfee),SUM(lfee),SUM(fine),SUM(arrears),SUM(payablebdd),SUM(payableadd),SUM(rcvdamt),SUM(balamt) FROM fees where curr_class='$cc' and feeperiod='$month' and entry='0'";

           
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  {
                 
                 
                 
                                    $sqlhaha= "SELECT DISTINCT regno FROM fees where curr_class='$cc' and feeperiod='$month'";
$resulthaha = $conn->query($sqlhaha);

if ($resulthaha->num_rows > 0) {
  // output data of each row
  while($rowhaha = $resulthaha->fetch_assoc()) {
      $re=$rowhaha['regno'];
      
      
$sql2haha = "SELECT balamt FROM fees where regno='$re' and feeperiod='$month' order by billno DESC LIMIT 1 ";
$result2haha = $conn->query($sql2haha);

if ($result2haha->num_rows > 0) {
  // output data of each row
  while($row2haha = $result2haha->fetch_assoc()) {
  $tbal=$row2haha['balamt']+$tbal;
  }
} 
      
  
  }
}   

                 
                 
                 
                                     
$rt=$r+$row['SUM(rcvdamt)'];
           $np=$row['SUM(payableadd)']-$rt;
    
     


            
         




$sumc=$rt+$sumc;
$sumt=$rt+$sumt;
   $pdf->SetFont('Arial','I',7.5);
   $pdf->SetTextColor(0,0,0);
       $pdf->Cell(12,6,++$counting,1,0,'C');
 $sql12 = "SELECT cname FROM classes where id='$cc'";
$result12 = $conn->query($sql12);

if ($result12->num_rows > 0) {
  // output data of each row
  while($row12 = $result12->fetch_assoc()) {
  $cname=$row12['cname'];
  }
}


$sumadm=$row['SUM(admfee)']+$sumadm;
$summsec=$row['SUM(secfee)']+$summsec;
$summon=$row['SUM(monfee)']+$summon;
$sumtann=$row['SUM(annfee)']+$sumtann;
$sumtfee=$row['SUM(tfee)']+$sumtfee;
$sumlunchfee=$row['SUM(lfee)']+$sumlunchfee;
$sumfine=$row['SUM(fine)']+$sumfine;
$sumarrears=$row['SUM(arrears)']+$sumarrears;
$sumexam=$row['SUM(examfee)']+$sumexam;
$summisc=$row['SUM(miscfee)']+$summisc;

$sumpayablebdd=$row['SUM(payablebdd)']+$sumpayablebdd;
$sumpayableadd=$row['SUM(payableadd)']+$sumpayableadd;
$sumreceived=$rt+$sumreceived;


$pdf->SetFont('Arial','I',7.5);
$pdf->Cell(35,6,$cname,1,0,'L');


$pdf->Cell(20,6,number_format($row['SUM(admfee)']),1,0,'C');
$pdf->Cell(15,6,number_format($row['SUM(secfee)']),1,0,'C');
$pdf->Cell(15,6,number_format($row['SUM(annfee)']),1,0,'C');
$pdf->Cell(15,6,number_format($row['SUM(monfee)']),1,0,'C');
$pdf->Cell(15,6,number_format($row['SUM(examfee)']),1,0,'C');
$pdf->Cell(15,6,number_format($row['SUM(miscfee)']),1,0,'C');
$pdf->Cell(15,6,number_format($row['SUM(tfee)']),1,0,'C');
$pdf->Cell(15,6,number_format($row['SUM(lfee)']),1,0,'C');
$pdf->Cell(15,6,number_format($row['SUM(fine)']),1,0,'C');
$pdf->Cell(25,6,number_format($row['SUM(arrears)']),1,0,'C');
$pdf->Cell(20,6,number_format($row['SUM(payablebdd)']),1,0,'C');
$pdf->Cell(20,6,number_format($row['SUM(payableadd)']),1,0,'C');
$pdf->Cell(15,6,number_format($rt),1,0,'C');
$pdf->Cell(15,6,number_format($tbal),1,0,'C');
$pdf->Ln(6);



}
$tbal=0;

}
}
}
$pdf->SetFont('Arial','I',7.5);

$pdf->Cell(32);
$pdf->Cell(15,6,'Total:',0,0,'R');
$pdf->Cell(20,6,number_format($sumadm),1,0,'C');
$pdf->Cell(15,6,number_format($summsec),1,0,'C');
$pdf->Cell(15,6,number_format($sumtann),1,0,'C');
$pdf->Cell(15,6,number_format($summon),1,0,'C');
$pdf->Cell(15,6,number_format($sumexam),1,0,'C');
$pdf->Cell(15,6,number_format($summisc),1,0,'C');
$pdf->Cell(15,6,number_format($sumtfee),1,0,'C');
$pdf->Cell(15,6,number_format($sumlunchfee),1,0,'C');
$pdf->Cell(15,6,number_format($sumfine),1,0,'C');
$pdf->Cell(25,6,number_format($sumarrears),1,0,'C');
$pdf->Cell(20,6,number_format($sumpayablebdd),1,0,'C');
$pdf->Cell(20,6,number_format($sumpayableadd),1,0,'C');
$pdf->Cell(15,6,number_format($sumreceived),1,0,'C');

$pdf->Ln(6);

$pdf->Output();



 ?>
