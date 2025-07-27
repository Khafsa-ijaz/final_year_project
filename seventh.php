<?php

$sql = "SELECT status FROM menu where category='Files Section' and user='$rowsession[username]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $ss = array();
  while($row = $result->fetch_assoc()) {
      
      $ss[] = $row["status"];
  }
  
      $allOnes = true;
    foreach ($ss as $status) {
      if ($status != 0) {
        $allOnes = false;
        break;
      }
    }
    
    
    if ($allOnes) {
        
    }
    else
    {
        echo " 
        
            <li  class='nav-item'><a href='#'><i class='fa fa-upload'></i><span class='menu-title' data-i18n='nav.page_layouts.main'>Files Section</span></a>
            <ul class='menu-content'>
            ";
 
  
                $sqladv = "SELECT pagename,link FROM menu where category='Files Section' and status='1' and user='$rowsession[username]'";
$resultadv = $conn->query($sqladv);

  // output data of each row
  while($rowadv = $resultadv->fetch_assoc()) {


  echo "<li><a class='menu-item' href='$rowadv[link]' data-i18n='nav.vertical_nav.vertical_nav_fixed'>$rowadv[pagename]</a>
              </li>";


  }
  
echo "  

 </ul>

   </li>";
    }
  }
  
  
else {
  echo "0 results";
}


?>