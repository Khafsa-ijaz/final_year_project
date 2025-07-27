<?php
include('session_head.php');
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <style>
    
.reportlists{margin: 0; padding: 0; list-style: none;}
.reportlists li{display: block;}
.reportlists li a{color: #444; padding: 10px 5px;display: block;}
.reportlists li a.active{color: #0084B4; text-decoration: none;font-family:'Roboto-Bold';}
.reportlists li a:hover {color: #0084B4; text-decoration: none;}
.reportlists li.active {font-family: 'Roboto-Bold'; background:#dceeff;}
.reportlists li a i{padding-right:5px;}

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
 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content=" CS&IT DEPARTMENT Website Developed By Khafsa IJaz And Habeeba Mateen">
    <meta name="keywords" content="">
    <meta name="author" content="Khafsa Ijaz">
    <title>Attendance Reports Area</title>
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

   <?php include('second.php');
    ?>

       



          <li  class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Attendance Section</span></a>
            <ul class="menu-content">


   <?php
                $sqladv = "SELECT pagename,link FROM menu where category='Attendance Section' and status='1' and user='$rowsession[username]'";
$resultadv = $conn->query($sqladv);

  // output data of each row
  while($rowadv = $resultadv->fetch_assoc()) {


if ($rowadv['pagename']=='Add Attendance File')
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
       
                 
              <div style="background-color: #5B8343" class="card-header">
                  <h4 style="color:white" class="card-title" id="horz-layout-colored-controls">Welcome to Attendance Section Reports</h4>
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
            
           <div class="row">
    <div class="col-md-12">
        <div class="box box-primary border0 mb0 margesection">
            <?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","csit");
require_once('vendor/php-excel-reader/excel_reader2.php');
require_once('vendor/SpreadsheetReader.php');

if (isset($_POST["import"]))
{
    
    
  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
  if(in_array($_FILES["file"]["type"],$allowedFileType)){

        $targetPath = 'uploads/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);
        
        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {
            
            $Reader->ChangeSheet($i);
            
            foreach ($Reader as $Row)
            {
          
                
                   $empid = "";
                if(isset($Row[0])) {
                    $empid = mysqli_real_escape_string($conn,$Row[0]);
                }
                   $date = "";
                if(isset($Row[1])) {
                    $date = mysqli_real_escape_string($conn,$Row[1]);
                }
                $month = "";
                if(isset($Row[2])) {
                    $month = mysqli_real_escape_string($conn,$Row[2]);
                }
                 $status= "";
                if(isset($Row[3])) {
                    $status = mysqli_real_escape_string($conn,$Row[3]);
                }
                 $intime = "";
                if(isset($Row[4])) {
                    $intime = mysqli_real_escape_string($conn,$Row[4]);
                }
                 $outtime = "";
                if(isset($Row[5])) {
                    $outtime = mysqli_real_escape_string($conn,$Row[5]);
                }
                
              
                
          if ($empid!='')
          {      


   $sql3="SELECT * FROM tattendence WHERE date='$date' and emp_id='$empid'";
      $result3=mysqli_query($conn, $sql3);
      if($result3->num_rows>0){

 $message = "duplicate found !!";
      }
      else
      {

                
    $query = "INSERT into tattendence (emp_id,date,month,status,itime,otime) values('$empid','$date','$month','$status','$intime','$outtime')";
                    $result = mysqli_query($conn, $query);
                }
            }
                    
                    
                    
                    
                   
                    
  
                
                

                
                    if (! empty($result)) {
                        $type = "success";
                  
                        $message = "Attendance uploaded   Successfully";
                    } else {
                        $type = "error";
                        echo("Error description: " .$query2."<br>" .$conn -> error);
                    }
                
             }
        
         }
  }
  else
  { 
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
  }
}
?>

<!DOCTYPE html>
<html>    
<head>
<style>    
body {
  font-family: Arial;
  width: 550px;
}

.outer-container {
  background: #F0F0F0;
  border: #e0dfdf 1px solid;
  padding: 40px 20px;
  border-radius: 2px;
}

.btn-submit {
  background: #333;
  border: #1d1d1d 1px solid;
    border-radius: 2px;
  color: #f0f0f0;
  cursor: pointer;
    padding: 5px 20px;
    font-size:0.9em;
}

.tutorial-table {
    margin-top: 40px;
    font-size: 0.8em;
  border-collapse: collapse;
  width: 100%;
}

.tutorial-table th {
    background: #f0f0f0;
    border-bottom: 1px solid #dddddd;
  padding: 8px;
  text-align: left;
}

.tutorial-table td {
    background: #FFF;
  border-bottom: 1px solid #dddddd;
  padding: 8px;
  text-align: left;
}

#response {
    padding: 10px;
    margin-top: 10px;
    border-radius: 2px;
    display:none;
}

.success {
    background: #c7efd9;
    border: #bbe2cd 1px solid;
}

.error {
    background: #fbcfcf;
    border: #f3c6c7 1px solid;
}

div#response.display-block {
    display: block;
}
.blinking{
    animation:blinkingText 1.2s infinite;
}
@keyframes blinkingText{
    0%{     color: green;    }
    49%{    color: red; }
    60%{    color: green; }
    99%{    color:red;  }
    100%{   color: red;    }
}
</style>
</head>

<body>
    <h2 style="font-weight: bold;">Import Attendance Excel File</h2>
    
    <div class="outer-container">
        <form action="" method="post"
            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <div>
                <label >Choose Excel
                    File</label> <input type="file" name="file"
                    id="file" accept=".xls,.xlsx" >
                <button type="submit" id="submit" name="import"
                    class="btn btn-info-submit" style="background-color: #5B8343; color:white; font-weight: bold;">Import</button>
        
            </div>
        
        </form>
        <hr>
        <a style='color:#5b8343' href='uploads/SAMPLE ATTENDANCE SHEET.xlsx'><span class="blinking">Download Sample Excel(Attendace Sheet)</span></a>
        <hr>
                <a href='dashboard ' style="color:#5B8343">Back to Main</a>
        
    </div>
    <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    
         

</body>
</html>
           
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