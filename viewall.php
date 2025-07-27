
<!DOCTYPE html>
<html lang="en-US" class="no-js"><head>
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
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Notifications</title>
    <!-- web fonts -->
  
    <!-- //web fonts -->
     <link rel="shortcut icon" type="image/x-icon" href="logo.PNG">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
<meta charset="UTF-8"><meta name="viewport" content="width=device-width"><link href="https://bahria.edu.pk/buic/wp-content/themes/buhq_theme/css/all-stylesheets.css" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <meta name="robots" content="max-image-preview:large">
</style></head><body style="font-size:15px;font-weight: bold;">

<!-- NAVIGATION STARTS
      ========================================================================= -->
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
      <a href="http://localhost/cs&it/html/ltr/vertical-menu-template/login" class="btn btn-secondary-outline " style="background-color:#5B8343; color:white; font-weight: bold;border: 1px solid white;">Admin Login </a>
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
<div style="text-align: right; margin-right: 2px;" class="glow-text">

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
 <a href="<?php echo $image?>"  style="color:white; font-weight: bold;"> Accreditation</a>


</div>
 <a>
    </div>
  
  </header>
</div>
</div>
</section>

<!-- //Top Menu 1 -->
                <section class="w3l-bootstrap-header" style="font-size: 15px;">
  <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-3">
    <div class="container">
      <!-- <a class="navbar-brand" href="index.html"><span class="fa fa-pencil-square-o "></span> Mastery</a> -->
       
    <a class="navbar-brand" href="#index.html">
        <img src="cs32.png" alt="Your logo" title="Your logo" style="height:40px;" />
    </a> 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav mx-auto" >
          <li class="nav-item">
            <a class="nav-link" href="index12.php"><b >Home</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php" ><b >About Us</b>
            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="programs.php"><b >Programs</b></a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="faculty.php"><b>Faculty</b></a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="news.php"><b >News</b></a>
         
            <li class="nav-item">
            <a class="nav-link" href="notification.php"><b style="color:#5b8343">Notifications</b></a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="contact1.php"><b >Contact Us</b></a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="gallery.php"><b>Gallery</b></a>
          </li>
           </li>
            <li class="nav-item">
            <a class="nav-link" href="downloads.php"><b>Downloads</b></a>
          </li>

        </ul>
      
      </div>
    </div>
  </nav>
</section>    
   
    <!-- Top Row Ends -->
    <section class="w3l-about-breadcrum" >
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3">
      <h2>Notifications</h2>
      <p><a href="index12.php">Home</a> &nbsp; / &nbsp; Notifications</p>
    </div>
  </div>
</section>
<section class="w3l-content-with-photo-4">
    <div id="content-with-photo4-block" class="pt-5"> 
        <div class="container py-md-5">
            <div class="cwp4-two row">
              <h3 style="color:#1090CD; font-size:30px">Notifications</h3>
          <div >

    <div class="container contents">
        <div class="row">
          
            <!-- News & Notification Starts -->
            <div class="col-lg-12 news">
                <h2 style="color:white;background-color: #5B8343"><i class="fa fa-bell-o" ></i>  CS Notifications</h2>
                <div class="box">
                    <!-- News Block Starts -->
                    
<?php
$sql = "SELECT * FROM alert order by date DESC ";
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

                        <div class='block'>
                            <div class='date'>$a3 <br> $a1</div>
                            <div class='info'>
                                <a href='$image'><div class='heading'>$row[fname]</div></a>
                                <div class='description'>Last updated on July 15th, 2024</div>
                                <div class='readmore'><a href='$image'><i class='fa fa-book' aria-hidden='true'></i> View  »</a></div>
                            </div>
                        </div>

         
         
            
             
            
              

             
           
             
            
          
        ";

      }
    }
     
        ?>
                     

                    
                        

                    

                    

                    

                    

                                    
                    <!-- View All Starts -->
                
                    <!-- View All Ends -->
                </div>
            </div>
            <!-- News & Notification Ends -->
            <!-- Upcoming Events Starts -->
           
</div>
</div>
        
            </div>
        </div>
    </div>
</section>
    
<!-- /. NAVIGATION ENDS
    ========================================================================= -->
<!-- SLIDER STARTS
    ========================================================================= -->

<!-- /. SLIDER ENDS
    ========================================================================= -->

<!-- CONTENTS STARTS
    ========================================================================= -->

<!-- /. CONTENTS ENDS
    ========================================================================= -->

    
<!-- FOOTER STARTS
      ========================================================================= -->
<section class="w3l-footer-29-main" >
  <div class="footer-29" style="background-color:#1090CD">
      <div class="container">
          <div class="d-grid grid-col-8 footer-top-29">
              <div class="footer-list-29 footer-1">
                  <h6 class="footer-title-29">Contact Us</h6>
                  <ul>
                      <li><p><span class="fa fa-map-marker"></span> Banipasri Campus, computer Science And information technollogy Department, near Roost hotel.</p></li>
                      <li><a href="tel:+7-800-999-800"><span class="fa fa-phone"></span> +(21)-255-999-8888</a></li>
                      <li><a href="mailto:corporate-mail@support.com" class="mail"><span class="fa fa-envelope-open-o"></span> corporate-mail@support.com</a></li>
                  </ul>
                  <div class="main-social-footer-29">
                      <a href="#facebook" class="facebook" style="background-color:#5B8343"><span class="fa fa-facebook"></span></a>
                      <a href="#twitter" class="twitter" style="background-color:#5B8343"><span class="fa fa-twitter"></span></a>
                      <a href="https://www.instagram.com/wome.nuniversityofajkbagh?igsh=MXZjZ3NweGs1MHU3Zw==" class="instagram" style="background-color:#5B8343"><span class="fa fa-instagram"></span></a>
                      <a href="#google-plus" class="google-plus" style="background-color:#5B8343"><span class="fa fa-google-plus"></span></a>
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
</div>
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
<!-- /. FOOTER ENDS

    ========================================================================= -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://bahria.edu.pk/buic/wp-content/themes/buhq_theme/js/jquery-1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://bahria.edu.pk/buic/wp-content/themes/buhq_theme/js/bootstrap.min.js"></script>

<script type="text/javascript" language="javascript">
  $(document).ready(function () {
    
  $(".yellow-bg .widget ul.menu li").click(function(){
    $(this).closest('.yellow-bg .widget ul.menu li').children('.yellow-bg .widget ul.menu li ul.sub-menu').toggle("slow");
  });
  var b = document.getElementsByClassName('dataTables_filter')[0].firstElementChild.firstElementChild;
  b.setAttribute("onpaste", "return false");
    console.log(b);
    if(b) {
    b.addEventListener("input", function(evt){
        // var tg = document.getElementsByTagName('tr');
        // console.log(b.value);
        // var count = 1;
        // setTimeout(function aaa(){
        //     while(count !== tg.length) {
        //         console.log(tg[count].children);
        //         if(tg[count].children[1].innerText === b.value){
        //             tg[count].style.display = '';
        //         } else {
        //             tg[count].style.display = 'none';
        //         }
        //         count++;
        //     }
        // },0);
        
        // // if(tg[3].children.innerText === b.value){
        //     // tg[3].children;
        // // }
        // console.log(tg.length);
        // if(isNaN(event.data)) {
        //     b.value = b.value.substring(0, b.value.length-1);
        // } else {
            document.getElementsByClassName('tablepress')[0].style.setProperty('display', 'block', 'important');
        // }
    });
    } else {
        document.getElementsByClassName('tablepress')[0].style.setProperty('display', 'block', 'important');
    }
    
  });
  
</script>

<!-- Overlay Resize Menu -->
<script src="https://bahria.edu.pk/buic/wp-content/themes/buhq_theme/js/overlay-resizemenu/js/classie.js"></script>
<!-- Hover Dropdown Menu -->
<script src="https://bahria.edu.pk/buic/wp-content/themes/buhq_theme/js/bootstrap-hover/bootstrap-hover-dropdown.js"></script>
<!-- Parallax -->
<script type="text/javascript" src="https://bahria.edu.pk/buic/wp-content/themes/buhq_theme/js/parallax/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="https://bahria.edu.pk/buic/wp-content/themes/buhq_theme/js/parallax/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="https://bahria.edu.pk/buic/wp-content/themes/buhq_theme/js/parallax/jquery.scrollTo-1.4.2-min.js"></script>
<!-- Easing -->
<!--<script type="text/javascript" src="/js/jquery.easing/jquery.easing.1.3.js"></script>-->
<!-- Retina -->
<script type="text/javascript" src="https://bahria.edu.pk/buic/wp-content/themes/buhq_theme/js/retina/retina.js"></script>
<!-- FitVids -->
<!--<script type="text/javascript" src="--><!--/js/fitvids/jquery.fitvids.js"></script>-->
<!-- SmoothScroll -->
<script type="text/javascript" src="https://bahria.edu.pk/buic/wp-content/themes/buhq_theme/js/SmoothScroll/SmoothScroll.js"></script>
<!-- ScrollTo -->
<script type="text/javascript" src="https://bahria.edu.pk/buic/wp-content/themes/buhq_theme/js/nav/jquery.scrollTo.js"></script>
<script type="text/javascript" src="https://bahria.edu.pk/buic/wp-content/themes/buhq_theme/js/nav/jquery.nav.js"></script>
<!-- Sticky -->
<script type="text/javascript" src="https://bahria.edu.pk/buic/wp-content/themes/buhq_theme/js/sticky/jquery.sticky.js"></script>
<!-- Custom JS file -->
<script type="text/javascript" src="https://bahria.edu.pk/buic/wp-content/themes/buhq_theme/js/custom/custom.js"></script>
<script type="text/javascript">function blinker() {
    $('.jobs').fadeOut(500);
    $('.jobs').fadeIn(500);
}

setInterval(blinker, 1000); //Runs every second</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48855854-1', 'auto');
  ga('send', 'pageview');

</script>


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


</body></html>