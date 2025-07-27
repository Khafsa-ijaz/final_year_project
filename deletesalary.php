<?php
include('session_head.php');
include('sessionfinder.php');
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/sweetalert.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta name="description" content="School Management System developed by Pak Softwares. The system provides the best and easy solution to handle school matters including admissions, fees, accounts, examination, sms, website controls, portal controls and many more.">
    <meta name="keywords" content="school management system, accounts management, web app, biomatric systems, examination, fees system, learning management system (lms), portals">
    <meta name="author" content="PAKSOFTWARE">
    <title>Delete Salary</title>
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
          
            <!--  <li style="background-color: white" class=" navigation-header"><span data-i18n="nav.category.layouts"><img style='height:60px;object-fit:contain;margin-top:-25px' src="11.png"></img></span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
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


if ($rowadv['pagename']=='Delete Salary')
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
    <div class="col-md-6">
          <div class="card">
       
                 
              <div style="background-color: #3EBBE5" class="card-header">
                  <h4 style="color:white" class="card-title" id="horz-layout-colored-controls">Delete Monthly Salary</h4>
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
            <div  role="" aria-label="Basic example">   
       

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
                  <div class="card-content collapse show">
          <div class="card-body">
            
            <form class="form" method="POST" action="GenerateSalary ">
              <div class="form-body">
                <h4 class="form-section"><i class="fa fa-money"></i> Salary Requirement</h4>
                <div class="row">
               
                  <div class="col-md-12">
                    <div class="form-group">
        <label style="color:black" for="projectinput2">Select Month</label>
                        <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="month" id="month" value="<?php echo date("Y-m")?>"  class="form-control" placeholder="" name="month">
                    </div>
                  </div>
                </div>
            
              

              


                
              </div>    </form>

              <div class="form-actions">
                  
                  
                    <?php
     $sql123 = "SELECT * FROM fview where emp='$rowsession[username]'  and fname='Delete Monthly Salary' and status='1'";
$result123 = $conn->query($sql123);

if ($result123->num_rows > 0) {
    echo "
                              <button type='submit'  id='save3' class='btn btn-info btn-min-width btn-glow mr-1 mb-1'>
                  <i class='fa fa-get-pocket'></i> Delete Salary
                </button>";
 
} 
else
{
  echo "<p style='color:red'>Access Blocked by Admin</p>";
    
}

    ?>
    
    
               
              </div>
        
              
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>




<div style='display:none' class="col-md-6">
          <div class="card">
       
                 
              <div style="background-color: #3EBBE5" class="card-header">
                  <h4 style="color:white" class="card-title" id="horz-layout-colored-controls">Single Staff Attendance</h4>
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
            <div  role="" aria-label="Basic example">   
       

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
                  <div class="card-content collapse show">
          <div class="card-body">
            
            <form class="form" method="POST" action="marksingle">
              <div class="form-body">
                <h4 class="form-section"><i class="fa fa-clock-o"></i> Attendance Requirement</h4>
                <div class="row">
               
                  <div class="col-md-12">
                    <div class="form-group">
        <label style="color:black" for="projectinput2">Select Date</label>
                        <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="date" id="date" value="<?php echo date("Y-m-d")?>"  class="form-control" placeholder="" name="date">
                    </div>
                  </div>
                </div>
            
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

              


                
              </div>

              <div class="form-actions">
    
    
    
    
    
                 <button type="submit"  id="save" class="btn btn-info btn-min-width btn-glow mr-1 mb-1">
                  <i class="fa fa-get-pocket"></i> Mark Single Staff Attendance 
                </button>
              </div>
            </form>
              
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
           <script src="../../../app-assets/vendors/js/extensions/sweetalert.min.js"></script>
            <script src="../../../app-assets/js/scripts/extensions/sweet-alerts.js"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>

<script>
$(document).ready(function(){
  $("#save").click(function(){

       var name=$('#name').val();
    var fname=$('#fname').val();

    var hname=$('#hname').val();


      var nic=$('#nic').val();
       

      var address=$('#address').val();

         
       var bdate=$('#bdate').val();
 
             var jdate=$('#jdate').val();
          
                  
    var mobile=$('#mobile').val();

        var mobile1=$('#mobile1').val();
    
            var mobile2=$('#mobile2').val();
            
                var mobile3=$('#mobile3').val();
                  
   var mobile4=$('#mobile4').val();

      var qualification=$('#qualification').val();



   
       var department=$('#department').val();
   
    var designation=$('#designation').val();
 
      var salary=$('#salary').val();
     
      var status=$('#status').val();

          var mstatus=$('#mstatus').val();
           



if (name=='')
{

                            swal({
    title: 'Insertion Failed.....!',
    text: 'Please Write Employee Name.....',
    type: 'danger',
    timer: 2500,
    showConfirmButton: true
  }).then(function() {
    document.getElementById('name').focus();
  });

}

if (fname=='')
{

                            swal({
    title: 'Insertion Failed.....!',
    text: 'Please Write Fathername.....',
    type: 'danger',
    timer: 2500,
    showConfirmButton: true
  }).then(function() {
    document.getElementById('fname').focus();
  });

}



     if(name!='' && fname!='')
     {
 $.ajax({
                  type:'POST',
                    url: 'saveemployee.php',
                    dataType: 'json',
                    data: {name:name,fname:fname,hname:hname,nic:nic,address:address,bdate:bdate,mobile:mobile,jdate:jdate,qualification:qualification,department:department,designation:designation,salary:salary,status:status,mobile1:mobile1,mobile2:mobile2,mobile3:mobile3,mobile4:mobile4,mstatus:mstatus},
                      success:function(data){
console.log(data);
if (data[0]['success']=='success')
                        {

    swal({
    title: 'Success Alert',
    text: 'Employee Added Successfully.....',
    type: 'success',
    timer: 2500,
    showConfirmButton: false
  }).then(function() {
    document.getElementById('name').focus();
  });



                      $('#name').val("");
                            $('#fname').val("");
                              $('#hname').val("");
                               $('#address').val("");
                               $('#nic').val("");
                                $('#salary').val(0);
                                 $('#mobile').val("");
                                    $('#mobile1').val(92);
                                       $('#mobile2').val(92);
                                          $('#mobile3').val(92);
                                               $('#mobile4').val(92);
                                             }



 if (data[0]['duplicate']=='duplicate')
                        {
    $('#name').val("");
                            $('#fname').val("");
                               $('#address').val("");
                               $('#nic').val("");
                                $('#salary').val(0);
                                

                            swal({
    title: 'Duplicate Alert.....!',
    text: 'Duplicate Employee Found.....',
    type: 'danger',
    timer: 2500,
    showConfirmButton: false
  }).then(function() {
    document.getElementById('name').focus();
  });
              $('#name').val("");
                            $('#fname').val("");
                              $('#hname').val("");
                               $('#address').val("");
                               $('#nic').val("");
                                $('#salary').val(0);
                                 $('#mobile').val("");
                                    $('#mobile1').val(92);
                                       $('#mobile2').val(92);
                                          $('#mobile3').val(92);
                                               $('#mobile4').val(92);
                        }


                    
                      }
                    });
}
});
});









                                                           </script>
                                                           
                                                           
                                                           
                                                           
                                                           
                                                           
                                                                              
    <script>
$(document).ready(function(){
  $("#save3").click(function(){
   
     var month=$('#month').val();
    console.log(month);
    
    if(confirm("Are you sure you want to Delete All Employees Salary Slips?"))
     {
    if(confirm("Are you sure you want to Delete All Employees Salary Slips?"))
     {
 $.ajax({
                  type:'POST',
                    url: 'delstaff.php',
                //dataType: 'json',
                    data: {month:month},
                      success:function(data){
                          console.log(data);
    swal({
    title: 'Success Alert.....!',
    text: 'Salary Slips Deleted',
    type: 'danger',
    timer: 2500,
    showConfirmButton: false
  }).then(function() {
  
  });
  

                      }
   

       });
     }
     }
});
});


  </script>


                           
                                                           
                                                           
                                                           
                                                           
                                                           
                                                           
                                                           
                                                           
                                                           