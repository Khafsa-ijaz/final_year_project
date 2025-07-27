<?php
include('session_head.php');
include('sessionfinder.php');
?>
<?php
$regno=$_POST['regno'];
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
    <title>Student Fee Chart</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMuli:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/app.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
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


              
           
    
   <li  class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Fees</span></a>
            <ul class="menu-content">


   <?php
                $sqladv = "SELECT pagename,link FROM menu where category='Fees' and status='1' and user='$rowsession[username]'";
$resultadv = $conn->query($sqladv);

  // output data of each row
  while($rowadv = $resultadv->fetch_assoc()) {

if ($rowadv['pagename']=='Charts')
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
                           <h4 class="card-title">Student Fee Chart 
                     Reg No: <b><?php echo $regno?></b></h4>
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

	            <div style="background-color: #304a7b"  class="card-content collpase show">

          <section   id="file-export">

    <div class="row">
        <div class="col-12">

            <div   class="card">
               
                <div class="card-content collapse show">

                    <div class="card-body card-dashboard">
                 <div class="s text-center " role="" aria-label="Basic example"> 
                      <form method="POST" action="feestudentpdf ">
                <input type="hidden" value="<?php echo $regno?>" name="regno">
        <button formtarget="_blank"  type="submit" style="background-color: #304A7B;color: white !important"  name="submit" class="btn btn-outline-warning btn-sm btn-glow" >
                    Complete PDF
                  </button>

            </form>
        





 
      </div>
      <hr style="  border-top: 2px dotted #304A7B;">

                          <table   class="table table-striped table-bordered responsive dataex-res-scrolling">
                            <thead>
                                <tr>
                                    <th style="background-color:#304A7B;color: white ">S.#</th>
                                    <th style="background-color:#304A7B;color: white ">Regno</th>
                                      <th style="background-color:#304A7B;color: white ">Name</th>
                                     <th style="color: white;background-color: #F57F17">Fee Period</th>
                                    <th style="background-color:#304A7B;color: white ">Payable BDD</th>
                                     <th style="background-color:#304A7B;color: white ">Payable ADD</th>
                                      <th style="background-color:#304A7B;color: white ">Arrears</th>
                                      <th style="background-color:#304A7B;color: white ">Received</th>
                                      <th style="color: black;background-color: #F9D140">Balance</th>
                                      
                                         <?php
                      include('connection.php');
                      $sql = "SELECT * FROM feesheads where id='1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
$h1=$row['h1'];
$h2=$row['h2'];
$h3=$row['h3'];
$h4=$row['h4'];
$h5=$row['h5'];
$h6=$row['h6'];
$h7=$row['h7'];

  }
} 
?>
                                        <th style="color: white;background-color: #F57F17"><?php echo $h1?></th>
                                          <th style="color: white;background-color: #F57F17"><?php echo $h2?></th>
                                            <th style="color: white;background-color: #F57F17"><?php echo $h3?></th>
                                              <th style="color: white;background-color: #F57F17">Monthly Fee</th>
                                                 <th style="color: white;background-color: #F57F17"><?php echo $h4?></th>
                                                    <th style="color: white;background-color: #F57F17"><?php echo $h5?></th>
                                                       <th style="color: white;background-color: #F57F17"><?php echo $h6?></th>
                                                          <th style="color: white;background-color: #F57F17"><?php echo $h7?></th>
                                                             <th style="color: white;background-color: #F57F17">Fine</th>
                                                                <th style="color: white;background-color: #F57F17">RcvdDate</th>
                                                                   <th style="color: white;background-color: #F57F17">RcvdVia</th>
                                                                    
                                  
                                   
                                      
                                </tr>
                            </thead>
                            <tbody>
                               
  <?php
  $count=0;
            include('connection.php');

   $sql = "SELECT regno,sname,payablebdd,arrears,rcvdamt,balamt,admfee,secfee,annfee,monfee,examfee,miscfee,tfee,lfee,fine,rcvddate,rcvdvia,payableadd,feeperiod FROM fees where regno='$regno' and session='$session'   order by feeperiod DESC ";

           
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  {
            $fp=$row['feeperiod'];
               
                  $a1=date("F",strtotime($fp));
      $a2=date("Y",strtotime($fp));
      $format2=$a1."-".$a2;
      

           echo " <tr>
              <td>".++$count."</td>
                  <td><b>".$row['regno']."</b></td>
                       <td><b>".$row['sname']."</b></td>
                <td><b>".$format2."</b></td>
              
                  <td><b>".number_format($row['payablebdd'])."</b></td>
                  <td>".number_format($row['payableadd'])."</td>
                   <td>".$row['arrears']."</td>
                  <td><b>".number_format($row['rcvdamt'])."</b></td>
                       <td><b>".number_format($row['balamt'])."</b></td>
                          <td>".number_format($row['admfee'])."</td>
                           <td>".number_format($row['secfee'])."</td>
                            <td>".number_format($row['annfee'])."</td>
                             <td>".number_format($row['monfee'])."</td>
                              <td>".number_format($row['examfee'])."</td>
                                  <td>".number_format($row['miscfee'])."</td>
                                      <td>".number_format($row['tfee'])."</td>
                                          <td>".number_format($row['lfee'])."</td>
                                              <td>".number_format($row['fine'])."</td>
                                                  <td>".$row['rcvddate']."</td>
                                                      <td>".$row['rcvdvia']."</td>
                                                        
                  ";
                 
               
              
              echo "
                    
               </tr>
                               
              ";
             }
           }

           ?>

                               
                                
                            </tfoot>
                        </table>
                    </div>
                </div>
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
   $(document).ready(function(){

load_data();

function load_data()
{

 var table = $('.dataex-res-scrolling').DataTable({

dom: 'Blfrtip',
        buttons: [

        {
           extend: 'csv',
           footer: false,
              exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
     messageTop: 'Student Fee Chart  By Reg No- <?php echo $regno?>'
         

       },
      
       
       {
           extend: 'excel',
           footer: false,
              exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
                  messageTop: 'Student Fee Chart  By Reg No- <?php echo $regno?>'
                   } ,
                   {
           extend: 'colvis',
              exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
 text: '&nbspShow/Hide Columns'


           
           

           
                   }    
                      

    ],


"scrollY": "330px",
  "scrollCollapse": true,
      scrollX:        true,


paging:false,

   



   });
    
    
    $('.buttons-csv').addClass(' fa fa-file-excel-o btn btn-success btn-sm btn-min-width btn-glow mr-1');
     $('.buttons-excel').addClass(' fa fa-file-excel-o btn btn-success btn-sm btn-min-width btn-glow mr-1');
      $('.buttons-pdf').addClass('fa fa-file-pdf-o btn btn-danger btn-sm btn-min-width btn-glow mr-1');
       $('.buttons-colvis').addClass('btn btn-warning btn-sm btn-min-width btn-glow mr-1');
      

 $(function () {

        $(".menu-toggle").on('click', resize);

        // Resize function
        function resize() {
            setTimeout(function() {

                // ReDraw DataTable
                tableFixedHeader.draw();
            }, 400);
        }
    });
}

});

    // Resize datatable on menu width change and window resize
    

</script>