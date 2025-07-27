<?php
    include('connection.php');
$id=$_GET['id'];
$count=0;
$sql = "SELECT * FROM news where id='$id'";
$result = $conn->query($sql);






  ?>
<!doctype html>
<html lang="en">
  <head>
     <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->

  <title>news story</title>

  <link rel="stylesheet" href="navbar.css">
  <script src="navbar.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }


    /*.container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      /* min-height: 100vh; */
    }*/

    .card {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      width: 400px;
      margin: 20px;
      text-align: center;
      padding: 20px;
    }

    .card-header {
      font-size: 24px;
      font-weight: bold;
      color: #333;
      margin-bottom: 20px;
    }

    .card-image {
      width: 100%;
      height: 500px;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    .card-body {
      font-size: 16px;
      line-height: 1.5;
      color: #555;
    }

    .card-footer {
      font-size: 14px;
      font-weight: bold;
      color: #333;
      margin-top: 20px;
    }

    .card-button {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 5px;
      margin-top: 5px;
    }

    .card-button a {
      /* list-style: none; */
      text-decoration: none;
    }

    .card-button:hover {
      background-color: #3e8e41;
    }

    h1 {
      text-align: center;
      margin-bottom: 16px;
      margin-top: 30px;
      text-decoration: solid;
      text-decoration: solid;
    }

    .success-stories {
      background-color: #f2f2f2;
      padding: 20px;
      text-align: center;
      margin-bottom: 20px;
    }

    .btn {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 5px;
      margin-top: 5px;
      text-align: center;
    }

    .btn a {
      list-style: none;
      color: white;
    }

    .btn :hover {
      background-color: #3e8e41;
    }


    @media only screen and (max-width: 768px) {
      .card {
        width: 90%;
        margin: 20px auto;
      }
    }

    @media only screen and (max-width: 480px) {
      .card {
        width: 100%;
        margin: 20px auto;
      }
    }

    .main {
      display: flex;
      padding: 10px 5%;
      margin-top: 65px;
    }

    .form-container {
      width: 40%;
      margin-right: 30px;
    }

    .form-container label {
      display: block;
      margin-bottom: 5px;
    }

    .form-container input[type="text"],
    .form-container input[type="email"],
    .form-container textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-container button {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-container button:hover {
      background-color: #45a049;
    }

    .map-container {
      width: 60%;
      height: 500px;
      border: 1px solid #ccc;
    }



    @media only screen and (max-width: 768px) {
      .map-container {
        display: none;
      }
    }


    @media only screen and (max-width: 768px) {
      .main {
        flex-direction: column;
      }

      .form-container {
        width: 100%;
        margin-right: 0;
      }
    }

    @media only screen and (max-width: 768px) {
      .footer {
        flex-direction: column;
      }

      .left-section,
      .info,
      .right-section {
        width: 100%;
      }
    }

    /* msg */
    .c_msg_parent {
      display: flex;
      justify-content: center;
      align-items: center;
      top: 0px;
      left: 0px;
      position: fixed;
      z-index: 5000;
      background-color: rgba(0, 0, 0, 0.795);
      width: 100%;
      height: 100vh;
    }

    .msg {
      width: 300px;
      height: 250px;
      background-color: rgb(133, 218, 125);
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0px 0px 10px 0px black, 0px 0px 10px 0px black;
      flex-direction: column;
      color: black;
    }

    .msg-icon {
      font-size: 5rem;
      color: rgb(0, 94, 0);
    }

    .msg_p {
      font-size: 1.1rem;
      font-weight: bolder;
    }

    .msg_btn {
      width: 30%;
      padding: 8px 10px;
      border-radius: 5px;
      font-weight: bolder;
    }

    .proli {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;

    }
  </style>
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

    <title>story</title>
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
          
          <!--  <li class="nav-item " >
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
              aria-haspopup="true" aria-expanded="false" ondrop="Toggle"><b style="color:#5b8343">Programs</b></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="undergaraduate.php">BS Computer Science</a>
              <a class="dropdown-item" href="ds.php">Bs Data Science</a>
                            <a class="dropdown-item" href="bs.php">MS Computer Science</a>
                            <a class="dropdown-item" href=" programs.php">BIOPS</a>
          
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
      <h2>CS News</h2>
      <p><a href="index12.php">Home</a> &nbsp; / &nbsp;<a href="news.php"> News</a>&nbsp; / &nbsp;<a href="galldet.php"> Story</a></p>
    </div>
  </div>
</section>
<!-- content-with-photo4 block -->
<section class="w3l-content-with-photo-4">
   <?php
$sql = "SELECT * FROM news where id='$id'";
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
   // $limitedText = substr($row['txt'], 0, 50);

echo"
<div class='container'>
<br>
    <h1 class='text-center event_title' style='color:#1090CD; font-weight:bold;'> </h1>
</div>
   <div class='container my-2 px-4'>
    <!-- Event Card -->
    <div class='row justify-content-center'>
        <div class='col-md-6 col-12'>
            <img src='$image'  alt='Event Image' class='img-fluid' >

        </div>
        <div class='col-md-6 col-12'>
            
            <div class='card-body'>
                <h3 class='card-title' style='color:#5B8343; font-weight: bold'> $row[fname] </h3>
                <p class='card-text py-3'><strong style='color:#5B8343; font-weight: bold'> Date: </strong> $format</p>
                
                <p class='card-text'><strong style='color:#5B8343; font-weight: bold'>Story:</strong> $row[txt]</p>
        </div>
        </div>

    </div>
</div>
   

";



      }
    }
     
        ?>
            
     
 



</section>
<!-- content-with-photo4 block -->


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

