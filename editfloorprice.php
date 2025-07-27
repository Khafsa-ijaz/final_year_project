<?php
ob_start();

include('connection.php');
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    
    $userid = $_GET['id'];

    $get_user = mysqli_query($conn,"SELECT * FROM pricelist WHERE id='$userid'");
    
    if(mysqli_num_rows($get_user) === 1){
        
        $roww = mysqli_fetch_assoc($get_user);
      }
    }






include('session_head.php');
?>

 <?php
include('connection.php');
if(isset($_POST['submit']))
  {

      $category=$_POST['category'];
     $size=$_POST['size'];
     $per=$_POST['per'];

     $tp=$_POST['tp'];
          $dp=$_POST['dp'];
     $ra=$_POST['ra'];
       $qi=$_POST['qi'];

         $floor=$_POST['floor'];
          $flatno=$_POST['flatno'];
           $ss=$_POST['ss'];






 $sql ="update pricelist set category='$category',size='$size',per='$per',tp='$tp',dp='$dp',ra='$ra',qi='$qi',floor='$floor',flatno='$flatno',ss='$ss' where id='$userid'";
    if ($conn->query($sql) === TRUE) {
    header("Location:categorywisefloorprice?floorname=$floor");
     ob_end_flush();
     exit();
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
      


   }
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
    <title>Edit Floor Price</title>
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
          
          <li style="background-color: #304A7B" class=" navigation-header"><span data-i18n="nav.category.layouts">ATLANTIS TOWERS</span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
          </li>




 <?php include('twelve.php');
    ?>
       


 <?php include('thirteen.php');
    ?>


 <?php include('fourteen.php');
    ?>
     <?php include('fifteen.php');
    ?>
       
       
       



          <li  class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Floor Section</span></a>
            <ul class="menu-content">


   <?php
                $sqladv = "SELECT pagename,link FROM menu where category='Floor Section' and status='1' and user='$rowsession[username]'";
$resultadv = $conn->query($sqladv);

  // output data of each row
  while($rowadv = $resultadv->fetch_assoc()) {


if ($rowadv['pagename']=='Add Floor Price')
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
                  <h4 style="color:black" class="card-title" id="horz-layout-colored-controls">Welcome to Edit Floor Price Form</h4>
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
	            <div  class="card-content collpase show">
	                <div class="card-body">
						<div class="card-text">
				
						</div>
            <div class="s text-center " role="" aria-label="Basic example">   <button type="button" class="btn btn-info btn-sm btn-glow" data-toggle="modal" data-target="#flipInY">
                    Instructions
                  </button>
 
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
                     
                      <p>Update your Desired Changes</p>
                     
                    
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
                          <h4 sty class="form-section" style="color: black" ><i class="fa fa-money"></i> Price Info</h4>
                          <div class="row">
                              
                              <div class="col-md-6">
                                <div class="form-group row">

<label style="color:black" class="col-md-3 label-control" for="userinput1">Select Floor</label>

                                                                    <div class="col-md-9">
                                      <select style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" name="floor" id="floor" class="form-control">
                                     
  <option value="<?php echo $roww['floor']?>"><?php echo $roww['floor']?></option>

                                         <?php
                        include('config.php');
                $department_query = "SELECT * FROM floor where floorname!='$roww[floor]'";
                $stmt = $conn->prepare($department_query);
                $stmt->execute();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo "<option value='".$row['floorname']."''>".$row['floorname']."</option>";
                }
            ?>
                      </select>
                                      </select>
                                 
                        

                          

                         </div>
                       </div>
                     </div>
                              
                              <input type='hidden' value='<?php echo $userid?>' id='id'>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label style="color:black" class="col-md-3 label-control" for="userinput1">CATEGORY</label>
                                  <div class="col-md-9">
                                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;"  type="text" autofocus="true" value="<?php echo $roww['category']?>" class="form-control" placeholder="" id="category" name="category">
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-md-6">
                                <div class="form-group row">
                                    <label style="color:black" class="col-md-3 label-control" for="userinput1">FLAT NO</label>
                                  <div class="col-md-9">
                                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;"  type="number" autofocus="true" class="form-control" placeholder="" value="<?php echo $roww['flatno']?>" id="flatno" name="flatno">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                   <label style="color:black" class="col-md-3 label-control" for="userinput1">SIZE SQ FT</label>
                                  <div class="col-md-9">
                                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="text"  class="form-control" placeholder="" value="<?php echo $roww['size']?>" id="size" name="size">
                                    </div>
                                </div>
                            </div>
                              <div class="col-md-6">
                                <div class="form-group row">
                                 <label style="color:black" class="col-md-3 label-control" for="userinput1">PER SQFT PRICE</label>
                                  <div class="col-md-9">
                                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="number"  class="form-control" value="<?php echo $roww['per']?>" placeholder="" id="per" name="per">
                                    </div>
                                </div>
                            </div>

                           
                             <div class="col-md-6">
                                <div class="form-group row">
                                    <label style="color:black" class="col-md-3 label-control" for="userinput1">DOWN PAYMENT (%)</label>
                                  <div class="col-md-4">
                                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="number"  class="form-control" value="<?php echo $roww['dp']?>" placeholder="" id="dp" name="dp">
                                           <p style='font-size:10px;color:red'>Down Payment In PERCENT</p>
                                    </div>
                                    <div class="col-md-5">
                                      <input style="box-shadow: 0 0 20px #F9D140;background-color: #4C6586;color:white;" type="number" readonly="" class="form-control" value="0" placeholder="" id="vdp" name="vdp">
                                      <p style='font-size:10px;color:red'>Down Payment Value</p>
                                    </div>
                                </div>
                            </div>
                           
                            
                       
                              <div class="col-md-6">
                                <div class="form-group row">
                                     <label style="color:black" class="col-md-3 label-control" for="userinput1">Total Price</label>
                                  <div class="col-md-9">
                                      <input style="box-shadow: 0 0 20px #F9D140;background-color: #4C6586;color:white;" readonly="" type="number" value="<?php echo $roww['tp']?>"  class="form-control" placeholder="" id="tp" name="tp">
                                    </div>
                                </div>
                            </div>
                             
                            
                             <div class="col-md-6">
                                <div class="form-group row">
                                <label style="color:black" class="col-md-3 label-control" for="userinput1">REMAINING AMOUNT</label>
                                  <div class="col-md-9">
                                      <input style="box-shadow: 0 0 20px #F9D140;background-color: #4C6586;color:white;"  type="number" readonly=""  class="form-control" value="<?php echo $roww['ra']?>"  id="ra" name="ra">
                                    </div>
                                </div>
                            </div>
                                   <div class="col-md-6">
                                <div class="form-group row">
                             <label style="color:black" class="col-md-3 label-control" for="userinput1">QUATERLY INSTALLMENTS</label>
                                  <div class="col-md-9">
                                      <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;"  type="number"  class="form-control" value="<?php echo $roww['qi']?>"  placeholder="" id="qi" name="qi">
                                    </div>
                                </div>
                            </div> 
                            
                            
                            
                            
                            
                            
                            
                              <div class="col-md-6">
                                <div class="form-group row">

<label style="color:black" class="col-md-3 label-control" for="userinput1">Select Status</label>

                                                                    <div class="col-md-9">
                                      <select style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" readonly=""  name="ss" id="ss" class="form-control">
                                     
                                     
                                     
                                     
                                     <?php
                                     
                                     if($roww['ss']=='0')
                                     {
                                          echo "<option value='".$row33['ss']."''>Available for Sold</option>";
                                          
                                          
                                          
                                          
                                     include('connection.php');
                                     
                                     $sql33 = "SELECT ss FROM pricelist where id='$userid'";
$result33 = $conn->query($sql33);

if ($result33->num_rows > 0) {
  // output data of each row
  while($row33 = $result33->fetch_assoc()) {
     echo "<option value='1'>Not Available</option>";
  }
}
                                          
                                          
                                          
                                          
                                          
                                          
                                          
                                          
                                     }
                                     
                
                  if($roww['ss']=='1')
                                     {
                                          echo "<option value='".$row33['ss']."''>Not Available</option>";
                                          
                                          
                                          
                                          
                                     include('connection.php');
                                     
                                     $sql33 = "SELECT ss FROM pricelist where id='$userid'";
$result33 = $conn->query($sql33);

if ($result33->num_rows > 0) {
  // output data of each row
  while($row33 = $result33->fetch_assoc()) {
     echo "<option value='0'>Available for Sold</option>";
  }
}
                                          
                                          
                                          
                                          
                                          
                                          
                                          
                                          
                                     }                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
            ?>                         
                                     
                                     
                                     
                                     
                                       
                                   
                      </select>
                                      </select>
                                 
                        

                          

                         </div>
                       </div>
                     </div>
                            
                            
                            
                            

                   </div>
                

                          
                           
                      

                                    </div>
                       <button id="save" style="background-color: #ffd338;color:black
                       ; !important" type="submit" name="submit" class="btn btn-warning">
                                  <i class="fa fa-check-square-o"></i> Save
                              </button></form>
                             
                             


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

 <script type="text/javascript">
        $(document).ready(function(){

            $("#size").keyup(function(){
              var size=$(this).val();
               var per=$("#per").val();
               var tt=size*per;
               
               var t=Math.floor(tt);
               
               
               $("#tp").val(t);
               
               

               
                var dp=$("#dp").val();
                
               
                
            
               var tp=$("#tp").val();
            var percent=tp*dp/100;
         var nn=tp-percent;
            var n=Math.floor(nn);
                $("#ra").val(n);
               
                  var vv=Math.floor(percent);
              $("#vdp").val(vv);
               
               
               
               
            });
        });
        </script>
                         
                                                  <script type="text/javascript">
        $(document).ready(function(){

            $("#per").keyup(function(){
              var per=$(this).val();
               var size=$("#size").val();
               var tt=size*per;
               
                   var t=Math.floor(tt);
               
               $("#tp").val(t);
               
               
                var dp=$("#dp").val();
            
               var tp=$("#tp").val();
            var percent=tp*dp/100;
         
                var nn=tp-percent;
            var n=Math.floor(nn);
               $("#ra").val(n);
               
                  var vv=Math.floor(percent);
              $("#vdp").val(vv);
               
               
            });
        });
        </script>
            
                                                           
                                   <script type="text/javascript">
        $(document).ready(function(){

            $("#dp").keyup(function(){
              var dp=$(this).val();
            
               var tp=$("#tp").val();
            var percent=tp*dp/100;
            var nn=tp-percent;
            var n=Math.floor(nn);
            
            
            
              var vv=Math.floor(percent);
              $("#vdp").val(vv);
            
            
               $("#ra").val(n);
            });
        });
        </script>
                
                            <script type="text/javascript">
        $(document).ready(function(){

         
              var per=$("#per").val();
               var size=$("#size").val();
               var tt=size*per;
               
                   var t=Math.floor(tt);
               
               $("#tp").val(t);
               
               
                var dp=$("#dp").val();
            
               var tp=$("#tp").val();
            var percent=tp*dp/100;
         
                var nn=tp-percent;
            var n=Math.floor(nn);
               $("#ra").val(n);
               
                  var vv=Math.floor(percent);
              $("#vdp").val(vv);
               
               
           
        });
        </script>
       
<script type="text/javascript">
        $(document).ready(function(){

            $("#flatno").change(function(){
                
                var cd=$(this).val();
                 var cd2=$("#floor").val();
                   var id=$("#id").val();
        
            console.log(id);
                  $.ajax({
                  type:'POST',
                    url: 'load_data4203e.php',
                    data: {cd:cd,cd2:cd2,id:id},
                     dataType: 'json',
                    success:function(data){
                        console.log(data);
                 
                        if(data=='Found')
                        {
                               swal("Error!", "Flat Number " +cd+ " Already Exsists! System Assings Latest Flat Number for you", "error");
                                 var cd2=$("#floor").val();
        
        
            console.log("M There Brother");
                  $.ajax({
                  type:'POST',
                    url: 'load_data4202.php',
                    data: {cd2:cd2},
                     dataType: 'json',
                    success:function(data){
                        console.log(data);
                        if (data[0]['nill']=='nill')
                        {
  $("#flatno").val("1");
                        }
                       else
                       {
                        var rollno=data[0]['flatno'];
var ff=JSON.parse(rollno);
                        $("#flatno").val(ff+1);
                       }
                        }
                        
                        
                    });
                               
                        }
                        }
                        
                        
                    });
                  });
            });
       
        </script>



                
            
                                                           
                                                           
            
                                                           
                                                           
