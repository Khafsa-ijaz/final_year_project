<?php
include('cone.php');
include('function2.php');
$query = '';
$output = array();


$query .= "SELECT * FROM employees ";
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
            $sub_array[] = $row["status"];
            $sub_array[] = $row["ref"];


                                
  $sub_array[]="<div class='btn-group' role='group' aria-label='Basic example'>
                                     



                     
                          

                                        <a  data-toggle=tooltip' title='ADD TEST' href=addtest.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-primary btn-sm'><i class='fa fa-medkit'></i></button></a>
                                          &nbsp
                                          <a  data-toggle=tooltip' title='ADD DELIVERY' href=addtestd.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-dark btn-sm'><i class='fa fa-medkit'></i></button></a>
                                      
                                      
                                
                                </div>";




                                  $sub_array[]="<div class='btn-group' role='group' aria-label='Basic example'>
                                     



                     
                          

                                        <a href=itable.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-primary btn-sm'><i class='   fa fa-hospital-o'></i></button></a>
                                      
                                      
                                
                                </div>";



                                   $sub_array[]="<div class='btn-group' role='group' aria-label='Basic example'>
                                     



                     
                          

                                        <a data-toggle=tooltip' title='DOCTOR FORM' target='_blank' href=info.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-info btn-sm'><i class='fa fa-print'></i></button></a>
                                        &nbsp
                                         <a data-toggle=tooltip' title='TESTS INVOICE' target='_blank' href=info4.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-success btn-sm'><i class='fa fa-print'></i></button></a>
                                      
                                
                                </div>";

              $sub_array[]="<div class='btn-group' role='group' aria-label='Basic example'>
                                     



                                     
                                          <a data-toggle=tooltip' title='EDIT' href=editregform.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-warning btn-sm'><i class='fa fa-pencil'></i></button></a>
                                        <button data-toggle=tooltip' title='DELETE' type='button' value=Delete id=".$row['id']." class='btn btn-icon btn-danger cc btn-sm '><i class='fa fa-trash'></i></button>
                                      
                                
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