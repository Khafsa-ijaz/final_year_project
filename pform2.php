<?php 
include('session_head.php');

  $counting=0;
  $total=0;
  $count=0;
  $sumc=0;
  $sumt=0;
include('connection.php');
include_once('libs/fpdf.php');


if(isset($_GET['id']) && is_numeric($_GET['id'])){
    
    $userid = $_GET['id'];
    $get_user = mysqli_query($conn,"SELECT * FROM itable2 WHERE id='$userid'");
    
    if(mysqli_num_rows($get_user) === 1){
        
        $roww = mysqli_fetch_assoc($get_user);
      }
    }





class PDF extends FPDF
{


}


$pdf = new PDF();
$pdf->AddPage('');
$pdf->AliasNbPages();





if ($roww['product']=='Pine View Cottages Makhniyal')
{


$pdf->Image('pform2a.png',5,10,200);



$pdf->Image('pvc3.png',9,15,80);




$pdf->Image('sign3.PNG',165,130,22);




}






if ($roww['product']=='Pine View Cottages Kalam')
{


$pdf->Image('pform3.png',5,10,200);





$pdf->Image('sign3.PNG',165,130,22);



}




if ($roww['product']!='Pine View Cottages Makhniyal' && $roww['product']!='Pine View Cottages Kalam')
{
    
    
    $pdf->Image('pform4.png',5,10,200);
    
$pdf->Image('sign3.PNG',165,130,22);


}





   $pdf->SetFont('Arial','',16);
   $pdf->SetTextColor(0,0,0);





 $pdf->Ln(7);

 $pdf->Cell(160);
$pdf->CellFitScale(100,6,$roww['id'],0,0,'L');



$pdf->Ln(12);
$date=date('d-m-Y');
 $pdf->Cell(150);
$pdf->CellFitScale(100,6,$date,0,0,'L');



 $pdf->Ln(43);

 $pdf->Cell(88);
$pdf->CellFitScale(100,6,$roww['name'],0,0,'L');




 $pdf->Ln(17);

 $pdf->Cell(96);
 
 
 
if ($roww['credit']=='SILK Bank')
{

 
 
$pdf->CellFitScale(40,6,$roww['credit'],0,0,'L');



 $pdf->Ln(6);
 
  $pdf->Cell(95);

$pdf->CellFitScale(40,6,'(Samara Builders)',0,0,'L');

 $pdf->Ln(-6);



  $pdf->Cell(135);


}

else
{
    $pdf->CellFitScale(40,6,$roww['credit'],0,0,'L');
}



   $a1=date("m",strtotime($roww['rcvddate']));
      $a2=date("Y",strtotime($roww['rcvddate']));
      $a3=date("d",strtotime($roww['rcvddate']));
      $format=$a3."-".$a1."-".$a2;
      



 $pdf->Cell(19);
$pdf->CellFitScale(40,6,$format,0,0,'L');



function convertAmountToWordsPKR($amount) {
    $words = '';
    
    // Define arrays for words conversion
    $ones = array(
        0 => '',
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine'
    );
    
    $tens = array(
        0 => '',
        1 => 'ten',
        2 => 'twenty',
        3 => 'thirty',
        4 => 'forty',
        5 => 'fifty',
        6 => 'sixty',
        7 => 'seventy',
        8 => 'eighty',
        9 => 'ninety'
    );
    
    $teens = array(
        0 => 'ten',
        1 => 'eleven',
        2 => 'twelve',
        3 => 'thirteen',
        4 => 'fourteen',
        5 => 'fifteen',
        6 => 'sixteen',
        7 => 'seventeen',
        8 => 'eighteen',
        9 => 'nineteen'
    );

    // Convert rupees part to words
    if ($amount < 1000) {
        $words .= convertThreeDigitNumberToWords($amount, $ones, $tens, $teens);
    } elseif ($amount < 100000) {
        $thousands = intval($amount / 1000);
        $remainder = $amount % 1000;
        $words .= convertThreeDigitNumberToWords($thousands, $ones, $tens, $teens) . ' thousand ';
        if ($remainder != 0) {
            $words .= convertThreeDigitNumberToWords($remainder, $ones, $tens, $teens);
        }
    } elseif ($amount < 10000000) {
        $lakhs = intval($amount / 100000);
        $remainder = $amount % 100000;
        $words .= convertThreeDigitNumberToWords($lakhs, $ones, $tens, $teens) . ' lakh ';
        if ($remainder != 0) {
            $words .= convertAmountToWordsPKR($remainder);
        }
    } else {
        $words = "Amount exceeds the limit of this script.";
    }

    // Add "rupees" to the end


    return ucfirst(trim($words));
}

// Helper function to convert a three-digit number to words
function convertThreeDigitNumberToWords($number, $ones, $tens, $teens) {
    $words = '';

    $hundreds = intval($number / 100);
    $tens_units = $number % 100;

    if ($hundreds > 0) {
        $words .= $ones[$hundreds] . ' hundred ';
    }

    if ($tens_units < 10) {
        $words .= $ones[$tens_units];
    } elseif ($tens_units < 20) {
        $words .= $teens[$tens_units - 10];
    } else {
        $tens_digit = intval($tens_units / 10);
        $units_digit = $tens_units % 10;
        $words .= $tens[$tens_digit];
        if ($units_digit > 0) {
            $words .= ' ' . $ones[$units_digit];
        }
    }

    return $words;
}

// Example usage:
$amount = $roww['rcvdamt'];






 $pdf->Ln(16.5);

 $pdf->Cell(47);
$pdf->CellFitScale(150,6,convertAmountToWordsPKR($amount).'',0,0,'L');






       $sql2 = "SELECT category,pr,pno FROM plot where id=$roww[accountnumber]";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
   $category=$row2['category'];
   
 
     $pno=$row2['pno'];
  
  
  
  }
}







$stop = 0;
$cc2=0;

$sql23 = "SELECT id FROM itable2 WHERE accountnumber = $roww[accountnumber]";
$result23 = $conn->query($sql23);

if ($result23->num_rows > 0) {
    // output data of each row
    while ($row23 = $result23->fetch_assoc()) {
        // Set $id to the value fetched from the database
       $id = $row23['id'];
++$stop;
        if ($id == $userid) {
            
            

            
       $cc2=$stop;
        } else {
            
        }
    }
}








 $pdf->Ln(16.5);

$mn=$roww['month'];

  $a11=date("M",strtotime($mn));
      $a21=date("Y",strtotime($mn));
      $a31=date("d",strtotime($mn));
      $format1=$a11."-".$a21;


 $pdf->Cell(46);
$pdf->CellFitScale(150,6,'Received against Unit No  ' .$pno .' ('. $cc2 .') Installment ('. ($format1).')',0,0,'L');

 $pdf->Ln(7);
 $pdf->Cell(46);

    
    
    
 $pdf->Ln(17);

 $pdf->Cell(17);
$pdf->CellFitScale(150,6,number_format($roww['rcvdamt']),0,0,'L');
    
    
    
$pdf->Output();



 ?>
