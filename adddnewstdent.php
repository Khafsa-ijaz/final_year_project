<?php
include('session_head.php');
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/sweetalert.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
       <meta name="description" content=" CS&IT DEPARTMENT Website Developed By Khafsa IJaz And Habeeba Mateen">
    <meta name="keywords" content="">
    <meta name="author" content="Khafsa Ijaz">
    <title>Add Student</title>
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
          
    <!--   <li style="background-color: white" class=" navigation-header"><span data-i18n="nav.category.layouts"><img style='height:60px;object-fit:contain;margin-top:-25px' src="logo.png"></img></span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
          </li> -->






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
        
        <li  class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Students Section</span></a>
            <ul class="menu-content">


   <?php
                $sqladv = "SELECT pagename,link FROM menu where category='Students Section' and status='1' and user='$rowsession[username]'";
$resultadv = $conn->query($sqladv);

  // output data of each row
  while($rowadv = $resultadv->fetch_assoc()) {


if ($rowadv['pagename']=='Add New Students')
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
         
                   
              <div style="background-color:  #5B8343" class="card-header">
                  <h4 style="color:white" class="card-title" id="horz-layout-colored-controls">Welcome to MS Student's Form</h4>
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
 
 <a target="_blank" href="bsstudents.php ">  <button type="button"  style="background-color: #5B8343 !important"      class="btn btn-warning btn-sm " ><i class="fa fa-users"></i>&nbspBs Students Form</button></a>
   <a target="_blank" href="viewallstudents.php"> <button type="button"  style="background-color: #1090CD !important"      class="btn btn-warning btn-sm " ><i class="fa fa-users"></i>&nbspStudents List</button></a>

       
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
                                <h4 class="form-section"><i class="ft-user"></i> Students  Info</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1"> Student Name <span style="color:red">*</span> </label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #1090CD;color:white;border:1px solid #5B8343"  type="text" id="sname" autofocus="true" class="form-control" value="" name="username">
                                        </div>
                  
                                    </div>
                                   

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Father/Husband Name <span style="color:red">*</span> </label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #1090CD;color:white; border:1px solid #5B8343"  type="text" id="fname" autofocus="true" class="form-control" value="" name="username">
                                        </div>
 </div>
            

                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Address</label>
                                            <input  style="box-shadow: 0 0 4px #333D47;background-color:  #1090CD;color:white ; border:1px solid  #5B8343;" type="text" id="address" autofocus="true" class="form-control" value="" name="username">
                                        </div>
 </div>

           <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">CNIC <span style="color:red">*</span></label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color:  #1090CD;color:white ; border:1px solid  #5B8343;"  maxlength="15" type="text"  id="cnic" autofocus="true"  class="form-control" value="" name="username" maxlength="14">
                                            <p style="color:#5B8343"><b>Must follow this Pattern 61101-1234567-8</b></p>
                                        </div>
 </div>
                                  
             
                       <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Birth Date</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color:  #1090CD;color:white ; border:1px solid  #5B8343;"  type="date" id="dob" autofocus="true" class="form-control" value="<?php echo date("Y-m-d")?>" name="username">

 

                                        </div>
 </div>
                                  
                 
                           <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Mobile No</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color:  #1090CD;color:white ; border:1px solid  #5B8343;"  type="text" id="mobileno" autofocus="true" class="form-control" value="92" name="username" maxlength="11" >
                                             <!-- <p style="color:#5B8343;"><b>Must Start with 92</b></p> -->
                                        </div>
 </div>

    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Emergency No </label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color:  #1090CD;color:white ; border:1px solid  #5B8343;"  type="text" id="emno" autofocus="true" class="form-control" value="92" name="username" maxlength="11">
                                            <!-- <p style="color:#5B8343;"><b>Must Start with 92</b></p> -->
                                        </div>
 </div>
    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Email</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color:  #1090CD;color:white ; border:1px solid  #5B8343;"  type="email" id="email" autofocus="true" class="form-control" value="" name="username">

     

                                        </div>
 </div>
                           <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Session <span style="color:red">*</span> </label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #1090CD;color:white; border:1px solid #5B8343"  type="text" id="session" value="2024-2028" autofocus="true" class="form-control" value="" name="username">
                                        </div>
 </div>

         <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Program</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color:  #1090CD;color:white ; border:1px solid  #5B8343;"  type="text" id="program" autofocus="true" class="form-control" value="MS" name="username">

     

                                        </div>
 </div>
                
                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Gender</label>
                                            <select s style="box-shadow: 0 0 4px #333D47;background-color:  #1090CD;color:white ; border:1px solid  #5B8343;"  type="text" id="gender" autofocus="true" class="form-control" value="" name="username">

                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                                        </div>
 </div>
            

                 <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Marital Status</label>
                                            <select s style="box-shadow: 0 0 4px #333D47;background-color:  #1090CD;color:white ; border:1px solid  #5B8343;"  type="text" id="marital_status" autofocus="true" class="form-control" value="" name="username">

       <option value="Married">Married</option>
                        <option value="Single">Single</option>
                              <option value="Divorced">Divorced</option>
                                   <option value="Widow">Widow</option>
                                 </select>


                                        </div>
 </div>
                    

                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Vaccine Status</label>
                                            <select s style="box-shadow: 0 0 4px #333D47;background-color:  #1090CD;color:white ; border:1px solid  #5B8343;"  type="text" id="vaccine_status"  autofocus="true" class="form-control" value="" name="username">
                                                <option value="Not-Vaccinated">Not-Vaccinated</option>
                        <option value="Vaccinated">Vaccinated</option>
                      </select>
                                        </div>
 </div>
 </div>
  <h4 class="form-section"><i class="fa fa-graduation-cap"></i> Academics Matric</h4>
                <div class="row">

                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Board Name</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color:  #1090CD;color:white ; border:1px solid  #5B8343;" type="text" id="Mboard" autofocus="true" class="form-control" value="" name="username">
                
                
                    
                                        </div>

 </div>

  
                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Total Marks</label>
                                            <input  style="box-shadow: 0 0 4px white;background-color:  #1090CD;color:white ; border:1px solid  #5B8343;"  type="text" id="Tmarks" autofocus="true" class="form-control"  name="username">
        
            
                                        </div>
 </div>
 
                

        
         <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Obtained  Marks</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color:  #1090CD;color:white ; border:1px solid  #5B8343;"  type="number" id="Obmarks" autofocus="true" class="form-control" value="0" name="username">
                                        </div>
 </div>
         <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Percentage</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color:  #1090CD;color:white ; border:1px solid  #5B8343;"  type="number" id="M_percentage" autofocus="true" class="form-control" value="0" name="username">
                                        </div>
 </div>
                

                 
                
         

                
                       
                            
                         
                    <div  style="display: none" class="loader"></div>
                           
                                    </div>
            
  <h4 class="form-section"><i class="fa fa-graduation-cap"></i> Academics Intermediate</h4>
                <div class="row">

                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Board Name</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color:  #1090CD;color:white ; border:1px solid  #5B8343;" type="text" id="Iboard" autofocus="true" class="form-control" value="" name="username">
                
                
                    
                                        </div>

 </div>
             <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Group</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color:  #1090CD;color:white ; border:1px solid  #5B8343;" type="text" id="Igroup" autofocus="true" class="form-control" value="" name="username">
                
                
                    
                                        </div>

 </div>

  
                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Total Marks</label>
                                            <input  style="box-shadow: 0 0 4px white;background-color:  #1090CD;color:white ; border:1px solid  #5B8343;"  type="text" id="It_marks" autofocus="true" class="form-control"  name="username">
        
            
                                        </div>
 </div>
 
                

        
         <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Obtained  Marks</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color:  #1090CD;color:white ; border:1px solid  #5B8343;"  type="number" id="Iob_marks" autofocus="true" class="form-control" value="0" name="username">
                                        </div>
 </div>
         <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Percentage</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color:  #1090CD;color:white ; border:1px solid  #5B8343;"  type="number" id="I_percentage" autofocus="true" class="form-control" value="0" name="username">
                                        </div>
 </div>
                

      
                 
                
       

     
                
                       
                            
                         
                    <div  style="display: none" class="loader"></div>
                           
                                    </div>
                                      <h4 class="form-section"><i class="fa fa-graduation-cap"></i> BS </h4>
                <div class="row">

                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">University Name</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color:  #1090CD;color:white ; border:1px solid  #5B8343;" type="text" id="university" autofocus="true" class="form-control" value="" name="username">
                
                
                    
                                        </div>

 </div>
             <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Subject</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color:  #1090CD;color:white ; border:1px solid  #5B8343;" type="text" id="Subject" autofocus="true" class="form-control" value="" name="username">
                
                
                    
                                        </div>

 </div>

  
                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Total Marks</label>
                                            <input  style="box-shadow: 0 0 4px white;background-color:  #1090CD;color:white ; border:1px solid  #5B8343;"  type="text" id="totalmarks" autofocus="true" class="form-control"  name="username">
        
            
                                        </div>
 </div>
 
                

        
         <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Obtained  Marks</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color:  #1090CD;color:white ; border:1px solid  #5B8343;"  type="number" id="obtainedmarks" autofocus="true" class="form-control" value="0" name="username">
                                        </div>
 </div>
         <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Cgpa</label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color:  #1090CD;color:white ; border:1px solid  #5B8343;"  type="number" id="cgpa" autofocus="true" class="form-control" value="0" name="username" step="0.01" max="4.00">
                                        </div>
 </div>
                

      
                 
                
       

     
                
                       
                            
                         
                    <div  style="display: none" class="loader"></div>
                           
                                    </div>
                                    </div>
                            
                                
                           
                </form>

                            <div class="form-actions">
                            
                                <button id="save" name="submit" style="background-color: #5B8343;color:white;border:1px solid #062F4F" type="submit" class="btn btn-outline-info ">
                                    <i class="fa fa-check"></i> Add Student
                                </button>
                            </div>
                    
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

  var sname=$('#sname').val();
  
    var fname=$('#fname').val();
 
      var cnic=$('#cnic').val();

      var address=$('#address').val();

         
       var dob=$('#dob').val();
             //var jdate=$('#jdate').val();
                  
    var mobileno=$('#mobileno').val();
       var emno=$('#emno').val();
       
   
       var gender=$('#gender').val();
        
    var marital_status=$('#marital_status ').val();
     
      var vaccine_status=$('#vaccine_status').val();

      // var status=$('#status').val();
          var program=$('#program').val();
           var session=$('#session').val();

  
      var Iboard=$('#Iboard').val();  
           var Igroup =$('#Igroup   ').val();
          var It_marks=$('#It_marks').val();
           var Iob_marks=$('#Iob_marks').val();
            var I_percentage=$('#I_percentage').val();
            var Mboard=$('#Mboard').val();  
           //var Igroup =$('#Igroup   ').val();
          var Tmarks=$('#Tmarks').val();
           var Obmarks=$('#Obmarks').val();
            var M_percentage=$('#M_percentage').val();
        
       
 var university=$('#university').val();  
  var Subject=$('#Subject').val(); 
  var totalmarks=$('#totalmarks').val();
           var obtainedmarks=$('#obtainedmarks').val();
              var cgpa=$('#cgpa').val();

 var email=$('#email').val();  


      if (cnic == '' || !/^\d{5}-\d{7}-\d{1}$/.test(cnic)) {
            swal({
                title: 'Failed Alert.....!',
                text: 'CNIC must follow the format 61101-1234567-8.....',
                icon: 'error',
                timer: 5000,
                buttons: false
            }).then(function() {
                $('#cnic').focus();
            });
            return;
        }   
         if (email == '' || !email.includes('@gmail.com')) {
            swal({
                title: 'Failed Alert.....!',
                text: 'Please Enter a valid Email.....',
                icon: 'error',
                timer: 5000,
                buttons: false
            }).then(function() {
                $('#email').focus();
            });
            return;
        }

        if (mobileno.length != 11) {
            swal({
                title: 'Failed Alert.....!',
                text: 'Mobile Number must be 11 digits.....',
                icon: 'error',
                timer: 5000,
                buttons: false
            }).then(function() {
                $('#mobileno').focus();
            });
            return;
        }

        // if (Obmarks>Tmarks||It_marks>Iob_marks||totalmarks>obtainedmarks) {
        //     swal({
        //         title: 'Failed Alert.....!',
        //         text: 'Obtained Marks must be less than or equal to Total Marks.....',
        //         icon: 'error',
        //         timer: 5000,
        //         buttons: false
        //     }).then(function() {
        //         $('#obtainedmarks').focus();
        //     });
        //     return;
        // }

        if (I_percentage>100||M_percentage>100) {
            swal({
                title: 'Failed Alert.....!',
                text: 'Percentage must be less than or equal to 100.....',
                icon: 'error',
                timer: 5000,
                buttons: false
            }).then(function() {
                $('#percentage').focus();
            });
            return;
        }

        if (cgpa > 4.00) {
            swal({
                title: 'Failed Alert.....!',
                text: 'CGPA must be less than or equal to 4.00.....',
                icon: 'error',
                timer: 5000,
                buttons: false
            }).then(function() {
                $('#cgpa').focus();
            });
            return;
        }

if (sname=='')
{

                            swal({
    title: 'Failed Alert.....!',
    text: 'Please Write student Name.....',
    type: 'danger',
    timer: 5000,
    showConfirmButton: true
  }).then(function() {
    document.getElementById('sname').focus();
  });

}

if (cnic=='')
{

                            swal({
    title: 'Failed Alert.....!',
    text: 'Please Write student CNIC.....',
    type: 'danger',
    timer: 5000,
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
    timer: 5000,
    showConfirmButton: true
  }).then(function() {
    document.getElementById('fname').focus();
  });

}




if (sname!='' && fname!='' && cnic!='')
{
 $.ajax({
                  type:'POST',
                    url: 'savestudents.php',
                    dataType: 'json',
                    data: {sname:sname,fname:fname,cnic:cnic,address:address,dob:dob,mobileno:mobileno,emno:emno,gender:gender,marital_status:marital_status,vaccine_status:vaccine_status,program:program,session:session,Iboard:Iboard,Igroup:Igroup,It_marks:It_marks,Iob_marks:Iob_marks,I_percentage:I_percentage,Mboard:Mboard,Tmarks:Tmarks,Obmarks:Obmarks,M_percentage:M_percentage,university:university,Subject:Subject,totalmarks:totalmarks,obtainedmarks:obtainedmarks,cgpa:cgpa,email:email},
                      success:function(data){


                        console.log(data);
 if (data[0]['success']=='success')
                        {
                          $('.loader').hide();
                            
                            




 var sname=$('#sname').val("");
  
    var fname=$('#fname').val("");
 
      var cnic=$('#cnic').val("");

      var address=$('#address').val("");

         
   
         
 





  swal({
    title: 'Success Alert.....!',
    text: 'Student Added',
    type: 'success',
    timer: 5000,
    showConfirmButton: false
  }).then(function() {

      document.getElementById('sname').focus();
      
    
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
    text: 'Duplicate Student Found.....',
    type: 'success',
    timer: 5000,
    showConfirmButton: false
  }).then(function() {
    
                           
     $('#name').autofocus;
  });

                                              }


                                               if (data[0]['failed']=='failed')
                        {
    swal({
    title: 'System Alert.....!',
    text: 'Failed to Insert.....',
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