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
       <meta name="description" content=" CS&IT DEPARTMENT Website Developed By Khafsa IJaz And Habeeba Mateen">
    <meta name="keywords" content="">
    <meta name="author" content="Khafsa Ijaz">
    <title>Employees Reports Area</title>
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
          
          </li>
          
        <!-- <li style="background-color: white" class=" navigation-header"><span data-i18n="nav.category.layouts"><img style='height:60px;object-fit:contain;margin-top:-25px' src="11.png"></img></span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
          </li> -->



 <?php include('twelve.php');
    ?>
       


 <?php include('thirteen.php');
    ?>


 <?php include('fourteen.php');
    ?>
     <?php include('fifteen.php');
    ?>
       
       
       



          <li  class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Employees Section</span></a>
            <ul class="menu-content">


   <?php
                $sqladv = "SELECT pagename,link FROM menu where category='Employees Section' and status='1' and user='$rowsession[username]'";
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
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          
          
        </div>
     
  <div class="row">
    <div class="col-md-12">
          <div class="card">
       
                 
              <div style="background-color: #5B8343" class="card-header">
                  <h4 style="color:white" class="card-title" id="horz-layout-colored-controls">Welcome to Employees Reports Section</h4>
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
           
    
                <ul class="reportlists">
                    <div class="row">
                        
                        
                        
                        
                   
<!--      <div class='col-md-4'>
                                            <li ><a style='' href='emply.php'><i class='fa fa-file-text-o'></i> All Employees Report</a></li>
						</div> -->
 





               <!--   <div class='col-md-4'>
                          <li ><a style='' href='emppdf.php'><i class='fa fa-file-text-o'></i>  Active Employees Report</a></li>
						  </div> -->
						  
             
             
             
             
            
                <!--   <div class='col-md-4'>
                        <li ><a style='' href='inactiveemployeeslist'><i class='fa fa-file-text-o'></i>
                                In-Active Employees Report</a></li>
                                </div> -->
						  
 
      
          
          
            



                    <div class='col-md-4'>
                        <li ><a style='' href='ServiceReport'><i class='fa fa-file-text-o'></i>
                                Service (Job) Report</a></li>
                                </div>
						  
   <!-- <div class='col-md-4'>
                        <li ><a style='' href='emppdf.php'><i class='fa fa-file-text-o'></i>
                                emp</a></li>
                                </div> -->
   


                    <div class='col-md-4'>
                        <li ><a style='' href='StaffSummary'><i class='fa fa-file-text-o'></i>
                                Staff Summary Report</a></li>
                                </div>



                     
                           <!--       <div class='col-md-4'>
                        <li ><a data-toggle='modal' data-target='#flipInY'><i class='fa fa-file-text-o'></i>
                                Department wise Report</a></li>
                                </div>
 
      
      
      
               
                                 <div class='col-md-4'>
                        <li ><a data-toggle='modal' data-target='#flipInY1'><i class='fa fa-file-text-o'></i>
                                Daily In-Active Report</a></li>
                                </div>
						  
 

       
                                <div class='col-md-4'>
                        <li ><a data-toggle='modal' data-target='#flipInY2'><i class='fa fa-file-text-o'></i>
                                Datewise In-Active Report</a></li>
                                </div> -->
						  

           
                    
                        
                       
						            
                                               
                        
                            
                                
                                
                                
                                  
                               
                                
                                
                                
                                  
                                
                                
                                
                                
                                
                                
                                
                                
                                  <div class="modal animated flipInY text-left" id="flipInY" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-info">
                      <h4 style="color:white" class="modal-title" id="myModalLabel62">Select Your Department</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                    <form method="POST" action="Departmentwise">
                            <div class="modal-body">
                          <label>Select Department: </label>
                          <div class="form-group">
                           <select s style="background-color: #4C6586;color:white;border:1px solid #B82601" type="text" id="department" autofocus="true" class="form-control" value="" name="department">

  <?php
                        include('config.php');
                $department_query = "SELECT * FROM employeeheads where category='department'";
                $stmt = $conn->prepare($department_query);
                $stmt->execute();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo "<option value='".$row['headname']."''>".$row['headname']."</option>";
                }
            ?>
          </select>

                          </div>

                         
                          </div>
                          <div class="modal-footer">
                         
                         <form method="POST" action="InActiveEmployeesPDF">
                      <button  style='background-color: #3EBBE5 !important;' type="submit" style="background-color: #3EBBE5;color: white !important" type="button" class="btn btn-danger btn-sm " >
                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i><span class="blink-soft"> Department wise Report</span>
                  </button>
              </form>
                          </div>
                        </form>
                   
                      </div>
                      
                    </div>
                    </div>
                  </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                 <div class="modal animated flipInY text-left" id="flipInY1" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-info">
                      <h4 style="color:white" class="modal-title" id="myModalLabel62">Select Your Date</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                    <form method="POST" action="dailyinactive.php">
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
                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i><span class="blink-soft"> Daily In-Active Report</span>
                  </button>
              </form>
                          </div>
                        </form>
                   
                      </div>
                      
                    </div>
                    </div>
                  </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                   <div class="modal animated flipInY text-left" id="flipInY2" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-info">
                      <h4 style="color:white" class="modal-title" id="myModalLabel62">Select Your Date</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                    <form method="POST" action="dateinactive.php">
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
                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i><span class="blink-soft"> Datewise In-Active Report</span>
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