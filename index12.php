<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
   
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-4bab3422-273c-4fae-87cc-20c78e8b1d15" data-elfsight-app-lazy></div>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>cs&It</title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- //web fonts -->

      <link rel="shortcut icon" type="image/x-icon" href="logo.PNG">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">

  </head>
  <body style="">


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
			<a href="http://localhost/cs&it/html/ltr/vertical-menu-template/login" class="btn btn-secondary-outline " style="background-color:#5B8343; color:white; font-weight: bold; border: 1px solid #1090CD;">Admin Login </a>
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
            <li class="nav-item glow-text">
            <a class="nav-link" href="accre.php" style="color: white;"><b>Accreditation</b></a>
          </li>
           <!-- <li class="nav-item " >
            <a class="nav-link" href="graphical_rep.php" style="color: white;"><b>Survay</b></a>
          </li> -->
          <!--   <li class="nav-item">
            <a class="nav-link" href="contact1.php"><b>Contact</b></a>
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
          </li> -->

        </ul>
      
      </div>
    </div>
  </nav>
    </div>

  </header>
</div>
</div>
</section>



  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Admission Open </h5>
                    <a href="http://localhost/cs&it/html/ltr/vertical-menu-template/uploads/Admission%20Form%20WUB.pdf" style="color:#1090CD;font-weight:bold;">Admission Form</a>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <img style="width:100%;object-fit: contain;" src="admission.jpeg" class="img-fluid" alt="Image">
                </div>
            </div>
        </div>
    </div>




<!-- //Top Menu 1 -->
<section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
    <div class="container">
      <!-- <a class="navbar-brand" href="index.html"><span class="fa fa-pencil-square-o "></span> Mastery</a> -->
       
    <a class="navbar-brand" href="#index12.php">
        <img src="cs32.png" alt="Your logo" title="Your logo" style="height:60px;" />
    </a> 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:#5B8343">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="index12.php"><b style="color:#5b8343">Home</b></a>
          </li>
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="about.php" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
             <b> About 

</b>          
 
  </a>
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
            <a class="nav-link" href="faculty.php"><b>Faculty</b></a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="news.php"><b>News</b></a>
         
            <li class="nav-item">
            <a class="nav-link" href="notification.php"><b>Notifications</b></a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="contact1.php"><b>Contact</b></a>
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
<section class="w3l-main-slider" id="home">
  <!-- main-slider -->
  <div class="companies20-content">
   
    <div class="owl-one owl-carousel owl-theme">
      <div class="item">
        <li>
         
          <div class="slider-info banner-view bg bg2  " data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>Welcome to CS&IT Department</h5>
                
                </div>
                
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">

                  <h5>Welcome to the realm where innovation meets logic.</h5>
                 
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>

      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>Exceptional People, Exceptional Care</h5>
                 
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top3 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>Explore The World Of Our Graduates</h5>
                  
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
    </div>
  </div>

</div>


  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for -->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
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
  <!-- /main-slider -->
</section>
<section class="w3l-feature-3" id="features">
	<div class="grid top-bottom mb-lg-5 pb-lg-5">
		<div class="container">
			
			<div class="middle-section grid-column text-center">
				<div class="three-grids-columns" style="border: 1px solid #1090CD;">
					<span class="fa fa-laptop" style="color:#1090CD"></span>
					<h4>Our Mission</h4>
					<p>By promoting excellence in education, research, and social engagement, the Department of Computer Science</p>
					<a href="mission.php" class="btn btn-secondary btn-theme3 mt-4" style="background-color:#5B8343;color: white;  border: 2px solid #5B8343;">Read More </a>
				</div>
				<div class="three-grids-columns" style="border: 1px solid #1090CD;">
					<span class="fa fa-users" style="color:#1090CD"></span>
					<h4>Our vision</h4>
					<p>To excel in teaching, research and services that advance the economic strength of the region,effective solutions  </p>
					<a href="vision.php" class="btn btn-secondary btn-theme3 mt-4" style="background-color:#5B8343; color:white;  border: 2px solid #5B8343;">Read More </a>
				</div>
				<div class="three-grids-columns" style="border: 1px solid #1090CD;">
					<span class="fa fa-book" style="color:#1090CD"></span>
					<h4>Our Objectives</h4>
					<p>PEO 1: We aim to produce graduates who will be able to apply computing knowledge and skills to design and develop.

</p>
					<a href="objectives.php" class="btn btn-secondary btn-theme3 mt-4" style="background-color:#5B8343;color:white; border: 2px solid #5B8343;">Read More </a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- features-4 block -->


<section class="w3l-index1" id="about">
	<div class="calltoaction-20  py-5 editContent">
		<div class="container py-md-3">
		
			<div class="calltoaction-20-content row">
				<div class="column center-align-self col-lg-8 pr-lg-5">
					<h5 class="editContent" style="color:#1090CD">MESSAGE FROM THE HOD</h5>
          <h6 style="color:#5B8343">Welcome to CS&IT Department of WUBAJK</h6>
          <br>
					<p class="more-gap editContent">Welcome to our Department of Computer Sciences & Information Technology. The information explosion together with developments in technology have led to the convergence of traditional communication media and turned the Information Era into a web of integrated communication connections.  For Computer Scientists the current era is full of excitement and challenges as the discipline is now widely recognized to be an essential source of tools and techniques for advancements in nearly all spheres of human endeavour. Information Technology/ Computer Science is a fascinating subject, and one that is now indispensable in our lives. Almost every aspect of modern life involves computing – from mobile phones, TVs, planes, trains and cars, to gaming, security and medicine.  </p>
						<p class="more-gap editContent"> </p>
							<a href="about.php" class="btn btn-secondary btn-theme3 mt-4" style="background-color:#5B8343;color:white; border: 2px solid #5B8343;">Read More </a>
				</div>
				<div class="column ccont-left col-lg-4">
					<img src="sir.jpeg" class="img-responsive" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
         
<section class="w3l-index1" id="about" >
 
    <div class="container py-md-4" >
    
      <div class="calltoaction-20-content row">
            <div class="row center-align-self col-lg-6 pr-lg-4" >
          <br>
                    <h4 class="editContent" style="color:#1090CD;font-weight:bold; "><br>OUR WELCOME MESSAGE</h4>
            <p class="more-gap editContent">
              <br><span style="color:#5B8343; ">Empowerment through Education:</span> We value the empowerment of women through high-quality education, fostering their ability to lead and innovate in the field of computing. This value underscores our commitment to producing graduates who are not only technically proficient but also confident and ethical leaders.Commitment to Excellence: We are dedicated to excellence in teaching, research, and service, striving to advance the economic and scientific development of our region and beyond. This commitment reflects our aim to produce graduates capable of developing effective solutions for complex real-life problems and contributing positively to society.Lifelong Learning and Adaptability: We promote a culture of continuous learning and adaptability, preparing our graduates to stay current with evolving technologies throughout their careers. This value emphasizes our dedication to instilling a mindset of ongoing growth and adaptability, ensuring that our graduates remain relevant and impactful in their professional journeys.
  </p>
        </div>
        <div class="column center-align-top col-lg-6 pr-lg-4" >
         <?php

$sql = "SELECT file FROM video limit 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   $v8=$row['file'];
 $video="../html/ltr/vertical-menu-template/uploads/$v8";






echo"
    <video  width='100%'' height='100%'' controls >
  <source src='$video' type='video/mp4'>

Your browser does not support the video tag.
</video>

";
}
}
         ?> 
 
    

        </div>
    
        
      </div>
    </div>
 
</section>

        

<section class="w3l-form-12">
		<div class="form-12-content py-5" id="services">
			<div class="container py-md-3">
				<div class="grid grid-column-6 py-md-5">
						
					<div class="column1">
						<h3 class="tagline" style="color: #1090CD">PROGRAMS WE OFFER</h3>
						<p> Welcome to the Department of Computer Science, where innovation meets excellence. We are proud to offer a diverse range of programs designed to equip students with the skills and knowledge needed to excel in the ever-evolving field of technology.</p>
						
						</div>
						<div class="column2">
						<div class="row">
							
							
						
							
							<div class="col-md-4 col-sm-6 col-6 mt-4" >
								<a href="undergaraduate.php"><div class="courses-item mt-2" style="background-color:#5B8343">
									<span class="fa fa-gg"></span>
									<p>BS COMPUTER SCIENCE</p>
								</div></a>
							</div>
							<div class="col-md-4 col-sm-6 col-6 mt-4" >
								<a href="ds.php"><div class="courses-item mt-2" style="background-color:#5B8343">
									<span class="fa fa-desktop"></span>
									<p>BS DATA SCIENCE</p>
								</div></a>
							</div>
							<div class="col-md-4 col-sm-6 col-6 mt-4" style="color:#1090CD">
								<a href="bs.php"><div class="courses-item mt-2" style="background-color:#5B8343">
									<span class="fa fa-mouse-pointer"></span>
									<p>MASTER OF SCIENCE</p>
								</div></a>
							</div>
						</div>
						</div>
				</div>
			</div>
		</div>
	</section>
<!-- // form-12 -->
<section class="w3l-price-2" id="news">
    <div class="price-main py-5">
        <div class="container py-md-3" style="">
             <div class="pricing-style-w3ls row py-md-5">
              <div class="pricing-chart col-lg-6">
                <h3 class="" style="color:#1090CD; font-size: 23px; font-weight: bold;">LATEST NEWS</h3>
                <div class="tatest-top mt-md-5 mt-4">
                      
 <?php
 $sql = "SELECT * FROM news order by date Desc Limit 5";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   $v8=$row['file'];
 $image="../html/ltr/vertical-menu-template/uploads/$v8";
 $path ="../html/ltr/vertical-menu-template/uploads/humn.jpg";
 $date = $row['date'];


  $a1=date("M",strtotime($date));
      $a2=date("Y",strtotime($date));
      $a3=date("d",strtotime($date));
      $format=$a3." ".$a1." ".$a2;
   $limitedText = substr($row['txt'], 0, 80);

echo"
 <div class='price-box btn-layout bt6 top-middle-1'>
                            <div class='grid grid-column-2'>
                                    <div class='column-6'>
                                            <img src='$image' alt='' class='img-fluid'>
                                        </div>
                                <div class='column1'>
                                   <div class='job-info'>
                                        <h6 class='pricehead' ><a href='galldet.php?id=$row[id]'>  
                                            $row[fname]</a></h6>
                                       <h5>$format</h5>
                                       <p> $limitedText </p>
                                    </div>
                                </div>
                            </div>
                        </div>

";



      }
    }
     
        ?>


                       
                       
                    </div>

                    <div class="text-right mt-4">
                        <a class="btn btn-secondary btn-theme2" href="news.php" style="background-color:#5B8343;color:white; border:1px solid #5B8343"> View All</a>
                      </div>
                    </div>
                    <div class="w3l-faq-page col-lg-6 pl-3 pl-lg-5 mt-lg-0 mt-5">
                        <h3 class="" style="color:#1090CD; font-size: 23px; font-weight:bold;">NOTIFICATIONS</h3>
                        <div class="events-top mt-md-5 mt-4">
                          <?php
$sql = "SELECT * FROM alert order by date Desc Limit 5";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   $v8=$row['file'];
     $date =$row['date'];


  $a1=date("M",strtotime($date));
      $a2=date("Y",strtotime($date));
      $a3=date("d",strtotime($date));
      $format=$a3."".$a1;
      



 $image="../html/ltr/vertical-menu-template/uploads/$v8";
 $path ="../html/ltr/vertical-menu-template/uploads/humn.jpg


";

echo "

                      
<div class='events-top-left'>
                                    <div class='icon-top' style='background-color:#1090CD; color:white'>
                                        <h3 style='color:white; font-weight:bold' >$a3</h3>
                                        <p style='color:white; font-weight:bold'>$a1</p>
                                        <span style='background-color:#5B8343;color:white; font-weight:bold'>$a2</span>
                                    </div>
                            </div>
                            <div class='events-top-right'>
                                <h6 class='pricehead'><a href='#'>  
                                   $row[fname]</a></h6>
                                    <p class='mb-2 mt-3'></p>
                                    <li>07:00 - 10:00 </li>
                                    <li class='melb'>$news</li>
                                     <div class='readmore'><a href='$image'><i class='fa fa-book' aria-hidden='true'></i> View  »</a></div>
                            </div>
         
         
            
             
            
              

             
           
             
            
          
        ";

      }
    }
     
        ?>
                            
                        </div>
                 <br>
                        <div class="text-right mt-4">
                          <a class="btn btn-secondary btn-theme2" href="notification.php" style="background-color:#5B8343;color:white; border: 1px "> View All</a>
                        </div>
                      </div>
            </div>
        </div>
    </div>
</section>


 <!-- specifications -->
    
<!-- customers4 block -->


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
<!--                <ul class="list-btm-29">
                      <li><a href="#link">Privacy policy</a></li>
                      <li><a href="#link">Terms of service</a></li>
                      
                  </ul> -->
          </div>
      </div>
  </div>
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top" style="background-color:#5B8343">
    <span class="fa fa-angle-up"></span>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</section>
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



 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.1/js/bootstrap.min.js"></script>

    <script>
        // Open the modal when the page loads
        window.addEventListener('load', () => {
            const myModal = new bootstrap.Modal(document.getElementById('myModal'));
            myModal.show();
        });
    </script>