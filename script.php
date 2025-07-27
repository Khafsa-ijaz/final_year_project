<?php
include('connection.php');

$sql = "SELECT * FROM itable2 where name='Miss. Ghazala Khan' order by month";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      
      
        $id=$row['id'];
    
      
      
echo  $mbalamt=$row['mbalamt'];
  
  
  echo "<br>";
  
  
  
  
  
  
  
  
    
    

      
      
      
      
      
      
      

  }

}


?>