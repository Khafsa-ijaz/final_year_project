
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <title>Women University Alumni Portal</title>

  <link rel="stylesheet" href="navbar.css">
  <script src="navbar.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }


    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      /* min-height: 100vh; */
    }

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

</head>

<body>


    
<style>
       .event_title::after{
            content: "";
            width: 100%;
            height: 4px;
            background-color: #0467E8;
            display: block;
            margin: 15px auto;
        }
</style>
<div class="container">
    <h1 class="text-center event_title">Sport Weeck </h1>
</div>

 <?php
$sql = "SELECT * FROM news";
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
   $limitedText = substr($row['txt'], 0, 50);

echo"
   <div class='float-top col-lg-4 col-md-6 mt-md-0 mt-5'>  
              <a href='#''><img src=$image class='img-responsive' alt='' style='width:300px; height:40%'></a>
              <div class='float-lt feature-gd'> 

                  <h3><a href='#'>$row[fname]</a> </h3>
                  <p>      
                       <div class='create-date'><time datetime=''>$format</time></div>

                       $limitedText 


</p>
                  </div>
                  <div class='readmore-button' style='font-size: 12px; margin-left: 30%; font-weight: bold;'>
<a href='node/17559' style='color:#1090CD'>FULL STORY-></a> 
</div>
            </div>

";



      }
    }
     
        ?>
            
     
<div class="container my-2 px-4">
    <!-- Event Card -->
    <div class="row justify-content-center">
        <div class="col-md-6 col-12">
            <img src="./dashboard/images/img-02.jpg" class="card-img-top" alt="Event Image" >

        </div>
        <div class="col-md-6 col-12">
            
            <div class="card-body">
                <h3 class="card-title"> Sport Weeck  </h3>
                <p class="card-text py-3"><strong>Post Date:</strong> 2024-07-11</p>
                <p class="card-text"><strong>Due Date:</strong> 2024-07-03 </p>
                <p class="card-text"><strong>Description:</strong> The required qualifications are:
Proficiency in React, Typescript, JavaScript, HTML and CSS, NodeJS, NextJS, Firebase, Tailwind CSS
Familiarity with GCP, Docker, and CI/CD pipelines; comparable tooling experience is also considered
Exposure to automated testing tools and frameworks (e.g., Jest, Playwright)
Experience with version control systems (e.g. Git)
Strong skills for building a UI concept from scratch, including screen elements such as logos and hero pages
Experience with Figma and using existing toolkits within Figma is nice to have
Good technical communication skills</p>
        </div>
        </div>

    </div>
</div>



   <footer class="footer">
       <div class="left-section">
           <img src="pictures/logofinal (1).png" alt="WUB University Logo" class="logo2">
           <p>
           To create the form in two columns using Bootstrap 4we can leverage the Bootstrap grid systemHeres how you can modify your existing form to achieve a two-column layout.</p>
       </div>
       <div class="info">
           <h2 class="title">Visiting Women University Bagh </h2>
           <p>isla.</p>
           <p>03415692708 </p>
           <a href="https://www.google.com/">
               <p>https://wuajk.edu.pk/</p>
           </a>

           <div class="social-media">
               <a href=https://www.wuajk.edu.pk/?fbclid=IwZXh0bgNhZW0CMTEAAR3iO1d7Z9AqqC6coRfd-WB3y6PykCCd7AVX667QZHpIW4YJYYJKdeOCwiw_aem_EGZ6ermCWoJprHQMr_iL7A><img src="pictures/download.jpeg" alt="Facebook"></a>
               <a href="https://www.instagram.com/wome.nuniversityofajkbagh?igsh=c3k5ZXVsczBkbmE5"><img src="pictures/images.png" alt="Instagram"></a>
           </div>
       </div>
       <div class="right-section">
           <h2 class="title">important Links</h2>
           <div class="links">
               <a href="About.php">About</a>
               <a href="Jobs.php">Jobs</a>
               <a href="Events.php">Events</a>

               <!-- <a href="news.php">News</a> -->
               <a href="ContactUs.php">Contact Us</a>
               <a href="GraphicalR.php"> Graphical Representation</a>
           </div>
       </div>
   </footer>
   <div class="f2">
       <p>Alumni Portal � 2024.All Right Reserved</p>
   </div>
   <script>
       document.getElementById('close_btn').addEventListener('click', function() {
           document.querySelector('.c_msg_parent').style.display = 'none';
           const urll = new URL(window.location.href);
           urll.searchParams.delete('auth_err')
           urll.searchParams.delete('auth_succ')
           history.replaceState({}, '', urll)
       });
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   </body>

   </html>