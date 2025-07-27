<?php
include('session_head.php');
date_default_timezone_set("Asia/Karachi");
$adate=date("Y-m-d");
$atime=date("H:i:s");
$byy=$rowsession['username'];
?>
<?php
ob_start();
include('connection.php');
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    
    $userid = $_GET['id'];
    $get_user = mysqli_query($conn,"SELECT * FROM employees WHERE id='$userid'");
    
    if(mysqli_num_rows($get_user) === 1){
        
        $roww = mysqli_fetch_assoc($get_user);
      }
    }
    ?>
 <?php
include('connection.php');
if(isset($_POST['submit']))
  {
     $salary=$_POST['salary'];
       $ba=$_POST['ba'];
         $bn=$_POST['bn'];
           $hod=$_POST['hod'];
             $con=$_POST['con'];
       $fuel=$_POST['fuel'];
         $moba=$_POST['moba'];
           $tea=$_POST['tea'];
             $pf=$_POST['pf'];
               $eobi=$_POST['eobi'];
                 $dc=$_POST['dc'];
                   $loan=$_POST['loan'];
                     $wh=$_POST['wh'];
         
             
     $sql ="update employees set salary='$salary',ba='$ba',bn='$bn',hod='$hod',con='$con',fuel='$fuel',moba='$moba',tea='$tea',pf='$pf',eobi='$eobi',dc='$dc',loan='$loan',wh='$wh' where id='$userid'";
    if ($conn->query($sql) === TRUE) {
    header("Location:salarydetails");
     ob_end_flush();
     exit();
    } else {
     "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();
exit();
    
  }
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/sweetalert.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta name="description" content="AL QAZI MARKETING & SERVICES (PVT). LTD">
    <meta name="keywords" content="AL QAZI MARKETING & SERVICES (PVT). LTD">
    <meta name="author" content="PAKSOFTWARE">
    <title>Add Salary Details</title>
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
          
           <li style="background-color: white" class=" navigation-header"><span data-i18n="nav.category.layouts"><img style='height:60px;object-fit:contain;margin-top:-25px' src="11.png"></img></span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
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
       
           <?php include('second
           .php');
       ?>
    <?php include('third.php');
       ?>


          <li  class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Salary Section</span></a>
            <ul class="menu-content">


   <?php
                $sqladv = "SELECT pagename,link FROM menu where category='Salary Section' and status='1' and user='$rowsession[username]'";
$resultadv = $conn->query($sqladv);

  // output data of each row
  while($rowadv = $resultadv->fetch_assoc()) {


if ($rowadv['pagename']=='Add Details')
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
	     
	               
              <div style="background-color: #3EBBE5" class="card-header">
                  <h4 style="color:white" class="card-title" id="horz-layout-colored-controls">Add Employees Salary Information</h4>
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
	            <div  class="card-content collpase show">
	                <div class="card-body">
						<div class="card-text">
				
						</div>
            <div class="s text-center " role="" aria-label="Basic example">   
 
 <a target="_blank" href="employeeheads "> <button type="button" style="background-color: #23B1E1 !important" class="btn btn-info btn-sm " ><i class="fa fa-plus"></i>&nbspAdd Heads</button></a>
   <a target="_blank" href="viewemployees"> <button type="button"  style="background-color: #0B4870 !important"      class="btn btn-warning btn-sm " ><i class="fa fa-users"></i>&nbspEmployees List</button></a>

       
                    <div class="modal animated flipInY text-left" id="flipInY" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-danger">
              
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                      <h5>Check First Paragraph</h5>
                      <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                      <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                      <hr>
                      <h5>Some More Text</h5>
                      <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                 
                      </div>
                    </div>
                    </div>
                  </div>

</div>
	                     
                      <form class="form" method="POST">
                            <div class="form-body">
                                <h4 class="form-section"><i class="ft-user"></i> User Info</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Employee ID</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white"type="text" id="name" readonly name="id" autofocus="true" class="form-control" value="<?php echo $roww['id']?>" name="username">
                                        </div>
                  
                                    </div>
                                   

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Employee Name</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" id="fname" readonly name="name" autofocus="true" class="form-control" value="<?php echo $roww['name']?>" name="username">
                                        </div>
 </div>
            

          
                  
                                
 </div>
  <h4 class="form-section"><i class="fa fa-money"></i> Salary Details</h4>
                <div class="row">

                    

                

                     <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput1"> Basic Salary</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" name="salary" id="salary" autofocus="true" class="form-control" value="<?php echo $roww['salary']?>" name="username">
                                        </div>
 </div>
             


                     <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput1"> Bank Account #</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" name="ba" id="ba" autofocus="true" class="form-control" value="<?php echo $roww['ba']?>" name="username">
                                        </div>
 </div>
             
                     <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput1"> Bank Name</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" name="bn" id="bn" autofocus="true" class="form-control" value="<?php echo $roww['bn']?>" name="username">
                                        </div>
 </div>
          </div>
  <h4 class="form-section"><i class="fa fa-money"></i> ALLOWANCES</h4>
                <div class="row">


                     <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="projectinput1"> MEDICAL</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" name="hod" id="hod" autofocus="true" class="form-control" value="<?php echo $roww['hod']?>" name="username">
                                        </div>
 </div>
          

                     <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="projectinput1"> CONVEYANCE </label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" name="con" id="con" autofocus="true" class="form-control" value="<?php echo $roww['con']?>" name="username">
                                        </div>
 </div>

                     <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="projectinput1"> FUEL</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" name="fuel" id="fuel" autofocus="true" class="form-control" value="<?php echo $roww['fuel']?>" name="username">
                                        </div>
 </div>
          

                     <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="projectinput1"> MOBILE </label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" name="moba" id="moba" autofocus="true" class="form-control" value="<?php echo $roww['moba']?>" name="username">
                                        </div>
 </div>
          
          


                     <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="projectinput1"> HOUSE </label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" name="tea" id="tea" autofocus="true" class="form-control" value="<?php echo $roww['tea']?>" name="username">
                                        </div>
 </div>
</div>
  <h4 class="form-section"><i class="fa fa-money"></i> DEDUCTIONS</h4>
                <div class="row">


      <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="projectinput1"> PROVIDENT FUND</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" name="pf" id="pf" autofocus="true" class="form-control" value="<?php echo $roww['pf']?>" name="username">
                                        </div>
 </div>
      <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="projectinput1"> EOBI</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" name="eobi" id="eobi" autofocus="true" class="form-control" value="<?php echo $roww['eobi']?>" name="username">
                                        </div>
 </div>
          
               <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="projectinput1">WELFARE FUND</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" name="dc" id="dc" autofocus="true" class="form-control" value="<?php echo $roww['dc']?>" name="username">
                                        </div>
 </div>
      <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="projectinput1"> LOAN</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" name="loan" id="loan" autofocus="true" class="form-control" value="<?php echo $roww['loan']?>" name="username">
                                        </div>
 </div>
          
               <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="projectinput1"> WITHHOLDING TAX </label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" name="wh" id="wh" autofocus="true" class="form-control" value="<?php echo $roww['wh']?>" name="username">
                                        </div>
 </div>
          
          
          
          
                 
      
                       
                            
                         
                    <div  style="display: none" class="loader"></div>
                           
                                    </div>
                                    </div>
                            
                                
                           
          

                       
                            
                                <button id="save" name="submit" style="background-color: #3EBBE5;color:white;border:1px solid #062F4F" type="submit" class="btn btn-outline-info ">
                                    <i class="fa fa-check"></i> Add Salary Details
                                </button>
                           
                          </form>
             <br>
               


                    </div>
                </div>
            </div>
        </div>
  </div>
</section>

        
</div>
</div>
</div>
</body>


<?php include('footer.php');
?>
    <!-- BEGIN VENDOR JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../../../app-assets/vendors/js/menu/jquery.mmenu.all.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>

                                                          <script type="text/javascript">
    
$(document).ready(function(){
  $("#save").click(function(){
       $('.loader').show();

  var name=$('#name').val();
  
    var fname=$('#fname').val();
 
      var cnic=$('#cnic').val();

      var address=$('#address').val();

         
       var bdate=$('#bdate').val();
             var jdate=$('#jdate').val();
                  
    var mob=$('#mob').val();
       var vaccine=$('#vaccine').val();
        var en1=$('#en1').val();
            var en2=$('#en2').val();
                var en3=$('#en3').val();
  
      var qualification=$('#qualification').val();
   
       var department=$('#department').val();
        
    var designation=$('#designation').val();
     
      var salary=$('#salary').val();

      var status=$('#status').val();
          var marital=$('#marital').val();
           var gender=$('#gender').val();  
       
 var remarks=$('#remarks').val();  
  var iad=$('#iad').val();  


         

if (name=='')
{

                            swal({
    title: 'Failed Alert.....!',
    text: 'Please Write Employee Name.....',
    type: 'danger',
    timer: 2500,
    showConfirmButton: true
  }).then(function() {
    document.getElementById('name').focus();
  });

}

if (cnic=='')
{

                            swal({
    title: 'Failed Alert.....!',
    text: 'Please Write Employee CNIC.....',
    type: 'danger',
    timer: 2500,
    showConfirmButton: true
  }).then(function() {
    document.getElementById('cnic').focus();
  });

}


if (fname=='')
{

                            swal({
    title: 'Failed Alert.....!',
    text: 'Please Write Fathername.....',
    type: 'danger',
    timer: 2500,
    showConfirmButton: true
  }).then(function() {
    document.getElementById('fname').focus();
  });

}




if (name!='' && fname!='' && cnic!='')
{
 $.ajax({
                  type:'POST',
                    url: 'saveemployee.php',
                    dataType: 'json',
                    data: {name:name,fname:fname,cnic:cnic,address:address,bdate:bdate,mob:mob,jdate:jdate,qualification:qualification,department:department,designation:designation,salary:salary,status:status,en1:en1,en2:en2,en3:en3,marital:marital,gender:gender,vaccine:vaccine,remarks:remarks,iad:iad},
                      success:function(data){


                        console.log(data);
 if (data[0]['success']=='success')
                        {
                          $('.loader').hide();
                            
                            




 var name=$('#name').val("");
  
    var fname=$('#fname').val("");
 
      var cnic=$('#cnic').val("");

      var address=$('#address').val("");

         
   
                  
    var mob=$('#mob').val("92");
    
        var en1=$('#en1').val("92");
            var en2=$('#en2').val("92");
                var en3=$('#en3').val("92");
  

     
      var salary=$('#salary').val(0);

    
       
 var remarks=$('#remarks').val("");  
 





  swal({
    title: 'Success Alert.....!',
    text: 'Employee Added',
    type: 'success',
    timer: 2500,
    showConfirmButton: false
  }).then(function() {

      document.getElementById('name').focus();
      
    
  });
                                              }
 if (data[0]['duplicate']=='duplicate')
                        {
                          $('.loader').hide();


 var name=$('#name').val("");
  
    var fname=$('#fname').val("");
 
      var cnic=$('#cnic').val("");

      var address=$('#address').val("");

         
   
                  
    var mob=$('#mob').val("");
    
        var en1=$('#en1').val("");
            var en2=$('#en2').val("");
                var en3=$('#en3').val("");
  

     
      var salary=$('#salary').val(0);

    
       
 var remarks=$('#remarks').val("");  





    swal({
    title: 'Duplicate Alert.....!',
    text: 'Duplicate Employee Found.....',
    type: 'success',
    timer: 2500,
    showConfirmButton: false
  }).then(function() {
    
                           
     $('#name').autofocus;
  });

                                              }


                                               if (data[0]['failed']=='failed')
                        {
    swal({
    title: 'System Alert.....!',
    text: 'Failed to Insert Feeperiod.....',
    type: 'success',
    timer: 2500,
    showConfirmButton: false
  }).then(function() {
     document.getElementById('month').focus();
  });

                                              }







                                            }
                    });


}


    });
});



    </script>
                   <script type="text/javascript">
             

              function passwordshow() {
  var x = document.getElementById("passwordid");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
} 
           </script>