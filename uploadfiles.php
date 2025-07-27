<?php
include('session_head.php');
include('connection.php');
$id=$_GET['id'];
$sql = "SELECT id,sname FROM extrastudents where id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id=$row['id'];
    $sname=$row['sname'];

  }
}


 
 if(isset($_POST['submit']))
{    
    
    
    $file_name=$_POST['file_name'];
     $file =$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
if ($file!='')
{
  $folder="uploads/";
 $date=date("Y-m-d");
 move_uploaded_file($file_loc,$folder.$file);
  //move_uploaded_file($file_loc1,$folder.$file1);
}
if($file=='')
{
     $file = "Nill";
}
     
      $sql = "INSERT INTO files (file_name, file_type, reg_no,file)
VALUES ('$file_name', 'Graduate File', '$id','$file')";
if ($conn->query($sql) === TRUE) {
  echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("SUCCESS","File Uploaded Successfully!","success");';
  echo '}, 1000);</script>';



} else {

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
   <meta name="description" content=" CS&IT DEPARTMENT Website Developed By Khafsa IJaz And Habeeba Mateen">
    <meta name="keywords" content="">
    <meta name="author" content="Khafsa Ijaz">
    <title>Add files</title>
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
          
  <!--      <li style="background-color: white" class=" navigation-header"><span data-i18n="nav.category.layouts"><img style='height:60px;object-fit:contain;margin-top:-25px' src="11.png"></img></span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
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
        

            <?php include('fifth.php');
    ?>
     
        
          <?php include('sixth.php');
    ?>
            <li  class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Files Section</span></a>
            <ul class="menu-content">


   <?php
                $sqladv = "SELECT pagename,link FROM menu where category='Files Section' and status='1' and user='$rowsession[username]'";
$resultadv = $conn->query($sqladv);

  // output data of each row
  while($rowadv = $resultadv->fetch_assoc()) {


if ($rowadv['pagename']=='Manage Files')
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
	     
	               
              <div style="background-color: #5B8343" class="card-header">
                  <h4 style="color:white" class="card-title" id="horz-layout-colored-controls">Welcome to Upload Files Form <b><u><?php echo $sname?></u></b></h4>
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
  <a  href="viewheads"> </a>

       
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
	                      <form class="form form-horizontal" method="POST" enctype="multipart/form-data">
                        <div class="form-body">
                          <h4 sty class="form-section" style="color: black" ><i class="fa fa-user"></i> Upload Graduate Files </h4>
                          <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="projectinput2">File Name</label>
                       <select style="box-shadow: 0 0 4px #333D47;background-color: #1090CD;color:white" id="file_name" name="file_name" class="form-control">

                               <?php

include('connection.php');
                          $sql = "SELECT name FROM file_heads";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {



  $sql23 = "SELECT file_name FROM files where reg_no='$id' and file_name='$row[name]'";
$result23 = $conn->query($sql23);

if ($result23->num_rows > 0) {

}

else
{
   echo "<option value='".$row['name']."''>".$row['name']."</option>";
 
 }
  }
}            ?>


                      





                     
                     
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="projectinput1">Upload Files</label>
                      <input onchange="ValidateSize(this)" style="box-shadow: 0 0 4px #333D47;background-color: #1090CD;color:white" type="file" required="" autofocus="true" id="file" class="form-control" placeholder="" name="file">
                    </div>
                  </div>


 <div class="col-md-4" id="imagePreview">


                  </div>
  <script>
        document.getElementById('image').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.maxWidth = '300px';
                document.getElementById('imagePreview').innerHTML = '';
                document.getElementById('imagePreview').appendChild(img);
            }
            reader.readAsDataURL(file);
        });
    </script>
                   <!--  <div class="col-md-6">
                    <div class="form-group">
                      <label for="projectinput1">Reg_No</label>
                      <input style="box-shadow: 0 0 4px #333D47;background-color: #1090CD;color:white" type="text" required="" autofocus="true" id="reg_no" class="form-control" placeholder="" name="head">
                    </div>
                  </div> -->
                  
                </div>
                             

                  </div>



                

                       <button  style="background-color:#5B8343;color:white;border:1px solid #1090CD"  id="save" name="submit"  type="submit" class="btn btn-outline-info " >
                                  <i class="fa fa-check-square-o"></i> Save
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

<script>
$(document).ready(function(){
  $("#save").click(function(){

 
var head=$('#head').val();
    var category=$('#category').val();

         
 



    if (head=='')
{

                            swal({
    title: 'Insertion Failed.....!',
    text: 'Please Write HeadName.....',
    type: 'danger',
    timer: 2500,
    showConfirmButton: true
  }).then(function() {
    document.getElementById('head').focus();
  });

}



     if(head!='')
     {
 $.ajax({
                  type:'POST',
                    url: 'saveempheads.php',
                    dataType: 'json',
                     data: {head:head,category:category},
                      success:function(data){
console.log(data);
if (data[0]['success']=='success')
                        {

    swal({
    title: 'Success Alert',
    text: 'Head Added Successfully.....',
    type: 'success',
    timer: 2500,
    showConfirmButton: false
  }).then(function() {
    document.getElementById('head').focus();
  });



                   $('#head').val("");
                            
                        
                                             }



    if (data[0]['duplicate']=='duplicate')
                        {
    $('#head').val("");
                           

                            swal({
    title: 'Duplicate Alert.....!',
    text: 'Duplicate Head Found.....',
    type: 'danger',
    timer: 2500,
    showConfirmButton: false
  }).then(function() {
    document.getElementById('head').focus();
  });
                        }

                    
                      }
                    });
}
});
});









                                                           </script>





 <script type="text/javascript">
 
function ValidateSize(file) {
    
    
    
  
        var FileSize = file.files[0].size / 1024 / 1024; // in MiB

        if (FileSize > 1) {
     document.getElementById('file').value= null;
            alert('File size exceeds 1 MB');

        } 
 var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img style=" max-width: 160px; max-height: 120px; border: none;" src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }



    }

</script>