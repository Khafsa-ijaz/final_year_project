<?php
include('session_head.php');
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <style>
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
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta name="description" content="School Management System developed by Pak Softwares. The system provides the best and easy solution to handle school matters including admissions, fees, accounts, examination, sms, website controls, portal controls and many more.">
    <meta name="keywords" content="school management system, accounts management, web app, biomatric systems, examination, fees system, learning management system (lms), portals">
    <meta name="author" content="PAKSOFTWARE">
    <title>Receive Installment</title>
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
          
          <li style="background-color: #304A7B" class=" navigation-header"><span data-i18n="nav.category.layouts">ATLANITS TOWERS</span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
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


         <li  class=" nav-item"><a href="#"><i class="fa fa-money"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Installment Section</span></a>
            <ul class="menu-content">


   <?php
                $sqladv = "SELECT pagename,link FROM menu where category='Installment Section' and status='1' and user='$rowsession[username]'";
$resultadv = $conn->query($sqladv);

  // output data of each row
  while($rowadv = $resultadv->fetch_assoc()) {

if ($rowadv['pagename']=='Receive Installment')
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
                  <h4 style="color:black" class="card-title" id="horz-layout-colored-controls">Welcome to Receive Installment Form</h4>
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
           

      <div class="card-header">
            <div id="div2">
  <div class="row">
              <div class="col-md-3">
			  <h3 class="card-title"  style="margin-top: 10px;">Receive Installment</h3>
			  </div>
			  <div class="col-md-1.5" style="margin-top: 10px;">
			  <h3 class="card-title"><b>FORM NO:&nbsp &nbsp </b></h3>
			  </div>
			  <div class="col-md-2.5">
					<input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" autofoucs="true"  id="first"   required="" class="username form-control"  name="regno" type="number"  placeholder=" ">
			  </div>
			  <div class="col-md-1.5" style="margin-top: 10px;">
			     <h3 class="card-title"><b>&nbsp &nbsp MONTH:  </b></h3>
			  </div>
			  <div class="col-md-3">
			     <?php $datse=date("Y-m")?>
			  <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" id="mnth"     value="<?php echo $datse ?>"  name="mnth" type="month" class="form-control" placeholder="Bill No : ">
			  </div>
			  </div>
			
            </div>
          </div>
		   <div class="card-header">
		  <div class="row" style="margin-left: 70px; ">
		  
		  <div class="col-md-1.5" style="margin-top: 10px; ">
			  <h3 class="card-title"><b>PAID DATE:&nbsp  </b></h3>
			  </div>
              <div class="col-md-2.5" >
                  <?php $date=date("Y-m-d")?>
			  <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" id="curr_date"    required="" value="<?php echo $date ?>"  name="regno" type="date" class="form-control" placeholder="Bill No : ">
			  </div>
			   <div class="col-md-1.5" style="margin-top: 10px;">
			  <h3 class="card-title"><b>&nbsp &nbsp &nbspINSTALLMENT</b></h3>
			  </div>
			  <div class="col-md-2">
					<input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" id="netamt"   readonly=""  name="regno" type="number" class="form-control" placeholder=" ">
			  </div>
			    <div class="col-md-1.5" style="margin-top: 10px;">
			  <h3 class="card-title"><b> RCVD AMT:</b></h3>
			  </div>
			  <div class="col-md-2">
			   <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" onClick="this.select();" id="second" class="username  form-control"  required=""  name="regno" type="number" placeholder=" ">
			  </div>
			    
			    </div>
				<div class="row" style="margin-left: 70px; ">
			
			    <div class="col-md-1.5" style="margin-top: 20px;">
			  <h3 class="card-title"><b>CREDIT IN:&nbsp &nbsp  </b></h3>
			  </div>
			  <div class="col-md-2.5" style="margin-top: 10px;">
			  <select style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" style="border-color:#17A2B8" required="" name="rcvdvia" id="rcvdvia" class="form-control">
			           <?php
                        include('config.php');
                $department_query = "SELECT DISTINCT bankname FROM banks";
                $stmt = $conn->prepare($department_query);
                $stmt->execute();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo "<option value='".$row['bankname']."''>".$row['bankname']."</option>";
                }
            ?>
                
                  </select>
			  </div>
			  <div class="col-md-1.5" style="margin-top: 20px;">
			  <h3 class="card-title"><b>&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp RCVD BY: </b></h3>
			  </div>
			  <div class="col-md-2" style="margin-top: 10px;" >
			   <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" id="reg" readonly=""  required=""  name="regno"  value="Atlantis" type="text" class="form-control" placeholder="Bill No : ">
			  </div>
			   <div class="col-md-1.5" style="margin-top: 20px;">
			  <h3 class="card-title"><b>BALANCE:&nbsp </b></h3>
			  </div>
			  <div class="col-md-2" style="margin-top: 10px;" >
			   <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" readonly=""  name="ij"  type="number" id="ij" class="form-control">
			  </div>
			  
			   

			  
			  
			  <div class="col-md-1" style="margin-top: 10px; margin-left: 0px;">
			   <input type="checkbox" id="clear">
			  
  <label for="vehicle1">Clear Installment</label>
			  </div>
			  <div class="col-md-2" style="margin-top: 10px;">
			   <!-- <h3 class="card-title"><b><button    class="btn btn-success">Receive </button> </b></h3> -->
			  </div>
			  
			  </div>
		   </div>
          <!-- /.card-body -->
   
         <div class="card-body">
            <div class="row">
              <div class="col-md-6">
        <div class="row">
         <div class="col-md-4">
            <div class="form-group">
                  <label>Name</label>
                 <div id="focus2" class="form-group">
                    <input style="box-shadow: 0 0 20px #F9D140;background-color: #333D47;color:white;" type="text" readonly="" style="border-color:#17A2B8"  id="iname" name="class" class="form-control">
                 
                       
                        
                  </div>
                </div>

              </div>
               <div class="col-md-4">
                   <div class="form-group">
                  <label>Nic</label>
                 <div id="third" class="form-group">
                      <input style="box-shadow: 0 0 20px #F9D140;background-color: #333D47;color:white;" type="text" readonly="" name="regno" id="icontact" class="form-control" >
       
  
                  </div>
                </div>
              </div>
                <div class="col-md-4">
                   <div class="form-group">
                  <label>Contact #</label>
                 <div id="four" class="form-group">
                   <input style="box-shadow: 0 0 20px #F9D140;background-color: #333D47;color:white;" type="text" readonly="" name="rollno" id="iproduct" class="form-control">
       
      
      </select>
                  </div>
                </div>
              </div>

              
              
               
               
                
             
                <!-- /.form-group -->
           
                <!-- /.form-group -->
              </div>


       
      </div>


             
                <!-- /.form-group -->
           
                <!-- /.form-group -->
              
              <!-- /.col -->
              <div class="col-md-6">
                <div class="row">
      <div class="col-md-4">
             <div class="form-group">
                  <label>Floor</label>
                 <div id="focus" class="form-group">
                    <input style="box-shadow: 0 0 20px #F9D140;background-color: #333D47;color:white;" type="text" style="border-color:#17A2B8" required="" id="itimeperiod" name="stuname" class="form-control" readonly=""  placeholder="">
                  </div>
                </div>
              </div>
               <div class="col-md-4">
                   <div class="form-group">
                  <label>Quaterly Installment</label>
                 <div id="six" class="form-group">
                    <input style="box-shadow: 0 0 20px #F9D140;background-color: #333D47;color:white;" type="number" required="" style="border-color:#17A2B8" name="fathername" id="imonthlyinstallment"  class="form-control" readonly=""  placeholder="">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                   <div class="form-group">
                  <label>Monthly Balance</label>
                 <div id="six" class="form-group">
                    <input style="box-shadow: 0 0 20px #F9D140;background-color: #333D47;color:white;" type="number" required="" style="border-color:#17A2B8" name="fathername" id="ibalamt"  class="form-control" readonly=""  placeholder="">
                  </div>
                </div>
              </div>
              

              </div>

          
               
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
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
      
 var currentBoxNumber = 0;
$(".username").keyup(function (event) {
    var mnth=$('#mnth').val();
  var curr_date=$('#curr_date').val();
  
      var cc=$('#first').val();
    if (event.keyCode == 13) {
        textboxes = $("input.username");
        currentBoxNumber = textboxes.index(this);
       
        if (currentBoxNumber===1)
{
var fees=$('#second').val();
var rcvdvia=$('#rcvdvia').val();

  if($('#clear').not(':checked').length){
       var clear=0;
    }else{
   var clear=1;
    } 
$.ajax({
                  type:'POST',
              
                    url: 'load_data61.php',
                    data: {cc:cc,fees:fees,curr_date:curr_date,rcvdvia:rcvdvia,clear:clear,mnth:mnth},
                   // dataType: 'json',
                    success:function(data){
                        console.log(data);
                        
                        $("#iname").val("");
                         $("#icontact").val("");
                          $("#iproduct").val("");
                           $("#itimeperiod").val("");
                            $("#imonthlyinstallment").val("");
                             $("#ibalamt").val("");
                              $("#netamt").val("");
                               $("#ij").val("");
                 
                 nextBox.focus();
            nextBox.select();

            event.preventDefault();
            return false;
          }
      });

  var fees=$('#second').val("");

    nextBox = textboxes[currentBoxNumber - 1];
            nextBox.focus();
            nextBox.select();
             event.preventDefault();
            return false;
}
        if (textboxes[currentBoxNumber + 1] != null) {
            nextBox = textboxes[currentBoxNumber + 1];
            if (event.keyCode == 13 ) {
var fname=$('#itimeperiod').empty();
$.ajax({
                  type:'POST',

                    url: 'load_data60.php',
                    data: {cc:cc,curr_date:curr_date,mnth:mnth},
                    dataType: 'json',
                    success:function(data){
                        console.log(data);
                        if(data.length==3)
                        {
                             swal("FAILED...!", "Installment Amount Clear for the Month!", "error");
                              $("#iname").val("");
                         $("#icontact").val("");
                          $("#iproduct").val("");
                           $("#itimeperiod").val("");
                            $("#imonthlyinstallment").val("");
                             $("#ibalamt").val("");
                              $("#netamt").val("");
                               $("#ij").val("");
                        }
                        if(data.length==2)
                        {
                             swal("Failed...!", "No Details Found!", "error");
                        }
$('#second').val(Math.ceil(data[0]['mbalamt']));
$('#netamt').val(Math.ceil(data[0]['monthlyinstallment']));


$('#iname').val(data[0]['name']);
$('#ij').val(Math.ceil(data[0]['ij']));
var rollno=$('#icontact').val(data[0]['contact']);
var sname=$('#iproduct').val(data[0]['product'])

var fname=$('#itimeperiod').val(data[0]['timeperiod'])


var cc=$('#imonthlyinstallment').val(Math.ceil(data[0]['monthlyinstallment']))


var ccd=$('#ibalamt').val(Math.ceil(data[0]['mbalamt']))
                 nextBox.focus();
            nextBox.select();

            event.preventDefault();
            return false;



          
          }
      });
            
        }
           

        }



    }
});



</script>