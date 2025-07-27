<?php
include('session_head.php');
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
      <meta name="description" content="School Management System developed by Pak Softwares. The system provides the best and easy solution to handle school matters including admissions, fees, accounts, examination, sms, website controls, portal controls and many more.">
    <meta name="keywords" content="school management system, accounts management, web app, biomatric systems, examination, fees system, learning management system (lms), portals">
    <meta name="author" content="PAKSOFTWARE">
    <title>Reports Area</title>
    <link rel="apple-touch-icon" href="uploads/rlogo.png">
    <link rel="shortcut icon" type="image/x-icon" href="uploads/rlogo.png">
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
   
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          
          
        </div>
     
  <div class="row">
    <div class="col-md-12">
          <div class="card">
              <?php
               $date=date("Y-m-d");
                  $a1=date("M",strtotime($date));
      $a3=date("Y",strtotime($date));
      $a2=date("d",strtotime($date));
      $format=$a2."-".$a1."-".$a3;
              ?>
       
                 
              <div style="background-color: #f9d140" class="card-header">
                  <h4 style="color:black" class="card-title" id="horz-layout-colored-controls">Welcome to Statistics Area Date <b><?php echo $format?></b></h4>
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
            <div class=" " role="" aria-label="Basic example">   
 
   <div class="content-body"><!-- project stats -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="row">
                    
                    
                    <?php
                   
                  $five=0;
                  $k11=0;
                    
 $sql2 = "SELECT  id,status FROM patients where date='$date'";
    
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
    $id=$row2['id'];
    
    
    
      
      if ($row2['status']=='FREE')
 {

     
$sql1134 = "SELECT * FROM netmeds2 where mr='$id' and date='$date'";
            $result1134 = mysqli_query($conn, $sql1134);

            if (mysqli_num_rows($result1134) > 0) {
            // output data of each row
             while($row1134 = mysqli_fetch_assoc($result1134))  {
                 
                      $unit=0;
                       ++$k11;
                
    $sql22 = "SELECT unit FROM medicine3 where bcode='$row1134[bcode]'";
$result22 = $conn->query($sql22);

if ($result22->num_rows > 0) {
  // output data of each row
  while($row22 = $result22->fetch_assoc()) {
      $unit=$row22['unit'];
  
  }
}
             
             $nm1=$row1134['qty']*$unit;
             $tnm1=$row1134['qty']*$unit+$tnm1; 
                 
             }
            }
 
 
 }
 
 
    
    
















 if ($row2['status']=='PAID')
 {
 
     



$five=0;
$sql113 = "SELECT * FROM netmeds2 where mr='$id' and date='$date'";
            $result113 = mysqli_query($conn, $sql113);

            if (mysqli_num_rows($result113) > 0) {
            // output data of each row
             while($row113 = mysqli_fetch_assoc($result113))  {
                 
                  



if ($row113['unit']!='0')
{


++$five;
             $nm=$row113['qty']*$row113['unit']+$nm;   
             
             $tnm=$row113['qty']*$row113['unit']+$tnm; 

}



if ($row113['unit']=='0')
{


 ++$k112;
          $unit=0;
                
  
             
             $nm11=$row113['qty']*$row113['oa']+$nm11;
             $tnm11=$row113['qty']*$row113['oa']+$tnm11; 
}





 
           
                 
             }
            }
 
 
 }





 if ($row2['status']=='FREE')
 {
 

     
$sql1134 = "SELECT * FROM netmeds2 where mr='$id' and date='$date'";
            $result1134 = mysqli_query($conn, $sql1134);

            if (mysqli_num_rows($result1134) > 0) {
            // output data of each row
             while($row1134 = mysqli_fetch_assoc($result1134))  {
               ++$k112;
                 
                       $nm11=$row1134['qty']*$row1134['oa']+$nm11;
             $tnm11=$row1134['qty']*$row1134['oa']+$tnm11; 
                 
             }
            }
 
 
 }







    
    
    
    
}
}

$tk=$five+$k112;
?>                 
                      <div class="col-lg-4 col-md-12 col-sm-12 border-right-blue-grey border-right-lighten-5">
                        <div class="p-1 text-center">
                            <div>
                                <h3 class="font-large-1 grey darken-1 text-bold-400"><?php echo $tk?></h3>
                                <span class="font-small-3 grey darken-1">No of Medicine Patients</span>
                            </div>
                            <div class="card-content overflow-hidden">
                                <div id="morris-likes" class="height-75"></div>
                                <ul class="list-inline clearfix mb-0">
                                    <li class="border-right-grey border-right-lighten-2 pr-2">
                                        <h3 class="primary text-bold-400"><?php echo $five?></h3>
                                        <span class="font-small-3 grey darken-1"><i class="ft-chevron-up primary"></i> PAID</span>
                                    </li>
                                    <li class="pl-2">
                                        <h3 class="primary text-bold-400"><?php echo $k112?></h3>
                                        <span class="font-small-3 grey darken-1"><i class="ft-chevron-down primary"></i> FREE</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-12 col-sm-12 border-right-blue-grey border-right-lighten-5">
                        <div class="p-1 text-center">
                            <div>
                                <h3 class="font-large-1 grey darken-1 text-bold-400">RS <?php  
                                
                                
                                
                               echo number_format( $tnm);
                                ?>
                                
                                </h3>
                                <span class="font-small-3 grey darken-1">PAID MEDICINES Income</span>
                            </div>
                            <div class="card-content overflow-hidden">
                                <div id="morris-comments" class="height-75"></div>
                                <ul class="list-inline clearfix mb-0">
                                    <li class=" border-right-lighten-6 pr-6">
                                        <h3 class="success text-bold-400"><?php echo number_format($five)?></h3>
                                        <span class="font-small-3 grey darken-1"><i class="ft-chevron-up success"></i> PAID</span>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="p-1 text-center">
                            <div>
                                <h3 class="font-large-1 grey darken-1 text-bold-400">RS <?php  
                                
                                
                           
                               echo number_format( $tnm11);
                                ?></h3>
                                <span class="font-small-3 grey darken-1">FREE MEDICINES Income</span>
                            </div>
                            <div class="card-content overflow-hidden">
                                <div id="morris-views" class="height-75"></div>
                                <ul class="list-inline clearfix mb-0">
                                    <li class=" border-right-lighten-6 pr-6">
                                        <h3 class="danger text-bold-400"><?php echo number_format($k112)?></h3>
                                        <span class="font-small-3 grey darken-1"><i class="ft-chevron-down danger"></i> FREE</span>
                                    </li>
                                    
                                </ul>
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


    <script src="../../../app-assets/js/scripts/pages/dashboard-project.min.js"></script>