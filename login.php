<?php
clearstatcache();
include('connection.php');

//login.php
include('admin/database_connection.php');

session_start();
session_destroy();

session_start();
$_SESSION['last_login_timestamp'] = time();
if(isset($_SESSION["id"]))
{
   
  header('location:index.php');
}


?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>



<style>
        /* Set the html and body elements to take up full height */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        /* Apply the background image to the body */
        body {
            background-image: url('back1.JPEG'); /* Replace with the path to your image */
            background-size: cover;   /* Scale the image to cover the entire page */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Prevent the image from repeating */
            background-attachment: fixed; /* Make the background image fixed */
        }

        /* Style for content within the page */
        .content {
            color: white;
            text-align: center;
            padding: 20px;
            font-family: Arial, sans-serif;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }

</style>
    <link rel="apple-touch-icon" href="logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="logo.png">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Welcome to Samara Builders & Developers">
    <meta name="keywords" content="Welcome to Samara Builders & Developers">
    <meta name="author" content="Cs&It">
    <title>CS&IT DEPARTMENT</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMuli:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/icheck/custom.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/app.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/login-register.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body style='background-image:bgg.png' class="vertical-layout vertical-menu 1-column   menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-menu" data-col="1-column">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-md-4 col-10 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                    <div class="card-title text-center">
                        
                        
                        <br>
                        
                        
                        <div class="p-1"><img style="height: 120px; width: 200px; overflow: hidden;Object-fit:contain" src="logo.png" alt="CSIT LOGO"></div>
                           
                    </div>
             <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span style="color:#B82601"><b style="color:#062F4F">CS&IT DEPARTMENT</b></span></h6>
                </div>
                <div class="card-content">
                    <div class="card-body">
                       <form method="post" id="teacher_login_form">
                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                <input style="background-color: #1090CD;color:white;border:1px solid #5B8343" type="text" class="form-control form-control-lg input-lg" name="teacher_emailid" id="teacher_emailid" value="Admin" required>
                                       <span id="error_teacher_emailid" class="text-danger"></span>
                                 
                                <div class="form-control-position">
                                    <i style='color:white' class="ft-user"></i>
                                </div>
                            </fieldset>
                            <br>
                            <fieldset class="form-group position-relative has-icon-left">
                                <input style="background-color: #1090CD;color:white;border:1px solid #5B8343" type="password" class="form-control form-control-lg input-lg" autofocus="true" name="teacher_password" id="teacher_password" placeholder="" required>
                                  <span id="error_teacher_password" class="text-danger"></span>
                                  <br>
                                <input style="color: red" type="checkbox"  onclick="myFunction()"><b style="color:#5B8343">&nbspShow Password
                                  </b>

                                <div class="form-control-position">
                                    <i style='color:white' class="fa fa-key"></i>
                                </div>
                            </fieldset>
                            <script>
                                function myFunction() {
  var x = document.getElementById("teacher_password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
                                
                            </script>
                           <div  class="form-group row">
                                
                             
                            </div>
                                <button style="background-color:#5B8343;color:white;border:1px solid #1090CD" type="submit" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> Login</button>

                        </form>

                        <br>
                         
                 

                         
                         
<center>   <div class="social-top col-md-3 col-6" >
            <a href="http://localhost/cs&it/web/index12.php" class="btn btn-secondary-outline " style="background-color:#5B8343; color:white; border: 1px solid #1090CD; align-items: center;">Website</a>
        </div></center>
            
                    </div>

                </div>
               
            </div>
        </div>
    </div>
</section>

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../../../app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../../app-assets/js/scripts/forms/form-login-register.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>

<script>
$(document).ready(function(){
  $('#teacher_login_form').on('submit', function(event){
    event.preventDefault();
    $.ajax({
      url:"checklogin.php",
      method:"POST",
      data:$(this).serialize(),
      dataType:"json",
      beforeSend:function(){
        $('#teacher_login').val('Trying to Login...');
        $('#teacher_login').attr('disabled','disabled');
      },
      success:function(data)
      {
        console.log(data);
        if(data.success)
        {
          location.href="dashboard";
        }
        if(data.error)
        {
          $('#teacher_login').val('Login');
          $('#teacher_login').attr('disabled', false);
          if(data.error_teacher_emailid != '')
          {
            $('#error_teacher_emailid').text(data.error_teacher_emailid);
          }
          else
          {
            $('#error_teacher_emailid').text('');
          }
          if(data.error_teacher_password != '')
          {
            $('#error_teacher_password').text(data.error_teacher_password);
          }
          else
          {
            $('#error_teacher_password').text('');
          }
        }
      }
    })
  });
});
</script>

