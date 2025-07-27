<?php
include('cone.php');
include('function2.php');
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
    
    
    
    include('connection.php');
    $sql = "SELECT mr FROM mrr where mr='$row[id]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

$sub_array = array();




     $sub_array[] = $row["id"];


   

      $sub_array[] = $row["name"];


    $sub_array[] = $row["gender"];

        $sub_array[] = $row["age"];
    


                                
  $sub_array[]="<div class='btn-group' role='group' aria-label='Basic example'>
                                     



                     
                          

                                        <a data-toggle=tooltip' title='ADD RESULT' href=addtest2.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-primary btn-sm'><i class='fa fa-medkit'></i></button></a>
                                        &nbsp
                                        
                                        
                                            <a data-toggle=tooltip' title='ADD EQUIPMENT'  href=addtest2mk.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-info btn-sm'><i class='fa fa-medkit'></i></button></a>
                                        
                                      
                                      
                                
                                </div>";




                                  $sub_array[]="<div class='btn-group' role='group' aria-label='Basic example'>
                                     



                     
                          

                                      <a data-toggle=tooltip' title='VIEW RESULT'  target='_blank' href=info2.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-primary btn-sm'><i class='   fa fa-hospital-o'></i></button></a>
                                      
                                      
                                      <a data-toggle=tooltip' title='VIEW EQUIPMENT'  target='_blank' href=itablee.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-info btn-sm'><i class='   fa fa-hospital-o'></i></button></a>
                                      
                                      
                                </div>";
                                  
    $data[] = $sub_array;


}
    else
    {
           
    }
    
    
    
 
}
$output = array(
    "draw"              =>  intval($_POST["draw"]),
    "recordsTotal"      =>  $filtered_rows,
    "recordsFiltered"   =>  get_total_all_records(),
    "data"              =>  $data
);
echo json_encode($output);
?>