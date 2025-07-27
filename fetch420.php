<?php

include('cone.php');

$query = "
SELECT * FROM pricelist
";

if(isset($_POST['floor'], $_POST['flatno']) && $_POST['floor'] != '' && $_POST['flatno'] != '')
{
 $query .= '
 WHERE floor = "test" AND flatno = "6" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id DESC ';
}


$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();


$data = array();

foreach($result as $row)
{
 
     $sub_array[] = $row["category"];
         $sub_array[] = $row["floor"];
      $sub_array[] = $row["flatno"];

      $sub_array[] = number_format($row["size"],2);
    $sub_array[] = number_format($row["per"]);


    $sub_array[] = number_format($row["tp"]);

        $sub_array[] = number_format($row["dp"]);


   $sub_array[] = number_format($row["ra"]);

   $sub_array[] = number_format($row["qi"]);


            
            $sub_array[]="<div class='btn-group' role='group' aria-label='Basic example'>
                                     
                                          <a href=editfloorprice.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-warning btn-sm'><i class='fa fa-pencil'></i></button></a>
                                        <button type='button' value=Delete id=".$row['id']." class='btn btn-icon btn-danger cc btn-sm '><i class='fa fa-trash'></i></button>
                                      
                                
                                </div>";
 $data[] = $sub_array;
}



$output = array(
    "draw"              =>  intval($_POST["draw"]),
    "recordsTotal"      =>  $filtered_rows,
    "recordsFiltered"   =>  get_total_all_records(),
    "data"              =>  $data
);
echo json_encode($output);




?>
