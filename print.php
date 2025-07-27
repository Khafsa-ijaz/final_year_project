<?php 
error_reporting(0);

// Report simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Reporting E_NOTICE can be good too (to report uninitialized
// variables or catch variable name misspellings ...)
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

// Report all PHP errors
error_reporting(E_ALL);

// Report all PHP errors
error_reporting(-1);

// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
ob_start();
include('session_head.php');
include('connection.php');
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    
    $userid = $_GET['id'];
    $get_user = mysqli_query($conn,"SELECT * FROM registration WHERE id='$userid'");
    
    if(mysqli_num_rows($get_user) === 1){
        
        $roww = mysqli_fetch_assoc($get_user);
      }
    }
   


  
include('connection.php');
include_once('libs/fpdf.php');


class PDF extends FPDF
{


}
$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();

  

$pdf->Image('regfront.jpg',0,0,210,300);

$pdf->Image('uploads/'.$roww['image'],160,25,32,28);
$pdf->Ln(54);
$pdf->SetFont('Times','',10);
$pdf->Cell(34);
$pdf->CellFitScale(45,4,$roww['no'],0,0,'L');
$pdf->Ln(12);
$pdf->Cell(29);
$pdf->CellFitScale(54,4,$roww['mmm'],0,0,'L');
$pdf->Cell(48);
$pdf->CellFitScale(51,4,$roww['swd'],0,0,'L');

$pdf->Ln(7);
$pdf->Cell(85);

if ($roww['hcpn']=='')
{
$pdf->CellFitScale(97,4,' ',0,0,'L');	
}
else
{

$pdf->CellFitScale(97,4,$roww['hcpn'],0,0,'L');
}
$pdf->Ln(6);
$pdf->Cell(32);
if ($roww['ma']=='')
{$pdf->CellFitScale(150,4,' ',0,0,'L');
}
else
{
$pdf->CellFitScale(150,4,$roww['ma'],0,0,'L');
}

$pdf->Ln(6);
$pdf->Cell(14);
if ($roww['city']=='')
{
$pdf->CellFitScale(38,4,' ',0,0,'L');
}
else
{
$pdf->CellFitScale(38,4,$roww['city'],0,0,'L');
}
$pdf->Cell(15);
if ($roww['tn']=='')
{
	$pdf->CellFitScale(38,4,$roww['tn'],0,0,'L');
}
else
{
$pdf->CellFitScale(38,4,$roww['tn'],0,0,'L');
}
$pdf->Cell(17);


if ($roww['country']=='')
{$pdf->CellFitScale(60,4,' ',0,0,'L');
}
else
{
$pdf->CellFitScale(60,4,$roww['country'],0,0,'L');
}
$pdf->Ln(6);
$pdf->Cell(17);

if ($roww['fax']=='')
{
	$pdf->CellFitScale(35,4,' ',0,0,'L');
}
else
{

$pdf->CellFitScale(35,4,$roww['fax'],0,0,'L');
}
$pdf->Cell(15);


if ($roww['cn']=='')
{
$pdf->CellFitScale(38,4,' ',0,0,'L');
}
else
{$pdf->CellFitScale(38,4,$roww['cn'],0,0,'L');

}


$pdf->Cell(17);
if ($roww['email']=='')
{
$pdf->CellFitScale(60,4,' ',0,0,'L');
}
else
{
$pdf->CellFitScale(60,4,$roww['email'],0,0,'L');
}


$pdf->Ln(12);
$pdf->Cell(31);


if ($roww['nn']=='')
{
		$pdf->CellFitScale(51,4,' ',0,0,'L');
	}
	else
	{
		$pdf->CellFitScale(51,4,$roww['nn'],0,0,'L');
	}

$pdf->Cell(28);
if ($roww['sdw']=='')
{
	$pdf->CellFitScale(71,4,' ',0,0,'L');
	}
	else
	{
$pdf->CellFitScale(71,4,$roww['sdw'],0,0,'L');
}

$pdf->Ln(6);
$pdf->Cell(31);
if ($roww['nc']=='')
{
$pdf->CellFitScale(51,4,' ',0,0,'L');
}
else
{
$pdf->CellFitScale(51,4,$roww['nc'],0,0,'L');
}
$pdf->Cell(28);
if ($roww['pn']=='')
{
$pdf->CellFitScale(71,4,' ',0,0,'L');
}
else
{
$pdf->CellFitScale(71,4,$roww['pn'],0,0,'L');	
}


$pdf->Ln(7);
$pdf->Cell(50);
if ($roww['rwa']=='')
{
$pdf->CellFitScale(132,4,' ',0,0,'L');
}
else
{
$pdf->CellFitScale(132,4,$roww['rwa'],0,0,'L');
}

$pdf->Ln(12);
$pdf->Cell(15);
if ($roww['type']=='')
{
$pdf->CellFitScale(53,4,' ',0,0,'L');
}
else
{
	$pdf->CellFitScale(53,4,$roww['type'],0,0,'L');
}


$pdf->Cell(54);

if ($roww['bua']=='')
{
$pdf->CellFitScale(59,4,' ',0,0,'L');
}
else
{
$pdf->CellFitScale(59,4,$roww['bua'],0,0,'L');
}



$pdf->Ln(7);
$pdf->Cell(61);

if ($roww['pa']=='')
{
$pdf->CellFitScale(53,4,' ',0,0,'L');	
}
else

{

$pdf->CellFitScale(53,4,$roww['pa'],0,0,'L');
}
$pdf->Cell(12);
if ($roww['floor']=='')
{$pdf->CellFitScale(55,4,' ',0,0,'L');

}
else
{

$pdf->CellFitScale(55,4,$roww['floor'],0,0,'L');
}

$pdf->Ln(11);
$pdf->Cell(32);
if ($roww['bpr']=='')
{
$pdf->CellFitScale(120,4,' ',0,0,'L');	
}
else
{
$pdf->CellFitScale(120,4,$roww['bpr'],0,0,'L');
}
$pdf->Ln(8);
$pdf->Cell(69);

if ($roww['tca']=='')
{
$pdf->CellFitScale(112,4,' ',0,0,'L');
}
else
{
$pdf->CellFitScale(112,4,$roww['tca'],0,0,'L');
}
$pdf->Ln(11);
$pdf->Cell(43);

if ($roww['dpp']=='')
{
$pdf->CellFitScale(138,4,' ',0,0,'L');
}
else
{
$pdf->CellFitScale(138,4,$roww['dpp'],0,0,'L');
}
$pdf->Ln(6);
$pdf->Cell(129);
if ($roww['pmc']=='')
{
$pdf->CellFitScale(52,4,' ',0,0,'L');
}
else
{
$pdf->CellFitScale(52,4,$roww['pmc'],0,0,'L');
}
$pdf->Ln(5);
$pdf->Cell(16);
$pdf->CellFitScale(31,4,$roww['dated'],0,0,'L');

$pdf->Ln(5);
$pdf->Cell(27);

if ($roww['bd']=='')
{
$pdf->CellFitScale(154,4,' ',0,0,'L');
}
else
{
$pdf->CellFitScale(154,4,$roww['bd'],0,0,'L');
}

$pdf->Ln(5);
$pdf->Cell(61);

if ($roww['dpd']=='')
{
	$pdf->CellFitScale(99,4,' ',0,0,'L');
}
else
{

$pdf->CellFitScale(99,4,$roww['dpd'],0,0,'L');
}

$pdf->SetFont('Times','B',8);




 $pdf->AddPage();

$pdf->Image('regback.jpg',0,0,210,300);
$pdf->SetFont('Times','B',8);
$pdf->Ln(36);
$pdf->Cell(7);

$pdf->Ln(12);
    
 

$pdf->Output();



 ?>
