<?php
ob_start();
include('session_head.php');
include('connection.php');
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    
    $userid = $_GET['id'];
    $get_user = mysqli_query($conn,"SELECT * FROM tests WHERE id='$userid'");
    
    if(mysqli_num_rows($get_user) === 1){
        
        $roww = mysqli_fetch_assoc($get_user);
      }
    }
    ?>



   <?php
include('connection.php');
if(isset($_POST['submit']))
  {

 $unit = $_POST['unit'];
$rr = $_POST['rr']; 


 $sql ="update tests set unit='$unit',rr='$rr' where id='$userid'";
    if ($conn->query($sql) === TRUE) {




         header("Location:pa.php");
     ob_end_flush();
     exit();
      }


}
?>



<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <style>


/* Center the loader */
.loader {
  position: absolute;
  left: 50%;
  top: 70%;
  z-index: 1;
  width: 120px;
  height: 120px;
  margin: -76px 0 0 -76px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #f9d140;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta name="description" content="School Management System developed by Pak Softwares. The system provides the best and easy solution to handle school matters including admissions, fees, accounts, examination, sms, website controls, portal controls and many more.">
    <meta name="keywords" content="school management system, accounts management, web app, biomatric systems, examination, fees system, learning management system (lms), portals">
    <meta name="author" content="PAKSOFTWARE">
    <title>Add Test Form</title>
    <link rel="apple-touch-icon" href="uploads/rlogo.png">
    <link rel="shortcut icon" type="image/x-icon" href="uploads/rlogo.png">

    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/unslider.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/weather-icons/climacons.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/app.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/calendars/clndr.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/meteocons/style.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <?php
include('navigation.php');
 ?>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div style="background-color: #304a7b" class="main-menu menu-fixed menu-dark menu-accordion    menu-shadow " data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li style='background-color: #304A7B' class=" nav-item"><a href="dashboard"><i class="icon-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span></a>
          
          </li>
          
          <li style="background-color: #304A7B" class=" navigation-header"><span data-i18n="nav.category.layouts">RAHMA ISLAMIC</span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
          </li>




 <?php include('twelve.php');
    ?>
       


 <?php include('thirteen.php');
    ?>


 <?php include('fourteen.php');
    ?>
     <?php include('fifteen.php');
    ?>
       
       
       

<?php include('first.php');
?>

      
          <li  class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Laboratory Section</span></a>
            <ul class="menu-content">


   <?php
                $sqladv = "SELECT pagename,link FROM menu where category='Laboratory Section' and status='1' and user='$rowsession[username]'";
$resultadv = $conn->query($sqladv);

  // output data of each row
  while($rowadv = $resultadv->fetch_assoc()) {


if ($rowadv['pagename']=='Add Test')
{
    echo "<li class='active'><a class='menu-item' href='$rowadv[link]' data-i18n='nav.vertical_nav.vertical_nav_fixed'>$rowadv[pagename]</a>
              </li>";
}


if ($rowadv['pagename']=='View/Delete Tests')
{
    echo "<li><a style='color:green' class='menu-item' href='$rowadv[link]' data-i18n='nav.vertical_nav.vertical_nav_fixed'>$rowadv[pagename]</a>
              </li>";
}

if ($rowadv['pagename']=='Enter Result')
{
    echo "<li><a style='color:red' class='menu-item' href='$rowadv[link]' data-i18n='nav.vertical_nav.vertical_nav_fixed'>$rowadv[pagename]</a>
              </li>";
}

if ($rowadv['pagename']=='Reports')
{
    echo "<li><a style='color:yellow' class='menu-item' href='$rowadv[link]' data-i18n='nav.vertical_nav.vertical_nav_fixed'>$rowadv[pagename]</a>
              </li>";
}


if ($rowadv['pagename']=='Add Equipment')
{
    echo "<li><a style='color:pink' class='menu-item' href='$rowadv[link]' data-i18n='nav.vertical_nav.vertical_nav_fixed'>$rowadv[pagename]</a>
              </li>";
}

if ($rowadv['pagename']=='View/Delete')
{
    echo "<li><a style='color:pink' class='menu-item' href='$rowadv[link]' data-i18n='nav.vertical_nav.vertical_nav_fixed'>$rowadv[pagename]</a>
              </li>";
}

if ($rowadv['pagename']=='Add Inventory')
{
    echo "<li><a style='color:orange' class='menu-item' href='$rowadv[link]' data-i18n='nav.vertical_nav.vertical_nav_fixed'>$rowadv[pagename]</a>
              </li>";
}


if ($rowadv['pagename']=='Bills History')
{
    echo "<li><a style='color:orange' class='menu-item' href='$rowadv[link]' data-i18n='nav.vertical_nav.vertical_nav_fixed'>$rowadv[pagename]</a>
              </li>";
}





  }
     ?> 



              
            </ul>
          </li>



              

            <?php include('third.php');
    ?>
        
          <?php include('fourth.php');
    ?>
        
          <?php include('fifth.php');
    ?>
        
          <?php include('sixth.php');
    ?>
        
          <?php include('seventh.php');
    ?>
        
          <?php include('eight.php');
    ?>
        
          <?php include('ninth.php');
    ?>
        
          <?php include('tenth.php');
    ?>
        
          <?php include('eleven.php');
    ?>
         
      
        

         
         </ul>
       </div>
     </div>
   
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          
          
        </div>
     
  <div class="row">
    <div class="col-md-12">
          <div class="card">
       
                 
              <div style="background-color: #f9d140" class="card-header">
                  <h4 style="color:black" class="card-title" id="horz-layout-colored-controls">Welcome to Edit  Form</h4>
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                      <ul class="list-inline mb-0">
                        <li style="color:black"><a data-action="collapse"><i class="ft-minus"></i></a></li>
                          <li style="color:black"><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                          <li style="color:black"><a data-action="expand"><i class="ft-maximize"></i></a></li>
                          <li style="color:black"><a data-action="close"><i class="ft-x"></i></a></li>
                      </ul>
                  </div>
              </div>
              <div   class="card-content collpase show">
                  <div class="card-body">
            <div class="card-text">
        
            </div>
            <div class="s text-center " role="" aria-label="Basic example">   <button type="button" class="btn btn-info btn-sm btn-glow" data-toggle="modal" data-target="#flipInY">
                    Instructions
                  </button>
 
   <a href="addcat.php"> <button type="button"  class="btn btn-success btn-sm btn-glow" >Add/View Category</button></a>

       
                    <div class="modal animated flipInY text-left" id="flipInY" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-danger">
                      <h4 style="color:white" class="modal-title" id="myModalLabel62">Instructions</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                      <h5>Add Your Test</h5>
                      <p>Add Your Test Below</p>
                     
                   
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                 
                      </div>
                    </div>
                    </div>
                  </div>

</div>

                        <form class="form form-horizontal" method="POST">
                        <div class="form-body">
                          <h4 sty class="form-section" style="color: black" ><i class="fa fa-user"></i> Test Info</h4>
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label style="color:black" class="col-md-3 label-control" for="userinput1">Category</label>
                                  <div class="col-md-9">
                                      
                                      
                                      
                                      




<input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="text"  class="form-control" readonly=""    value="<?php echo $roww['category']?>" placeholder="" id="category" name="category">





                                      
                                            
                                      
                                     
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            
                              <div class="col-md-6">
                                <div class="form-group row">
                                    <label style="color:black" class="col-md-3 label-control" for="userinput1">Sub Category</label>
                                  <div class="col-md-9">
                                      
                                      
                                      
                                      
                               <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="text"  class="form-control" readonly=""    value="<?php echo $roww['sc']?>" placeholder="" id="sc" name="sc">

                                      
                                     
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label style="color:black" class="col-md-3 label-control" for="userinput1">Name</label>
                                  <div class="col-md-9">
                                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="text"  class="form-control" readonly=""    value="<?php echo $roww['name']?>" placeholder="" id="name" name="name">
                                    </div>
                                </div>
                            </div>

                              <div class="col-md-6">
                                <div class="form-group row">
                                    <label style="color:black" class="col-md-3 label-control" for="userinput1">Unit</label>
                                  <div class="col-md-9">
                                        <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="text"  class="form-control"  value="<?php echo $roww['unit']?>" value=""  placeholder="" id="unit" name="unit">
                                    </div>
                                </div>
                            </div>
  <div class="col-md-6">
                                <div class="form-group row">
                                    <label style="color:black" class="col-md-3 label-control" for="userinput1">Reference Range</label>
                                  <div class="col-md-9">
                                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="text"  class="form-control"   value="<?php echo $roww['rr']?>" placeholder="" id="rr" name="rr">
                                    </div>
                                </div>
                            </div>

                              <div style="display:none" class="col-md-6">
                                <div class="form-group row">
                                    <label style="color:black" class="col-md-3 label-control" for="userinput1">Amount</label>
                                  <div class="col-md-9">
                                      <input value="0" style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="text" readonly=""  class="form-control"  value="<?php echo $roww['amount']?>" value="0"  placeholder="" id="amount" name="amount"></input>
                                    </div>
                                </div>
                            </div>

     
                            
                         
                    <div style="display: none" class="loader"></div>
                       
                                    </div>
                  

                  </div>

                       <button name="submit" id="submit" style="background-color: #ffd338;color:black
                       ; !important" type="submit" class="btn btn-warning">
                                  <i class="fa fa-check-square-o"></i> Update
                              </button>
       </form>



                              
              </div>
          </div>
      </div>
  </div>

 
</section>
<!-- // Basic form layout section end -->
        </div>
      </div>
    </div>

                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</div>


<?php
include('footer.php');
?>

    <!-- BEGIN VENDOR JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
       <script src="../../../app-assets/js/scripts/modal/components-modal.js"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>

