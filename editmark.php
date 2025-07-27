<?php
include('session_head.php');
include('sessionfinder.php');
?>
<?php  include('connection.php');
  $classname=$_POST['classname'];
  $termname=$_POST['termname'];
    $subject=$_POST['subject'];

  $sql = "  SELECT DISTINCT regno from result_entry  WHERE  class='$classname' AND termname='$termname' and session='$session'";
       $result = $conn->query($sql);
   $counting=0;
    while($row = $result->fetch_assoc()) {
       ++$counting;
   }
            if(isset($_POST['submit'])){
             $classname = $_POST['classname'];
            $termname = $_POST['termname'];

            $sql = "SELECT * FROM result_entry WHERE class='$classname' AND
             termname='$termname' and subject='$subject' order by r_id";
               $result = mysqli_query($conn, $sql);
               $rowcount = mysqli_num_rows($result);
            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             
             while($row = mysqli_fetch_assoc($result))  {
                $data123[]=$row;
            }
          }else {
                $data123['error'] = "No Result Found";
                }
        }
        
        
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
    <title>Edit Result</title>
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


if ($rowadv['pagename']=='Edit Result')
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
                     
    
               <?php
                     $sqlclasss = "  SELECT cname from classes  WHERE  id='$classname'  ";
                          $resultclasss = $conn->query($sqlclasss);

    $rowclasss = $resultclasss->fetch_assoc();
    $cccc=$rowclasss['cname'];
        ?>
               <h4 class="card-title">Result Edit Form:<b><i style="color:red">Class Name: </i><u><?php echo $cccc;?></u> <i style="color:green">Term: </i><u><?php echo $termname?></u></b>Subject : <?php echo $subject?></h4>
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
                      <form method="POST" action="dailypdf">
                    
                   <input type="hidden" value="<?php echo $date?>" name="date">
                
              
            </form>
        





 
      </div>


                        <FORM method="POST" action="save_result_entry2.php">
                <div class="card-content collapse show">
                    <div style="border:1px solid #304A7B"class="card-body card-dashboard">
                    
                              <div style="overflow-x:auto;">
                                <table class="" style="width:100%" class=""    id="myTable" >
                            <thead>
                                <tr>
                                    <th style="color: white;background-color:#304A7B;">S.#</th>
                                    <th style="color: white;background-color:#304A7B;">Reg No</th>
                                    <th style="color: white;background-color:#304A7B;">Roll No</th>
                                    <th style="color: white;background-color:#304A7B;">Name</th>
                                    
                                     
                                     <?php
          $sql = "  SELECT DISTINCT * from child_marks  WHERE  class='$classname' AND termname='$termname' and subject='$subject' ";
                          $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
      $sub_total=0;
      $count=0;
    while($row = $result->fetch_assoc()) {
      
        $count++;
       // $subject = $row['subject'];
      $data1[] = $row; //array('subject' => $subject );
    }

  }
  json_encode($data1);
  for ($i=0; $i<$count; $i++) {
        echo '<th colspan="4" id="subject'.$i.'" style="color: white;background-color:#304A7B;" value="'.$data1[$i]['subject'].'" "> ';
        echo "<input type='hidden' name='subjectnamee[]' value='".$data1[$i]['subject']."' />";
        echo $data1[$i]['subject'];
        echo '</th>';
        $sub_total = $sub_total + $data1[$i]['total_marks'];
  }
  $total123 = $data1[0]['total_marks'];
  $studentcount= $rowcount/$count;
?>
                  <th style="color: white;background-color:#304A7B;">Total Obtained</th>
                  <th style="color: white;background-color:#304A7B;">Total Marks</th>
                  <th style="color: white;background-color:#304A7B;">Percent</th>
                  <th style="color: white;background-color:#304A7B;">Grade</th>
                  <th style="color: white;background-color:#304A7B;">Status</th>
                  <th style="color: white;background-color:#304A7B;">Position</th>
                    </tr>
                    <tr>
                      <th>  </th>
                      <th>  </th>
                      <th>  </th>
                      <th>  </th>
        <?php   for ($i=0; $i<$count; $i++) {
          $c=$i+3;
          if ($data1[$i]['child_1']!='None')
          {
        echo '<th id="a['.$i.'] name="child_1" > ';
        echo $data1[$i]['child_1']. "\n".$data1[$i]['t1'];
        echo '</th>';
          }
             if ($data1[$i]['child_1']=='None')
          {
                 echo '<th id="a['.$i.'] name="child_1" > ';
                     echo '</th>';
          }
            if ($data1[$i]['child_2']!='None')
          {
        echo '<th  id="a['.$i.']" name="child_2"> ';
        echo $data1[$i]['child_2']. "\n".$data1[$i]['t2'];
        echo '</th>';
          }
          
           if ($data1[$i]['child_2']=='None')
          {
              echo '<th id="a['.$i.'] name="child_2" > ';
                     echo '</th>';
          }
          if ($data1[$i]['child_3']!='None')
          {
          
        echo '<th  id="a['.$i.']" name="child_3" > ';
        echo $data1[$i]['child_3']. "\n".$data1[$i]['t3'];
        echo '</th>';
          }
          if ($data1[$i]['child_3']=='None')
          {
                echo '<th id="a['.$i.'] name="child_3" > ';
                     echo '</th>';
          }
          if ($data1[$i]['child_4']!='None')
          {
        echo '<th  id="a['.$i.']" name="child_4"> ';
        echo $data1[$i]['child_4']. "\n".$data1[$i]['t4'];
        echo '</th>';
          }
           if ($data1[$i]['child_4']=='None')
          {
               echo '<th id="a['.$i.'] name="child_4" > ';
                     echo '</th>';
          }
  }
  ?>
                      <th>  </th>
                      <th>  </th>
                      <th>  </th>
                      <th>  </th>
                      <th>  </th>
                            </tr>

                            </thead>
                            <tbody>
    <?php
                         $dd=0;
                         $kd=0;
                      for($i=0; $i<$counting; $i++)
                      {

                        $sr=$i+1;
                        echo '<tr>';
                        echo "<td>";
                        echo $sr;
                        echo "</td>";
                        echo "<td >";
                        echo $data123[$kd]['regno'];
                        echo "<input type='hidden' name='regno[]' 
                        value='".$data123[$kd]['regno']."' />";
                        echo "</td>";
                        echo "<td>";
                        echo $data123[$kd]['rollno'];
                        echo "<input type='hidden' name='rollno[]' 
                        value='".$data123[$kd]['rollno']."' />";
                        echo "</td>";
                        echo "<td>";
                        echo $data123[$kd]['name'];
                        echo "<input type='hidden' name='studentname[]' 
                        value='".$data123[$kd]['name']."' />";
                        echo "</td>";
                        for($f=1; $f<=$count; $f++){
                            
                             if ($data1[$f-1]['child_1']!='None')
                        {
                        echo "<td>";
                        if ($data123[$dd]['mark1']=='0A')
                        {
                            echo "<input style='background-color:red;color:white' id='".$data123[$kd]['regno']."' type='text' onchange='val1(this.value, $f,this)'
                         name='child1[]' style='  width: 70px;' 
                         class='si form-control' size='3%' 
                          value='".$data123[$dd]['mark1']."'/>";
                          
                        }
                        else
                        {
                        echo "<input id='".$data123[$kd]['regno']."' type='text' onchange='val1(this.value, $f,this)'
                         name='child1[]' style='  width: 70px;' 
                         class='si form-control' size='3%' 
                          value='".$data123[$dd]['mark1']."'/>";
                        echo "</td>";
                        }
                        }
                        if ($data1[$f-1]['child_1']=='None')
                        {
                            echo "<td>";
                            echo "</td>";
                        }
                         if ($data1[$f-1]['child_2']!='None')
                        {
                        echo "<td>";
                        if ($data123[$dd]['mark2']=='0A')
                        {
                        
                        echo "<input style='background-color:red;color:white' id='".$data123[$kd]['regno']."+6000' type='text' onchange='val2(this.value, $f,this)'
                         name='child2[]' style=' border:false;  width: 70px;' 
                         class='si form-control' size='3%' 
                          value='".$data123[$dd]['mark2']."'/>";
                     
                        }
                        
                        else
                        {
                             echo "<input id='".$data123[$kd]['regno']."+6000' type='text' onchange='val2(this.value, $f,this)'
                         name='child2[]' style=' border:false;  width: 70px;' 
                         class='si form-control' size='3%' 
                          value='".$data123[$dd]['mark2']."'/>";
                       echo "</td>";
                        
                        }
                        }
                         if ($data1[$f-1]['child_2']=='None')
                        {
                             echo "<td>";
                                 echo "</td '>";
                        }
                          if ($data1[$f-1]['child_3']!='None')
                        {
                           
                        echo "<td>";
                            if ($data123[$dd]['mark3']=='0A')
                        {
                        
                        echo "<input style='background-color:red;color:white' id='".$data123[$kd]['regno']."+1000000' type='text' onchange='val3(this.value, $f,this)'
                         name='child3[]' style='  width: 70px;' 
                         class='si form-control' size='3%'  
                         value='".$data123[$dd]['mark3']."'/>";
                        echo "</td>";
                        }
                        
                        else
                        { echo "<input id='".$data123[$kd]['regno']."+1000000' type='text' onchange='val3(this.value, $f,this)'
                         name='child3[]' style='  width: 70px;' 
                         class='si form-control' size='3%'  
                         value='".$data123[$dd]['mark3']."'/>";
                        echo "</td>";
                        }
                        }
                          if ($data1[$f-1]['child_3']=='None')
                        {
                                echo "<td>";
                                    echo "</td>";
                        }
                         if ($data1[$f-1]['child_4']!='None')
                        {
                        echo "<td>"; 
                            if ($data123[$dd]['mark4']=='0A')
                        {
                             echo "<input style='background-color:red;color:white' id='".$data123[$kd]['regno']."+2000000' type='text' onchange='val4(this.value, $f,this)'
                         name='child4[]' style='  width: 70px;' 
                         class='si form-control' size='3%'  
                         value='".$data123[$dd]['mark4']."'/>";
                        echo "</td>";   
                        }
                        else
                        {
                        echo "<input id='".$data123[$kd]['regno']."+2000000' type='text' onchange='val4(this.value, $f,this)'
                         name='child4[]' style='  width: 70px;' 
                         class='si form-control' size='3%'  
                         value='".$data123[$dd]['mark4']."'/>";
                        echo "</td>";
                        }
                        }
                          if ($data1[$f-1]['child_4']=='None')
                        {
                              echo "<td>"; 
                               echo "</td>";
                        }
                        
                        $dd++;
                      };
                        echo "<td id='total' name='Ototal[]' >";
                        echo "</td>";
                        echo "<td name='Ttotal[]'>";
                        echo $sub_total;
                        echo "</td>";
                        echo "<td id='Percent' >";
                        echo "</td>"; 
                        echo "<td id='Grade' name='Grade[]'>";
                        echo "</td>";
                        echo "<td id='Status' name='Status[]'>";
                        echo "</td>";
                        echo "<td>";
                        echo "<input type='hidden' 
                        value='".$data123[$kd]['c_position']."'   name='Position[]' class='abc' style='border-style:none; width: 50px;'  readonly size='3%'/>";
                         echo "<p class='aaa'>".$data123[$kd]['c_position']."</>";
                        echo "</td>";
                        echo "</tr>";
                        $kd=$kd+$count;
                      }
                    ?>
                        </tbody>    
                        </table>
                    </div>
                     <input type="hidden" name="classname" value="<?php echo $classname;  ?>" />
                     <input type="hidden" name="termname" value="<?php echo $termname;   ?>" />
                      <input type="hidden" name="subject" value="<?php echo $subject;   ?>" />
                </div>

                <!--  <button name="submit" type="submit" id="btnsubmit" class="btn btn-success">Submit Result</button> -->
               </div> 
               <hr>
       <button name="submit" type="submit" id="btnsubmit" class="btn btn-success btn-sm btn-glow">Save Result (Second Step)</button>
        <button onclick="mess1()" type="button" class="btn btn-danger btn-sm btn-glow" ><span  class="blink_me">Position Result (First Step)</span></button>
               </FORM>
          
               <div class="col-md-12">
              
               </div>
               </div>
          
        </div>
    </div>
</section>
<!-- File export table -->
</div>
</div>
</div>

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->



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

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<script type="text/javascript">
  function val1(i, f,t)
  {
       var id = t.id;
       console.log(id);
       
      if (i=='A' || i=='ABSENT' || i=='a' || i=='absent' || i=='abs')
      {
           var x = document.getElementById(id) ;
    
      swal({
    title: 'Absent Alert',
    text: 'Marking Absent Successfully',
    type: 'warning',
    timer: 2500,
    showConfirmButton: false
  }).then(function() {
        var x = document.getElementById(id) ;
    
       $(x).val('0A');
          $(x).select();
       x.style.backgroundColor="red";
         x.style.color = "white";
      
  });
       
      }
      var k=f+(3*f);
      var subject_count= '<?php echo $count;  ?>';
      var table = document.getElementById("myTable");
      var cell_v = table.rows[1].cells[k].innerHTML;
      var number = cell_v.replace(/\D/g, ''); // a string of only digits, or the empty string
      number = parseInt(number, 10);         // now it's a numeric value
      var cc=i;
      if(i>number){
 
                         swal({
    title: 'Greater Marks Error',
    text: 'Obtained Marks cannot be greater then total marks',
    type: 'warning',
    timer: 2500,
    showConfirmButton: false
  }).then(function() {
 var x = document.getElementById(id) ;
    
       $(x).val(0);
         $(x).select();
  });
       
     
console.log(k);




      }
      else{
       
      }
     
      var aa= '<?php echo $classname;  ?>';
      var bb= '<?php echo $termname;   ?>';
      
    
  }
</script>

<script type="text/javascript">
  function val2(i, f,t)
  {
       var id = t.id;
      if (i=='A' || i=='ABSENT' || i=='a' || i=='absent' || i=='abs')
      {
           var x = document.getElementById(id) ;
    
     swal({
    title: 'Absent Alert',
    text: 'Marking Absent Successfully',
    type: 'warning',
    timer: 2500,
    showConfirmButton: false
  }).then(function() {
        var x = document.getElementById(id) ;
    
       $(x).val('0A');
          $(x).select();
       x.style.backgroundColor="red";
         x.style.color = "white";
      
  });
       
      }
      var k=f+(3*f)+1;
      var subject_count= '<?php echo $count;  ?>';
      var table = document.getElementById("myTable");
      var cell_v = table.rows[1].cells[k].innerHTML;
      var number = cell_v.replace(/\D/g, ''); // a string of only digits, or the empty string
      number = parseInt(number, 10);         // now it's a numeric value
      var cc=i;
      if(i>number){
     
                  swal({
    title: 'Greater Marks Error',
    text: 'Obtained Marks cannot be greater then total marks',
    type: 'warning',
    timer: 2500,
    showConfirmButton: false
  }).then(function() {
 var x = document.getElementById(id) ;
    
       $(x).val(0);
         $(x).select();
  });
       
     
      }
      else{
       
      }
      var aa= '<?php echo $classname;  ?>';
      var bb= '<?php echo $termname;   ?>';

  }
</script>

<script type="text/javascript">
  function val3(i, f,t)
  {
       var id = t.id;
      if (i=='A' || i=='ABSENT' || i=='a' || i=='absent' || i=='abs')
      {
           var x = document.getElementById(id) ;
    
      swal({
    title: 'Absent Alert',
    text: 'Marking Absent Successfully',
    type: 'warning',
    timer: 2500,
    showConfirmButton: false
  }).then(function() {
        var x = document.getElementById(id) ;
    
       $(x).val('0A');
          $(x).select();
       x.style.backgroundColor="red";
         x.style.color = "white";
      
  });
       
      }
      var k=f+(3*f)+2;
      var subject_count= '<?php echo $count;  ?>';
      var table = document.getElementById("myTable");
      var cell_v = table.rows[1].cells[k].innerHTML;
      var number = cell_v.replace(/\D/g, ''); // a string of only digits, or the empty string
      number = parseInt(number, 10);         // now it's a numeric value
      var cc=i;
      
      if(i>number){
            swal({
    title: 'Greater Marks Error',
    text: 'Obtained Marks cannot be greater then total marks',
    type: 'warning',
    timer: 2500,
    showConfirmButton: false
  }).then(function() {
 var x = document.getElementById(id) ;
    
       $(x).val(0);
         $(x).select();
  });
       
     
      }else{
        
      }
      var aa= '<?php echo $classname;  ?>';
      var bb= '<?php echo $termname;   ?>';
      
  }
</script>

<script type="text/javascript">
  function val4(i, f,t)
  {
       var id = t.id;
      if (i=='A' || i=='ABSENT' || i=='a' || i=='absent' || i=='abs')
      {
           var x = document.getElementById(id) ;
    
   swal({
    title: 'Absent Alert',
    text: 'Marking Absent Successfully',
    type: 'warning',
    timer: 2500,
    showConfirmButton: false
  }).then(function() {
        var x = document.getElementById(id) ;
    
       $(x).val('0A');
          $(x).select();
       x.style.backgroundColor="red";
         x.style.color = "white";
      
  });
       
      }
     var k=f+(3*f)+3;
     var subject_count= '<?php echo $count;  ?>';
      var table = document.getElementById("myTable");
      var cell_v = table.rows[1].cells[k].innerHTML;
      var number = cell_v.replace(/\D/g, ''); // a string of only digits, or the empty string
      number = parseInt(number, 10);         // now it's a numeric value
      var cc=i;
      if(i>number){
        
                swal({
    title: 'Greater Marks Error',
    text: 'Obtained Marks cannot be greater then total marks',
    type: 'warning',
    timer: 2500,
    showConfirmButton: false
  }).then(function() {
 var x = document.getElementById(id) ;
    
       $(x).val(0);
         $(x).select();
  });
       
     
      }
      else{
      
      }
      
      var aa= '<?php echo $classname;  ?>';
      var bb= '<?php echo $termname;   ?>';
      
  }
</script>

<script type="text/javascript">
  $(document).change(function(){
    $('tr').each(function(){
      var totalmarks = 0;
      $(this).find('.si').each(function(){
          var marks=$(this).val();
          if(marks.length!==0)
          {
            totalmarks += parseFloat(marks);
          }
      });
      $(this).find('#total').text(totalmarks.toFixed(2));
    });

  });
</script>

<script type="text/javascript">
  $(document).change(function(){
    $('tr').each(function(){
      var tomarks = $(this).find('#total').text();
      var IntTmarks = parseFloat(tomarks);
      var total_marks = '<?php echo $sub_total;   ?>';
      var Percent = (IntTmarks / total_marks) * 100;
         Percent = parseInt(Percent);
      $(this).find('#Percent').text(Percent + "%");

    });

  });
</script>

<script type="text/javascript">
  $(document).change(function(){
    $('tr').each(function(){
      var percentage = $(this).find('#Percent').text();
      var INTpercentage = percentage.replace(/\D/g, '');
      INTpercentage = parseFloat(INTpercentage, 10); 
      console.log(INTpercentage);
      <?php 
      
        $sql420 = "SELECT cgroup FROM classes where id='$classname'";
$result420 = $conn->query($sql420);

  // output data of each row
  while($row420 = $result420->fetch_assoc()) {
$cgroup=$row420['cgroup'];
  }
        $sql = "SELECT * FROM grade_setting WHERE class_group='$cgroup'";
        $result = mysqli_query($conn,$sql);
        while( $row = mysqli_fetch_array($result) ){
        $Aplus = $row['Aplus'];
        $A = $row['A'];
        $Bplus = $row['Bplus'];
        $B = $row['B'];
        $C = $row['C'];
        $D = $row['D'];
        $E = $row['E'];
      }
      ?>
      if(INTpercentage >= '<?php echo $Aplus; ?>'){
          $(this).find('#Grade').text("A+");
          $(this).find('#Status').text("PASS");
      }
      else if(INTpercentage >= '<?php echo $A; ?>'){
          $(this).find('#Grade').text("A");
          $(this).find('#Status').text("PASS");
      }
      else if(INTpercentage >= '<?php echo $Bplus; ?>'){
          $(this).find('#Grade').text("B+");
          $(this).find('#Status').text("PASS");
      }
      else if(INTpercentage >= '<?php echo $B; ?>'){
          $(this).find('#Grade').text("B");
          $(this).find('#Status').text("PASS");
      }
      else if(INTpercentage >= '<?php echo $C; ?>'){
          $(this).find('#Grade').text("C");
          $(this).find('#Status').text("PASS");
      }
      else if(INTpercentage >= '<?php echo $D; ?>'){
          $(this).find('#Grade').text("D");
          $(this).find('#Status').text("PASS");
      }
      else if(INTpercentage >= '<?php echo $E; ?>'){
          $(this).find('#Grade').text("E");
          $(this).find('#Status').text("PASS");
      }
      else {
          $(this).find('#Grade').text("F");
          $(this).find('#Status').text("FAIL");
      }
    });

  });
</script>

<script type="text/javascript">
  function unique(list) {
    var result = [];
    $.each(list, function(i, e) {
        if ($.inArray(e, result) == -1) result.push(e);
    });
    return result;
}
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#btnsubmit').prop('disabled', true);
  });
  $(document).change(function(){
    $('#btnsubmit').prop('disabled', true);
  });
</script>
<script type="text/javascript">
  function mess1(){
     $('#btnsubmit').prop('disabled', false);
       var abc= [];
     var sorted = [];
     var ranks = [];   
     var abcd = [];   
     var k=0; 
     var IntTmarks;
    $('tr').each(function(){
      var tomarks = $(this).find('#total').text();
      IntTmarks = parseFloat(tomarks);
      abc.push(IntTmarks);
        abc = unique(abc);
        sorted = abc.slice().sort(function(a,b){return b-a;});
        ranks = abc.slice().map(function(v){ return sorted.indexOf(v)-1; });
              
    });  
    $('tr').each(function(){
      var tomarks2 = $(this).find('#total').text();
      var IntTmarks2 = parseFloat(tomarks2);


      var percent = $(this).find('#Percent').text();
      var INTpercentage = percent.replace(/\D/g, '');
      INTpercentage = parseFloat(INTpercentage, 10); 
      
      
           
      if(IntTmarks2 == 0 || INTpercentage<33){
          $(this).find('.abc').val(0);
           $(this).find('.aaa').text("0");
          }
      else if((sorted.indexOf(IntTmarks2)-1) == 1){
        $(this).find('.abc').val(sorted.indexOf(IntTmarks2)-1);
        $(this).find('.aaa').text(sorted.indexOf(IntTmarks2)-1 + "st");
          
          }
          else if(sorted.indexOf(IntTmarks2)-1 == 2){
            $(this).find('.abc').val(sorted.indexOf(IntTmarks2)-1);
            $(this).find('.aaa').text(sorted.indexOf(IntTmarks2)-1 + "nd");
          
          }
          else if(sorted.indexOf(IntTmarks2)-1==3){
            $(this).find('.abc').val(sorted.indexOf(IntTmarks2)-1);
            $(this).find('.aaa').text(sorted.indexOf(IntTmarks2)-1 + "rd");
          
          }
          else if(sorted.indexOf(IntTmarks2)-1 > 3){
            $(this).find('.abc').val(sorted.indexOf(IntTmarks2)-1);
              $(this).find('.aaa').text(sorted.indexOf(IntTmarks2)-1 + "th");
          
          }
});
}
</script>













































































