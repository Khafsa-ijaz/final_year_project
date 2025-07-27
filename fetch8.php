<?php
include('cone.php');

$floorname=$_POST['floorname'];


$query = '';
$output = array();

if ($floorname!='All Floors')
{
include('function8.php');
$query .= "SELECT * FROM pricelist where floor='$floorname' ";


if(isset($_POST["search"]["value"]))
{
    $query .= ' AND category LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'AND size LIKE "%'.$_POST["search"]["value"].'%" ';
}

if(isset($_POST["order"]))
{
    $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
    $query .= 'ORDER BY floor ';
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



     $sub_array[] = $row["category"];
      $sub_array[] = $row["floor"];
     $sub_array[] = $row["flatno"];
     
     
     if ($row["ss"]=='0')
{
    $sub_array[]="<span class='badge badge-success'>Available</span>";
}
  if ($row["ss"]=='1')
{
    $sub_array[]="<span class='badge badge-danger'>Not Available</span>";
}

     
     
     
     
      
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
}


if ($floorname=='All Floors')
{
include('function88.php');
$query .= "SELECT * FROM pricelist ";


if(isset($_POST["search"]["value"]))
{
    $query .= ' WHERE category LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'AND size LIKE "%'.$_POST["search"]["value"].'%" ';
}

if(isset($_POST["order"]))
{
    $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
    $query .= 'ORDER BY floor ';
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




     $sub_array[] = $row["category"];
         $sub_array[] = $row["floor"];
      $sub_array[] = $row["flatno"];
        if ($row["ss"]=='0')
{
    $sub_array[]="<span class='badge badge-success'>Available</span>";
}
  if ($row["ss"]=='1')
{
    $sub_array[]="<span class='badge badge-danger'>Not Available</span>";
}

     

      $sub_array[] = number_format($row["size"]);
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
}

?>