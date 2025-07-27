<?php
include('cone.php');
include('function2s.php');
$query = '';
$output = array();


$query .= "SELECT * FROM medicine where type='EQUIPMENT' ";
if(isset($_POST["search"]["value"]))
{
    $query .= 'AND name LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'AND location LIKE "%'.$_POST["search"]["value"].'%" ';
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


     $sub_array[] = $row["bcode"];

     $sub_array[] = $row["name"];


   

      $sub_array[] = $row["qty"];


    $sub_array[] = $row["unit"];

        $sub_array[] = $row["cname"];
            $sub_array[] = $row["type"];
                   $sub_array[] = $row["location"];




     $sub_array[]="<div class='btn-group' role='group' aria-label='Basic example'>
                                     



                                      
                                     
                                        <a target='_blank'  href=idetail.php?bcode=".$row['bcode']."><button type='button' class='btn btn-icon btn-primary btn-sm'><i class='fa fa-medkit'></i></button></a>
                                      
                                
                                </div>";
            

                        


              $sub_array[]="<div class='btn-group' role='group' aria-label='Basic example'>
                                     



                                      
                                     
                                         
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