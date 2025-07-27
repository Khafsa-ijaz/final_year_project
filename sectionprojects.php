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
  <meta name="description" content="School Management System developed by Pak Softwares. The system provides the best and easy solution to handle school matters including admissions, fees, accounts, examination, sms, website controls, portal controls and many more.">
    <meta name="keywords" content="school management system, accounts management, web app, biomatric systems, examination, fees system, learning management system (lms), portals">
    <meta name="author" content="PAKSOFTWARE">
    <title>Add Projects</title>
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



          <li  class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Projects Section</span></a>
            <ul class="menu-content">


   <?php
                $sqladv = "SELECT pagename,link FROM menu where category='Projects Section' and status='1' and user='$rowsession[username]'";
$resultadv = $conn->query($sqladv);

  // output data of each row
  while($rowadv = $resultadv->fetch_assoc()) {


if ($rowadv['pagename']=='Add Projects')
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
                  <h4 style="color:white" class="card-title" id="horz-layout-colored-controls">Welcome to Add Projects form</h4>
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
            <div class="s text-center " role="" aria-label="Basic example">   


       
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
	                      <form class="form form-horizontal">
                        <div class="form-body">
                          <h4 sty class="form-section" style="color: black" ><i class="fa fa-user"></i> Projects</h4>
                          <div class="row">
                 
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="projectinput1">Projects Name</label>
                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" required="" autofocus="true" id="name" class="form-control" placeholder="" name="head">
                    </div>
                  </div>
                  
                       <div class="col-md-6">
                    <div class="form-group">
                      <label for="projectinput1">Projects Area</label>
                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" required="" autofocus="true" id="area" class="form-control" placeholder="" name="head">
                    </div>
                  </div>
                  
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="projectinput1">Projects Location</label>
                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" required="" autofocus="true" id="location" class="form-control" placeholder="" name="head">
                    </div>
                  </div>
                  
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="projectinput1">Projects Description</label>
                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" required="" autofocus="true" id="description" class="form-control" placeholder="" name="head">
                    </div>
                  </div>
                  
          
                  <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Status</label>
                                            <select s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white"  type="text" id="status" autofocus="true" class="form-control" value="" name="username">
                                                 <option value="Active">Active</option>
                        <option value="In-Active">In-Active</option>
                      </select>
                                        </div>
 </div>
 
 
 
     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Type</label>
                                            <select s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white"  type="text" id="type" autofocus="true" class="form-control" value="" name="username">
                                                 <option value="Town">Town</option>
                        <option value="Multi Storey Building">Multi Storey Building</option>
                      </select>
                                        </div>
 </div>
 
 
 </div>
                             

                  </div>
                </form>

                       <button id="save" style="background-color: #3EBBE5;color:white
                       ; !important" type="submit" class="btn btn-info">
                                  <i class="fa fa-check-square-o"></i> Save
                              </button>
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

<script>
$(document).ready(function(){
  $("#save").click(function(){

 
var name=$('#name').val();
    var area=$('#area').val();
        var location=$('#location').val();
            var description=$('#description').val();
               var status=$('#status').val();
               
                           var type=$('#type').val();

         
 



    if (name=='')
{

                            swal({
    title: 'Insertion Failed.....!',
    text: 'Please Write Projectname.....',
    type: 'danger',
    timer: 2500,
    showConfirmButton: true
  }).then(function() {
    document.getElementById('name').focus();
  });

}



     if(name!='')
     {
 $.ajax({
                  type:'POST',
                    url: 'savesec.php',
                   dataType: 'json',
                     data: {name:name,area:area,location:location,description:description,status:status,type:type},
                      success:function(data){
console.log(data);
if (data[0]['success']=='success')
                        {

    swal({
    title: 'Success Alert',
    text: 'Project Added Successfully.....',
    type: 'success',
    timer: 2500,
    showConfirmButton: false
  }).then(function() {
    document.getElementById('name').focus();
    
                   $('#name').val("");
                         $('#area').val("");
                               $('#location').val("");
                                     $('#description').val("");
  });



                            
                        
                                             }



    if (data[0]['duplicate']=='duplicate')
                        {
    $('#name').val("");
                           

                            swal({
    title: 'Duplicate Alert.....!',
    text: 'Duplicate Project Found.....',
    type: 'danger',
    timer: 2500,
    showConfirmButton: false
  }).then(function() {
    document.getElementById('name').focus();
  });
                        }

                    
                      }
                    });
}
});
});









                                                           </script>