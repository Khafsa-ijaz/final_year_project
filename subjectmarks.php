<?php
include('session_head.php');
include('sessionfinder.php');
$type2="nill";
$type3="nill";
$type4="nill";
date_default_timezone_set("Asia/Karachi");
$d=date('Y-m-d H:i:s');
$byy=$rowsession['username'];
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/sweetalert.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta name="description" content="School Management System developed by Pak Softwares. The system provides the best and easy solution to handle school matters including admissions, fees, accounts, examination, sms, website controls, portal controls and many more.">
    <meta name="keywords" content="school management system, accounts management, web app, biomatric systems, examination, fees system, learning management system (lms), portals">
    <meta name="author" content="PAKSOFTWARE">
    <title>Subject Marks</title>
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
       
       <?php include('includeadmissions.php');
          ?>

   <?php include('second.php');
    ?>

       <?php include('third.php');
    ?>
    <?php include('fourth.php');
    ?>


       



          <li  class=" nav-item"><a href="#"><i class="fa fa-book"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Examination</span></a>
            <ul class="menu-content">


   <?php
                $sqladv = "SELECT pagename,link FROM menu where category='Examination' and status='1' and user='$rowsession[username]'";
$resultadv = $conn->query($sqladv);

  // output data of each row
  while($rowadv = $resultadv->fetch_assoc()) {


if ($rowadv['pagename']=='Subject Marks')
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
       
                 
              <div style="background-color: #f9d140" class="card-header">
                  <h4 style="color:black" class="card-title" id="horz-layout-colored-controls">Add Subject Marks</h4>
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
            
         <form class="form form-horizontal" method="POST">              <div class="form-body">
                 <div class="row"> 
                      
                      
                       <div class="col-sm-4">
                   <div class="form-group">
                  <label style="color:black">Term Name</label>
                 <div  class="form-group">
                    <select style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;"    required="" name="termname" class="form-control" id="t" placeholder="2500">
                             
                       <?php
          include('connection.php');
  $sql = "SELECT DISTINCT tname FROM terms where session='$session'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?>

      <option value="<?php echo $row['tname']?>"><?php echo $row['tname']?></option>";
     <?php
    }
  }
  $conn->close();
  ?>
                    </select>
                  </div>
                  </div>
                </div>
                      
              <div class="col-sm-4">
                <div class="form-group">
                  <label style="color:black">Class Name</label>
                 <div  class="form-group">
                    <select style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;"  type="text"   required="" name="classname"
                    class="form-control" id="classname" placeholder="Enter Class Name">
                    <option value="0">Select Class</option>";
          <?php
          include('connection.php');
  $sql = "SELECT id,cname from classes where csession='$session'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {

      $sql120 = "SELECT DISTINCT cname FROM classes where id='$row[id]'";
      $result120 = $conn->query($sql120);
      $row120 = $result120->fetch_assoc();

    ?>
        
        <option value="<?php echo $row['id']?>"><?php echo $row120['cname']?></option>";
     <?php
    }
  }
  $conn->close();
  ?>

                    </select>
                  </div>
                </div>
 </div>
  <div class="col-sm-4">
                <div class="form-group">
                        <label style="color:black">Subject Name</label>
                        <select style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" id="subjectname" required="" name="subjectname" class="form-control">


                        </select>
                      </div>
           </div>
              
              </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div id="first" class="form-group">
                            <label style="color:black">Select Exam Type</label>
                        <select style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" required="" name="type1" class="form-control">
                           <option value="None">None</option>
                          <option value="Reading">Reading</option>
                          <option value="Writing">Writing</option>
                          <option value="Oral">Oral</option>
                          <option value="Practical">Practical</option>
                          <option value="Theory">Theory</option>
                          <option value="Nazira">Nazira</option>
                          <option value="Hifz">Hifz</option>
                          <option value="Listening">Listening</option>
                          <option value="Speaking">Speaking</option>
                          <option value="Assignment">Assignment</option>
                        </select>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group" id="second">
                        <label style="color:black">Enter Marks</label>
              <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="number" style="border-color:purple;" required=""   name="marks1" class="form-control">
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                            <label style="color:black">Select Exam Type</label>
                        <select style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" style="border-color:purple;" required="" name="type2" class="form-control">
                          <option value="None">None</option>
                          <option value="Reading">Reading</option>
                          <option value="Writing">Writing</option>
                          <option value="Oral">Oral</option>
                          <option value="Practical">Practical</option>
                          <option value="Theory">Theory</option>
                          <option value="Nazira">Nazira</option>
                          <option value="Hifz">Hifz</option>
                          <option value="Listening">Listening</option>
                          <option value="Speaking">Speaking</option>
                          <option value="Assignment">Assignment</option>  
                        </select>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                        <label style="color:black">Enter Marks</label>
              <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="number"   name="marks2"   class="form-control">
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                            <label style="color:black">Select Exam Type</label>
                        <select style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" required="" name="type3"  class="form-control">
                          <option value="None">None</option>
                          <option value="Reading">Reading</option>
                          <option value="Writing">Writing</option>
                          <option value="Oral">Oral</option>
                          <option value="Practical">Practical</option>
                          <option value="Theory">Theory</option>
                          <option value="Nazira">Nazira</option>
                          <option value="Hifz">Hifz</option>
                          <option value="Listening">Listening</option>
                          <option value="Speaking">Speaking</option>
                          <option value="Assignment">Assignment</option>
                        </select>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                        <label style="color:black">Enter Marks</label>
              <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="number"   name="marks3"  class="form-control">
                      </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                            <label style="color:black">Select Exam Type</label>
                        <select style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" required="" name="type4"  class="form-control">
                          <option value="None">None</option>
                          <option value="Reading">Reading</option>
                          <option value="Writing">Writing</option>
                          <option value="Oral">Oral</option>
                          <option value="Practical">Practical</option>
                          <option value="Theory">Theory</option>
                          <option value="Nazira">Nazira</option>
                          <option value="Hifz">Hifz</option>
                          <option value="Listening">Listening</option>
                          <option value="Speaking">Speaking</option>
                          <option value="Assignment">Assignment</option>
                        </select>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                        <label style="color:black">Enter Marks</label>
              <input style="box-shadow: 0 0 4px #333D47;background-color: #4C6586;color:white;" type="number"    name="marks4" id="marks4"  class="form-control">
                      </div>
                    </div>
                </div>
              </div>

             
              </div>
               
                <input name="submit"  type="submit" class="btn btn-warning" value="Add Subject Marks" />
                </form>


                  <?php
                include('connection.php');
                if(isset($_POST['submit']))
  {
      
    
     $cname=$_POST['classname'];
     $sname=$_POST['subjectname'];
     $tname=$_POST['termname'];
     $type1=$_POST['type1'];
     
     if ($type1=='None')
     {
           echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Failed!","Please Enter Marks to Proceed!","error");';
  echo '}, 1000);</script>';
  

exit();
     }
      if ($type2=='None')
     {
           echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Failed!","Please Enter Marks to Proceed!","error");';
  echo '}, 1000);</script>';
  

exit();
     }
      if ($type3=='None')
     {
           echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Failed!","Please Enter Marks to Proceed!","error");';
  echo '}, 1000);</script>';
  

exit();
     }
      if ($type4=='None')
     {
           echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Failed!","Please Enter Marks to Proceed!","error");';
  echo '}, 1000);</script>';
  

exit();
     }
     
     
     $marks1=$_POST['marks1'];
     $type2=$_POST['type2'];
     $marks2=$_POST['marks2'];
     $type3=$_POST['type3'];
     $marks3=$_POST['marks3'];
    $type4=$_POST['type4'];
     $marks4=$_POST['marks4'];
     if ($marks1==null)
     {
          $marks1=0;
     }
     
     if($marks2==null){
      $marks2=0;
     }
     if($marks3==null){
      $marks3=0;
     }
     if($marks4==null){
      $marks4=0;
     }
      $total=$marks1+$marks2+$marks3+$marks4;
      $sql="SELECT subject FROM child_marks WHERE class='$cname' AND subject='$sname' AND termname='$tname' and session='$session'";
      $result=mysqli_query($conn, $sql);
      if($result->num_rows>0){

      }else{
         
        $sql ="insert into child_marks (class,termname,subject,child_1,child_2,child_3, child_4, t1,t2,t3,t4,total_marks,byy,datetimee,session)values
     ('$cname','$tname','$sname','$type1','$type2','$type3','$type4','$marks1','$marks2','$marks3','$marks4', '$total','$byy','$d','$session' )";
     if ($conn->query($sql) === TRUE) {
          echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Success Alert!","Marks Added Successfully!","success");';
  echo '}, 1000);</script>';
  
 



     }
     else
     {
           echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Failed!","Failed to Enter Marks!","success");';
  echo '}, 1000);</script>';
     }
          
      }
     
    

$conn->close();
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
      function selectAll(){
        var items=document.getElementsByTagName('input');
        for(var i=0; i<items.length; i++){
          if(items[i].type=='checkbox')
            items[i].checked=true;
        }
      }
      
      function UnSelectAll(){
        var items=document.getElementsByTagName('input');
        for(var i=0; i<items.length; i++){
          if(items[i].type=='checkbox')
            items[i].checked=false;
        }
      }     
    </script>




    <script type="text/javascript">
  $(document).change(function(){
    var cc=$('#classname').val();
    var dd=$('#termname').val();
    var kk=$('#subjectname').val();
    
    $.ajax({
      type: 'POST',
      url: 'load_subjectmarks_data.php',
      data: {cc:cc, dd:dd, kk:kk},
      dataType: 'json',
      success:function(data){
        
        if(data=="Found"){
          $('#btnAdd').prop('disabled', true);
          swal("Failed...!", "Subject Marks Already Exist!", "error");
        }else{
          $('#btnAdd').prop('disabled', false);
        }
      }
    });
  })
</script>
<script type="text/javascript">
$(document).ready(function(){

            $("#classname1").click(function(){

                var cc = $(this).val();
                
                               $.ajax({
                    type:'POST',
                    url: 'addmarks.php',
                    data: {cc:cc}
                  });
                             });
          });

                    </script>
<script type="text/javascript">
  function mess()
  {
                    swal({
    title: 'Good Job.....!',
    text: 'Marks Added Successfully.....',
    type: 'success',
    timer: 2500,
    showConfirmButton: false
  }).then(function() {
location.reload();
  });
 //var marks5=$('#second').find('#marks5').val();

if (marks4==null)
{

swal("Failed...!", "Please Enter marks!", "error");
return false;
}
else
{
   swal("success...!", "Marks Added Successfully...!", "success");
   return true;
  }


  }
</script>
<script type="text/javascript">
  $(document).ready(function(){
        
         $('#classname').change(function(){
        var cc= $(this).val();
        var tt= $("#t").val();
        console.log(tt);
                  $.ajax({
                    type:'POST',
                    url: 'load_data_subjects.php',
                    data: {cc:cc,tt:tt},
                    dataType: 'json',
                    success:function(data){
                        console.log(data);
                    
                    var len = data.length;
                    $("#subjectname").empty();
                       for( var i = 0; i<len; i++){
                            var regno = data[i]['sname'];
$("#subjectname").append("<option value='"+data[i]['sname']+"'>"+data[i]['sname']+"</option>");
                          }
                    }
                     });
                  });

    });
</script>










<script type="text/javascript">
  $(document).ready(function(){
        
         $('#t').change(function(){
        var cc= $("#classname").val();
        var tt= $("#t").val();
        
          $.ajax({
                    type:'POST',
                    url: 'load_data_class.php',
                    data: {tt:tt},
                    dataType: 'json',
                    success:function(data){
                        console.log(data);
                    
                    var len = data.length;
                    $("#classname").empty();
                       for( var i = 0; i<len; i++){
                            var regno = data[i]['cname'];
$("#classname").append("<option value='"+data[i]['id']+"'>"+data[i]['cname']+"</option>");

var tt= $("#t").val();
        console.log(tt);
         var cc= $("#classname").val();
    console.log(cc);
                  $.ajax({
                    type:'POST',
                    url: 'load_data_subjects.php',
                    data: {cc:cc,tt:tt},
                    dataType: 'json',
                    success:function(data){
                        console.log(data);
                    
                    var len = data.length;
                    $("#subjectname").empty();
                       for( var i = 0; i<len; i++){
                            var regno = data[i]['sname'];
$("#subjectname").append("<option value='"+data[i]['sname']+"'>"+data[i]['sname']+"</option>");
                          }
                    }
                     });

                          }
                    }
                     });
                     
                     
                     
                     
         
                  });

    });
</script>

<script type="text/javascript">
      function selectAll(){
        var items=document.getElementsByTagName('input');
        for(var i=0; i<items.length; i++){
          if(items[i].type=='checkbox')
            items[i].checked=true;
        }
      }
      
      function UnSelectAll(){
        var items=document.getElementsByTagName('input');
        for(var i=0; i<items.length; i++){
          if(items[i].type=='checkbox')
            items[i].checked=false;
        }
      }     
    </script>
    
    
    
    
    
    
    
    
    
<script type="text/javascript">
  $(document).ready(function(){
        
     
        var cc= $("#classname").val();
        var tt= $("#t").val();
        
          $.ajax({
                    type:'POST',
                    url: 'load_data_class.php',
                    data: {tt:tt},
                    dataType: 'json',
                    success:function(data){
                        console.log(data);
                    
                    var len = data.length;
                    $("#classname").empty();
                       for( var i = 0; i<len; i++){
                            var regno = data[i]['cname'];
$("#classname").append("<option value='"+data[i]['id']+"'>"+data[i]['cname']+"</option>");

var tt= $("#t").val();
        console.log(tt);
         var cc= $("#classname").val();
    console.log(cc);
                  $.ajax({
                    type:'POST',
                    url: 'load_data_subjects.php',
                    data: {cc:cc,tt:tt},
                    dataType: 'json',
                    success:function(data){
                        console.log(data);
                    
                    var len = data.length;
                    $("#subjectname").empty();
                       for( var i = 0; i<len; i++){
                            var regno = data[i]['sname'];
$("#subjectname").append("<option value='"+data[i]['sname']+"'>"+data[i]['sname']+"</option>");
                          }
                    }
                     });

                          }
                    }
                     });
                     
                     
                     
                     
         
            

    });
</script>   
    
    


