<?php
include('connection.php');
include('session_head.php');
ob_start();
include('connection.php');
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    
    $userid = $_GET['id'];
    $get_user = mysqli_query($conn,"SELECT * FROM multistory WHERE id='$userid'");
    
    if(mysqli_num_rows($get_user) === 1){
        
        $roww = mysqli_fetch_assoc($get_user);
      }
    }
    ?>
    <?php
if(isset($_POST['submit']))
  {
      $bdate =$_POST['bdate'];
      
      
         $formno =$_POST['formno'];
      
            $name =$_POST['name'];
            
            
            
                   $fname =$_POST['fname'];
                   $ccw =$_POST['ccw'];
                   $ce =$_POST['ce'];
                   $spoper=$_POST['spoper'];
            
            
            
                  $cnic =$_POST['cnic'];
                        $remarks =$_POST['remarks'];
                              $spo =$_POST['spo'];
                              $spocnic =$_POST['spocnic'];
                                    $contact =$_POST['contact'];
                                          $remarks2 =$_POST['remarks2'];
                                           $sp =$_POST['sp'];
                                            $status =$_POST['status'];
                                             $per2 =$_POST['per2'];
$d=date("Y-m-d");




              $plus=0;
       




$sql2="update multistory set bdate='$bdate',name='$name',cnic='$cnic',remarks='$remarks',spo='$spo',contact='$contact',remarks2='$remarks2',sp='$sp',status='$status',spocnic='$spocnic',fname='$fname',ccw='$ccw',cc='$ce',spoper='$spoper' where id='$userid'";
if ($conn->query($sql2) === TRUE) {
    
    
    
} else {
}

echo "<script>let newTab = window.open();
 newTab.location.href ='inst2.php?account=$userid';</script>";

    //Header("Location:inst2.php?account=$acn") ;
}

 
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="School Management System developed by Pak Softwares. The system provides the best and easy solution to handle school matters including admissions, fees, accounts, examination, sms, website controls, portal controls and many more.">
    <meta name="keywords" content="school management system, accounts management, web app, biomatric systems, examination, fees system, learning management system (lms), portals">
    <meta name="author" content="PAKSOFTWARE">
    <title>Edit Multi Storey Customer</title>
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




          <li  class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Customers & Dealers</span></a>
            <ul class="menu-content">


   <?php
                $sqladv = "SELECT pagename,link FROM menu where category='candd' and status='1' and user='$rowsession[username]'";
$resultadv = $conn->query($sqladv);

  // output data of each row
  while($rowadv = $resultadv->fetch_assoc()) {


if ($rowadv['pagename']=='Add Customers')
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

     <?php include('fifteen.php');
    ?>
       
       
       

<?php
include('first.php');
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
	     
	               
              <div style="background-color: #3EBBE5" class="card-header">
                  <h4 style="color:white" class="card-title" id="horz-layout-colored-controls">Welcome to Add Multi Storey Customers form</h4>
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
	                            
                                                <?php
                        include('config.php');
                $department_query = "SELECT  project FROM multistory where id='$roww[id]' order by id DESC";
                $stmt = $conn->prepare($department_query);
                $stmt->execute();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $project=$row['project'];
                }
            ?>
            
            
                                                              <?php
                        include('config.php');
                $department_query1 = "SELECT  floor FROM multistory where id='$roww[id]' order by id DESC";
                $stmt1 = $conn->prepare($department_query1);
                $stmt1->execute();
                while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)){
                $floor=$row1['floor'];
                }
            ?>
            
            
            
                                                           <?php
                        include('config.php');
                $department_query2 = "SELECT  ptype FROM multistory where id='$roww[id]' order by id DESC";
                $stmt2 = $conn->prepare($department_query2);
                $stmt2->execute();
                while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
                $ptype=$row2['ptype'];
                }
            ?>
            
            
            
                              
                              
                                               <?php
                        include('config.php');
                $department_query3 = "SELECT  category FROM multistory where id='$roww[id]' order by id DESC";
                $stmt3 = $conn->prepare($department_query3);
                $stmt3->execute();
                while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)){
                $mcat=$row3['category'];
                }
            ?>


                               
                               
                                            <?php
                        include('config.php');
                $department_query4 = "SELECT  pno,price,id FROM multistory where id='$roww[id]' order by id DESC";
                $stmt4 = $conn->prepare($department_query4);
                $stmt4->execute();
                while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)){
                $pno=$row4['pno'];
                 $price=$row4['price'];
                   $id=$row4['id'];
                }
            ?>
	                            
	                            
	                            
	             <div class="form-body">
	           
	   
	   <div class="s text-left " role="" aria-label="Basic example">  
<h4 style="color:blue; font-size:20px;" class="card-title" id="horz-layout-colored-controls">Project: <b><u><?php echo $project?></b></u>&nbsp Floor: <b><u><?php echo $floor?></b></u>&nbsp Propert Type: <b><u><?php echo $ptype?></b></u>&nbsp Multi Category: <b><u><?php echo $mcat?></b></u>&nbsp Property No: <b><u><?php echo $pno?></b></u></h4>
      </div>  

      
      
                                <h4 class="form-section"><i class="ft-user"></i> User Info</h4>
                                <div class="row">
                                    
                                    
                                    
                                    
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Booking Date <span style="color:red">*</span> </label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white"  type="date" id="bdate" autofocus="true" class="form-control" value="<?php echo $roww['bdate']?>" name="bdate">
                                        </div>
                  
                                    </div>    
                                    
                                    
                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="projectinput1">Customer Name <span style="color:red">*</span> </label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white"  type="text" id="name" autofocus="true" class="form-control" value="<?php echo $roww['name']?>"  name="name" required="">
                                        </div>
                  
                                    </div>
                                    
                                    
                                    
                                       <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="projectinput1">Father Name <span style="color:red">*</span> </label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white"  type="text" id="fname" autofocus="true" class="form-control" value="<?php echo $roww['fname']?>"  name="fname" required="">
                                        </div>
                  
                                    </div>
                                    
                                    
                                    
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput1">Customer Contact/Whatsapp # <span style="color:red">*</span> </label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white"  type="text" id="fname" autofocus="true" class="form-control" value="<?php echo $roww['ccw']?>"  name="ccw" required="">
                                        </div>
                  
                                    </div>
                                    
                                    
                                     <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput1">Customer Emergency  # <span style="color:red">*</span> </label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white"  type="text" id="fname" autofocus="true" class="form-control" value="<?php echo $roww['cc']?>"  name="ce" required="">
                                        </div>
                  
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                         <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput1">CNIC <span style="color:red">*</span></label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white"  maxlength="15" type="text" id="cnic" autofocus="true"  class="form-control" value="<?php echo  $roww['cnic']?>"  required="" name="cnic">
                                            <p style="color:#3EBBE5"><b>Must follow this Pattern 61101-1234567-8</b></p>
                                        </div>
 </div>
 
 
             <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Remarks <span style="color:red">*</span></label>
                                            <select s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white"  maxlength="15" type="text" id="cnic" autofocus="true"  class="form-control" value="<?php echo  $roww['remarks']?>"  name="remarks">
                                                
                                                
                                                <option value="<?php echo $roww['remarks']?>"><?php echo $roww['remarks']?></option>
                                                
                                                                                       <option value="None
">None
</option>
                                                <option value="Intiqal
">Intiqal
</option>

                                     <option value="Registry+ Intiqal

">Registry+ Intiqal

</option>
             
                                                
                                                </select>
                                           
                                        </div>
 </div>
 
                                   

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">SPO <span style="color:red">*</span> </label>
                                             <select s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" id="spo" required="" autofocus="true" class="form-control" value="" name="spo">
                                                 
                                                      <option value="<?php echo $roww['spo']?>"><?php echo $roww['spo']?></option>
                                                 
                                                <?php
                        include('config.php');
                $department_query = "SELECT DISTINCT name FROM dealer order by id DESC";
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
                                            <label for="projectinput1">SPO %  </label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white"  type="text" id="name" autofocus="true"  class="form-control" value="<?php echo  $roww['spoper']?>"  name="spoper">
                                        </div>
                  
                                    </div>
 
 
 
     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">SPO CNIC  </label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white"  type="text" id="name" autofocus="true"  class="form-control" value="<?php echo  $roww['spocnic']?>"  name="spocnic">
                                        </div>
                  
                                    </div>
 
 
    
                                    
                                    
                             <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Address </label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white"  type="text" id="name" autofocus="true" class="form-control" value="<?php echo  $roww['remarks2']?>"  name="remarks2">
                                        </div>
                  
                                    </div>        
                                    
                                    
                                    
                           <div style='display:none' class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Special Remarks  </label>
                                            <input s style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white"  type="text" id="name" autofocus="true" class="form-control" value="<?php echo  $roww['sp']?>"  name="sp">
                                        </div>
                  
                                    </div>        
                                                
 
            

                      <div style='display:none' class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Status</label>
                                            <input  style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white" type="text" id="address" autofocus="true" class="form-control" value="<?php echo  $roww['status']?>"  name="status">
                                        </div>
 </div>

      
          
          
          </div>
          </div>
                      
                      
                      
                      
                      </div>
         
  
                      
                   
 
                                <button id="check" name="submit" style="" type="submit" class="btn btn-success ">
                                    <i class="fa fa-check"></i> Save
                                </button>
                 
                          </form>
                          
                          <br>
                         
                                 
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

        
        
        
        