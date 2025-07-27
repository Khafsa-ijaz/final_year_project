<?php 
include 'db_connect.php'; 
?>

<!doctype html>

<html lang="en">
  <head>

   <style>
#portfolio .img-fluid{
    width: calc(100%);
    height: 30vh;
    z-index: -1;
    position: relative;
    padding: 1em;
}
.event-list{
    cursor: pointer;
}
span.highlight{
    background: yellow;
}
.banner{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 26vh;
    width: calc(30%);
}
.banner img{
    width: calc(100%);
    height: calc(100%);
    cursor :pointer;
}
.event-list{
    cursor: pointer;
    border: unset;
    flex-direction: inherit;
}

.event-list .banner {
    width: calc(40%);
}
.event-list .card-body {
    width: calc(60%);
}
.event-list .banner img {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    min-height: 50vh;
}
span.highlight{
    background: yellow;
}
.banner{
   min-height: calc(100%);
}
.society-section {
    margin-top: 40px;
}
.society-row {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    margin-bottom: 40px;
}
.society-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    margin-bottom: 20px;
    width: calc(22%);
}
.society-card img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-bottom: 10px;
}
.society-card h5 {
    font-size: 18px;
    margin-bottom: 10px;
    color: #fff;
}
.society-card p {
    font-size: 14px;
    color: #ccc;
    max-height: 100px;
    overflow: hidden;
    transition: max-height 0.9s ease;
}
.society-card p.show-more {
    max-height: 800px;
}
.society-card .toggle-description {
    font-size: 14px;
    color: #007bff;
    cursor: pointer;
    margin-top: 10px;
}
.video-section {
    margin-top: 40px;
}
</style>

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

<div style="text-align: right; margin-right: 2px;" class="glow-text">
  Accredation
</div>
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
            <a class="nav-link" href="job.php"><b >Jobs</b></a>
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
      <p><a href="index12.php">Home</a> &nbsp; / &nbsp;<a href="programs.php"> Jobs</a></p>
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

         
<!-- Society Logos Section -->
<div class="container society-section">
    <h4 class="text-center text-white">Our Societies</h4>
    <hr class="divider">
    <div class="society-row">
        <div class="society-card">
        <a href="index.php?page=computing_society">
    <img src="c.PNG" alt="Computing Society Logo">
</a>
            <h5>Computing Society</h5>
            <p>The basic aim of this club is to provide quality education and learning to our students other than their academia. Introducing new and creative advance tools & technologies through customized training and sessions is the adhesive goal of this club. Arranging workshops and conferences related to Computer Science.
This Club will motivate students to learn and practice programming in their areas of interest for improved placement potential. It will help them to acquire the skill of solving problems by considering different required points of view. The aim of this club is to organize events where students will be able to work as individual and in groups during projects.
This club will provide the students an environment to organize and practice online gaming sessions. It will provide interested players a chance to learn and master their skills in gaming. In future this club aim to involve the students in gaming competitions and prepare them for various intra-departments, national and international events. 
This club also aims to arrange events to enhance learning techniques through freelancing and digital marketing for everyone thus, making the youth empowered.
</p>
            <span class="toggle-description">Read More</span>
        </div>
        <div class="society-card">
            <a href="index.php?page=c_society">
            <img src="a.PNG" alt="Religious & Cultural Society Logo"></a>
            <h5>Religious & Cultural Society</h5>
            <p>This Society, as the name suggests, will present positive image of Islam and tackle the common misconception of Islam. This society will educate the students with knowledge of Quran and let students learn Islam without discrimination of Sects. It will provide social, academic, spiritual and welfare support to students through regular events and activities which reflects a positive change in them. 
Another aim of this society is to provide Entertaining extra-curricular activities for students. It will work to train the new students regarding Arts and Culture, explore the hidden talent of institute. It will also organize events to promote Pakistani culture in general and Kashmiri culture in specific.
</p>
            <span class="toggle-description">Read More</span>
        </div>
        <div class="society-card">
            <a href="index.php?page=media_society">
            <img src="M.PNG" alt="Media Society Logo"></a>
            <h5>Media Society</h5>
            <p>Media Club in WUAJK aims to promote media literacy among the students. It will conduct conferences, issue-oriented media talks, seminars and various media training activities for the benefit of the students. It also aims to organize photography, videography and fine art related trainings, events and seminars</p>
            <span class="toggle-description">Read More</span>
        </div>
        <div class="society-card">
            <a href="index.php?page=Adventure_society">
            <img src="add.PNG" alt="Religious & Cultural Society Logo"></a>
            <h5>Adventure Society</h5>
            <p>This Society, as the name suggests, will present positive image of Islam and tackle the common misconception of Islam. This society will educate the students with knowledge of Quran and let students learn Islam without discrimination of Sects. It will provide social, academic, spiritual and welfare support to students through regular events and activities which reflects a positive change in them. 
Another aim of this society is to provide Entertaining extra-curricular activities for students. It will work to train the new students regarding Arts and Culture, explore the hidden talent of institute. It will also organize events to promote Pakistani culture in general and Kashmiri culture in specific.
</p>
            <span class="toggle-description">Read More</span>
        </div>
        <div class="society-card">
            <a href="index.php?page=welfare_society">
            <img src="B.PNG" alt="Community Service Society Logo"></a>
            <h5>Community Service Society</h5>
            <p>This club aims to power change through a strategic combination of research, services, and advocacy to make community around WUAJK more livable for people. It will organize training, events, conferences, talks, seminars and much more for the spreading awareness of students and community. It also aims to arrange charity and welfare events and funds for the betterment of students.
This society will allow needy to look for a donor with the required blood group. All the WUAJK students can join this club. This society will have a database of blood donors through which they will provide blood whenever and wherever it is needed.
</p>
            <span class="toggle-description">Read More</span>
        </div>
    </div>
</div>

</section>
<div class="container video-section">
    <h4 class="text-center text-white">Event Videos</h4>
    <hr class="divider">
    <div class="row">
        <div class="col-md-6">
        <div class="embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" autoplay muted controls>
                    <source src="vid_msg.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <div class="col-md-6">
        <div class="embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" autoplay muted controls>
                    <source src="a.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3 pt-2">
    <h4 class="text-center text-white">Upcoming Events</h4>
    <hr class="divider">
    <?php
    $event = $conn->query("SELECT e.*,v.venue FROM events e inner join venue v on v.id=e.venue_id where date_format(e.schedule,'%Y-%m%-d') >= '".date('Y-m-d')."' and e.type = 1 order by unix_timestamp(e.schedule) asc");
    while($row = $event->fetch_assoc()):
        $trans = get_html_translation_table(HTML_ENTITIES,ENT_QUOTES);
        unset($trans["\""], $trans["<"], $trans[">"], $trans["<h2"]);
        $desc = strtr(html_entity_decode($row['description']),$trans);
        $desc=str_replace(array("<li>","</li>"), array("",","), $desc);
    ?>
    <div class="card event-list" data-id="<?php echo $row['id'] ?>">
        <div class='banner'>
            <?php if(!empty($row['banner'])): ?>
                <img src="admin/assets/uploads/<?php echo($row['banner']) ?>" alt="">
            <?php endif; ?>
        </div>
        <div class="card-body">
            <div class="row align-items-center justify-content-center text-center h-100">
                <div class="">
                    <h3><b class="filter-txt"><?php echo ucwords($row['event']) ?></b></h3>
                    <div><small><p><b><i class="fa fa-calendar"></i> <?php echo date("F d, Y h:i A",strtotime($row['schedule'])) ?></b></p></small></div>
                    <hr>
                    <larger class="truncate filter-txt"><?php echo strip_tags($desc) ?></larger>
                    <br>
                    <hr class="divider" style="max-width: calc(80%)">
                    <button class="btn btn-primary float-right read_more" data-id="<?php echo $row['id'] ?>">Read More</button>
                </div>
            </div>
        </div>
    </div>
    <br>
    <?php endwhile; ?>
</div>

<!-- grids block 5 -->
<section class="w3l-footer-29-main" >
  <div class="footer-29" style="background-color:#1090CD">
      <div class="container">
          <div class="d-grid grid-col-4 footer-top-29">
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
$('.read_more').click(function(){
    location.href = "index.php?page=view_event&id="+$(this).attr('data-id');
});
$('.banner img').click(function(){
    viewer_modal($(this).attr('src'));
});
$('#filter').keyup(function(e){
    var filter = $(this).val();

    $('.card.event-list .filter-txt').each(function(){
        var txto = $(this).html();
        txt = txto;
        if((txt.toLowerCase()).includes((filter.toLowerCase())) == true){
            $(this).closest('.card').toggle(true);
        } else {
            $(this).closest('.card').toggle(false);
        }
    });
});
$('.toggle-description').click(function(){
    var description = $(this).prev('p');
    description.toggleClass('show-more');
    if(description.hasClass('show-more')){
        $(this).text('Read Less');
    } else {
        $(this).text('Read More');
    }
});
</script>
<!-- //script -->

</body>

</html>
<!-- // grids block 5 -->

