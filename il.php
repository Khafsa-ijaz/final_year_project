<?php
 ini_set('display_errors', '0');  
error_reporting(E_ALL | E_STRICT);
include('connection.php');


$data= array();
$bcode = $_POST['cc'];   // department id
	//

$sql = "SELECT * FROM medicine3 where bcode='$bcode'";

$result = mysqli_query($conn,$sql);

while( $row = mysqli_fetch_array($result) ){
    $data1	= $row['name'];
    $data2  = $row['unit'];
    $data3 = $row['location'];
    $data4 = $row['amount'];
    $data5 = $row['cname'];
    $data6 = $row['vendor'];
        $data8 = $row['type'];

    //$data8 = $row['quantity'];
    $data[]= $arrayName = array('name' => $data1,'unit' => $data2,'location'=> $data3,'amount'=>$data4,'cname'=>$data5,'vendor'=>$data6,'type'=>$data8);
}

// encoding array to json format
echo json_encode($data);
?>
