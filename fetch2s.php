<?php
include('cone.php');
$category=$_POST['category'];
$query = '';
$output = array();

if ($category=='All Tests')
{
    include('function2s.php');
$query .= "SELECT * FROM tests ";
if(isset($_POST["search"]["value"]))
{
    $query .= 'WHERE name LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR category LIKE "%'.$_POST["search"]["value"].'%" ';
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




     $sub_array[] = $row["category"];
          $sub_array[] = $row["sc"];


   

      $sub_array[] = $row["name"];


    $sub_array[] = $row["unit"];

        $sub_array[] = $row["rr"];
       






                             


              $sub_array[]="<div class='btn-group' role='group' aria-label='Basic example'>
                                     



                                     
                                           <a data-toggle=tooltip' title='EDIT' href=editlab.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-warning btn-sm'><i class='fa fa-pencil'></i></button></a>

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


if ($category!='All Tests')
{
    include('function2ss.php');
$query .= "SELECT * FROM tests where category='$category'  ";
if(isset($_POST["search"]["value"]))
{
    $query .= 'AND name LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'AND category LIKE "%'.$_POST["search"]["value"].'%" ';
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




     $sub_array[] = $row["category"];
      $sub_array[] = $row["sc"];


   

      $sub_array[] = $row["name"];


    $sub_array[] = $row["unit"];

        $sub_array[] = $row["rr"];
      






                             


              $sub_array[]="<div class='btn-group' role='group' aria-label='Basic example'>
                                     


       
                                           <a data-toggle=tooltip' title='EDIT' href=editlab.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-warning btn-sm'><i class='fa fa-pencil'></i></button></a>

                                     
                                         
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