<?php
include('session_head.php');
?>
<?php
include('connection.php');
 $id=$_POST['id'];

 $date=$_POST['date'];
 $date1=$_POST['date1'];
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
    <title>Staff Chart</title>
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

       



          <li  class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Teachers Attendance</span></a>
            <ul class="menu-content">


   <?php
                $sqladv = "SELECT pagename,link FROM menu where category='Attendance' and status='1' and user='$rowsession[username]'";
$resultadv = $conn->query($sqladv);

  // output data of each row
  while($rowadv = $resultadv->fetch_assoc()) {


if ($rowadv['pagename']=='DateWise Report')
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
	     
	               
              <div style="background-color: #f9d140" class="card-header">
                     
    <?php
                    include('connection.php');
                  $a1=date("F",strtotime($date));
      $a2=date("Y",strtotime($date));
      $a3=date("d",strtotime($date));
      $format=$a3."-".$a1."-".$a2;



 $aa1=date("F",strtotime($date1));
      $aa2=date("Y",strtotime($date1));
      $aa3=date("d",strtotime($date1));
      $format1=$aa3."-".$aa1."-".$aa2;

       $sqli10 = "SELECT * FROM employees where id='$id' ";

            $result10 = mysqli_query($conn, $sqli10);

            $rowww = mysqli_fetch_assoc($result10);
            $name=$rowww['name'];
      ?>
                      <h4 class="card-title">Staff Attendance Chart of  <i><b><?php echo $name;?></b></i> <b><i style="color:red">From: </i><u><?php echo $format?></u> <i style="color:green">TO: </i><u><?php echo $format1?></u></b></h4>
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
                      <form method="POST" action="chartpdf">
                        <input type="hidden" value="<?php echo $id?>" name="id">
                   <input type="hidden" value="<?php echo $date?>" name="date">
                   <input type="hidden" value="<?php echo $date1?>" name="date1">
                   <button formtarget="_blank"  type="submit" style="background-color: #304A7B;color: white !important"  name="submit" class="btn btn-outline-warning btn-sm btn-glow" >
                    Complete PDF
                  </button>

            </form>
        





 
      </div>
      <hr style="  border-top: 2px dotted #304A7B;">

                        <table sty class="table table-striped table-bordered file-export">
                            <thead>
                                <tr>
                                   <th style="background-color:#304A7B;color: white ">S.#</th>
                                      <th style="background-color:#304A7B;color: white ">Date</th>
                                    <th style="background-color:#304A7B;color: white  ">Status</th>
                                     
                                         
                                        
                                   
                
                                </tr>
                            </thead>
                            <tbody>
                               
                                
    <?php
  $count=0;
            include('connection.php');

   $sqli = "SELECT date,status FROM tattendence where emp_id='$id' and date BETWEEN '$date' and '$date1' order by emp_id DESC";

           
            $result = mysqli_query($conn, $sqli);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  {

             $l1=date("F",strtotime($row['date']));
      $l2=date("Y",strtotime($row['date']));
      $l3=date("d",strtotime($row['date']));
      $format3=$l3."-".$l1."-".$l2;

             
           echo " <tr>
              <td>".++$count."</td>
              <td><b>".$format3."</b></td>
               <td><b>".$row['status']."</b></td> ";
         
              echo " </tr> ";
             }
           }
           else

            {
          
            }

           ?>

       
                            </tfoot>
                          </tbody>


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



<?php include('footer.php');
?>

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

 var table = $('.file-export').DataTable({

dom: 'Blfrtip',
        buttons: [

        {
           extend: 'csv',
           footer: false,
                messageTop: '   Staff Attendance Chart of <?php echo $name;?>From: <?php echo $format?> TO: <?php echo $format1?>'
         

       },
         {
           extend: 'pdf',
           footer: true,
          text: '&nbspCustom PDF',
             exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
   
                        messageTop: '   Staff Attendance Chart of <?php echo $name;?>From: <?php echo $format?> TO: <?php echo $format1?>'


       },
      
       
       {
           extend: 'excel',
           footer: false,
                     messageTop: '   Staff Attendance Chart of <?php echo $name;?>From: <?php echo $format?> TO: <?php echo $format1?>'
                   }  ,

  {
           extend: 'print',
              text: '&nbsp Custom Print',
           footer: false,
              exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
                       messageTop: '   Staff Attendance Chart of <?php echo $name;?>From: <?php echo $format?> TO: <?php echo $format1?>'

                   } ,  


  {
           extend: 'copy',
              text: '&nbsp Custom Copy',
           footer: false,
              exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
                  messageTop: '   Staff Attendance Chart of <?php echo $name;?>From: <?php echo $format?> TO: <?php echo $format1?>'

                   }
                      

    ],


"scrollY": "330px",
  "scrollCollapse": true,


paging:false,

   



   });
    
    
 $('.buttons-csv').addClass(' fa fa-file-excel-o btn btn-success  btn-sm btn-min-width btn-glow mr-1');
     $('.buttons-excel').addClass(' fa fa-file-excel-o btn btn-success btn-sm btn-min-width btn-glow mr-1');
      $('.buttons-pdf').addClass('fa fa-file-pdf-o btn btn-danger btn-sm btn-min-width btn-glow mr-1');
       $('.buttons-colvis').addClass('btn btn-warning btn-sm btn-min-width btn-glow mr-1');
             $('.buttons-print').addClass('fa fa-print btn btn-info btn-sm btn-min-width btn-glow mr-1');
                          $('.buttons-copy').addClass('fa fa-copy btn btn-primary btn-sm btn-min-width btn-glow mr-1');
      

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