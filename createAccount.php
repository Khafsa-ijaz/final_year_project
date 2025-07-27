<?php

include('connection.php');
if (isset($_POST['submit'])) {

    $fullName               = $_POST['fullName'];
    $fatherName             = $_POST['fatherName'];
    $cnic                   = $_POST['cnic'];
    $universityRegistration = $_POST['universityRegistration'];
    $email                  = $_POST['email'];
    $phoneNumber            = $_POST['phoneNumber'];
    $batch                  = $_POST['batch'];
    $company             = $_POST['company'];
    $feild             = $_POST['feild'];
    $passingYear            = $_POST['passingYear'];
    $country                = $_POST['country'];
    $dateOfBirth            = $_POST['dateOfBirth'];
    $gender                 = $_POST['gender'];
    $currentlyDoing         = $_POST['currentlyDoing'];
    $pwd                    = $_POST['pwd'];
    $current_address        = $_POST['current_address'];
    $permanent_address      = $_POST['permanent_address'];
    //   email validation 
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && strpos($email, '.com') !== false) {

        $profile_picture = $_FILES['profile_picture']['name'];
        $temp_name       = $_FILES['profile_picture']['tmp_name'];
        move_uploaded_file($temp_name, './upload' . $profile_picture);

       $query= "INSERT INTO `accounts`(`name`, `father_name`, `cnic`, `university_registrati_on`, `email`, `phone_number`, `batch`, `company_name`,`feild`, `passing_year`, `Current country_of_residence`, `dob`, `gender`, `currently_doing_what`, `pass`, `current_address`, `permanent_address`, `profile_picture`) VALUES ('$fullName','$fatherName','$cnic','$universityRegistration','$email','$phoneNumber','$batch','$company','$feild','$passingYear','$country','$dateOfBirth','$gender','$currentlyDoing','$pwd','$current_address','$permanent_address','$profile_picture')";       
         if ($query) {
            echo "<script>alert('Insertion Successfully');</script>";
        } else {
            echo "<script>alert('please Try agan..');</script>";
        }
    } else {
        echo "<script>alert('Please Enter  a Valid Email and try again');</script>";
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
<!-- <style>
    .vh-100 {
        height: 100vh;
    }

    .d-flex {
        display: flex;
    }

    .justify-content-center {
        justify-content: center;
    }

    .align-items-center {
        align-items: center;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        padding: 10px 15px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .forgot-password {
        font-size: 0.9rem;
        color: #007bff;
        text-decoration: none;
    }

    .forgot-password:hover {
        text-decoration: underline;
    }
</style> -->
     <style>

        
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

    <title>|registration </title>
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
              <a class="dropdown-item" href="graphical_rep.php" style="color:black;" >Survay</a>
              <a class="dropdown-item" href="loginal.php" style="color:black;">Login</a>
                            <a class="dropdown-item" href="createAccount.php" style="color:black;">Registration</a>
          
             </div>
          </li>
          
           <!-- <li class="nav-item " >
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
       
      </div>
    </div>
  </nav>
  <section class="w3l-about-breadcrum">
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3">
      <h2>Registration</h2>
      <p><a href="index12.php">Home</a> &nbsp; / &nbsp; Registratioon</p>
    </div>
  </div>
</section>
<section class="w3l-content-with-photo-4">
    <div class="container mt-5 py-3">
    <div class="text-center mb-4">
        <img src="logo.png" alt="University Logo" class="mb-3">
        <h2 style="color:#5B8343;font-weight: bold;">Welcome to Women University Alumni Portal!</h2>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="fullName" class="form-label">Full Name:</label>
                    <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter your name" required onkeypress="return isLetter(event)">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="fatherName" class="form-label">Father Name:</label>
                    <input type="text" class="form-control" id="fatherName" name="fatherName" placeholder="Enter your Father Name" required onkeypress="return isLetter(event)">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="cnic" class="form-label">CNIC:</label>
                    <input type="text" class="form-control" id="cnic" name="cnic" placeholder="Enter your CNIC" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="universityRegistration" class="form-label">University Registration No.:</label>
                    <input type="text" class="form-control" id="universityRegistration" name="universityRegistration" placeholder="Enter your University Registration No." required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="phoneNumber" class="form-label">Phone Number:</label>
                    <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone No." required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="batch" class="form-label">Batch:</label>
                    <select id="batch" name="batch" class="form-select" required>
                        <option value="">Select any one</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="feild" class="form-label">Feild</label>
                    <select id="feild" name="feild" class="form-select" required>
                        <option value="">Select any one</option>
                        <option value="IT">IT</option>
                        <option value="Engineering">Engineering</option>
                        <option value="Other">Other</option>
                        <!-- <option value="Physics"> BS Physics</option> -->
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="company" class="form-label">Company</label>
                    <select id="company" name="company" class="form-select" required>
                        <option value="">Select any one</option>
                        <option value="google">Google</option>
                        <option value="microsoft">Microsoft</option>
                        <option value="localCompany">Local Companies</option>
                        <option value="unemployed">Unemployed</option>
                        <!-- <option value="Physics"> BS Physics</option> -->
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="passingYear" class="form-label">Passing Year:</label>
                    <select id="passingYear" name="passingYear" class="form-select" required>
                        <option value="">Select any one</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="country" class="form-label">Current Country of residence:</label>
                    <select id="country" name="country" class="form-select" required>
                        <option value="">Select any one</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="United States">United States</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="dateOfBirth" class="form-label">Date Of Birth:</label>
                    <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender:</label>
                    <select id="gender" name="gender" class="form-select" required>
                        <option value="">Select any one</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="currentlyDoing" class="form-label">Currently Doing What?:</label>
                    <select id="currentlyDoing" name="currentlyDoing" class="form-select" required>
                        <option value="">Select any one</option>
                        <option value="working">Working</option>
                        <option value="studying">Studying</option>
                        <option value="unemployed">Unemployed</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="pwd" class="form-label"><b>Password</b></label>
                    <input type="password" class="form-control" placeholder="Enter Password" name="pwd" id="pwd" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="pwd-confirm" class="form-label"><b>Confirm Password</b></label>
                    <input type="password" class="form-control" placeholder="Confirm Password" name="pwd_confirm" id="pwd-confirm" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="current-address" class="form-label"><b>Current Address</b></label>
                    <input type="text" class="form-control" placeholder="Enter Current Address" name="current_address" id="current-address" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="permanent-address" class="form-label"><b>Permanent Address</b></label>
                    <input type="text" class="form-control" placeholder="Enter Permanent Address" name="permanent_address" id="permanent-address" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="profile-picture" class="form-label"><b>Profile Picture</b></label>
                    <input type="file" class="form-control" name="profile_picture" id="profile-picture" accept="image/*" required>
                    <p class="form-text">Maximum file size is 2MB.</p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary-outline" name="submit" style="background-color:#5B8343; color: white; ">Submit</button>
        </div>
    </form>
</div>

</section>

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
<script>
    function isLetter(event) {
        const charCode = event.which ? event.which : event.keyCode;
        // Allow letters (A-Z, a-z) and spaces (if you want to allow spaces)
        if ((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode === 32) {
            return true;
        }
        return false;
    }
</script>
<!-- //script -->

</body>

</html>
<!-- // grids block 5 -->

