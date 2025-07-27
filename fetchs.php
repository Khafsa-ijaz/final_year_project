<?php
include('cone.php');
include('function2.php');
$query = '';
$output = array();


$query .= "SELECT * FROM session ";
if(isset($_POST["search"]["value"]))
{
    $query .= 'WHERE name LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR id LIKE "%'.$_POST["search"]["value"].'%" ';
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


 $image = '';
 if($row["image"] == 'Nill')
 {
  $image = '<a target="_blank" href="uploads/noimage.png"><img src="uploads/noimage.png" class="img-thumbnail" width="50" height="35" /></a>';
 }

     $sub_array[] = $row["id"];
      $sub_array[] = $row["name"];
    $sub_array[] = $row["fname"];

   $sub_array[] = $image;
    $sub_array[] = $row["mobile"];

        $sub_array[] = $row["designation"];
            $sub_array[] = $row["status"];
            $sub_array[]="<div class='btn-group' role='group' aria-label='Basic example'>
                                     
                                          <a href=edit_class.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-outline-warning btn-sm'><i class='fa fa-pencil'></i></button></a>
                                        <button type='button' value=Delete id=".$row['id']." class='btn btn-icon btn-outline-danger cc btn-sm '><i class='fa fa-trash'></i></button>
                                      
                                
                                </div>";
                                    $sub_array[] = $row["address"];
                                        $sub_array[] = $row["bdate"];
                                            $sub_array[] = $row["jdate"];
                                              $sub_array[] = $row["qualification"];
                                                $sub_array[] = $row["department"];
                                                      $sub_array[] = $row["salary"];
                                                            $sub_array[] = $row["nic"];
                                                                  $sub_array[] = $row["mobile1"];
                                                                   $sub_array[] = $row["mobile2"];
                                                                    $sub_array[] = $row["mobile3"];
                                                                     $sub_array[] = $row["mobile4"];
                                                                      $sub_array[] = $row["mstatus"];
 
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