<?php
include('cone.php');
include('function4.php');
$query = '';
$output = array();


$query .= "SELECT * FROM students ";
if(isset($_POST["search"]["value"]))
{
    $query .= 'WHERE sname LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR regno LIKE "%'.$_POST["search"]["value"].'%" ';
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
if ($row["status"]=='Active')
{
  $st='<span class="badge rounded-pill bg-success">Active</span>';
}
if ($row["status"]=='In-Active')
{
  $st='<span class="badge rounded-pill bg-danger">In-Active</span>';
}

 $image = '';
 if($row["image"] == 'Nill')
 {
  $image = '<a target="_blank" href="uploads/noimage.png"><img src="uploads/noimage.png" class="img-thumbnail" width="30" height="30" /></a>';
 }
   if($row["image"] == 'NILL')
 {
  $image = '<a target="_blank" href="uploads/noimage.png"><img src="uploads/noimage.png" class="img-thumbnail" width="30" height="30" /></a>';
 }
   if($row["image"] != 'Nill' && $row["image"] != 'NILL' )
 {
  $image = "<a target='_blank' href='uploads/$row[image]'><img src='uploads/$row[image]' class='img-thumbnail' width='30' height='30'</img></a>";
 }

     $sub_array[] = $row["regno"];
      $sub_array[] = $row["sname"];
    $sub_array[] = $row["fname"];

   $sub_array[] = $image;
    $sub_array[] = $row["mob"];

        $sub_array[] = $row["curr_class"];
            
            $sub_array[]="<div class='btn-group' role='group' aria-label='Basic example'>
                                     

    <a target='_blank' href=addpics.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-outline-info btn-sm'><i class='fa fa-picture-o'></i></button></a>

                                          <a href=editstudent.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-outline-warning btn-sm'><i class='fa fa-pencil'></i></button></a>
                                        <button type='button' value=Delete id=".$row['id']." class='btn btn-icon btn-outline-danger cc btn-sm '><i class='fa fa-trash'></i></button>
                                      
                                
                                </div>";
                                    $sub_array[] = number_format($row["newfee"]);
                                        $sub_array[] = $st;
                                            $sub_array[] = $row["address"];
                                              $sub_array[] = $row["bdate"];
                                                $sub_array[] = $row["admdate"];
                                                     
 
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