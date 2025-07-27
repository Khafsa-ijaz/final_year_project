<?php
include('connection.php');
include('session_head.php');
if(isset($_POST['submit']))
  {
 $category =$_POST['category'];
 $plotsize = $_POST['plotsize']; 


 $pr = $_POST['pr']; 

 $block = $_POST['block']; 





 $mk = $_POST['mk'];

 $tc = $_POST['tc'];
 $pc = $_POST['pc'];

$d=date("Y-m-d");


$sql2="update plot set totalcost='0' where pr='$pr' and block='$block' and category='$category' and mk='$mk' and size='$plotsize' and pc='$pc'";



if ($conn->query($sql2) === TRUE) {
      echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("SUCCESS","Price Reset Successfully!","success");';
  echo '}, 1000);</script>';
    
} else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;

}
}
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
    <title>Add Plot Price</title>
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
        
          <?php include('seventh.php');
          ?>


          <li  class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main"> Town</span></a>
            <ul class="menu-content">


   <?php
                $sqladv = "SELECT pagename,link FROM menu where category='bsp' and status='1' and user='$rowsession[username]'";
$resultadv = $conn->query($sqladv);

  // output data of each row
  while($rowadv = $resultadv->fetch_assoc()) {


if ($rowadv['pagename']=='Reset Plots Price')
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
                  <h4 style="color:white" class="card-title" id="horz-layout-colored-controls">Welcome to Reset Price form</h4>
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
	                        <form class="form" method="POST">
                        <div class="form-body">
                          <h4 sty class="form-section" style="color: black" ><i class="fa fa-user"></i> Plots Section</h4>
                          <div class="row">
                 
                 
                 
                    <div class="col-md-6">
                    <div class="form-group">
                      <label for="projectinput1">Select Project</label>
 <select s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" id="pr" autofocus="true" class="form-control" value="" name="pr">
                                                <?php
                        include('config.php');
                $department_query = "SELECT * FROM pr where type='Town' order by id DESC";
                $stmt = $conn->prepare($department_query);
                $stmt->execute();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo "<option value='".$row['name']."''>".$row['name']."</option>";
                }
            ?>
                </select>
                    </div>
                  </div>
                 
                 
                 
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="projectinput1">Select Block</label>
 <select s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" id="block" autofocus="true" class="form-control" value="" name="block">
                                          
                </select>
                    </div>
                  </div>
                  
                  
                  
                  
                   
                  
                 
                 
                 
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="projectinput1">Project Category</label>
 <select s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" id="category23" autofocus="true" class="form-control" value="" name="category">
                                
                                
                                
                                <option value="Residential">Residential</option>
                                
                                
                                     <option value="Commercial">Commercial</option>
                                        
                </select>
                    </div>
                  </div>
                  
                  
                  
                      <div class="col-md-6">
                    <div class="form-group">
                      <label for="projectinput1">Plot Category</label>
 <select s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" id="pc" autofocus="true" class="form-control" value="" name="pc">
                                
                                
                                        
                </select>
                    </div>
                  </div>
                  
                       
                  
                  
                     <div class="col-md-6">
                    <div class="form-group">
                      <label for="projectinput1">Marla/Kanal</label>
                    <select style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" id="mk" autofocus="true" class="form-control" value="" name="mk">
                       <option value='MARLA'>MARLA</option>
                       <option value='KANAL'>KANAL</option>
                 </select>
                    </div>
                  </div>
                  
                  
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="projectinput1">Select Size</label>
                       <select s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" id="plotsize" autofocus="true" class="form-control" name="plotsize">
                                
                                
                                        
                </select>
                    </div>
                  </div>
                  
                  
                 <div class="col-md-6">
                    <div class="form-group">
                      <label for="projectinput1"><b>Total Cost</b></label>
                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" required="" autofocus="true" id="tc" class="form-control" placeholder="" name="tc" value="0" readonly="">
                    </div>
                  </div>
             
                  
                 
                 
                </div>
                             

                  </div>
        

                   
                                <button id="save" name="submit" style="" type="submit" class="btn btn-danger ">
                                    <i class="fa fa-check"></i> Reset Plots Price
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


                                                           
                                                       
                                                           

    
    
    
    
                                                              

<script type="text/javascript">
        $(document).ready(function(){

          
                 
                var pr = $("#pr").val();
                    

                $.ajax({
                  type:'POST',
                    url: 'findblock.php',
                    data: {pr:pr},
                    dataType: 'json',
                    success:function(data){
                      console.log(data);
    $("#block").empty();
                       
      

                      var len = data.length;
                      console.log(data);
                        for( var i = 0; i<len; i++){

                            var block = data[i]['block'];
                           
   $("#block").append("<option value='"+block+"'>"+block+"</option>");
   
   
           if (i=='0')   
           {
 $.ajax({
                  type:'POST',
                    url: 'findcat.php',
                    data: {pr:pr,block:block},
                    dataType: 'json',
                    success:function(data){
                      console.log(data);
    $("#category").empty();
    
       $("#pc").empty();
                       
        $("#st").empty();

                      var len = data.length;
                      console.log(data);
                        for( var i = 0; i<len; i++){

                var pc = data[i]['pc'];
                             var category = data[i]['category'];
                             
                             if (category!='')
                             {
   $("#category").append("<option value='"+category+"'>"+category+"</option>");
                             }
                             
                            if (pc!='') 
                            {
      $("#pc").append("<option value='"+pc+"'>"+pc+"</option>");
                            }
   
               
                         

                          
                    }
                  }
                });
                        }
   
               
               
               
              
           if (i=='0')   
           {
 $.ajax({
                  type:'POST',
                    url: 'findst.php',
                    data: {pr:pr,block:block},
                    dataType: 'json',
                    success:function(data){
                      console.log(data);

    
       $("#st").empty();
                       


                      var len = data.length;
                      console.log(data);
                        for( var i = 0; i<len; i++){

                var st = data[i]['st'];
                           
                             
                             
                             
                            if (st!='') 
                            {
      $("#st").append("<option value='"+st+"'>"+st+"</option>");
                            }
   
               
                         

                          
                    }
                  }
                });
                        }
    
               
                         

                          
                    }
                  }
                });
                
                  
                      
  


          

        });
    </script>
    
 
                                                           
                                                           
                                                           
                           
                           
                           
                         <script type="text/javascript">
        $(document).ready(function(){

            $("#block").change(function(){
                 
                var pr = $("#pr").val();
                                var block = $("#block").val();
                $.ajax({
                  type:'POST',
                    url: 'findcat.php',
                    data: {pr:pr,block:block},
                    dataType: 'json',
                    success:function(data){
                      console.log(data);
    $("#category").empty();
     $("#pc").empty();
                       


                      var len = data.length;
                      console.log(data);
                        for( var i = 0; i<len; i++){

                          var category = data[i]['category'];
                            
                             var pc = data[i]['pc'];
                           
   if (category!='')
                             {
   $("#category").append("<option value='"+category+"'>"+category+"</option>");
                             }
                             
                            if (pc!='') 
                            {
      $("#pc").append("<option value='"+pc+"'>"+pc+"</option>");
                            }
               
   
               
                         

                          
                    }
                  }
                });










 
 $.ajax({
                  type:'POST',
                    url: 'findst.php',
                    data: {pr:pr,block:block},
                    dataType: 'json',
                    success:function(data){
                      console.log(data);

    
       $("#st").empty();
                       


                      var len = data.length;
                      console.log(data);
                        for( var i = 0; i<len; i++){

                var st = data[i]['st'];
                           
                             
                             
                             
                            if (st!='') 
                            {
      $("#st").append("<option value='"+st+"'>"+st+"</option>");
                            }
   
               
                         

                          
                    }
                  }
                });
                        







            });

        });
    </script>                                  
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                          
                           
                         <script type="text/javascript">
        $(document).ready(function(){

            $("#mk").change(function(){
                 
                var mk = $("#mk").val();
                               
                $.ajax({
                  type:'POST',
                    url: 'findsize.php',
                    data: {mk:mk},
                    dataType: 'json',
                    success:function(data){
                     

 
                        $("#plotsize").empty();      


                      var len = data.length;
                  
                        for( var i = 0; i<len; i++){

                          var size = data[i]['size'];
                            
                       
                            console.log(size);
 
   $("#plotsize").append("<option value='"+size+"'>"+size+"</option>");
                             
                             
                            
               
                         

                          
                    }
                  }
                });










 
                        







            });

        });
    </script>                           
                                     
            
            
            
            
                            
                          
                           
                         <script type="text/javascript">
        $(document).ready(function(){

        
                 
                var mk = $("#mk").val();
                               
                $.ajax({
                  type:'POST',
                    url: 'findsize.php',
                    data: {mk:mk},
                    dataType: 'json',
                    success:function(data){
                     

 
                        $("#plotsize").empty();      


                      var len = data.length;
                  
                        for( var i = 0; i<len; i++){

                          var size = data[i]['size'];
                            
                       
                            console.log(size);
 
   $("#plotsize").append("<option value='"+size+"'>"+size+"</option>");
                             
                             
                            
               
                         

                          
                    }
                  }
                });










 
                        







        

        });
    </script>                           
                                     
                                      
                                     
                                     
                                     
                                     
                                     
                                                                                           
                                                           
                                                           
                                                           
                                                           