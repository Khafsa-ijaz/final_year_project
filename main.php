<?php
include('session_head.php');
  if ($dashboard=='0')
    {
       header ("Location:simplepage.php"); 
    }
     $nnnot=0;
     $tk=0;
     $paid=0;
     $fu=0;
     $fuc=0;
     $fli=0;
     $k=0;
     $tk=0;
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
         <link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/unslider.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/weather-icons/climacons.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/app.min.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/calendars/clndr.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-climacon.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/users.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END Custom CSS-->
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
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
       <meta name="description" content=" CS&IT DEPARTMENT Website Developed By Khafsa IJaz And Habeeba Mateen">
    <meta name="keywords" content="">
    <meta name="author" content="Khafsa Ijaz">
    <title>Dashboard</title>
<link rel="apple-touch-icon" href="logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="logo.png">
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


    <div style="background-color: #1090CD" class="main-menu menu-fixed menu-dark menu-accordion    menu-shadow " data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li style='background-color: #1090CD' class=" nav-item"><a href="dashboard"><i class="icon-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span></a>
          




 <?php include('twelve.php');
    ?>
       


 <?php include('thirteen.php');
    ?>


 <?php include('fourteen.php');
    ?>
     <?php include('fifteen.php');
    ?>
       
       
       



      <?php include("first.php")
      ?>
    
    <?php include('second.php');
    ?>
              

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
     <?php
$total1=0;
$active1=0;
$inactive1=0;
$sql2 = "SELECT id,status FROM employees";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
      ++$total1;
if ($row2['status']=='Active')
{
    ++$active1;
}

if ($row2['status']=='In-Active')
{
    ++$inactive1;
}

  }
}
?>


   
    <div class="app-content content">
      <div class="content-wrapper">
                                      
 
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="text-center">
            
              
                     
         
                             <a target="_blank" href="attendancereports ">
                                 <button  id="save" name="submit" style="background-color: #1090CD;color:white;border:1px solid #062F4F;" type="submit" class="btn btn-outline-info btn-sm ">
                                    <i class="fa fa-clock-o"></i> Attendance Reports
                                </button>
                            </a>
                      
      
                         <a target="_blank" href="viewquries.php">
                                 <button  id="save" name="submit" style="background-color: #DA4453;color:white;border:1px solid #062F4F;" type="submit" class="btn btn-outline-info btn-sm ">
                                    <i class="fa fa-question"></i>  View Quries 
                                </button>
                            </a>
                      
                    
                            
                            
                              <a target="_blank" href="usersreport.php">
                                 <button  id="save" name="submit" style="color:white;border:1px solid #062F4F;background-color: #5B8343;" type="submit" class="btn btn-outline-success btn-sm ">
                                    <i class="fa fa-file-o"></i> Users login Report
                                </button>
                            </a>  
                            
                            
                            </div>
              <br>
                 
                
            
            <!-- Sales stats -->
<div class="row">
    
    <div class="col-8">
        <div class="card">
              <div style="background-color: #5B8343" class="card-header">
                  <h4 style="color:white" class="card-title" id="horz-layout-colored-controls">Employee Stats</h4>
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
             
            <div class="card-content">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-sm-12 border-right-blue-grey border-right-lighten-5">
                            <div class="pb-1">
                                <div class="clearfix mb-1">
                                    <i class="icon-user font-large-1 blue-grey float-left mt-1"></i>
                                    <span class="font-large-2 text-bold-300 info float-right"><?php echo number_format($total1)?></span>
                                </div>
                                <div class="clearfix">
                                    <span class="text-muted">Total Employees</span>
                                    <span class="info float-right"><i class="ft-arrow-up info"></i> <a style='' href="employeeslist">PDF</a></span>
                                </div>
                            </div>
                            <div class="progress mb-0" style="height: 7px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                          <div class="col-lg-4 col-sm-12 border-right-blue-grey border-right-lighten-5">
                            <div class="pb-1">
                                <div class="clearfix mb-1">
                                    <i class="icon-user font-large-1 blue-grey float-left mt-1"></i>
                                    <span class="font-large-2 text-bold-300 success float-right"><?php echo number_format($active1)?></span>
                                </div>
                                <div class="clearfix">
                                    <span class="text-muted">Active Employees</span>
                                    <span class="success float-right"><i class="ft-arrow-down success"></i> <a style='' href="activeemployeeslist">PDF</a></span>
                                </div>
                            </div>
                            <div class="progress mb-0" style="height: 7px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 border-right-blue-grey border-right-lighten-5">
                            <div class="pb-1">
                                <div class="clearfix mb-1">
                                    <i class="icon-user font-large-1 blue-grey float-left mt-1"></i>
                                    <span class="font-large-2 text-bold-300 danger float-right"><?php echo number_format($inactive1)?></span>
                                </div>
                                <div class="clearfix">
                                    <span class="text-muted">In-Active Employees</span>
                                    <span class="danger float-right"><i class="ft-arrow-up danger"></i> <a style='' href="inactiveemployeeslist">PDF</a></span>
                                </div>
                            </div>
                            <div class="progress mb-0" style="height: 7px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                      
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
$p=0;
$a=0;
$l=0;
$le=0;
$date=date("Y-m-d");
$sqle = "SELECT emp_id, status FROM tattendence where date='$date'";
$resulte = $conn->query($sqle);

if ($resulte->num_rows > 0) {
  // output data of each row
  while($rowe = $resulte->fetch_assoc()) {

    if ($rowe['status']=='present')
    {
        ++$p;
    }
 if ($rowe['status']=='absent')
    {
        ++$a;
    }

if ($rowe['status']=='Late')
    {
        ++$p;
        ++$l;
    }
    if ($rowe['status']=='Leave')
    {
        ++$le;
    }

  }
}
?>

    <div class="col-4">
 <?php
                                 date_default_timezone_set("Asia/Karachi");
$date=date("Y-m-d");


$currentDateTime = date("Y-m-d H:i:s");


$mon = date("Y-m");
$time = date('h:i A', strtotime($currentDateTime));
                                    
              
$a11=date("M",strtotime($date));
      $a21=date("Y",strtotime($date));
      $a31=date("d",strtotime($date));
      $format1=$a31."-".$a11."-".$a21;
      
      
                    
$a111=date("F",strtotime($mon));
      $a211=date("Y",strtotime($mon));
      $a31=date("d",strtotime($mon));
      $format11=$a111."-".$a211;
      
      ?>
<div class="row">
<div class="col-xl-6 col-lg-12 col-md-12">
        <div class="card">
            
             <div style="background-color: #5B8343" class="card-header">
                  <h4 style="color:white" class="card-title" id="horz-layout-colored-controls">Today Date</h4>
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                      <ul class="list-inline mb-0">
                        
                      </ul>
                  </div>
              </div>
            
            
            <div class="card-content">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body text-left">
                            <h3 class="success"><?php echo $format1?></h3>
                            <span style=>Today's Date</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class=" success font-large-2 float-right"></i>
                        </div>
                    </div>
                    <div class="progress mt-1 mb-0" style="height: 7px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12">
        <div class="card">
            <div style="background-color:#5B8343" class="card-header">
                  <h4 style="color:white" class="card-title" id="horz-layout-colored-controls">Web Visits</h4>
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                      <ul class="list-inline mb-0">
                        
                      </ul>
                  </div>
              </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body text-left">
                            <h3 class="deep-orange">0</h3>
                            <span>Daily Website Visits</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="ft- deep-orange font-large-2 float-right"></i>
                        </div>
                    </div>
                    <div class="progress mt-1 mb-0" style="height: 7px;">
                        <div class="progress-bar bg-deep-orange" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            </div>
        </div>
       
    </div>
</div>
</div>

<div class="content-body"><!-- Sales stats -->
<div class="row">
    <div class="col-12">
        <div class="card">
                
              <div style="background-color: #5B8343;" class="card-header">
                  <h4 style="color:white" class="card-title" id="horz-layout-colored-controls">Welcome to Employees Attendance Section</h4>
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
            <div class="card-content">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-12 border-right-success border-right-lighten-5">
                            <div class="pb-1">
                                <div class="clearfix mb-1">
                                    <i class="fa fa-clock-o font-large-1 blue-grey float-left mt-1"></i>
                                    <span class="font-large-2 text-bold-300 success float-right"><?php echo number_format($p)?> </span>
                                </div>
                                <div class="clearfix">
    
   





                                 <span class="text-muted"><b>Present</b> Employees</span>
                          
                                </div>
                            </div>
                            <div class="progress mb-0" style="height: 7px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 border-right-blue-grey border-right-lighten-5">
                            <div class="pb-1">
                                <div class="clearfix mb-1">
                                    <i class="fa fa-clock-o font-large-1 blue-grey float-left mt-1"></i>
                                    <span class="font-large-2 text-bold-300 danger float-right"><?php echo number_format($a)?> </span>
                                </div>
                                <div class="clearfix">
                                   
                                    <span class="text-muted"><b>Absent</b> Employees</span>
                                          <a target="_blank" href="Dailydashboard.php?date=<?php echo $preday?>">
                             
                             </a>
                                </div>
                            </div>
                            <div class="progress mb-0" style="height: 7px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 border-right-blue-grey border-right-lighten-5">
                         
                           
                            <div class="pb-1">
                                <div class="clearfix mb-1">
                                    <i class="fa fa-clock-o font-large-1 blue-grey float-left mt-1"></i>
                                    <span class="font-large-2 text-bold-300 info float-right"><?php echo number_format($l)?> </span>
                                </div>
                                <div class="clearfix">
                                    <span class="text-muted"><b>Late</b> Employees</span>
                                        
                                    
                                </div>
                            </div>
                            <div class="progress mb-0" style="height: 7px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                         <div class="col-lg-3 col-sm-12 border-right-blue-grey border-right-lighten-5">
                         
                           
                            <div class="pb-1">
                                <div class="clearfix mb-1">
                                    <i class="fa fa-clock-o font-large-1 blue-grey float-left mt-1"></i>
                                    <span class="font-large-2 text-bold-300 info float-right"><?php echo number_format($le)?> </span>
                                </div>
                                <div class="clearfix">
                                    <span class="text-muted"><b>Leave</b> Employees</span>
                                           <a href="attendancereports" target="_blank"><span class="info float-right"><i class="fa fa-file-pdf-o"></i> Reports</span></a>
                                    
                                </div>
                            </div>
                            <div class="progress mb-0" style="height: 7px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
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
                                                           
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../../../app-assets/vendors/js/extensions/jquery.knob.min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/raphael-min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/morris.min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/chartist.min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/chartist-plugin-tooltip.js"></script>
    <script src="../../../app-assets/vendors/js/charts/chart.min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>

    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
 
  
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../../app-assets/js/scripts/pages/dashboard-project.min.js"></script>
    