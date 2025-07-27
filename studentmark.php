<?php
include('session_head.php');
include('sessionfinder.php');
date_default_timezone_set("Asia/Karachi");
$d=date('Y-m-d H:i:s');
$byy=$rowsession['username'];
?>
<?php
$date=$_POST['date'];
 $state='Present';
 $sum=0;
?>
<?php
include('connection.php');
if(isset($_POST['save'])){
    $regno = $_POST['regno'];
$class=$_POST['class'];
$date1=$_POST['date'];
$month=$_POST['month'];
  $status=$_POST['status'];


  for($i=0;$i<count($regno);$i++){
    $sqlj = "SELECT sname,mob FROM students where regno='$regno[$i]'";
$resultj = $conn->query($sqlj);

if ($resultj->num_rows > 0) {
  // output data of each row
  while($rowj = $resultj->fetch_assoc()) {
   $sname=$rowj['sname'];
   $mob=$rowj['mob'];
  }
} 



$sql420 = "SELECT * FROM attendence where regno='$regno[$i]' and date='$date1'";
$result420 = $conn->query($sql420);

if ($result420->num_rows > 0) {
  
$sql3 = "UPDATE attendence SET status='$status[$i]' WHERE regno='$regno[$i]' and date='$date1'";

if ($conn->query($sql3) === TRUE) {
  if ($status[$i]=='Present')
  {
$sql1122 = "SELECT * FROM autosms where status='1' and id='5'";
$result1122 = $conn->query($sql1122);

if ($result1122->num_rows > 0) {
$msg="Dear Parent  your child " .$sname." is Present at Date : ".$date1." ";
include('sms.php');
 
  // Send the POST request with cURL
  $ch = curl_init('http://outreach.pk/api/sendsms.php/sendsms/url?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 echo  $response = curl_exec($ch);
curl_close($ch);

}
}

if ($status[$i]=='Absent')
  {
$sql1122 = "SELECT * FROM autosms where status='1' and id='6'";
$result1122 = $conn->query($sql1122);

if ($result1122->num_rows > 0) {
$msg="Dear Parent  your child " .$sname." is Absent at Date : ".$date1." ";
include('sms.php');
 
  // Send the POST request with cURL
  $ch = curl_init('http://outreach.pk/api/sendsms.php/sendsms/url?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 echo  $response = curl_exec($ch);
curl_close($ch);

}
}

if ($status[$i]=='Leave')
  {
$sql1122 = "SELECT * FROM autosms where status='1' and id='7'";
$result1122 = $conn->query($sql1122);

if ($result1122->num_rows > 0) {
$msg="Dear Parent  your child " .$sname." is on Leave at Date : ".$date1." ";
include('sms.php');
 
  // Send the POST request with cURL
  $ch = curl_init('http://outreach.pk/api/sendsms.php/sendsms/url?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 echo  $response = curl_exec($ch);
curl_close($ch);

}
}
header("Location: studentattendance");
}


 }
else
{
   $sql = "INSERT INTO attendence (regno, date, month,status,class,byy,datetimee,session)

VALUES ('$regno[$i]', '$date1', '$month','$status[$i]','$class[$i]','$byy','$d','$session')";

if ($conn->query($sql) === TRUE) {

if ($status[$i]=='Present')
  {
$sql1122 = "SELECT * FROM autosms where status='1' and id='5'";
$result1122 = $conn->query($sql1122);

if ($result1122->num_rows > 0) {
$msg="Dear Parent  your child " .$sname." is Present at Date : ".$date1." ";
include('sms.php');
 
  // Send the POST request with cURL
  $ch = curl_init('http://outreach.pk/api/sendsms.php/sendsms/url?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 echo  $response = curl_exec($ch);
curl_close($ch);

}
}

if ($status[$i]=='Absent')
  {
$sql1122 = "SELECT * FROM autosms where status='1' and id='6'";
$result1122 = $conn->query($sql1122);

if ($result1122->num_rows > 0) {
$msg="Dear Parent  your child " .$sname." is Absent at Date : ".$date1." ";
include('sms.php');
 
  // Send the POST request with cURL
  $ch = curl_init('http://outreach.pk/api/sendsms.php/sendsms/url?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 echo  $response = curl_exec($ch);
curl_close($ch);

}
}

if ($status[$i]=='Leave')
  {
$sql1122 = "SELECT * FROM autosms where status='1' and id='7'";
$result1122 = $conn->query($sql1122);

if ($result1122->num_rows > 0) {
$msg="Dear Parent  your child " .$sname." is on Leave at Date : ".$date1." ";
include('sms.php');
 
  // Send the POST request with cURL
  $ch = curl_init('http://outreach.pk/api/sendsms.php/sendsms/url?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 echo  $response = curl_exec($ch);
curl_close($ch);

}
}

   
} 
}
header("Location: studentattendance");

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
    <title>Schoolwise Attendance</title>
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


       



          <li  class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Students Attendance</span></a>
            <ul class="menu-content">


   <?php
                $sqladv = "SELECT pagename,link FROM menu where category='Student Attendance' and status='1' and user='$rowsession[username]'";
$resultadv = $conn->query($sqladv);

  // output data of each row
  while($rowadv = $resultadv->fetch_assoc()) {


if ($rowadv['pagename']=='Mark Attendances')
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
    <div class="col-md-12">
          <div class="card">
       
                 
              <div style="background-color: #f9d140" class="card-header">
                     
      
                      <?php
                  $a1=date("F",strtotime($date));
      $a2=date("Y",strtotime($date));
      $a3=date("d",strtotime($date));
      $rdate=$a3."-".$a1."-".$a2;
      
      ?>
             

                 <?php
                  $a1=date("m",strtotime($date));
      $a2=date("Y",strtotime($date));

      $format=$a2."-".$a1;
      
      ?>


                <h4 class="card-title">School Wise Attendance <b><i style="color:red">Date: </i><u><?php echo $rdate?></u></b></h4>
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
 <form method="post" action="#">
                    <input type="hidden" value="<?php echo $curr_class?>" name="class"/>
                        <input type="hidden" value="<?php echo $date?>" name="date"/>
                                               <input type="hidden" value="<?php echo $format?>" name="month"/>
              <div style="background-color: #304a7b"  class="card-content collpase show">

          <section   id="file-export">

    <div class="row">
        <div class="col-12">

            <div   class="card">
               
                <div class="card-content collapse show">
  <form method="post" action="#">
                        <input type="hidden" value="<?php echo $date?>" name="date"/>
                                               <input type="hidden" value="<?php echo $format?>" name="month"/>
                    <div class="card-body card-dashboard">
                

                        <table sty class="table table-striped table-bordered file-export">
                            <thead>
                                <tr>
                                   <th style="background-color:#304A7B;color: white ">S.#</th>
                                      <th style="background-color:#304A7B;color: white ">Reg No</th>
                                    <th style="background-color:#304A7B;color: white  ">Name</th>
                                          <th style="background-color:#304A7B;color: white  ">Class</th>
                                           <th style="background-color:#304A7B;color: white  ">Contact</th>
                                                 <th style="background-color:#304A7B;color: white " >Attendance</th>
                  
                                </tr>
                            </thead>
                            <tbody>
                               
                                
                            <?php
  $count=0;
            include('connection.php');

            $sql = "SELECT regno,sname,curr_class,mob FROM students  where status='Active' and csession='$session' order by curr_class DESC ";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  {
$rea=$row['regno'];         
   $curr_class=$row['curr_class'];
      include('connection.php');
      $sql1 = "SELECT cname FROM classes where id='$curr_class'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
  $cc=$row1['cname'];
  }
}


$sql6 = "SELECT status FROM attendence where regno='$rea' and date='$date'";
$result6 = $conn->query($sql6);

if ($result6->num_rows > 0) {
  // output data of each row
  while($row6 = $result6->fetch_assoc()) {
   $state=$row6['status'];
  }
}



           echo " <tr>
             
                     <td>".++$count."</td>
                  
                     <td><input type='text' readonly class='form-control'  value=".$row["regno"]." name='regno[]'/></td>
                     <td>".$row["sname"]."</td>
                        <td>".$cc."</td>
                        <input type='hidden' readonly class='form-control'  value=".$curr_class." name='class[]'/>
                            <td>".$row["mob"]."</td>
   ";





if ($state=='Present')
{


 echo "
          
                 <td>

 <select name='status[]' class=' form-control'>
 <option value='$state'> $state </option>
    <option value='Absent'> Absent </option>
    <option value='Leave'> Leave </option>

  </select>


</td>
      
                  ";
                 }


if ($state=='Absent')
{


echo  "
          
                 <td>

 <select name='status[]' class=' form-control'>
 <option value='$state'> $state </option>
  <option value='Present'> Present </option>
    <option value='Leave'> Leave </option>

  </select>


</td>
      
                  ";
                 }

if ($state=='Leave')
{


echo  "
          
                 <td>

 <select name='status[]' class=' form-control'>
  <option value='$state'> $state </option>
 <option value='Present'> Present </option>
    <option value='Absent'> Absent </option>
 

  </select>


</td>
      
                  ";
                 }




               
              
              echo "
                    
               </tr>
                               
              ";
             }
           }

           ?>
                  

       
                         
                          </tbody>

</tfoot>
                        </table>
                      
                          
                    </div>
                </div>
              <p align="center"><button type="submit" class="btn btn-warning btn-glow" name="save">Mark Attendance <?php echo $rdate?></button></p>
              </form>
              </form>
            </div>
        </div>
    </div>
</section>
 
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




    <footer style="background-color: #F9D140" class="footer footer-static footer-light navbar-border">
      <p style="color:black" class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span style="color:black" class="float-md-left d-block d-md-inline-block">Copyright  &copy; 2021 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PAKSOFTWARES </a>, All rights reserved. </p>
    </footer>

    <!-- BEGIN VENDOR JS-->
     <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/buttons.flash.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/jszip.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/pdfmake.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/vfs_fonts.js"></script>
    <script src="../../../app-assets/vendors/js/tables/buttons.html5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/buttons.print.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
  
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>

<script type="text/javascript">
   $('.file-export').DataTable({
  


         "scrollY":        "800px",
    "scrollCollapse": true,
    "paging":         false,
   "scrollY":        true,

       
             



    });


    $('.buttons-csv').addClass(' fa fa-file-excel-o btn btn-outline-success btn-sm btn-min-width btn-glow mr-1');
     $('.buttons-excel').addClass(' fa fa-file-excel-o btn btn-outline-success btn-sm btn-min-width btn-glow mr-1');
      $('.buttons-pdf').addClass('fa fa-file-pdf-o btn btn-outline-danger btn-sm btn-min-width btn-glow mr-1');
       $('.buttons-colvis').addClass('btn btn-outline-warning btn-sm btn-min-width btn-glow mr-1');
</script>