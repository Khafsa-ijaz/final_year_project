<?php 
include('session_head.php');
 include('./models/add_job.php'); 
 include('./models/updatejob.php'); 
 include('./models/delete_job.php'); 
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
    <title>Courses</title>
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
        
          <?php include('fifth.php');
    ?>
            <?php include('sixth.php');
    ?>
  
          <?php include('seventh.php');
    ?>
        
          <?php include('eight.php');
    ?>
        
      
     <li  class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Courses Section</span></a>
            <ul class="menu-content">


   <?php
                $sqladv = "SELECT pagename,link FROM menu where category='Courses Section' and status='1' and user='$rowsession[username]'";
$resultadv = $conn->query($sqladv);

  // output data of each row
  while($rowadv = $resultadv->fetch_assoc()) {


if ($rowadv['pagename']=='View Courses')
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
        
          <?php include('tenth.php');
    ?>
        
          <?php include('eleven.php');
    ?>
         
         
        
         
         </ul>
       </div>
     </div>
    <div class="app-content content">
      <div class="content-wrapper">
      
     

	<div class="row">

		<div class="col-md-12">
	        <div class="card">
	   
              <div style="background-color: #5B8343" class="card-header">

                  <h4 style="color:white" class="card-title" id="horz-layout-colored-controls">Welcome You Are Viewing Courses List</h4>
	                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
        			<div class="heading-elements center ">
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
                
      <hr style="  border-top: 2px dotted #5B8343;">

  
       
       
        <!-- Delete Course Modal -->
<div class="modal fade" id="deleteCourseModal" tabindex="-1" aria-labelledby="deleteCourseModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteCourseModalLabel">Delete Course</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this course?</p>
            </div>
            <div class="modal-footer">
                <form id="deleteCourseForm" action="Controller/delete_course.php" method="POST">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="id" id="deleteCourseId">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Add Course Modal -->
<div class="modal fade" id="createCourseModal" tabindex="-1" aria-labelledby="createCourseModalLabel" aria-hidden="true" style=" font-weight: bold; border: 1px solid #5B8343;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createCourseModalLabel" style="color: #1090CD; font-weight: bold;"> Add Course</h5>
                <!-- <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button> -->
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form id="createCourseForm" action="Controller/create_course.php" method="POST">
                    <input type="hidden" name="action" value="create">
                    <div class="mb-3">
                        <label for="createCode" class="form-label" >Code</label>
                        <input type="text" class="form-control" id="createCode" name="code" style="background-color:#1090CD;color: white;border: 1px solid white;">
                    </div>
                    <div class="mb-3">
                        <label for="createName" class="form-label">Course Name</label>
                        <input type="text" class="form-control" id="createName" name="name" required style="background-color:#1090CD;color: white;border: 1px solid white;">
                    </div>
                    <div class="mb-3" >
                        <label for="createType" class="form-label">Type</label>
                        <input type="text" class="form-control" id="createType" name="type" required style="background-color:#1090CD;color: white;border: 1px solid white;" >
                    </div>
                    <div class="mb-3">
                        <label for="createProgram" class="form-label">Program</label>
                        <input type="text" class="form-control" id="createProgram" name="program" style="background-color:#1090CD;color: white;border: 1px solid white;">
                    </div>
                    <div class="mb-3">
                        <label for="createSemester" class="form-label">Semester</label>
                        <select class="form-control" id="createSemester" name="semester" required style="background-color:#1090CD;color: white;border: 1px solid white;">
                            <option value="Semester 1" selected>Semester 1</option>
                            <option value="Semester 2">Semester 2</option>
                            <option value="Semester 3">Semester 3</option>
                            <option value="Semester 4">Semester 4</option>
                            <option value="Semester 5">Semester 5</option>
                            <option value="Semester 6">Semester 6</option>
                            <option value="Semester 7">Semester 7</option>
                            <option value="Semester 8">Semester 8</option>
                            <option value="Repeater">Repeater</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="createSession" class="form-label">Session</label> <!-- New input field for session -->
                        <input type="text" class="form-control" id="createSession" name="session" style="background-color:#1090CD;color: white;border: 1px solid white;">
                    </div>
                    <div class="mb-3">
                        <label for="createCreditHour" class="form-label">Credit Hour</label>
                        <input type="number" class="form-control" id="createCreditHour" name="credit_hour" value="3" style="background-color:#1090CD;color: white;border: 1px solid white;">
                    </div>
                    <div class="mb-3">
                        <label for="createDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="createDescription" name="description" required style="background-color:#1090CD;color: white;border: 1px solid white;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary-outline" style="background-color:#5B8343; color: white;">Add Course</button>
                </form>
            </div>
        </div>
    </div>
</div>
      <!-- edit course modal -->
      <div class="modal fade" id="editCourseModal" tabindex="-1" aria-labelledby="editCourseModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCourseModalLabel" style=" font-weight: bold;">Edit Course</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form id="editCourseForm" action="Controller/edit_course.php" method="POST">
                    <input type="hidden" name="action" value="update">
                    <input type="hidden" name="id" id="editCourseId">
                    <div class="mb-3">
                        <label for="editCode" class="form-label" style=" font-weight: bold;">Code</label>
                        <input type="text" class="form-control" id="editCode" name="code">
                    </div>
                    <div class="mb-3">
                        <label for="editName" class="form-label" style=" font-weight: bold;">Course Name</label>
                        <input type="text" class="form-control" id="editName" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="editType" class="form-label" style=" font-weight: bold;">Type</label>
                        <input type="text" class="form-control" id="editType" name="type" required>
                    </div>
                    <div class="mb-3">
                        <label for="editProgram" class="form-label" style=" font-weight: bold;">Program</label>
                        <input type="text" class="form-control" id="editProgram" name="program">
                    </div>
                    <div class="mb-3">
                        <label for="editSemester" class="form-label" style=" font-weight: bold;">Semester</label>
                        <select class="form-control" id="editSemester" name="semester" required>
                            <option value="Semester 1" selected>Semester 1</option>
                            <option value="Semester 2">Semester 2</option>
                            <option value="Semester 3">Semester 3</option>
                            <option value="Semester 4">Semester 4</option>
                            <option value="Semester 5">Semester 5</option>
                            <option value="Semester 6">Semester 6</option>
                            <option value="Semester 7">Semester 7</option>
                            <option value="Semester 8">Semester 8</option>
                            <option value="Repeater">Repeater</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="editSession" class="form-label" style=" font-weight: bold;">Session</label> <!-- New input field for session -->
                        <input type="text" class="form-control" id="editSession" name="session">
                    </div>
                    <div class="mb-3">
                        <label for="editCreditHour" class="form-label" style=" font-weight: bold;">Credit Hour</label>
                        <input type="number" class="form-control" id="editCreditHour" name="credit_hour" value="3">
                    </div>
                    <div class="mb-3">
                        <label for="editDescription" class="form-label" style=" font-weight: bold;">Description</label>
                        <textarea class="form-control" id="editDescription" name="description" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary-outline" style="background-color:#5B8343;color: white; font-weight: bold;">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="" align="right" >
 
                                 <!-- <button class="btn btn-primary-outline mb-3" data-bs-toggle="modal" data-target="#createCourseModal" style="background-color: #5B8343;color:white;"  onclick='setcreateCourseModal'>Add Course</button> -->
      
          <button class='btn btn-primary-outline mb-3"' data-toggle='modal' data-target='#createCourseModal' onclick='setcreateCourseModal(".$row['id'].")'  style="background-color: #5B8343;color:white;" ><i class='fa fa-plus'></i></button>
        </div>
        

                        <table style='width: 100%;' class="table table-striped table-bordered file-export">
      <thead>
                                <tr>
                                   <th style="background-color:#1090CD;color: white ">S.#</th>
                                      <th style="background-color:#1090CD;color: white "> CODE</th>
                                    <th style="background-color:#1090CD;color: white  ">Name</th>
                                              
                                 
                                              <th style="background-color:#1090CD;color: white  ">TYPE</th>
                                                 
                                  
                                              <th style="background-color:#1090CD;color: white  ">PROGRAM</th>
                                                  <th style="background-color:#1090CD;color: white ">SEMESTER</th>
                                    <!-- <th style="background-color:#1090CD;color: white  ">COMMENTS</th> -->
                                             <th style="background-color:#1090CD;color: white  ">SESSION</th>
                                                  <th style="background-color:#1090CD;color: white ">CREDIT HPOUR</th>
                                                         <th style="background-color:#1090CD;color: white  ">DESCRIPTION</th>
                                                  <th style="background-color:#1090CD;color: white ">CREATED AT</th>
                                    
                                       <th style="background-color:#1090CD;color: white  ">ACTIONS</th>
                        
                                          
                                                           
                                 
                                 
                                 
                                 
                                 
                                </tr>
                            </thead>
                            <tbody>
                               

             <?php
                
                $sql = "SELECT * FROM courses";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "              
                        <tr>
                          <td >
                 ".$row['id']."</td>
                  <td>
                  ".$row['code']."</td>
                 <td>
                  ".$row['name']."</td>
                   <td>
                  ".$row['type']."</td>
                   <td>
                  ".$row['program']."</td>
                   <td>
                  ".$row['semester']."</td>
                   <td>
                  ".$row['session']."</td>
                   <td>
                  ".$row['credit_hour']."</td>
                   <td>
                  ".$row['description']."</td>
                   <td>
                  ".$row['created_at']."</td>
                       
                            
                             <td>
                                            
                                            <button class='btn btn-danger btn-sm' data-toggle='modal' data-target='#deleteCourseModal' onclick='setDeleteModalData(".$row['id'].")'><i class='fa fa-trash'></i></button>
                                                  <button class='btn btn-warning btn-sm' data-toggle='modal' data-target='#editCourseModal' onclick='setEditModalData(".$row['id'].")'><i class='fa fa-pencil'></i></button>
                                        </td>
                        </tr>
                "; }
                } else {
                    echo "<tr><td colspan='9'>No course found</td></tr>";
                }

                $conn->close();
                ?>

                               
                                
                               
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
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
                   messageTop: 'Faculty List'

         

       },
       {
           extend: 'pdf',
           footer: true,
          text: '&nbspCustom PDF',
             exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
   
                 messageTop: 'Faculty List'



       },
       
       {
           extend: 'excel',
              text: '&nbspCustom EXCEL',
           footer: false,
              exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
    messageTop: 'Faculty List'

                   } ,  


  {
           extend: 'print',
              text: '&nbsp Custom Print',
           footer: false,
              exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
    messageTop: 'Faculty List'

                   } ,  


  {
           extend: 'copy',
              text: '&nbsp Custom Copy',
           footer: false,
              exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
    messageTop: 'Faculty List'

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
  title: "Are You Sure to Delete Faculty?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
 .then((willDelete) => {
  if (willDelete) {
     $.ajax({
                url:"deletefaculty.php?id="+del_id,
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

<script>
function setEditModalData(course) {
    document.getElementById('editCourseId').value = course.id;
    document.getElementById('editCode').value = course.code;
    document.getElementById('editName').value = course.name;
    document.getElementById('editType').value = course.type;
    document.getElementById('editProgram').value = course.program;
    document.getElementById('editSemester').value = course.semester;
    document.getElementById('editSession').value = course.session; // New line for session
    document.getElementById('editCreditHour').value = course.credit_hour;
    document.getElementById('editDescription').value = course.description;
}

function setDeleteModalData(id) {
    document.getElementById('deleteCourseId').value = id;
}
</script>