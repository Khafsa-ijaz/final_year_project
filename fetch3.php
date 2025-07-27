<?php
include('cone.php');
include('function3.php');
$query = '';
$output = array();


$query .= "SELECT * FROM floor ";
if(isset($_POST["search"]["value"]))
{
    $query .= 'WHERE floorname LIKE "%'.$_POST["search"]["value"].'%" ';
  
}

if(isset($_POST["order"]))
{
    $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
    $query .= 'ORDER BY id DESC ';
}

if($_POST["length"] != -1)
{
    $query .= 'LIMIT ' .$_POST['start']. ', ' .$_POST['length'];
}
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
    $sub_array = array();

     $sub_array[] = $row["floorname"];
    
            $sub_array[]="<div class='btn-group' role='group' aria-label='Basic example'>
                                     
                      

                                        <button type='button' value=Delete id=".$row['id']." class='btn btn-icon btn-outline-danger cc btn-sm '><i class='fa fa-trash'></i></button>
                                      
                                
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