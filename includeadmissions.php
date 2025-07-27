<li  class=" nav-item"><a href="#"><i class="fa fa-pencil"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Admissions</span></a>
            <ul class="menu-content">


   <?php
                $sqladv = "SELECT pagename,link FROM menu where category='Admissions' and status='1' and user='$rowsession[username]'";
$resultadv = $conn->query($sqladv);

  // output data of each row
  while($rowadv = $resultadv->fetch_assoc()) {




   echo "<li><a class='menu-item' href='$rowadv[link]' data-i18n='nav.vertical_nav.vertical_nav_fixed'>$rowadv[pagename]</a>
              </li>";


  }
     ?> 



              
            </ul>
          </li>