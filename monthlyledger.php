<?php
include('session_head.php');
 $month=$_POST['month'];
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
    <title>Monthly Salary Ledger</title>
   <link rel="apple-touch-icon" href="crop.png">
    <link rel="shortcut icon" type="image/x-icon" href="crop.png">
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
          
            <li style="background-color: white" class=" navigation-header"><span data-i18n="nav.category.layouts"><img style='height:60px;object-fit:contain;margin-top:-25px' src="11.png"></img></span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
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
       
           <?php include('second
           .php');
       ?>
    <?php include('third.php');
       ?>


          <li  class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Salary Section</span></a>
            <ul class="menu-content">


   <?php
                $sqladv = "SELECT pagename,link FROM menu where category='Salary Section' and status='1' and user='$rowsession[username]'";
$resultadv = $conn->query($sqladv);

  // output data of each row
  while($rowadv = $resultadv->fetch_assoc()) {


if ($rowadv['pagename']=='Reports')
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
	     <?php
$a11=date("M",strtotime($month));
      $a21=date("Y",strtotime($month));
      $a31=date("d",strtotime($month));
      $format1=$a11."-".$a21;

?>

	               
              <div style="background-color: #3EBBE5" class="card-header">
                  <h4 style="color:white" class="card-title" id="horz-layout-colored-controls">Monthly Salary Ledger Month <b><u><?php echo $format1?></u></b></h4>
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

	            <div style="background-color: #304a7b"  class="card-content collpase show">

          <section   id="file-export">

    <div class="row">
        <div class="col-12">

            <div   class="card">
               
                <div class="card-content collapse show">

                    <div class="card-body card-dashboard">
                  <div class="s text-center " role="" aria-label="Basic example">   


 
<form method="POST" action="">
      <input type="hidden" value="<?php echo $month?>" name="month"/>



                 <?php
                  $a1=date("m",strtotime($month));
      $a2=date("Y",strtotime($month));

      $format1122=$a2."-".$a1;
      
      ?>

                                               <input type="hidden" value="<?php echo $format1122?>" name="month"/>


                        

                        <table style="width:100%" class="table table-striped table-bordered dataex-html5-selectors file-export">
                            <thead>
                                <tr>
                                  
                                    
                               
                                     




 <tr>
                                        <th style='background-color:#062f4f ;color:white'>ID</th>
                                    <th style='background-color:#062f4f ;color:white'>Name</th>
                                    
                                    
                                    
                                    
         <th style='background-color:#062f4f ;color:white'>Father/Husband Name</th>
                                    <th style='background-color:#062f4f ;color:white'>Designation</th> 
                                    
                                        <th style='background-color:#062f4f ;color:white'>Account #</th>
                                        <th style='background-color:#062f4f ;color:white'>Payable Salary</th>
                                    
                                                      <th style='background-color:#062f4f ;color:white'>Action</th>

                                    
                                    <th style='background-color:#062f4f ;color:white'>Basic Salary</th>
                                    
                                    <th style='background-color:#062f4f ;color:white'>Working Days</th>
                                    
                                    <th style='background-color:#062f4f ;color:white'>Medical</th>
                                    
                                        <th style='background-color:#062f4f ;color:white'>Misc</th>
                                          <th style='background-color:#062f4f ;color:white'>Convenyance</th>
                                     <th style='background-color:#062f4f ;color:white'>Fuel</th>
                                          <th style='background-color:#062f4f ;color:white'>Mobile</th>
                                                <th style='background-color:#062f4f ;color:white'>House</th>
                                     
                                            <th style='background-color:#062f4f ;color:white'>P.Fund</th>
                                                  <th style='background-color:#062f4f ;color:white'>EOBI</th>
                                                    <th style='background-color:#062f4f ;color:white'>Misc Ded</th>
                                                    
                                                         <th style='background-color:#062f4f ;color:white'>WWF</th>
                                                            
                                                         <th style='background-color:#062f4f ;color:white'>Loan</th>
                                                            
                                                         <th style='background-color:#062f4f ;color:white'>WH Tax</th>
                                                  
                                                          
                                             
                                             
                                             
                                             
                                                                                 
                                  
                                   
                                      
                                </tr>









                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                     <?php
  $count=0;
            include('connection.php');
       

         $sql = "SELECT * FROM salary where month='$month'";

     

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  {
            $t=$row['teacher'];
            $s=$row['gs']+$s;


$sql1 = "SELECT name,fname,designation,bn FROM employees where id='$t' ";

$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
 $name=$row1['name'];
  $fname=$row1['fname'];
    $designation=$row1['designation'];
        $bn=$row1['bn'];
 
           echo " <tr>
             <td><b>".$t."</b></td>
                <td><b>".$name."</b></td>
                 <td><b>".$fname."</b></td>
                       <td><b>".$designation."</b></td>
                                <td><b>".$bn."</b></td>
                                        <td><b>".number_format($row['gs'])."</b></td>";
                                        echo "
                     <td>
                           
                                    <!-- Outline Icon Button group -->
                                    <div class='btn-group' role='group' aria-label='Basic example'>";
                          
                          
                          $sql123 = "SELECT * FROM fview where emp='$rowsession[username]'  and fname='Delete Monthly Salary' and status='1'";
$result123 = $conn->query($sql123);

if ($result123->num_rows > 0) {
    echo "
                              <button type='button' value=Delete id=".$row['id']." class='btn btn-icon btn-outline-danger btn-sm cc'><i class='fa fa-trash'></i></button>";
 
} 
else
{

    
}
 
                          
                          
                          
                          echo "
                          
                        <a target='_blank' href=singlesalaryslip.php?id=".$t."&month=".$month."> <button type='button' class='btn btn-icon btn-outline-dark btn-sm'><i class='fa fa-print'></i></button></a>

                                
                                </div>
                                       
                          </td>
               
                               
              ";
              echo "
               <td><b>".number_format($row['salary'])."</b></td>
               
                         <td><b>".$row['fwd']."</b></td>
                   
                         <td><b>".number_format($row['hod'])."</b></td>
                         
                         
                            <td><b>".number_format($row['inc'])."</b></td>
                         
                         
                           <td><b>".number_format($row['con'])."</b></td>
                                   <td><b>".number_format($row['fuel'])."</b></td>
                           <td><b>".number_format($row['moba'])."</b></td>
                           
                           
                                   <td><b>".number_format($row['tea'])."</b></td>
                           <td><b>".number_format($row['pf'])."</b></td>
                                   <td><b>".number_format($row['eobi'])."</b></td>
                                   
                                   
                                           <td><b>".number_format($row['ded'])."</b></td>
                                   
                           <td><b>".number_format($row['dc'])."</b></td>
                                   <td><b>".number_format($row['loan'])."</b></td>
                           <td><b>".number_format($row['wh'])."</b></td>
                      
                               
           
           
           
             
                         
                  ";
                 
               
              
              echo "
                    
               </tr>
                               
              ";
  }
} 

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
                   messageTop: 'Employees List'

         

       },
       {
           extend: 'pdf',
           footer: true,
          text: '&nbspCustom PDF',
             exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
   orientation: 'landscape',
                pageSize: 'LEGAL',
                messageTop: 'Salary Ledger Month <?php echo $format1?>'


       },
       
       {
           extend: 'excel',
              text: '&nbspCustom EXCEL',
           footer: false,
              exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
  messageTop: 'Salary Ledger Month <?php echo $format1?>'

                   } ,  


  {
           extend: 'print',
              text: '&nbsp Custom Print',
           footer: false,
              exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
    messageTop: 'Salary Ledger Month <?php echo $format1?>'

                   } ,  


  {
           extend: 'copy',
              text: '&nbsp Custom Copy',
           footer: false,
              exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
    messageTop: 'Salary Ledger Month <?php echo $format1?>'

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



 scrollY:        "330px",
        scrollX:        true,
        scrollCollapse: true,
         "order" : [],
  
      
"paging":true,



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
  title: "Are You Sure to Delete Employee Salary?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
 .then((willDelete) => {
  if (willDelete) {
     $.ajax({
                url:"deletemonsal.php?id="+del_id,
                cache:false,
                success:function(result){

                  if(result == 1){
   // Remove row from HTML Table
   $(el).closest('tr').css('background','tomato');
   $(el).closest('tr').fadeOut(800,function(){
      $(this).remove();
       swal({
    title: 'Deleted.....!',
    text: 'Salary Slip Deleted',
    type: 'success',
    timer: 1800,
    showConfirmButton: false
  }).then(function() {
    location.reload();

    
      
    
  });




   });
      }
     
    }
                  
                
              });
}
});



 
  });

</script>
