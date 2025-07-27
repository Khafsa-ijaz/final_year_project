<?php
include('cone.php');
include('function.php');
$query = '';
$output = array();

$session="2021-22";

$query .= "SELECT * FROM classes where csession='$session' ";
if(isset($_POST["search"]["value"]))
{
    $query .= 'AND cname LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR cfees LIKE "%'.$_POST["search"]["value"].'%" ';
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
     $sub_array[] = $row["id"];
      $sub_array[] = $row["cname"];
       $sub_array[] = $row["cteacher"];
    $sub_array[] = $row["cfees"];
   
        $sub_array[] = $row["cgroup"];
            $sub_array[] = $row["cperiods"];
            $sub_array[]="<div class='btn-group' role='group' aria-label='Basic example'>
                                     
                                          <a target='_blank' href=edit_class.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-outline-warning btn-sm'><i class='fa fa-pencil'></i></button></a>
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