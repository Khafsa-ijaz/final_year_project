<?php
include('session_head.php');
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <style>
    
.reportlists{margin: 0; padding: 0; list-style: none;}
.reportlists li{display: block;}
.reportlists li a{color: #444; padding: 10px 5px;display: block;}
.reportlists li a.active{color: #0084B4; text-decoration: none;font-family:'Roboto-Bold';}
.reportlists li a:hover {color: #0084B4; text-decoration: none;}
.reportlists li.active {font-family: 'Roboto-Bold'; background:#dceeff;}
.reportlists li a i{padding-right:5px;}

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
    <title>Tasks Report</title>
 <link rel="apple-touch-icon" href="crop.png">
    <link rel="shortcut icon" type="image/x-icon" href="crop.png">
   
       <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMuli:300,400,500,700" rel="stylesheet">
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
          
          <li style="background-color: #304A7B" class=" navigation-header"><span data-i18n="nav.category.layouts">HELPLINE 0318-5629192</span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
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
           
        
    <?php include('second.php');
    ?>
              

            <?php include('third.php');
    ?>
        
          <?php include('fourth.php');
    ?>
        



          <li  class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Tasks Section</span></a>
            <ul class="menu-content">


   <?php
                $sqladv = "SELECT pagename,link FROM menu where category='Tasks Section' and status='1' and user='$rowsession[username]'";
$resultadv = $conn->query($sqladv);

  // output data of each row
  while($rowadv = $resultadv->fetch_assoc()) {


if ($rowadv['pagename']=='Reports')
{
    echo "<li class='active'><a class='menu-item' href='$rowadv[link]' data-i18n='nav.vertical_nav.vertical_nav_fixed'>$rowadv[pagename]</a>
              </li>";
}

else
{
   echo "<li><a class='menu-item' href='$rowadv[link]' data-i18n='nav.vertical_nav.vertical_nav_fixed'>$rowadv[pagename]</a>
              </li>";
}

  }
     ?> 



              
            </ul>
          </li>

   
        
        
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
       
                 
              <div style="background-color: #3EBBE5" class="card-header">
                  <h4 style="color:white" class="card-title" id="horz-layout-colored-controls">Welcome to Tasks Section Reports</h4>
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                      <ul class="list-inline mb-0">
                        <li style="color:white"><a data-action="collapse"><i class="ft-minus"></i></a></li>
                          <li style="color:white"><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                          <li style="color:white"><a data-action="expand"><i class="ft-maximize"></i></a></li>
                          <li style="color:white"><a data-action="close"><i class="ft-x"></i></a></li>
                      </ul>
                  </div>
              </div>
              <div   class="card-content collpase show">
                  <div class="card-body">
            <div class="card-text">
        
            </div>
           <div class="row">
    <div class="col-md-12">
        <div class="box box-primary border0 mb0 margesection">
            
            <div class="">
           
    
                <ul class="dailytaskreport">
                    <div class="row">
                        
                        
                        
                        
                        
                        
                    <?php
                        $sql1 = "SELECT * FROM rview where emp='$rowsession[username]'  and rname='Daily Tasks Report' and status='1'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    echo "
   <div class='col-md-4'>
                                            <li ><a data-toggle='modal' data-target='#flipInY1'><i class='fa fa-file-text-o'></i> Daily Tasks Report</a></li>
						</div>";
 
} 
else
{
    
}
?>    
                        
                        
             
             
             
             
             <?php
                        $sql12 = "SELECT * FROM rview where emp='$rowsession[username]'  and rname='Daily Completed/Pending Task' and status='1'";
$result12 = $conn->query($sql12);

if ($result12->num_rows > 0) {
    echo "
	
						 <div class='col-md-4'>
                                            <li ><a data-toggle='modal' data-target='#flipInY11'><i class='fa fa-file-text-o'></i> Daily Completed/Pending Task</a></li>
						</div>";
 
} 
else
{
    
}
?>    
                  
                  
                  
                  
                  
                     
             <?php
                        $sql123 = "SELECT * FROM rview where emp='$rowsession[username]'  and rname='Datewise Tasks Report' and status='1'";
$result123 = $conn->query($sql123);

if ($result123->num_rows > 0) {
    echo "
	
               <div class='col-md-4'>
                          <li ><a data-toggle='modal' data-target='#flipInY2'><i class='fa fa-file-text-o'></i>  Datewise Tasks Report</a></li>
						  </div>";
 
} 
else
{
    
}
?>    
          
          
          
						  <br>
                                    	  <br>        
                                            
                                            
						           
                                
          
                     
             <?php
                        $sql1234 = "SELECT * FROM rview where emp='$rowsession[username]'  and rname='Datewise Completed/Pending Tasks' and status='1'";
$result1234 = $conn->query($sql1234);

if ($result1234->num_rows > 0) {
    echo "
	
                            <div class='col-md-4'>
                          <li ><a data-toggle='modal' data-target='#flipInY22'><i class='fa fa-file-text-o'></i>  Datewise Completed/Pending Tasks</a></li>
						  </div>
						   ";
 
} 
else
{
    
}
?>    
          
          
          
        <?php
                        $sql12345 = "SELECT * FROM rview where emp='$rowsession[username]'  and rname='Employee Tasks Report' and status='1'";
$result12345 = $conn->query($sql12345);

if ($result12345->num_rows > 0) {
    echo "
	
                                              <div class='col-md-4'>
                          <li ><a data-toggle='modal' data-target='#flipInY222'><i class='fa fa-file-text-o'></i>  Employee Tasks Report</a></li>
						  </div>
						   ";
 
} 
else
{
    
}
?>    
          
          
          
          <?php
                        $sql123456 = "SELECT * FROM rview where emp='$rowsession[username]'  and rname='Employee Performance Report' and status='1'";
$result123456 = $conn->query($sql123456);

if ($result123456->num_rows > 0) {
    echo "
	
                                               <div class='col-md-4'>
                          <li ><a data-toggle='modal' data-target='#flipInY2222'><i class='fa fa-file-text-o'></i>  Employee Performance Report</a></li>
						  </div>
						   ";
 
} 
else
{
    
}
?>     
         
                        
                        
                        
                        
                        
                        
						
						
					
						
						
						
						         
						  
                                 
                             
						   
						   
						   
						   
                                
                                
                                
                                     
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                 <div class="modal animated swing text-left" id="flipInY1" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-info">
                      <h4 style="color:white" class="modal-title" id="myModalLabel62">Select Your Date</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                    <form method="POST" action="dailytaskreport ">
                            <div class="modal-body">
                          <label>Select Date: </label>
                          <div class="form-group">
                           <input s style="background-color: #4C6586;color:white;border:1px solid #B82601" type="date" value="<?php echo date ("Y-m-d")?>" id="department" autofocus="true" class="form-control" value="" name="date">


          </select>

                          </div>

                         
                          </div>
                          <div class="modal-footer">
                         
                         <form method="POST" action="InActiveEmployeesPDF">
                      <button  style='background-color: #3EBBE5 !important;' type="submit" style="background-color: #3EBBE5;color: white !important" type="button" class="btn btn-danger btn-sm " >
                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i><span class="blink-soft"> Daily Task Report</span>
                  </button>
              </form>
                          </div>
                        </form>
                   
                      </div>
                      
                    </div>
                    </div>
                  </div>
                                
                                
                                
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                                 
                                
                                
                                
                                
                                 <div class="modal animated swing text-left" id="flipInY11" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-info">
                      <h4 style="color:white" class="modal-title" id="myModalLabel62">Select Your Date</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                    <form method="POST" action=" statedaily.php">
                            <div class="modal-body">
                          <label>Select Date: </label>
                          <div class="form-group">
                           <input s style="background-color: #4C6586;color:white;border:1px solid #B82601" type="date" value="<?php echo date ("Y-m-d")?>" id="department" autofocus="true" class="form-control" value="" name="date">


          </select>

                          </div>
                          
                          
                          
                           <label>Select Status: </label>
                          <div class="form-group">
                           <select s style="background-color: #4C6586;color:white;border:1px solid #B82601" type="date" value="<?php echo date ("Y-m-d")?>" id="department" autofocus="true" class="form-control" value="" name="status">

<option value="Completed">Completed</option>
<option value="Pending">Pending</option>
          </select>

                          </div>
                          
                          

                         
                          </div>
                          <div class="modal-footer">
                         
                         <form method="POST" action="InActiveEmployeesPDF">
                      <button  style='background-color: #3EBBE5 !important;' type="submit" style="background-color: #3EBBE5;color: white !important" type="button" class="btn btn-danger btn-sm " >
                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i><span class="blink-soft"> Daily Completed/Pending Task Report</span>
                  </button>
              </form>
                          </div>
                        </form>
                   
                      </div>
                      
                    </div>
                    </div>
                  </div> 
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                   <div class="modal animated swing text-left" id="flipInY2" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-info">
                      <h4 style="color:white" class="modal-title" id="myModalLabel62">Select Your Date</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                    <form method="POST" action="datewisetaskreport.php">
                            <div class="modal-body">
                          <label>Start Date: </label>
                          <div class="form-group">
                           <input s style="background-color: #4C6586;color:white;border:1px solid #B82601" type="date" value="<?php echo date ("Y-m-d")?>" id="department" autofocus="true" class="form-control" value="" name="date">


          </select>

                          </div>
                         
                           <label>End Date: </label>
                         
                         
                          <div class="form-group">
                           <input s style="background-color: #4C6586;color:white;border:1px solid #B82601" type="date" value="<?php echo date ("Y-m-d")?>" id="department" autofocus="true" class="form-control" value="" name="date1">


          </select>

                          </div>
                          
                          
                             
                          
                         
                         
                         
                          </div>
                          <div class="modal-footer">
                         
                         <form method="POST" action="InActiveEmployeesPDF">
                      <button  style='background-color: #3EBBE5 !important;' type="submit" style="background-color: #3EBBE5;color: white !important" type="button" class="btn btn-danger btn-sm " >
                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i><span class="blink-soft"> Date wise Completed/Pending Task Report</span>
                  </button>
              </form>
                          </div>
                        </form>
                   
                      </div>
                      
                    </div>
                    </div>
                  </div>
                                
                                
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                              
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                   <div class="modal animated swing text-left" id="flipInY22" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-info">
                      <h4 style="color:white" class="modal-title" id="myModalLabel62">Select Your Date</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                    <form method="POST" action="statedatewise.php">
                            <div class="modal-body">
                          <label>Start Date: </label>
                          <div class="form-group">
                           <input s style="background-color: #4C6586;color:white;border:1px solid #B82601" type="date" value="<?php echo date ("Y-m-d")?>" id="department" autofocus="true" class="form-control" value="" name="date">


          </select>

                          </div>
                         
                           <label>End Date: </label>
                         
                         
                          <div class="form-group">
                           <input s style="background-color: #4C6586;color:white;border:1px solid #B82601" type="date" value="<?php echo date ("Y-m-d")?>" id="department" autofocus="true" class="form-control" value="" name="date1">


          </select>

                          </div>
                         
                         
                          <label>Select Status: </label>
                          <div class="form-group">
                           <select s style="background-color: #4C6586;color:white;border:1px solid #B82601" type="date" value="<?php echo date ("Y-m-d")?>" id="department" autofocus="true" class="form-control" value="" name="status">

<option value="Completed">Completed</option>
<option value="Pending">Pending</option>
          </select>

                          </div>
                         
                         
                          </div>
                          <div class="modal-footer">
                         
                         <form method="POST" action="InActiveEmployeesPDF">
                      <button  style='background-color: #3EBBE5 !important;' type="submit" style="background-color: #3EBBE5;color: white !important" type="button" class="btn btn-danger btn-sm " >
                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i><span class="blink-soft"> Date wise Completed/Pending Task Report</span>
                  </button>
              </form>
                          </div>
                        </form>
                   
                      </div>
                      
                    </div>
                    </div>
                  </div>
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                                   <div class="modal animated swing text-left" id="flipInY222" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-info">
                      <h4 style="color:white" class="modal-title" id="myModalLabel62">Select Your Date</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                    <form method="POST" action="Employeetasks">
                            <div class="modal-body">
                                
                                
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="projectinput1">Select Employee</label>
                                            <select style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;"  type="text" id="id" autofocus="true" class="form-control" value="" name="id">
                                       <?php
                        include('config.php');
                $department_query = "SELECT id,name FROM employees where status='Active'  order by name";
                $stmt = $conn->prepare($department_query);
                $stmt->execute();https://lh3.googleusercontent.com/-rt_1MYMOzTs/VrXIUlYgaqI/AAAAAAAAAaM/Pr0t3vSHNPQvRtyYuSvJMkMvJV_BgXp7gCCo/s679-Ic42/Image-Upload-Insert-Update-Delete-PHP-MySQL.png
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo "<option value=".$row['id'].">".$row['name']."</option>";

                                       
                                        }

                
            ?>
                </select>
                                        </div>
 </div>

       
                                
                                
                          <label>Start Date: </label>
                          <div class="form-group">
                           <input s style="background-color: #4C6586;color:white;border:1px solid #B82601" type="date" value="<?php echo date ("Y-m-d")?>" id="department" autofocus="true" class="form-control" value="" name="date">


          </select>

                          </div>
                         
                           <label>End Date: </label>
                         
                         
                          <div class="form-group">
                           <input s style="background-color: #4C6586;color:white;border:1px solid #B82601" type="date" value="<?php echo date ("Y-m-d")?>" id="department" autofocus="true" class="form-control" value="" name="date1">


          </select>

                          </div>
                         
                         
                          <label>Select Status: </label>
                          <div class="form-group">
                           <select s style="background-color: #4C6586;color:white;border:1px solid #B82601" type="date" value="<?php echo date ("Y-m-d")?>" id="department" autofocus="true" class="form-control" value="" name="status">

<option value="Completed">Completed</option>
<option value="Pending">Pending</option>
<option value="ALL">ALL</option>
          </select>

                          </div>
                         
                         
                          </div>
                          <div class="modal-footer">
                         
                         <form method="POST" action="InActiveEmployeesPDF">
                      <button  style='background-color: #3EBBE5 !important;' type="submit" style="background-color: #3EBBE5;color: white !important" type="button" class="btn btn-danger btn-sm " >
                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i><span class="blink-soft"> Datewise Employee Task Report</span>
                  </button>
              </form>
                          </div>
                        </form>
                   
                      </div>
                      
                    </div>
                    </div>
                  </div>
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                                   <div class="modal animated swing text-left" id="flipInY2222" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-info">
                      <h4 style="color:white" class="modal-title" id="myModalLabel62">Select Your Date</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                    <form method="POST" action="Performancereport">
                            <div class="modal-body">
                                
                                
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="projectinput1">Select Employee</label>
                                            <select style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;"  type="text" id="id" autofocus="true" class="form-control" value="" name="id">
                                       <?php
                        include('config.php');
                $department_query = "SELECT id,name FROM employees where status='Active'  order by name";
                $stmt = $conn->prepare($department_query);
                $stmt->execute();//lh3.googleusercontent.com/-rt_1MYMOzTs/VrXIUlYgaqI/AAAAAAAAAaM/Pr0t3vSHNPQvRtyYuSvJMkMvJV_BgXp7gCCo/s679-Ic42/Image-Upload-Insert-Update-Delete-PHP-MySQL.png
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo "<option value=".$row['id'].">".$row['name']."</option>";

                                       
                                        }

                
            ?>
                </select>
                                        </div>
 </div>

       
                                
                                
                          <label>Start Date: </label>
                          <div class="form-group">
                           <input s style="background-color: #4C6586;color:white;border:1px solid #B82601" type="date" value="<?php echo date ("Y-m-d")?>" id="department" autofocus="true" class="form-control" value="" name="date">


          </select>

                          </div>
                         
                           <label>End Date: </label>
                         
                         
                          <div class="form-group">
                           <input s style="background-color: #4C6586;color:white;border:1px solid #B82601" type="date" value="<?php echo date ("Y-m-d")?>" id="department" autofocus="true" class="form-control" value="" name="date1">


          </select>

                          </div>
                         
                         

                          </div>
                         
                         
                          </div>
                          <div class="modal-footer">
                         
                         <form method="POST" action="InActiveEmployeesPDF">
                      <button  style='background-color: #3EBBE5 !important;' type="submit" style="background-color: #3EBBE5;color: white !important" type="button" class="btn btn-danger btn-sm " >
                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i><span class="blink-soft"> Datewise Employee Performance Report</span>
                  </button>
              </form>
                          </div>
                        </form>
                   
                      </div>
                      
                    </div>
                    </div>
                  </div>
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                    
                                
                                
                                
                                
                                
                                
                                   <div class="modal animated swing text-left" id="flipInY3" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-info">
                      <h4 style="color:white" class="modal-title" id="myModalLabel62">Select Your Month</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                    <form method="POST" action="MonthlyAttendance">
                            <div class="modal-body">
                          <label>Select Month: </label>
                          <div class="form-group">
                           <input s style="background-color: #4C6586;color:white;border:1px solid #B82601" type="month" value="<?php echo date ("Y-m")?>" id="department" autofocus="true" class="form-control" value="" name="month">


          </select>

                          </div>
                         
                         
                          </div>
                          <div class="modal-footer">
                         
                         <form method="POST" action="InActiveEmployeesPDF">
                      <button  style='background-color: #3EBBE5 !important;' type="submit" style="background-color: #3EBBE5;color: white !important" type="button" class="btn btn-danger btn-sm " >
                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i><span class="blink-soft"> Monthly Attendance Chart</span>
                  </button>
              </form>
                          </div>
                        </form>
                   
                      </div>
                      
                    </div>
                    </div>
                  </div>
                                
                                
                                
                                  <div class="modal animated swing text-left" id="flipInY4" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-info">
                      <h4 style="color:white" class="modal-title" id="myModalLabel62">Select Your Month</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                    <form method="POST" action="SummaryMonthly">
                            <div class="modal-body">
                          <label>Select Month: </label>
                          <div class="form-group">
                           <input s style="background-color: #4C6586;color:white;border:1px solid #B82601" type="month" value="<?php echo date ("Y-m")?>" id="department" autofocus="true" class="form-control" value="" name="month">


          </select>

                          </div>
                         
                         
                          </div>
                          <div class="modal-footer">
                         
                         <form method="POST" action="InActiveEmployeesPDF">
                      <button  style='background-color: #3EBBE5 !important;' type="submit" style="background-color: #3EBBE5;color: white !important" type="button" class="btn btn-danger btn-sm " >
                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i><span class="blink-soft"> Monthly Attendance Summary</span>
                  </button>
              </form>
                          </div>
                        </form>
                   
                      </div>
                      
                    </div>
                    </div>
                  </div>
                              
                                     
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                                   <div class="modal animated swing text-left" id="flipInY5" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-info">
                      <h4 style="color:white" class="modal-title" id="myModalLabel62">Select Your Date</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                    <form method="POST" action="StateReport">
                            <div class="modal-body">
                          <label>Select Date: </label>
                          <div class="form-group">
                           <input s style="background-color: #4C6586;color:white;border:1px solid #B82601" type="date" value="<?php echo date ("Y-m-d")?>" id="department" autofocus="true" class="form-control" value="" name="date">


          </select>

                          </div>
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                          <label>Select Status: </label>
                          <div class="form-group">
                           <select s style="background-color: #4C6586;color:white;border:1px solid #B82601" type="date" value="" id="department" autofocus="true" class="form-control" value="" name="state">
<option value="Present">Present</option>
<option value="Absent">Absent</option>
<option value="Leave">Leave</option>
<option value="Late">Late</option>

          </select>

                          </div>
                         
                         
                         
                         
                          </div>
                          <div class="modal-footer">
                         
                         <form method="POST" action="InActiveEmployeesPDF">
                      <button  style='background-color: #3EBBE5 !important;' type="submit" style="background-color: #3EBBE5;color: white !important" type="button" class="btn btn-danger btn-sm " >
                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i><span class="blink-soft"> Daily Absent / Leave Report</span>
                  </button>
              </form>
                          </div>
                        </form>
                   
                      </div>
                      
                    </div>
                    </div>
                  </div>
                          
                                
                                
                                
                                
                                
                                
                       
                </ul>
                </div>
                </div>
            </div>
        </div> 
    </div>
</div>
</div>   
</div>  
</section>
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

<script>
$(document).ready(function(){
  $("#save").click(function(){




    $('.loader').show();

       var category=$('#category').val();
  
              var name=$('#name').val();

                     var unit=$('#unit').val();
                            var rr=$('#rr').val();

                                   var amount=$('#amount').val();
                                  
 



if (name=='')
{

                            swal({
    title: 'Insertion Failed.....!',
    text: 'Please Write Test Name.....',
    type: 'danger',
    timer: 2500,
    showConfirmButton: true
  }).then(function() {
    document.getElementById('name').focus();
  });

    $('.loader').hide();
}




     if(name!='')
     {
 $.ajax({
                  type:'POST',
                    url: 'savefloor2.php',
                    dataType: 'json',
                   data: {category:category,name:name,unit:unit,rr:rr,amount:amount},
                      success:function(data){

    $('.loader').hide();
console.log(data);
if (data[0]['success']=='success')
                        {

    swal({
    title: 'Success Alert',
    text: 'Test Added Successfully.....',
    type: 'success',
    timer: 2500,
    showConfirmButton: false
  }).then(function() {
    document.getElementById('fname').focus();
  });



                      $('#name').val("");

                      $('#unit').val("");

                      $('#rr').val("");

                      $('#amount').val("");
                    
                        
                                             }



 if (data[0]['duplicate']=='duplicate')
                        {
                          $('.loader').hide();
          $('#fname').val("");
                       

                            swal({
    title: 'Duplicate Alert.....!',
    text: 'Duplicate Test Found.....',
    type: 'danger',
    timer: 2500,
    showConfirmButton: false
  }).then(function() {
    document.getElementById('fname').focus();
  });
            $('#name').val("");

                      $('#unit').val("");

                      $('#rr').val("");

                      $('#amount').val("");
                            
                        }


                    
                      }
                    });
}
});
});









                                                           </script>