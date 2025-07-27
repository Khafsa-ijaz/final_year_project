<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->

<!doctype html>
<html lang="en">
  <head>
    <style>
        /* Style for the blinking text */
        .blinking-text {
         /* Font size */
            color: #1090CD; /* Text color */
            font-weight: bold; /* Bold text */
            animation: blink 2s infinite; /* Animation properties */
        }

        /* Keyframes for the blinking effect */
        @keyframes blink {
            0%, 100% {
                opacity: 1; /* Fully visible at the start and end */
            }
            50% {
                opacity: 0; /* Invisible at 50% of the animation */
            }
        }
         .glow-text {
  font-size: 15px;
  color: #fff;
  text-align: center;
  margin: 4px;
  animation: glow 1s infinite;
}

@keyframes glow {
  0% {
    text-shadow:
      0 0 5px #ff0000,
      0 0 10px #ff0000,
      0 0 20px #ff0000,
      0 0 30px #ff4500,
      0 0 40px #ff4500,
      0 0 50px #ff4500,
      0 0 60px #ff8c00;
  }
  20% {
    text-shadow:
      0 0 10px #ffff00,
      0 0 20px #ffff00,
      0 0 30px #ffd700,
      0 0 40px #ffd700,
      0 0 50px #ffd700,
      0 0 60px #ffd700,
      0 0 70px #ffd700;
  }
  30% {
    text-shadow:
      0 0 5px #ff0000,
      0 0 10px #ff0000,
      0 0 20px #ff0000,
      0 0 30px #ff4500,
      0 0 40px #ff4500,
      0 0 50px #ff4500,
      0 0 60px #ff8c00;
  }
}
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Faculty</title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- //web fonts -->
     <link rel="shortcut icon" type="image/x-icon" href="logo.PNG">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>


<!-- Top Menu 1 -->
<section class="w3l-top-menu-1">
  <div class="top-hd" style="background-color:#1090CD">
    <div class="container">
  <header class="row top-menu-top" >
    <div class="accounts col-md-9 col-6">
      <div class="scrolling-text-container">

<?php
include('connection.php');
$sql = "SELECT notice FROM notifications  order by id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
$notice=$row['notice'];

  }
}
?>

      <p class="blinking-text"   style="color:white"> <?php echo $notice?></p>
  
    </div>
    </div>
    <div class="social-top col-md-3 col-6">
      <a href="http://localhost/cs&it/html/ltr/vertical-menu-template/login" class="btn btn-secondary-outline " style="background-color:#5B8343; color:white; font-weight: bold;border: 1px solid #1090CD;">Admin Login </a>
    </div>
  </header>
</div>
</div>
</section>
<section class="w3l-top-menu-2">
  <div class="top-hd" style="background-color:#5B8343; color: white; ">
    <div class="container">
  <header class="row top-menu-top" >
    <div class="accounts col-md-12 col-6">
 <a href=''>
  
    <div style="text-align: left; margin-left: 2px;" class="glow-text">

<?php
include('connection.php');
$sql = "SELECT file FROM accredetation order by id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $v8=$row['file'];
 $image="../html/ltr/vertical-menu-template/uploads/$v8";
// $file=$row['file'];

  }
}
?>
 </div>
 
<nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
    <div class="container" style="color:white;">
      <!-- <a class="navbar-brand" href="index.html"><span class="fa fa-pencil-square-o "></span> Mastery</a> -->
       
   
      

      <div class="top-hd" style="background-color:#5B8343; color:white;" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto" style="color:white;">
        
    
         
        
        
            <li class="nav-item">
            <a class="nav-link" href="http://localhost/integrate/CourseManagementSystem/" style="color: white;"><b>Course Registration</b></a>
         </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/integrate/university%20societies/university%20societies/project" style="color: white;"><b>Societies</b></a>
          </li>
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="programs.php" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" ondrop="Toggle" style="color: white;"><b>Alumni Portal</b></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="graphical_rep.php" >Survay</a>
              <a class="dropdown-item" href="loginal.php">Login</a>
                            <a class="dropdown-item" href="createAccount.php">Registration</a>
          
             </div>
          </li>
          
         <!--   <li class="nav-item " >
            <a class="nav-link" href="graphical_rep.php" style="color: white;"><b>Survay</b></a>
          </li> -->
   <li class="nav-item glow-text">
            <a class="nav-link" href="accre.php" style="color: white;"><b>Accreditation</b></a>
          </li>

        </ul>
      
      </div>
    </div>
  </nav>
    </div>

  </header>
</div>
</div>
</section>

<!-- //Top Menu 1 -->
<section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
    <div class="container">
      <!-- <a class="navbar-brand" href="index.html"><span class="fa fa-pencil-square-o "></span> Mastery</a> -->
       
    <a class="navbar-brand" href="#index.html">
        <img src="cs32.png" alt="Your logo" title="Your logo" style="height:60px;" />
    </a> 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="index12.php"><b >Home</b></a>
          </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="about.php" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
             <b> About
</b>            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="about.php">The HOD</a>
              <a class="dropdown-item" href="thedepartment.php">The Department</a>
          
             </div>
          </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="programs.php" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" ondrop="Toggle"><b>Programs</b></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="undergaraduate.php">BS Computer Science</a>
              <a class="dropdown-item" href="ds.php">Bs Data Science</a>
                            <a class="dropdown-item" href="bs.php">MS Computer Science</a>
          
             </div>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="faculty.php"><b style="color:#5b8343">Faculty</b></a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="news.php"><b>News</b></a>
         
            <li class="nav-item">
            <a class="nav-link" href="notification.php"><b>Notifications</b></a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="contact1.php"><b >Contact</b></a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="gallery.php"><b>Gallery</b></a>
          </li>
           </li>
            <li class="nav-item">
            <a class="nav-link" href="downloads.php"><b>Downloads</b></a>
          </li>
 <li class="nav-item">
            <a class="nav-link" href="job.php"><b>Jobs</b></a>
          </li>
        </ul>
       <!--  <form action="search-results.html" class="form-inline position-relative my-2 my-lg-0">
          <input class="form-control search" type="search" placeholder="Search here..." aria-label="Search" required="">
          <button class="btn btn-search position-absolute" type="submit"><span class="fa fa-search" aria-hidden="true"></span></button>
        </form> -->
      </div>
    </div>
  </nav>
</section>
<section class="w3l-about-breadcrum">
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3">
      <h2>Faculty</h2>
      <p><a href="index12.php">Home</a> &nbsp; / &nbsp;Faculty</p>
    </div>
  </div>
</section>

<!-- content-with-photo4 block -->
   
<br>

<div class="parallax-3 top-padding">



    <div id="primary" class=" container contents news-n-events content-area"><h3 style="color:#1090CD; font-size:32px;font-weight: bold;">Faculty</h3>
<br>
<br>
        <div class="row row-eq-height">



  



            <div class="col-lg-9 col-md-9">

                <div class="box details">

                    

         <!--            <div class="description"><div style="color: green;

font-size: 11px;

font-weight: 600;

margin-bottom: -9px;

margin-top: -19px;

padding-top: 8px;

padding-right: 20px;

padding-bottom: 22px;

padding-left: 0px;">Last updated on May 10th, 2024</div> -->

  <table class="table table-bordered table-striped " width="669">
<tbody>
<tr>
<td colspan="3" bgcolor="#5B8343" width="669">
<h4><span style="color: #ffffff;"><strong>Faculty – Computer Science & Informantion Technology</strong></span></h4>
</td>
</tr>
</tbody>
</table>
<?php
$sql = "SELECT * FROM faculty";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   $v8=$row['file'];
 $image="../html/ltr/vertical-menu-template/uploads/$v8";
 $path ="../html/ltr/vertical-menu-template/uploads/humn.jpg";
if($row['status']=='Active')
{
  echo"
 
<figure class='wp-block-table table table-bordered is-style-regular'>
<table>
<tbody>
<tr>
<td class='has-text-align-left' data-align='left'><img style='width: 150px; height: 150px;' src='$image'></td>
<td><a href='facultydetail.php?id=$row[id]' target='_blank' rel='noreferrer noopener'><strong>$row[fname] $row[lname]</strong></a><br><strong>$row[designation]</strong>  <strong> </strong><br><strong>HEC Approved Supervisor<br></strong><br>$row[qualification] ,$row[university]<br>
</tr>
</tbody>
</table>
</figure>

";

}






      }
    }
     
        ?>




<!-- figure class="wp-block-table table table-bordered is-style-regular">
<table>
<tbody>
<tr>
<td><img style="width: 150px; height: 150px;" src="assets/images/jawad.jpeg"></td>
<td><a href="drjawad.php" target="_blank" rel="noreferrer noopener"><strong>Dr Jawad </strong></a><br><strong>Sr. Associate Professor<br></strong><br>MS (CS), University of Manchester, UK<br>Research Interest: Learning Systems, Algorithm Analysis<br>Office: 1241</td>
</tr>
</tbody>
</table>
</figure>



<figure class="wp-block-table table table-bordered is-style-regular">
<table>
<tbody>
<tr>
<td><img style="width: 150px; height: 150px;" src="assets/images/dr.shahid.png"></td>
<td class="has-text-align-left" data-align="left"><a href="drshahid.php" target="_blank" rel="noreferrer noopener"><strong>Dr. Muhammad Shahid Iqbal<br></strong></a><strong>Associate Professor<br></strong><br>PhD (CS), University of Kassel, Germany<br>Research Interest: Wireless Networks, Signal Processing<br>Office: 1249</td>
</tr>
</tbody>
</table>
</figure>



<figure class="wp-block-table table table-bordered is-style-regular">
<table>
<tbody>
<tr>
<td><img style="width: 150px; height: 150px;" src="assets/images/anees.png"></td>
<td><a href="dranees.php"  rel="noreferrer noopener"><strong>Dr. Anees Qumar Abbasi</strong></a><br><strong>Associate Professor</strong><br><strong>HEC Approved Supervisor<br></strong><br>Ph.D, Vienna University of Technology, Vienna, Austria<br>Research Interest: Semantic Web, Smart Technologies<br>Office: 1405</td>
</tr>
</tbody>
</table>
</figure>



<figure class="wp-block-table table table-bordered is-style-regular">
<table>
<tbody>
<tr>
<td><img style="width: 150px; height: 150px;" src="https://bahria.edu.pk/buic/cs/wp-content/uploads/2015/01/SA.png" alt=""></td>
<td><strong><a href="fouzia.php" rel="noreferrer noopener">Ms.Fouzia Sher Akbar</a><br><strong>Lecturar</strong></strong><br><strong><strong>Internship/Placement Coordinator (CS Program)</strong></strong> <br><strong>HEC Approved Supervisor</strong><br><br>Ph.D, Université de Lorraine, Nancy, France<br>Research Interest: Formal Methods<br>Office: 1424</td>
</tr>
</tbody>
</table>
</figure>



<figure class="wp-block-table table table-bordered is-style-regular">
<table>
<tbody>
<tr>
<td><img style="width: 150px; height: 150px;" src="assets/images/aamir1.png" alt=""></td>
<td><a href="mraamir.php"  rel="noreferrer noopener"><strong>Mr.Aamir Aziz Butt</strong></a><br><strong>Lecturar</strong><br><strong>Cluster Head (CS Program)</strong><br><strong>HEC Approved Supervisor</strong><br><br>MSCE, COMSATS , Islamabad<br>Research Interest: Informatics and Distributed Systems<br>Office: 2034</td>
</tr>
</tbody>
</table>
</figure>



<figure class="wp-block-table table table-bordered is-style-regular">
<table>
<tbody>
<tr>
<td><img style="width: 150px;" src="assets/images/ug.png" alt="HIA circle letter logo design with circle and ellipse shape. HIA ellipse  letters with typographic style. The three initials form a circle logo. HIA  Circle Emblem Abstract Monogram Letter Mark Vector. 9183158"></td>
<td><strong><a href="uzma.php"  rel="noreferrer noopener">Syeda Uzma Gardazi </a></strong><br><strong>Sr. Assistant Professor</strong><br><strong>HEC Approved Supervisor<br></strong><br>Ph.D, Universiti Teknologi Malaysia<br>Research Interest: Artificial Intelligence, Machine Learning<br>Office: 1341</td>
</tr>
</tbody>
</table>
</figure>



<figure class="wp-block-table table table-bordered is-style-regular">
<table>
<tbody>
<tr>
<td><img class="wp-image-9041" style="width: 150px;" src="assets/images/irrum.png" alt="" srcset="assets/images/irrum.png" sizes="(max-width: 500px) 100vw, 500px"></td>
<td><strong><a href="irrum.php"  rel="noreferrer noopener">Ms.Irrum Shafique<br></a><strong>Sr. Assistant Professor </strong></strong><br><br>MS, National University of Science and technology NUST, Islamabad<br>Research Interest: Information Security, Cyber Security<br>Office: 1341</td>
</tr>
</tbody>
</table>
</figure>



<figure class="wp-block-table table table-bordered is-style-regular">
<table>
<tbody>
<tr>
<td><img class="wp-image-10850" style="width: 150px;" src="assets/images/juweria.jpeg" alt=""></td>
<td><strong><a href="juweria.php" target="_blank" rel="noreferrer noopener">Ms.Juwaria Shafique</a></strong><br><strong>Senior Assistant Professor</strong><br><br>MPhil, QAU, Islamabad<br>Research Interest: Artificial Intelligence, DSS<br>Office:1341</td>
</tr>
</tbody>
</table>
</figure>



<figure class="wp-block-table table table-bordered is-style-regular">
<table>
<tbody>
<tr>
<td><img style="width: 150px; height: 150px;" src="assets/images/aftab.jpg"></td>
<td><strong><a href="aftab.php" target="_blank" rel="noreferrer noopener">Mr. Aftab Ahmed</a></strong><br><strong>Assistant Professor </strong><br><br>PhD, NUST, Pakistan<br>Research Interest: Data Science, Machine Learning<br>Office: 1341</td>
</tr>
</tbody>
</table>
</figure>



<figure class="wp-block-table table table-bordered is-style-regular">
<table>
<tbody>
<tr>
<td><img style="width: 150px; height: 150px;" src="assets/images/ban22.png" alt=""></td>
<td><a href="komal.php" target="_blank" rel="noreferrer noopener"><strong>Ms. Komal Farooq</strong></a> <br><strong>Assistant Professor<br></strong><br>MS (Software Engineering), IIU, Islamabad, Pakistan<br>Research Interest: Software Engineering<br>Office: 1341</td>
</tr>
</tbody>
</table>
</figure>



<figure class="wp-block-table table table-bordered is-style-regular">
<table>
<tbody>
<tr>
<td><img style="width: 150px; height: 150px;" src="assets/images/ban2.png"></td>
<td><a href="mrwaqas.php" target="_blank" rel="noreferrer noopener"><strong>Mr.Waqas Arif</strong></a><br><strong>Assistant Professor</strong><br><strong>Final Year Project Coordinator (CS Program)<br></strong><br>MS (Information Technology), NUST, Pakistan<br>Research Interest: Internet of Things, Cloud Computing<br>Office: 1439</td>
</tr>
</tbody>
</table>
</figure> -->



















<!-- /wp:table -->

<!-- wp:table {"className":"table table-bordered is-style-regular"} -->

<!-- /wp:table -->

<!-- wp:table {"className":"table table-bordered is-style-regular"} -->

<!-- wp:table {"className":"table table-bordered is-style-regular"} -->

<!-- /wp:table -->

<!-- wp:table {"className":"table table-bordered is-style-regular"} -->

<!-- /wp:table -->

<!-- wp:table {"className":"table table-bordered is-style-regular"} -->

<!-- /wp:table -->

<!-- wp:table {"className":"table table-bordered is-style-regular"} -->

<!-- /wp:table -->

<!-- wp:table {"className":"table table-bordered is-style-regular"} -->


<!-- /wp:table -->

<!-- wp:table {"className":"is-style-regular"} -->

<!-- /wp:table -->
<table class="table table-bordered table-striped" width="669">
<tbody>
<tr>
<td colspan="3" bgcolor="#5B8343" width="669">
<h4><span style="color: #ffffff;"><strong>Faculty on Leave</strong></span></h4>
</td>
</tr>
</tbody>
</table>
<!-- wp:table {"className":"table table-bordered is-style-regular"} -->

<!-- /wp:table -->

<!-- wp:table {"className":"table table-bordered is-style-regular"} -->
<figure class="wp-block-table table table-bordered is-style-regular">
<table>
<tbody>
<?php
$sql = "SELECT * FROM faculty";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   $v8=$row['file'];
 $image="../html/ltr/vertical-menu-template/uploads/$v8";
 $path ="../html/ltr/vertical-menu-template/uploads/humn.jpg";
if($row['status']=='Leave')
{
  echo"
 
<figure class='wp-block-table table table-bordered is-style-regular'>
<table>
<tbody>

<tr>
<td class='has-text-align-left' data-align='left'><img style='width: 150px; height: 150px;' src='$image'></td>
<td><a href='facultydetail.php?id=$row[id]' target='_blank' rel='noreferrer noopener'><strong>$row[fname] $row[lname]</strong></a><br><strong>$row[designation]</strong>  <strong> </strong><br><strong>HEC Approved Supervisor<br></strong><br>$row[qualification] ,$row[university]<br>
</tr>
</tbody>
</table>
</figure>

";

}






      }
    }
     
        ?>
</tbody>
</table>
</figure>

<figure class="wp-block-table table table-bordered is-style-regular"></figure>
<!-- /wp:table -->

<!-- wp:heading -->
<table class="table table-bordered table-striped" width="669">
<tbody>
<tr>
<td colspan="3" bgcolor="#5B8343" width="669">
<h4><span style="color: #ffffff;"><strong>Student Advisor</strong></span></h4>
</td>
</tr>
</tbody>
</table>
<!-- <h2><strong><span style="text-decoration: underline;background: #5B8343;">Student Advisor</span></strong></h2> -->
<!-- /wp:heading -->

<!-- wp:table {"className":"table table-bordered is-style-regular"} -->
<figure class="wp-block-table table table-bordered is-style-regular">
<table>
<tbody>
<tr>
<td><img style="width: 150px; height: 150px;" src="https://bahria.edu.pk/buic/cs/wp-content/uploads/2020/07/Sahar-Arshad.png"></td>
<td><strong>Student Advisor<br></strong><br>Office: 1447, <a href="#">cs&it department</a></td>
</tr>
</tbody>
</table>
</figure>
<!-- /wp:table -->

</div>


                    
                </div>



            </div>
          



        </div>



    </div>



</div><!-- .content-area -->
	<!-- /features -->
		
   <!-- //features -->
</section>

<?php
include('connection.php');
$sql = "SELECT fname FROM faculty  order by id DESC ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
$notice=$row['fname'];

  }
}
?>


<!-- grids block 5 -->
<section class="w3l-footer-29-main" >
  <div class="footer-29" style="background-color:#1090CD">
      <div class="container">
          <div class="d-grid grid-col-4 footer-top-29">
              <div class="footer-list-29 footer-1">
                  <h6 class="footer-title-29">Contact Us</h6>
                <ul>
                      <li><p><span class="fa fa-map-marker"></span> Banipasri Campus, computer Science And information technollogy Department, near Roost hotel.</p></li>
                      <li><a href="tel:+92 346 5167137"><span class="fa fa-phone"></span> +92 346 5167137</a></li>
                      <li><a href="mailto: goharrehman@wuajk.edu.pk" class="mail"><span class="fa fa-envelope-open-o"></span> goharrehman@wuajk.edu.pk</a></li>
                  </ul>
                  <div class="main-social-footer-29">
                      <a href="https://www.facebook.com/wuajk?mibextid=ZbWKwL" class="facebook" style="background-color:#5B8343"><span class="fa fa-facebook"></span></a>
                      <a href="#twitter" class="twitter" style="background-color:#5B8343"><span class="fa fa-twitter"></span></a>
                      <a href="https://www.instagram.com/wome.nuniversityofajkbagh?igsh=MXZjZ3NweGs1MHU3Zw==" class="instagram" style="background-color:#5B8343"><span class="fa fa-instagram"></span></a>
                      <a href="https://wuajk.edu.pk/department/computer-sciences-IT" class="google-plus" style="background-color:#5B8343"><span class="fa fa-google-plus"></span></a>
                      <a href="#linkedin" class="linkedin" style="background-color:#5B8343"><span class="fa fa-linkedin"></span></a>
                  </div>
              </div>
             <div class="footer-list-29 footer-2">
                  <ul>
                      <h6 class="footer-title-29">Featured Links</h6>
                      <li><a href="programs.php">Programs</a></li>
                      <li><a href="faculty.php">Faculty</a></li>
                      <li><a href="notification.php">Notifications</a></li>
                      
                  </ul>
              </div>
               <!--map-->
              <div class="footer-list-29 footer-1" style="">
                 <h6 class="footer-title-29">Map</h6>
                 <div class="map">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3308.5130939828855!2d73.77471967442914!3d33.97935232157785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e0666929141a51%3A0x6d8e4d4ffa7f486a!2sWomen%20University%20Bagh%20Azad%20Jammu%20%26%20Kashmir!5e0!3m2!1sen!2s!4v1722508159425!5m2!1sen!2s" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>      </div>
         </div>
        <!--//map-->
              <div class="footer-list-29 footer-4">
                  <ul>
                      <h6 class="footer-title-29">Quick Links</h6>
                      
                      <li ><a  href="index12.php">Home</a></li>
                      <li><a href="about.php">About</a></li>
                      <li><a href="news.php">News</a></li>
                     
                      <li><a href="contact1.php">Contact</a></li>
                  </ul>
              </div>
          </div>
          <div class="d-grid grid-col-2 bottom-copies">
              <p class="copy-footer-29">© 2024 computer Science Department. All rights reserved | Designed by <a href="#">Khafsa Ijaz & Habeeba Mateen</a></p>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- //footer-28 block -->
</section>
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<!-- Template JavaScript -->
<script src="assets/js/all.js"></script>
<!-- Smooth scrolling -->
<!-- <script src="assets/js/smoothscroll.js"></script> -->
<script src="assets/js/owl.carousel.js"></script>

<!-- script for -->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->

</body>

</html>
<!-- // grids block 5 -->

