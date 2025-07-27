<?php
include('cone.php');
include('function2n.php');
$query = '';
$output = array();


$query .= "SELECT * FROM patients ";
if(isset($_POST["search"]["value"]))
{
    $query .= 'WHERE id LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR name LIKE "%'.$_POST["search"]["value"].'%" ';
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


   

      $sub_array[] = $row["name"];


    $sub_array[] = $row["gender"];

        $sub_array[] = $row["age"];
    


                                
  $sub_array[]="<div class='btn-group' role='group' aria-label='Basic example'>
                                     



                     
                          

                                        <a target='_blank' href=addtest2n.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-primary btn-sm'><i class='fa fa-medkit'></i></button></a>
                                      



                                        <a target='_blank' href=addtestse.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-primary btn-sm'><i class='fa fa-medkit'></i></button></a>
                                      
                                
                                </div>";




                                  $sub_array[]="<div class='btn-group' role='group' aria-label='Basic example'>
                                     



                     
                          

                                        <a target='_blank' href=itable2n.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-primary btn-sm'><i class='   fa fa-hospital-o'></i></button></a>
                                      
                                      
                                
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