
<!doctype html>
<html lang="en">
  <head>
   

         <style>
          .job-card {
        border: none;
        /* Remove border */
        border-radius: 8px;
        /* Rounded corners */
        background: linear-gradient(to bottom right, #2c2c2c, #1a1a1a);
        /* Gradient background */
        color: white;
        /* Text color for readability */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        height: 100%;
        /* Ensure cards take up full column height */
        overflow: hidden;
        /* Hide overflow text */
    }

    .job-card:hover {
        transform: scale(1.05);
        /* Slight zoom effect on hover */
        background-color: #5B8343;
    }

    .card-body {
        padding: 20px;
        flex-grow: 1;
        /* Allow card body to take up available space */
        display: flex;
        flex-direction: column;
    }

    .card-title {
        font-size: 1.5rem;
        margin-bottom: 15px;
    }

    .card-text {
        font-size: 1rem;
        margin-bottom: 10px;
        overflow: hidden;
        /* Hide overflow text */
        text-overflow: ellipsis;
        /* Add ellipsis for overflow text */
        white-space: nowrap;
        /* Prevent text from wrapping */
    }

    .date {
        font-size: 0.9rem;
        margin-top: 10px;
        color: orange;
    }

    .btn-primary {
        background-color: #1090CD;
        /* Customize button color */
        border-color: white;
    }

    .btn-primary:hover {
        background-color: #1090CD;
        border-color: #5B8343;
    }

    .see-more {
        margin-top: auto;
        /* Push "See more" link to the bottom */
        color: #ffdf00;
        text-decoration: underline;
        cursor: pointer;
    }

    /* Media Queries for Responsive Design */
    @media (max-width: 768px) {
        .card-title {
            font-size: 1.25rem;
        }

        .card-text {
            font-size: 0.9rem;
        }
    }

    @media (max-width: 576px) {
        .card-title {
            font-size: 1.1rem;
        }

        .card-text {
            font-size: 0.8rem;
        }
    }
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

    <title>graduate</title>
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
              aria-haspopup="true" aria-expanded="false" ondrop="Toggle"><b >Programs</b></a>
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
            <a class="nav-link" href="job.php"><b style="color:#5b8343">Jobs</b></a>
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
      <h2>Jobs</h2>
      <p><a href="index12.php">Home</a> &nbsp; / &nbsp;<a href="job.php"> Jobs</a></p>
    </div>
  </div>
</section>
<!-- content-with-photo4 block -->
<!-- <section class="w3l-content-with-photo-4">
    <div id="content-with-photo4-block" class="pt-5"> 
        <div class="container py-md-5">
            <div class="cwp4-two row">
               
                <div class="cwp4-text col-lg-8">
                    
                  
                </div>
        
            </div>
        </div>
    </div>
</section> -->
<!-- content-with-photo4 block -->

<section class="w3l-features-1">

         
   <div class="container px-4  py-4 " style="margin-top: 30px;">
           <h2 style="color: #1090CD; font-weight: bold;"> Recent Jobs</h2>
           <!-- <hr style="border:2px solid #1090CD "> -->
        <div   class="row">
            <?php
            // Execute the query
            $qry = $conn->query("SELECT * FROM jobs");
            // Check for query errors
            if (!$qry) {
                die('Query failed: ' . mysqli_error($conn));
            }
            // Check if there are results
            if (mysqli_num_rows($qry) > 0) {
                // Fetch and display each row
                while ($job_data = mysqli_fetch_array($qry)) { ?>
                    <div  class="col-md-4 col-lg-3 mb-4 px-2">
                        <div  class="job-card">
                            <div style="background-color: #5B8343; "  class="card-body">
                                <h2 class="card-title text-light"><?php echo htmlspecialchars($job_data['title']); ?></h2>
                                <p class="card-text text-light">Employer Name: <?php echo htmlspecialchars($job_data['name']); ?></p>
                                <p class="card-text text-light">Type: <?php echo htmlspecialchars($job_data['job_type']); ?></p>
                                <p class="card-text text-light">Last Date to apply: <?php echo htmlspecialchars($job_data['l_d_a']); ?></p>
                                <p class="card-text text-light"><?php echo htmlspecialchars($job_data['must_have']); ?></p>
                                <div class="date"><?php echo htmlspecialchars($job_data['c_date']); ?></div>
                                <div class="see-more">
                                    <a href="jobsposted.php?job_id=<?php echo $job_data['id'] ?>" class="btn btn-primary-outline" style="background-color: #1090CD; color:white; font-weight:bold;">Vew More</a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php }
            } else {
                echo '<div class="col-12"><div class="alert alert-primary" role="alert">
                <strong>No data found</strong>
            </div></div>';
            }
            ?>
        </div>
    </div>
</section>


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

