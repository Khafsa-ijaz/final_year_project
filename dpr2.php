<?php
include('session_head.php');
date_default_timezone_set("Asia/Karachi");
 $date=$_POST['date'];
  $date1=$_POST['date1'];
    $a1=date("M",strtotime($date));
      $a3=date("Y",strtotime($date));
      $a2=date("d",strtotime($date));
      $format=$a2."-".$a1."-".$a3;

         $a11=date("M",strtotime($date1));
      $a31=date("Y",strtotime($date1));
      $a21=date("d",strtotime($date1));
      $format1=$a21."-".$a11."-".$a31;
?>
?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
 <head>
     
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="School Management System developed by Pak Softwares. The system provides the best and easy solution to handle school matters including admissions, fees, accounts, examination, sms, website controls, portal controls and many more.">
    <meta name="keywords" content="school management system, accounts management, web app, biomatric systems, examination, fees system, learning management system (lms), portals">
    <meta name="author" content="PAKSOFTWARE">
    <title>Add Test</title>
     <link rel="apple-touch-icon" href="uploads/rlogo.png">
    <link rel="shortcut icon" type="image/x-icon" href="uploads/rlogo.png">

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
          
          <li style="background-color: #304A7B" class=" navigation-header"><span data-i18n="nav.category.layouts">RAHMA ISLAMIC</span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
          </li>




 <?php include('twelve.php');
    ?>
       


 <?php include('thirteen.php');
    ?>


 <?php include('fourteen.php');
    ?>
     <?php include('fifteen.php');
    ?>
       
       
       

      
          <li  class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Patient Section</span></a>
            <ul class="menu-content">


   <?php
                $sqladv = "SELECT pagename,link FROM menu where category='Patient Section' and status='1' and user='$rowsession[username]'";
$resultadv = $conn->query($sqladv);

  // output data of each row
  while($rowadv = $resultadv->fetch_assoc()) {


if ($rowadv['pagename']=='Add Test')
{
    echo "<li class='active'><a class='menu-item' href='$rowadv[link]' data-i18n='nav.vertical_nav.vertical_nav_fixed'>$rowadv[pagename]</a>
              </li>";
}


if ($rowadv['pagename']=='Add Patient')
{
    echo "<li><a style='color:red' class='menu-item' href='$rowadv[link]' data-i18n='nav.vertical_nav.vertical_nav_fixed'>$rowadv[pagename]</a>
              </li>";
}

if ($rowadv['pagename']=='Reports')
{
    echo "<li><a style='color:yellow' class='menu-item' href='$rowadv[link]' data-i18n='nav.vertical_nav.vertical_nav_fixed'>$rowadv[pagename]</a>
              </li>";
}

  }
     ?> 



              
            </ul>
          </li>

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
                  <h4 style="color:black" class="card-title" id="horz-layout-colored-controls"><b><u>Add Tests DATE <?php echo $format?>****<?php echo $format1?></b></u> <i><u></i></u></b></h4>
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
                          <form  method="POST" action="viewregforms">
                      
                   
                  <div class="s text-center " role="" aria-label="Basic example">   <button type="submit" style="background-color: #304A7B;color: white !important" type="button" class="btn btn-outline-warning btn-sm btn-glow" >
                    DAILY PATIENTS RECORD
                  </button>




 
 

 
      </div>
      <hr style="  border-top: 2px dotted #304A7B;">
     
                        <table sty class="table table-striped table-bordered file-export">
                            <thead>
                                <tr>
                               
                                      <th style="background-color:#304A7B;color: white ">MR #</th>
                                                  <th style="background-color:#304A7B;color: white ">DATE</th>
                                    <th style="background-color:#304A7B;color: white  ">NAME</th>
                                    <th style="background-color:#304A7B;color: white  ">GENDER</th>
                                          <th style="background-color:#304A7B;color: white  ">AGE</th>
                                           <th style="background-color:#304A7B;color: white  ">FEE</th>
                                           <th style="background-color:#304A7B;color: white  ">Ref.By</th>


 <th style="background-color:#304A7B;color: white  ">ADD</th>

 <th style="background-color:#304A7B;color: white  ">DELETE</th>

         <th style="background-color:#304A7B;color: white  ">PRINT</th>


                                             <th style="background-color:#304A7B;color: white  ">ACTIONS</th>

                                      
                            
                                </tr>
                            </thead>
                            <tbody>
                               
                               
                                                            <?php

  $count=0;
            include('connection.php');

         $sql = "SELECT * FROM patients where date between '$date' and '$date1' ";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result))  {
                 
                 
                 
                   echo " <tr>
           
              
                        <td><b>".$row["id"]."</b></td>

                        <td><b>".$row["date"]."</b></td>
                         <td><b>".$row['name']."</b></td>
                        
                          
                           <td><b>".$row['gender']."</b></td>
                         <td><b>".$row['age']."</b></td>
                            <td><b>".$row['status']."</b></td>
                          <td><b>".$row['ref']."</b></td>
                          <td>
                          
                          <div class='btn-group' role='group' aria-label='Basic example'>
                                     



                     
                          

                                        <a  data-toggle=tooltip' title='ADD TEST' href=addtest.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-primary btn-sm'><i class='fa fa-medkit'></i></button></a>


  <a  data-toggle=tooltip' title='ADD SERVICES' href=addtestse.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-primary btn-sm'><i class='fa fa-medkit'></i></button></a>

                                          &nbsp
                                          <a  data-toggle=tooltip' title='ADD DELIVERY' href=addtestd.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-dark btn-sm'><i class='fa fa-medkit'></i></button></a>
                                      
                                      
                                
                                </div>
                                
                                </td>
                                <td>
                                <div class='btn-group' role='group' aria-label='Basic example'>
                                     



                     
                          

                                        <a href=itable.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-primary btn-sm'><i class='   fa fa-hospital-o'></i></button></a>
                                      
                                      
                                
                                </div></td>
                                <td>
                                <div class='btn-group' role='group' aria-label='Basic example'>
                                     



                     
                          

                                        <a data-toggle=tooltip' title='DOCTOR FORM' target='_blank' href=info.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-info btn-sm'><i class='fa fa-print'></i></button></a>
                                        &nbsp
                                         <a data-toggle=tooltip' title='TESTS INVOICE' target='_blank' href=info4.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-success btn-sm'><i class='fa fa-print'></i></button></a>
                                      
                                
                                </div></td>
                                <td>
                                <div class='btn-group' role='group' aria-label='Basic example'>
                                     



                                     
                                          <a data-toggle=tooltip' title='EDIT' href=editregform.php?id=".$row['id']."><button type='button' class='btn btn-icon btn-warning btn-sm'><i class='fa fa-pencil'></i></button></a>
                                        <button data-toggle=tooltip' title='DELETE' type='button' value=Delete id=".$row['id']." class='btn btn-icon btn-danger cc btn-sm '><i class='fa fa-trash'></i></button>
                                      
                                
                                </div></td>";
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
    var floorname=$('#floorname').val();

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
messageTop: 'PATIENTS LIST'

         

       },
       {
           extend: 'pdf',
           footer: true,
          text: '&nbspCustom PDF',
             exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
   
messageTop: 'PATIENTS LIST'




       },
       
       {
           extend: 'excel',
              text: '&nbspCustom EXCEL',
           footer: false,
              exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
messageTop: 'PATIENTS LIST'

                   } ,  


  {
           extend: 'print',
              text: '&nbsp Custom Print',
           footer: false,
              exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
messageTop: 'PATIENTS LIST'

                   } ,  


  {
           extend: 'copy',
              text: '&nbsp Custom Copy',
           footer: false,
              exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
messageTop: 'PATIENTS LIST'

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
$(document).on('click','.cc',function(event){
   var el = this;
  event.preventDefault();
 var del_id= $(this).attr('id');
 swal({
  title: "Are You Sure to Delete Patient Information?All Data Related to Patient Will Be Deleted",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
 .then((willDelete) => {
  if (willDelete) {
     $.ajax({
                url:"deleteform.php?id="+del_id,
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