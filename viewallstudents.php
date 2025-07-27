<?php 
include('session_head.php');
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
 <head>
      <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/sweetalert.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
   <meta name="description" content=" CS&IT DEPARTMENT Website Developed By Khafsa IJaz And Habeeba Mateen">
    <meta name="keywords" content="">
    <meta name="author" content="Khafsa Ijaz">
    <title>Students List</title>
   <link rel="apple-touch-icon" href="logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="logo.png">
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


    <div style="background-color: #1090CD" class="main-menu menu-fixed menu-dark menu-accordion    menu-shadow " data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li style='background-color: #1090CD' class=" nav-item"><a href="dashboard"><i class="icon-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span></a>
          
          </li>
        <!--   
         <li style="background-color: white" class=" navigation-header"><span data-i18n="nav.category.layouts"><img style='height:60px;object-fit:contain;margin-top:-25px' src="11.png"></img></span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
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
        
        <li  class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Students Section</span></a>
            <ul class="menu-content">


   <?php
                $sqladv = "SELECT pagename,link FROM menu where category='Students Section' and status='1' and user='$rowsession[username]'";
$resultadv = $conn->query($sqladv);

  // output data of each row
  while($rowadv = $resultadv->fetch_assoc()) {


if ($rowadv['pagename']=='View Students')
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
	     
	               
              <div style="background-color: #5B8343" class="card-header">
                  <h4 style="color:white" class="card-title" id="horz-layout-colored-controls">Welcome You Are Viewing  MS Students  List</h4>
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

	            <div style="background-color: #1090CD"  class="card-content collpase show">

          <section   id="file-export">

    <div class="row">
        <div class="col-12">

            <div   class="card">
               
                <div class="card-content collapse show">

                    <div class="card-body card-dashboard">
                 <a href="viewbsstudents.php" ><button class="btn btn-outline-info" style="background-color:#5B8343; color: white;font-weight: bold; border:1px solid#5B8343;">BS Students</button>    </a>   
      <hr style="  border-top: 2px dotted #5B8343;">
                        <table style='width: 100%;' class="table table-striped table-bordered file-export">
                            <thead>
                                <tr>
                                   <th style="background-color:#1090CD;color: white ">S.#</th>
                                      <th style="background-color:#1090CD;color: white "> NAME</th>
                                    <th style="background-color:#1090CD;color: white  ">FATHER NAME</th>
                                              <th style="background-color:#1090CD;color: white  ">CNIC</th>
                                              <th style="background-color:#1090CD;color: white ">ADDRESS</th>
                                      <th style="background-color:#1090CD;color: white "> DOB</th>
                                    <th style="background-color:#1090CD;color: white  ">MOBILE NO</th>
                                              <th style="background-color:#1090CD;color: white  ">EMERGENCY NO</th>
                                                 <th style="background-color:#1090CD;color: white ">GENDER</th>
                                      <th style="background-color:#1090CD;color: white "> MARITAL STATUS</th>
                                    <th style="background-color:#1090CD;color: white  ">VACCINE STATUS</th>
                                                           <th style="background-color:#1090CD;color: white  ">Board</th>
                                              <th style="background-color:#1090CD;color: white  ">Ob Marks</th>
                                              <th style="background-color:#1090CD;color: white  ">Group</th>
                                              <th style="background-color:#1090CD;color: white ">PROGRAM</th>
                                      <th style="background-color:#1090CD;color: white "> TOTAL MARKS</th>
                                    <th style="background-color:#1090CD;color: white  ">OBTAINED MARKS</th>
                                              <th style="background-color:#1090CD;color: white  ">CGPA</th>
                                              <th style="background-color:#1090CD;color: white "> University </th>
             
                                              <th style="background-color:#1090CD;color: white "> SESSION</th>
                                    
                                       <th style="background-color:#1090CD;color: white  ">ACTIONS</th>
                        
                                          
                                                           
                                 
                                 
                                 
                                 
                                 
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $cc=0;
            include('connection.php');

            $sql = "SELECT * FROM extrastudents order by id DESC";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  {
              $s=$row['status'];
$image=$row['image'];

              echo " <tr>
              <td >".++$cc."</td>
                  <td >
                 ".$row['sname']."</td>
                     <td >
                 ".$row['fname']."</td>
                    <td >
                 ".$row['cnic']."</td>
                     <td >
                 ".$row['address']."</td>
                    <td >
                 ".$row['dob']."</td>
                     <td >
                 ".$row['mobileno']."</td>
                    <td >
                 ".$row['emno']."</td>
                     <td >
                 ".$row['gender']."</td>
                    <td >
                 ".$row['marital_status']."</td>
                     <td >
                 ".$row['vaccine_status']."</td> 
<td >
                 ".$row['Iboard']."</td>
                     <td >
                 ".$row['Iob_marks']."</td>
                   <td >
                 ".$row['Igroup']."</td>
                     <td >
                 ".$row['program']."</td> 
                   <td >
                 ".$row['totalmarks']."</td>
                     <td >
                 ".$row['obtainedmarks']."</td>
                 <td>
                 ".$row['cgpa']."</td>
                     <td >
                 ".$row['university']."</td>   
           
                 <td >
                 ".$row['session']."</td>
              



                           
                        
        



<td>
                    

                             <button data-toggle='tooltip' title='Delete Student' type='button' value=Delete id=".$row['id']." class='btn btn-icon btn-danger btn-sm cc'><i class='fa fa-trash'></i></button>
</td>


                             ";
 

    




";


 

                      
                                        
                                  
                                
                                </div>
                                       
                          </td>
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
     <script src="../../../app-assets/vendors/js/extensions/sweetalert.min.js"></script>
            <script src="../../../app-assets/js/scripts/extensions/sweet-alerts.js"></script>
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
dom: '<"top"i>rt<"bottom"flp>',
   dom: 'Blfrtip',
        buttons: [

        {
           
           extend: 'csv',
              text: '&nbspCustom CSV',
           footer: false,
              exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
                   messageTop: 'Students List'

         

       },
       {
           extend: 'pdf',
           footer: true,
          text: '&nbspCustom PDF',
             exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
   
                 messageTop: 'Students List'



       },
       
       {
           extend: 'excel',
              text: '&nbspCustom EXCEL',
           footer: false,
              exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
    messageTop: 'Students List'

                   } ,  


  {
           extend: 'print',
              text: '&nbsp Custom Print',
           footer: false,
              exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
    messageTop: 'Students List'

                   } ,  


  {
           extend: 'copy',
              text: '&nbsp Custom Copy',
           footer: false,
              exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
    messageTop: 'Students List'

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
 fixedColumns:   {
            leftColumns: 2
        },



 scrollY:        "330px",
        scrollX:        true,
        scrollCollapse: true,
         "order" : [],
  
      
"paging":false,



 dom:


      "<'row'<'col-sm-12'B><'col-sm-12'f>>" +
       "<br>"+
              "<br>"+
                       "<'row'<'col-sm-12'tr>>"+ 
   "<'row'<'col-sm-4'i><'col-sm-4 text-center'l><'col-sm-4'p>>"

        
    });
 $('.buttons-csv').addClass(' fa fa-file-excel-o btn btn-success  btn-sm btn-min-width btn-glow mr-1');
     $('.buttons-excel').addClass(' fa fa-file-excel-o btn btn-success btn-sm btn-min-width btn-glow mr-1');
      $('.buttons-pdf').addClass('fa fa-file-pdf-o btn btn-danger btn-sm btn-min-width btn-glow mr-1');
       $('.buttons-colvis').addClass('btn btn-warning btn-sm btn-min-width btn-glow mr-1');
             $('.buttons-print').addClass('fa fa-print btn btn-info btn-sm btn-min-width btn-glow mr-1');
                          $('.buttons-copy').addClass('fa fa-copy btn btn-primary btn-sm btn-min-width btn-glow mr-1');





</script>
<script>
$(".cc").click(function(e) {
   var el = this;
  e.preventDefault();
 var del_id= $(this).attr('id');
 swal({
  title: "Are You Sure to Delete Student?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
 .then((willDelete) => {
  if (willDelete) {
     $.ajax({
                url:"deletestudent.php?id="+del_id,
                cache:false,
                success:function(result){

                  if(result == 1){
   // Remove row from HTML Table
   $(el).closest('tr').css('background','red');
   $(el).closest('tr').fadeOut(800,function(){
      $(this).remove();
      location.reload();
   });
      }
     
    }
                  
                
              });
}
});



 
  });

</script>