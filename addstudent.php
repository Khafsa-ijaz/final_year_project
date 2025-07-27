<?php
include('session_head.php');
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
 <meta name="description" content=" CS&IT DEPARTMENT Website Developed By Khafsa IJaz And Habeeba Mateen">
    <meta name="keywords" content="">
    <meta name="author" content="Khafsa Ijaz">
    <title>Add Student</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
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
          
          <li style="background-color: #304A7B" class=" navigation-header"><span data-i18n="nav.category.layouts">SIMS FLIX</span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
          </li>




 <?php include('twelve.php');
    ?>
       


 <?php include('thirteen.php');
    ?>


 <?php include('fourteen.php');
    ?>
     <?php include('fifteen.php');
    ?>
       
       
       



          <li  class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Admissions</span></a>
            <ul class="menu-content">


   <?php
                $sqladv = "SELECT pagename,link FROM menu where category='Admissions' and status='1' and user='$rowsession[username]'";
$resultadv = $conn->query($sqladv);

  // output data of each row
  while($rowadv = $resultadv->fetch_assoc()) {


if ($rowadv['pagename']=='Add Student')
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
	     
	               
              <div style="background-color: #f9d140" class="card-header">
                  <h4 style="color:black" class="card-title" id="horz-layout-colored-controls">Welcome to Add New Student Form</h4>
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
 
    <a target="_blank" href="viewstudents"><button type="button"  class="btn btn-warning btn-sm btn-glow" >Students List</button>
        <button type="button"  class="btn btn-success btn-sm btn-glow" >Sample Excel Format</button></a>
       
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
	                      <form class="form form-horizontal" method="POST">
                        <div class="form-body">
                          <h4 sty class="form-section" style="color: white" ><i class="fa fa-user"></i> Personal Info</h4>
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label style="color:black" class="col-md-3 label-control" for="userinput1">Student Name</label>
                                  <div class="col-md-9">
                                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="text"  class="form-control" placeholder="" autofocus="true" id="sname" name="sname">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                   <label style="color:black" class="col-md-3 label-control" for="userinput1">Father Name</label>
                                  <div class="col-md-9">
                                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="text"  class="form-control" placeholder="" id="fname" name="fname">
                                    </div>
                                </div>
                            </div>
                              <div class="col-md-6">
                                <div class="form-group row">
                                 <label style="color:black" class="col-md-3 label-control" for="userinput1">Gender</label>
                                  <div class="col-md-9">
                                        <select style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" id="gender" name="gender" class="form-control">
                    
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      
                      </select>
                                    </div>
                                </div>
                            </div>

                              <div class="col-md-6">
                                <div class="form-group row">
                                     <label style="color:black" class="col-md-3 label-control" for="userinput1">Birth Date</label>
                                  <div class="col-md-9">
                                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="date" class="form-control" id="bdate" placeholder="" value="<?php echo date("Y-m-d")?>" name="bdate">
                                    </div>
                                </div>
                            </div>
                           
                             <div class="col-md-6">
                                <div class="form-group row">
                                    <label style="color:black" class="col-md-3 label-control" for="userinput1">Temporary Address</label>
                                  <div class="col-md-9">
                                  <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="text" class="form-control" id="address" placeholder="" name="address">
                                    </div>
                                </div>
                            </div>
                           
                            
                          <div class="col-md-6">
                                <div class="form-group row">
                                <label style="color:black" class="col-md-3 label-control" for="userinput1">Permanant Address</label>
                                  <div class="col-md-9">
                                         <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;"  type="text" class="form-control" id="paddress" placeholder="" name="address">
                                    </div>
                                </div>
                            </div>
                              <div class="col-md-6">
                                <div class="form-group row">
                             <label style="color:black" class="col-md-3 label-control" for="userinput1">Student NIC</label>
                                  <div class="col-md-9">
                                        <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="number" class="form-control" value="0" id="snic" placeholder="" name="address">
                                    </div>
                                </div>
                            </div>
                              <div class="col-md-6">
                                <div class="form-group row">
                                          <label style="color:black" class="col-md-3 label-control" for="userinput1">ECON-1</label>
                                  <div class="col-md-9">
                                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="number" class="form-control" maxlength="12" value="92" id="mob1" placeholder="" name="address">
                                    </div>
                                </div>
                            </div>

                          
                           
                           <div class="col-md-6">
                                <div class="form-group row">
                                       <label style="color:black" class="col-md-3 label-control" for="userinput1">ECON-2</label>
                                  <div class="col-md-9">
                                         <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="number" class="form-control" maxlength="12" value="92" id="mob2" placeholder="" name="address">
                                    </div>
                                </div>
                            </div>
</div>


                          
  <h4 class="form-section" style="color: black" ><i class="ft-user"></i> Father/Guardian Info</h4>

                           
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                  <label style="color:black" class="col-md-3 label-control" for="userinput1">CNIC</label>
                                  <div class="col-md-9">
                                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="number" id="nic" class="form-control border-primary" placeholder="" name="nic">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                  <label style="color: black" class="col-md-3 label-control" for="userinput2">Occupation</label>
                                  <div class="col-md-9">
                                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="text" id="occupation" class="form-control border-primary" placeholder="" name="occupation">
                                  </div>
                                </div>
                              </div>
                            
                             
                             
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                  <label style="color: black" class="col-md-3 label-control" for="userinput1">Home/Phone</label>
                                  <div class="col-md-9">
                                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="number" id="phone"  maxlength="9" class="form-control border-primary" placeholder="" name="phone">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                  <label style="color: black" class="col-md-3 label-control" for="userinput2">Mobile</label>
                                  <div class="col-md-9">
                                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="number" id="mob" maxlength="12" class="form-control border-primary" value="92" placeholder="" name="mob">
                                  </div>
                                </div>
                              </div>
                            
                             
                             
                            </div>
                         <h4 style="color:black" class="form-section"><i class="fa fa-user"></i> About Academics</h4>
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                  <label style="color: black" class="col-md-3 label-control" for="userinput1">Applied Class</label>
                                  <div class="col-md-9">
                                      <select style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" id="app_class" name="app_class" class="form-control">
                    
                           <?php
                        include('config.php');
                $department_query = "SELECT * FROM classes order by ID DESC";
                $stmt = $conn->prepare($department_query);
                $stmt->execute();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo "<option value='".$row['id']."''>".$row['cname']."</option>";
                }
            ?>
               
                      </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                  <label style="color: black" class="col-md-3 label-control" for="userinput2">Current Class</label>
                                  <div class="col-md-9">
                                 <select style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" id="curr_class" name="curr_class" class="form-control">
                    
                        <?php
                        include('config.php');
                $department_query = "SELECT * FROM classes order by ID DESC";
                $stmt = $conn->prepare($department_query);
                $stmt->execute();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo "<option value='".$row['id']."''>".$row['cname']."</option>";
                }
            ?>
                      </select>
                                  </div>
                                </div>
                              </div>
                            
                             
                             
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                  <label style="color: black" class="col-md-3 label-control" for="userinput1">Reg No</label>
                                  <div class="col-md-9">
                                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="number" id="regno" class="form-control border-primary" placeholder="" name="regno">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                  <label style="color: black" class="col-md-3 label-control" for="userinput2">Roll No</label>
                                  <div class="col-md-9">
                                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="number" id="rollno" class="form-control border-primary" placeholder="" name="rollno">
                                  </div>
                                </div>
                              </div>
                            
                             
                             
                            </div>
                              <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                  <label style="color: black" class="col-md-3 label-control" for="userinput1">Monthly Fee</label>
                                  <div class="col-md-9">
                                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="number" id="monfee" readonly="" class="form-control border-primary" placeholder="" name="monfee">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                  <label style="color: black" class="col-md-3 label-control" for="userinput2">New Fee</label>
                                  <div class="col-md-9">
                                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="number" id="newfee" class="form-control border-primary" value="0" placeholder="" name="newfee">
                                  </div>
                                </div>
                              </div>

                            
                             
                             
                            </div>
 <div class="row">
                            <div class="col-md-6">
                                
                                
                                
                                
                                <div class="form-group row">
                                  <label style="color: black" class="col-md-3 label-control" for="userinput1">Transport Fee</label>
                                  
                                  <div class="col-md-9">
                                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="number" value="0" id="tfee" class="form-control border-primary" placeholder="" name="tfee">
                                       
                                         
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                  <label style="color: black" class="col-md-3 label-control" for="userinput2">Hostel Fee</label>
                                  <div class="col-md-9">
                                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="number" value="0" id="lunchfee" class="form-control border-primary" placeholder="" name="lunchfee">
                                     
                                  </div>
                                </div>
                              </div>
                              
                            
                             
                             
                            </div>
                             <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                  <label style="color: black" class="col-md-3 label-control" for="userinput1">Admission Date</label>
                                  <div class="col-md-9">
                                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="date" id="admdate" class="form-control border-primary" value="<?php echo date("Y-m-d")?>" placeholder="" name="admdate">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                  <label style="color: black" class="col-md-3 label-control" for="userinput2">Status</label>
                                  <div class="col-md-9">
                                     <select style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" id="status" name="status" class="form-control">
                    
                        <option value="Active">Active</option>
                        <option value="In-Active">In-Active</option>
                       
                      </select>
                                  </div>
                                </div>
                              </div>
                              
                            
                             
                             
                            </div>
                           
              </div>
                </form>

                       <button id="save" style="background-color: #ffd338;color:black
                       ; !important" type="submit" class="btn btn-warning">
                                  <i class="fa fa-check-square-o"></i> Save
                              </button>

                  </div>
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



<?php include('footer.php');
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

<script type="text/javascript">
        $(document).ready(function(){
            $("#curr_class").change(function(){
                var curr_classid = $(this).val();
                console.log(curr_classid);  
                $.ajax({
                  type:'POST',
                    url: 'load_dataregnorollno.php',
                    dataType: 'json',
                    data: {curr_classid:curr_classid},
                  
                      success:function(data){
                        if (data[0]['nill']=='nill')
                        {
  $("#rollno").val("1");
                        }
                       else
                       {
                        var rollno=data[0]['rollno'];
var rollnoo=JSON.parse(rollno);
                        $("#rollno").val(rollnoo+1);
                       }

                }
            });

$.ajax({
                  type:'POST',
                    url: 'load_dataregnorollno2.php',
                    dataType: 'json',
                    data: {curr_classid:curr_classid},
                                        success:function(data){

var regno=data[0]['regno'];
var regnoo=JSON.parse(regno);
                       $("#regno").val(regnoo+1);
                         $("#monfee").val(data[0]['cfees']);
                           $("#newfee").val(data[0]['cfees']);

                }




            });




        });
              });
    </script>
<script type="text/javascript">
        $(document).ready(function(){
                var curr_classid = $('#curr_class').val();
                console.log(curr_classid);

              
                
 $.ajax({
                  type:'POST',
                    url: 'load_dataregnorollno.php',
                    dataType: 'json',
                    data: {curr_classid:curr_classid},
                  
                      success:function(data){
                        console.log(data);
                        if (data[0]['nill']=='nill')
                        {
  $("#rollno").val("1");
                        }
                       else
                       {
                        var rollno=data[0]['rollno'];
var rollnoo=JSON.parse(rollno);
                        $("#rollno").val(rollnoo+1);
                       }

                }




            });

$.ajax({
                  type:'POST',
                    url: 'load_dataregnorollno2.php',
                    dataType: 'json',
                    data: {curr_classid:curr_classid},
                  
                      success:function(data){
console.log(data);

var regno=data[0]['regno'];
var regnoo=JSON.parse(regno);
                       $("#regno").val(regnoo+1);
                         $("#monfee").val(data[0]['cfees']);
                           $("#newfee").val(data[0]['cfees']);

                }




            });




       
              });
    </script>

<script type="text/javascript">
        $(document).ready(function(){
            $("#regno").change(function(){
                var regno = $(this).val();
                              
                $.ajax({
                  type:'POST',
                    url: 'finddataregno.php',
                    dataType: 'json',
                    data: {regno:regno},
                  
                      success:function(data){
                        if (data[0]['data']=='Found')
                        {



                            swal("Duplicate Alert...!", "Reg No " + regno + " Already Exsists......System Assigns Latest Reg Number...", "warning");


$.ajax({
                  type:'POST',
                    url: 'findlatestreg.php',
                    dataType: 'json',
                    data: {regno:regno},
                  
                      success:function(data){


var regno=data[0]['regno'];
var regnoo=JSON.parse(regno);
                       $("#regno").val(regnoo+1);

                }




            });




                        }

                }




            });





        });
              });
    </script>



<script type="text/javascript">
        $(document).ready(function(){

            $("#rollno").change(function(){
                var rollno = $(this).val();
                var curr_class = $('#curr_class').val();
            

              

              
                
                $.ajax({
                  type:'POST',
                    url: 'finddatarollno.php',
                    dataType: 'json',
                    data: {rollno:rollno,curr_class:curr_class},
                  
                      success:function(data){
                        if (data[0]['data']=='Found')
                        {



                            swal("Duplicate Alert...!", "Roll No " + rollno + " Already Exsists......System Assigns Latest Roll Number for Selected Class...", "warning");
$.ajax({
                  type:'POST',
                    url: 'findlatestrollno.php',
                    dataType: 'json',
                    data: {rollno:rollno,curr_class:curr_class},
                  
                      success:function(data){
 if (data[0]['nill']=='nill')
                        {
  $("#rollno").val("1");
                        }
                       else
                       {
                        var rollno=data[0]['rollno'];
var rollnoo=JSON.parse(rollno);
                        $("#rollno").val(rollnoo+1);
                       }

                }




            });


$.ajax({
                  type:'POST',
                    url: 'findlatestreg.php',
                    dataType: 'json',
                    data: {regno:regno},
                  
                      success:function(data){


var regno=data[0]['regno'];
var regnoo=JSON.parse(regno);
                       $("#regno").val(regnoo+1);

                }




            });





                        }

                }




            });





        });
              });
    </script>



<script>
$(document).ready(function(){
  $("#save").click(function(){
    console.log("clicked");
    var sname=$('#sname').val();
    var fname=$('#fname').val();
      var gender=$('#gender').val();
    var bdate=$('#bdate').val();
      var address=$('#address').val();
           var nic=$('#nic').val();
                var occupation=$('#occupation').val();
                     var phone=$('#phone').val();
    var mob=$('#mob').val();
        var app_class=$('#app_class').val();
      var curr_class=$('#curr_class').val();
    var regno=$('#regno').val();
      var rollno=$('#rollno').val();
    var monfee=$('#monfee').val();
      var newfee=$('#newfee').val();
    var tfee=$('#tfee').val();
      var lunchfee=$('#lunchfee').val();
        var admdate=$('#admdate').val();
    var status=$('#status').val();
        var snic=$('#snic').val();
          var mob1=$('#mob1').val();
            var mob2=$('#mob2').val();
              var paddress=$('#paddress').val();
              console.log(paddress);

if (sname=='')
{

                            swal({
    title: 'Insertion Failed.....!',
    text: 'Please Write Student Name.....',
    type: 'danger',
    timer: 2500,
    showConfirmButton: true
  }).then(function() {
    document.getElementById('sname').focus();
  });

}

if (fname=='')
{

                            swal({
    title: 'Insertion Failed.....!',
    text: 'Please Write Father Name.....',
    type: 'danger',
    timer: 2500,
    showConfirmButton: true
  }).then(function() {
    document.getElementById('fname').focus();
  });

}


if (regno=='')
{

                            swal({
    title: 'Insertion Failed.....!',
    text: 'Please Write Regno Name.....',
    type: 'danger',
    timer: 2500,
    showConfirmButton: true
  }).then(function() {
    document.getElementById('regno').focus();
  });

}

if (rollno=='')
{

                            swal({
    title: 'Insertion Failed.....!',
    text: 'Please Write Rollno Name.....',
    type: 'danger',
    timer: 2500,
    showConfirmButton: true
  }).then(function() {
    document.getElementById('rollno').focus();
  });

}
if (newfee=='')
{

                            swal({
    title: 'Insertion Failed.....!',
    text: 'Please Write Regno Name.....',
    type: 'danger',
    timer: 2500,
    showConfirmButton: true
  }).then(function() {
    document.getElementById('newfee').focus();
  });

}


 if(sname!='' && regno!='' && rollno!='' && newfee!=''  && fname!='')
     {



 $.ajax({
                  type:'POST',
                    url: 'savestudent2.php',
                    dataType: 'json',
                    data: {sname:sname,fname:fname,gender:gender,bdate:bdate,address:address,nic:nic,occupation:occupation,phone:phone,mob:mob,app_class:app_class,
                  curr_class:curr_class,regno:regno,rollno:rollno,monfee:monfee,newfee:newfee,tfee:tfee,lunchfee:lunchfee,admdate:admdate,status:status,snic:snic,mob1:mob1,mob2:mob2,paddress:paddress},
                  
                      success:function(data){
                        console.log(data);

                       if (data[0]['duplicate']=='duplicate')
                        {


  $('#sname').val("");
                            $('#fname').val("");
                            $('#address').val("");
           $('#nic').val("");
            $('#phone').val("");
    $('#mob').val("");
    $('#occupation').val("");
    $('#mob1').val(92);
            $('#mob2').val(92);
                $('#snic').val(0);
                           

                            swal({
    title: 'Duplicate Alert.....!',
    text: 'Duplicate Student Found.....',
    type: 'danger',
    timer: 2500,
    showConfirmButton: false
  }).then(function() {
    document.getElementById('sname').focus();
  });

$.ajax({
                  type:'POST',
                    url: 'findlatestrollno.php',
                    dataType: 'json',
                    data: {rollno:rollno,curr_class:curr_class},
                  
                      success:function(data){
 if (data[0]['nill']=='nill')
                        {
  $("#rollno").val("1");
                        }
                       else
                       {
                        var rollno=data[0]['rollno'];
var rollnoo=JSON.parse(rollno);
                        $("#rollno").val(rollnoo+1);
                       }

                }




            });
$.ajax({
                  type:'POST',
                    url: 'findlatestreg.php',
                    dataType: 'json',
                    data: {regno:regno},
                  
                      success:function(data){


var regno=data[0]['regno'];
var regnoo=JSON.parse(regno);
                       $("#regno").val(regnoo+1);

                }




            });






                        }
                         if (data[0]['success']=='success')
                        {

  $('#sname').val("");
                            $('#fname').val("");
                            $('#address').val("");
           $('#nic').val("");
            $('#phone').val("");
    $('#mob').val(92);
        $('#mob1').val(92);
            $('#mob2').val(92);
                $('#snic').val(0);
    $('#occupation').val("");
      $('#tfee').val(0);
       $('#lunchfee').val(0);

                                swal({
    title: 'Good Job.....!',
    text: 'Student Added Successfully.....',
    type: 'success',
    timer: 2500,
    showConfirmButton: false
  }).then(function() {
    document.getElementById('sname').focus();
  });



$.ajax({
                  type:'POST',
                    url: 'findlatestrollno.php',
                    dataType: 'json',
                    data: {rollno:rollno,curr_class:curr_class},
                  
                      success:function(data){
 if (data[0]['nill']=='nill')
                        {
  $("#rollno").val("1");
                        }
                       else
                       {
                        var rollno=data[0]['rollno'];
var rollnoo=JSON.parse(rollno);
                        $("#rollno").val(rollnoo+1);
                       }

                }




            });
$.ajax({
                  type:'POST',
                    url: 'findlatestreg.php',
                    dataType: 'json',
                    data: {regno:regno},
                  
                      success:function(data){


var regno=data[0]['regno'];
var regnoo=JSON.parse(regno);
                       $("#regno").val(regnoo+1);

                }




            });





                          
                        }
                         if (data[0]['failed']=='failed')
                        {
                                    swal({
    title: 'System Error.....Please Contact Pak Softwares!',
    text: 'Failed to Insert Student.....',
    type: 'danger',
    timer: 2500,
    showConfirmButton: false
  }).then(function() {
    document.getElementById('').focus();
  });                        }
                        

                }




            });

}



  });
});
</script>
