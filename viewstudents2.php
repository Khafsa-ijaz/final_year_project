<?php
$curr_class=$_POST['curr_class'];

echo "<input type='hidden' id='curr_class' value='$curr_class'/>";
include('connection.php');
  $class=$curr_class;
$sql420 = "SELECT cname FROM classes where id='$class'";
$result420 = $conn->query($sql420);

if ($result420->num_rows > 0) {
  // output data of each row
  while($row420 = $result420->fetch_assoc()) {
 $cnamee=$row420['cname'];
  }
} 
$status=$_POST['status'];
echo "<input type='hidden' id='status' value='$status'/>";
?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Classwise Students List</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMuli:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/app.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body style="background-color: #4c6586" class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    <!-- fixed-top-->
    <nav style="background-color: #304a7b;color: white" class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div style="background-color: #304a7b" class="navbar-header">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li   class="nav-item"><a class="navbar-brand" href="../../../html/ltr/vertical-menu-template/index.html"><img class="brand-logo" alt="robust admin logo" src="../../../app-assets/images/logo/logo-light-sm.png">
                <h3 class="brand-text">Robust Admin</h3></a></li>
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li style="color:white" class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i style="color: white" class="ft-menu">         </i></a></li>
              <li style="color:white" class="dropdown nav-item mega-dropdown"><a style="color: white" class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Mega</a>
                <ul class="mega-dropdown-menu dropdown-menu row">
                  <li class="col-md-2">
                    <h6 style="color:white" class="dropdown-menu-header text-uppercase mb-1"><i class="fa fa-newspaper-o"></i> News</h6>
                    <div id="mega-menu-carousel-example">
                      <div><img class="rounded img-fluid mb-1" src="../../../app-assets/images/slider/slider-2.png" alt="First slide"><a class="news-title mb-0" href="#">Poster Frame PSD</a>
                        <p class="news-content"><span class="font-small-2">January 26, 2018</span></p>
                      </div>
                    </div>
                  </li>
                  <li class="col-md-3">
                    <h6 class="dropdown-menu-header text-uppercase"><i class="fa fa-random"></i> Drill down menu</h6>
                    <ul class="drilldown-menu">
                      <li class="menu-list">
                        <ul>
                          <li><a class="dropdown-item" href="layout-2-columns.html"><i class="ft-file"></i> Page layouts & Templates</a></li>
                          <li><a href="#"><i class="ft-align-left"></i> Multi level menu</a>
                            <ul>
                              <li><a class="dropdown-item" href="#"><i class="fa fa-file-o"></i>  Second level</a></li>
                              <li><a href="#"><i class="fa fa-star-o"></i> Second level menu</a>
                                <ul>
                                  <li><a class="dropdown-item" href="#"><i class="fa fa-heart"></i>  Third level</a></li>
                                  <li><a class="dropdown-item" href="#"><i class="fa fa-heart"></i> Third level</a></li>
                                  <li><a class="dropdown-item" href="#"><i class="fa fa-heart"></i> Third level</a></li>
                                  <li><a class="dropdown-item" href="#"><i class="fa fa-heart"></i> Third level</a></li>
                                </ul>
                              </li>
                              <li><a class="dropdown-item" href="#"><i class="fa fa-film"></i> Second level, third link</a></li>
                              <li><a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Second level, fourth link</a></li>
                            </ul>
                          </li>
                          <li><a class="dropdown-item" href="color-palette-primary.html"><i class="ft-camera"></i> Color palette system</a></li>
                          <li><a class="dropdown-item" href="../../../starter-kit/ltr/vertical-menu-template/layout-2-columns.html"><i class="ft-edit"></i> Page starter kit</a></li>
                          <li><a class="dropdown-item" href="changelog.html"><i class="ft-minimize-2"></i> Change log</a></li>
                          <li><a class="dropdown-item" href="https://pixinvent.ticksy.com/"><i class="fa fa-life-ring"></i> Customer support center</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="col-md-3">
                    <h6 class="dropdown-menu-header text-uppercase"><i class="fa fa-list"></i> Accordion</h6>
                    <div id="accordionWrap" role="tablist" aria-multiselectable="true">
                      <div class="card border-0 box-shadow-0 collapse-icon accordion-icon-rotate">
                        <div class="card-header p-0 pb-2 border-0" id="headingOne" role="tab"><a data-toggle="collapse" data-parent="#accordionWrap" href="#accordionOne" aria-expanded="true" aria-controls="accordionOne">Accordion Item #1</a></div>
                        <div class="card-collapse collapse show" id="accordionOne" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true">
                          <div class="card-content">
                            <p class="accordion-text text-small-3">Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels chocolate cake liquorice cake wafer jelly beans croissant apple pie.</p>
                          </div>
                        </div>
                        <div class="card-header p-0 pb-2 border-0" id="headingTwo" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionWrap" href="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">Accordion Item #2</a></div>
                        <div class="card-collapse collapse" id="accordionTwo" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
                          <div class="card-content">
                            <p class="accordion-text">Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon muffin jelly marshmallow cake. Pastry oat cake chupa chups.</p>
                          </div>
                        </div>
                        <div class="card-header p-0 pb-2 border-0" id="headingThree" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionWrap" href="#accordionThree" aria-expanded="false" aria-controls="accordionThree">Accordion Item #3</a></div>
                        <div class="card-collapse collapse" id="accordionThree" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                          <div class="card-content">
                            <p class="accordion-text">Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée jujubes donut chocolate bar chocolate cake cupcake chocolate topping.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="col-md-4">
                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="fa fa-envelope"></i> Contact Us</h6>
                    <form class="form form-horizontal">
                      <div class="form-body">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" for="inputName1">Name</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <input class="form-control" type="text" id="inputName1" placeholder="John Doe">
                              <div class="form-control-position pl-1"><i class="fa fa-user"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" for="inputEmail1">Email</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <input class="form-control" type="email" id="inputEmail1" placeholder="john@example.com">
                              <div class="form-control-position pl-1"><i class="fa fa-envelope"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" for="inputMessage1">Message</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <textarea class="form-control" id="inputMessage1" rows="2" placeholder="Simple Textarea"></textarea>
                              <div class="form-control-position pl-1"><i class="fa fa-comments"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12 mb-1">
                            <button class="btn btn-info float-right" type="button"><i class="fa fa-paper-plane"></i> Send          </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
             
            </ul>
            <ul class="nav navbar-nav float-right">         
             
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i style="color: white" class="ficon ft-bell"></i><span style="color:white" class="badge badge-pill badge-default badge-danger badge-default badge-up"></span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6><span class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span>
                  </li>
                  <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading">You have new order!</h6>
                          <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading red darken-1">99% Server load</h6>
                          <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                          <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading">Complete the task</h6><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading">Generate monthly report</h6><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                        </div>
                      </div></a></li>
                  <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
                </ul>
              </li>
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i style="color: white" class="ficon ft-mail"></i></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span></h6><span class="notification-tag badge badge-default badge-warning float-right m-0">4 New</span>
                  </li>
                  <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Margaret Govan</h6>
                          <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Bret Lezama</h6>
                          <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Carie Berra</h6>
                          <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Eric Alsobrook</h6>
                          <p class="notification-text font-small-3 text-muted">We have project party this saturday.</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time></small>
                        </div>
                      </div></a></li>
                  <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>
                </ul>
              </li>
              <li class="dropdown dropdown-user nav-item"><a style="color:white" class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="avatar avatar-online"><img src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i style="color: white"></i></span><span style="color: white" class="user-name">John Doe</span></a>
                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="email-application.html"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="user-cards.html"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="chat-application.html"><i class="ft-message-square"></i> Chats</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="login-with-bg-image.html"><i class="ft-power"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div style="background-color: #304a7b" class="main-menu menu-fixed menu-dark menu-accordion    menu-shadow " data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li style='background-color: #304A7B' class=" nav-item"><a href="index.html"><i class="icon-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span></a>
          
          </li>
          
          <li style="background-color: #304A7B" class=" navigation-header"><span data-i18n="nav.category.layouts">SIMS FLIX</span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
          </li>
          <li  class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Admissions</span></a>
            <ul class="menu-content">
              <li  class="active"><a class="menu-item" href="addemployee.php" data-i18n="nav.page_layouts.1_column">Add New Employee</a>
              </li>
                 <li><a class="menu-item" href="addclass.php" data-i18n="nav.page_layouts.2_columns">Add New Class</a></li>
                        <li><a class="menu-item" href="addstudent.php" data-i18n="nav.page_layouts.2_columns">Add New Student</a></li>
              
            </ul>
          </li>
               <li style='background-color: #304A7B' class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Fees</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="layout-1-column.html" data-i18n="nav.page_layouts.1_column">1 column</a>
              </li>
              <li><a class="menu-item" href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns">2 columns</a>
              </li>
              
            </ul>
          </li>
       <li style='background-color: #304A7B' class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Accounts</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="layout-1-column.html" data-i18n="nav.page_layouts.1_column">1 column</a>
              </li>
              <li><a class="menu-item" href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns">2 columns</a>
              </li>
              
            </ul>
          </li>
               <li style='background-color: #304A7B' class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Attendance</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="layout-1-column.html" data-i18n="nav.page_layouts.1_column">1 column</a>
              </li>
              <li><a class="menu-item" href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns">2 columns</a>
              </li>
              
            </ul>
          </li>
               <li style='background-color: #304A7B ' class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">SMS</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="layout-1-column.html" data-i18n="nav.page_layouts.1_column">1 column</a>
              </li>
              <li><a class="menu-item" href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns">2 columns</a>
              </li>
              
            </ul>
          </li>
   <li style='background-color: #304A7B' class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Attendance</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="layout-1-column.html" data-i18n="nav.page_layouts.1_column">1 column</a>
              </li>
              <li><a class="menu-item" href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns">2 columns</a>
              </li>
              
            </ul>
          </li>
             <li style='background-color: #304A7B' class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Attendance</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="layout-1-column.html" data-i18n="nav.page_layouts.1_column">1 column</a>
              </li>
              <li><a class="menu-item" href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns">2 columns</a>
              </li>
              
            </ul>
          </li>
      
          <li style='background-color: #304A7B' class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Attendance</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="layout-1-column.html" data-i18n="nav.page_layouts.1_column">1 column</a>
              </li>
              <li><a class="menu-item" href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns">2 columns</a>
              </li>
              
            </ul>
          </li>
           <li style='background-color: #304A7B' class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Attendance</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="layout-1-column.html" data-i18n="nav.page_layouts.1_column">1 column</a>
              </li>
              <li><a class="menu-item" href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns">2 columns</a>
              </li>
              
            </ul>
          </li>  <li style='background-color: #304A7B' class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Attendance</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="layout-1-column.html" data-i18n="nav.page_layouts.1_column">1 column</a>
              </li>
              <li><a class="menu-item" href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns">2 columns</a>
              </li>
              
            </ul>
          </li>
          

         
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
                  <h4 style="color:black" class="card-title" id="horz-layout-colored-controls"><b><u><?php echo $cnamee?></b></u> <i><u><?php echo $status?></i></u></b> Students List</h4>
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
                        <form target="_blank" method="POST" action="stupdf4.php">
                       <input type="hidden" value="<?php echo $curr_class?>" name="curr_class">
                   <input type="hidden" value="<?php echo $status?>" name="status">
                  <div class="s text-center " role="" aria-label="Basic example">   <button type="submit" style="background-color: #304A7B;color: white !important" type="button" class="btn btn-outline-warning btn-sm btn-glow" >
                    Complete PDF
                  </button>


</form>


 
  <a target="_blank" href="viewemployees.php"><button style="background-color: #304A7B;color: white !important" type="button" class="btn btn-outline-warning btn-sm btn-glow" >
                    Detail Students List
                  </button></a>

 
      </div>
      <hr style="  border-top: 2px dotted #304A7B;">
                        <table sty class="table table-striped table-bordered file-export">
                            <thead>
                                <tr>
                                   <th style="background-color:#304A7B;color: white ">RegNo</th>
                                      <th style="background-color:#304A7B;color: white ">Name</th>
                                    <th style="background-color:#304A7B;color: white  ">Father Name</th>
                                          <th style="background-color:#304A7B;color: white  ">Image</th>
                                           <th style="background-color:#304A7B;color: white  ">Mobile</th>
                                            <th style="background-color:#304A7B;color: white  ">Class</th>
                                             <th style="background-color:#f9d140;color: black  ">Actions</th>
                                             <th style="background-color:#304A7B;color: white  ">Fees</th>
                                                <th style="background-color:#304A7B;color: white  ">Status</th>
                                         <th style="background-color:#304A7B;color: white  ">Address</th>
                                            <th style="background-color:#304A7B;color: white  ">Birth Date</th>
                                         <th style="background-color:#304A7B;color: white  ">Admission Date</th>
                                          
                                                           
                                 
                                 
                                 
                                 
                                 
                                </tr>
                            </thead>
                            <tbody>
                               
                                
                               
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 
</section>
<!-- // Basic form layout section end -->
        </div>
      </div>
    </div>

	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
</div>




    <footer style="background-color: #F9D140" class="footer footer-static footer-light navbar-border">
      <p style="color:black" class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span style="color:black" class="float-md-left d-block d-md-inline-block">Copyright  &copy; 2021 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PAKSOFTWARES </a>, All rights reserved. </p>
    </footer>

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

<script type="text/javascript">
    var curr_class=$('#curr_class').val();
     var status=$('#status').val();




  $('.file-export').DataTable({
dom: '<"top"i>rt<"bottom"flp>',
   dom: 'Blfrtip',
        buttons: [

        {
           
           extend: 'csv',
              text: '&nbspCustom CSV',
           footer: false,
              exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
                messageTop: '<?php echo $cnamee?> <?php echo $status?> Students List'

         

       },
       {
           extend: 'pdf',
           footer: true,
          text: '&nbspCustom PDF',
             exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
   
             messageTop: '<?php echo $cnamee?> <?php echo $status?> Students List'



       },
       
       {
           extend: 'excel',
              text: '&nbspCustom EXCEL',
           footer: false,
              exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
messageTop: '<?php echo $cnamee?> <?php echo $status?> Students List'

                   } ,  


  {
           extend: 'print',
              text: '&nbsp Custom Print',
           footer: false,
              exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
messageTop: '<?php echo $cnamee?> <?php echo $status?> Students List'

                   } ,  


  {
           extend: 'copy',
              text: '&nbsp Custom Copy',
           footer: false,
              exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
messageTop: '<?php echo $cnamee?> <?php echo $status?> Students List'

                   } ,  

                    {
           extend: 'colvis',
              exportOptions: {
                    columns: ':visible',
                    rows: ':visible' 
                },
 text: '&nbspShow/Hide Columns'


           
           

           
                   }    

    ],



 scrollY:        "330px",
        scrollX:        true,
        scrollCollapse: true,
         "order" : [],

      
"paging":true,
  "processing" : true,
    "serverSide" : true,
     "ajax": {
        type: 'POST',
        url: 'fetch8.php',
          data: {curr_class:curr_class,status:status},


              },
 fixedColumns:   {
            leftColumns: 2
        },


 dom:


      "<'row'<'col-sm-12'B><'col-sm-12'f>>" +
       "<br>"+
              "<br>"+
                       "<'row'<'col-sm-12'tr>>"+ 
   "<'row'<'col-sm-4'i><'col-sm-4 text-center'l><'col-sm-4'p>>"

        
    });
 $('.buttons-csv').addClass(' fa fa-file-excel-o btn btn-success  btn-sm btn-min-width btn-glow mr-1');
     $('.buttons-excel').addClass(' fa fa-file-excel-o btn btn-success btn-sm btn-min-width btn-glow mr-1');
      $('.buttons-pdf').addClass('fa fa-file-pdf-o btn btn-danger btn-sm btn-min-width btn-glow mr-1');
       $('.buttons-colvis').addClass('btn btn-warning btn-sm btn-min-width btn-glow mr-1');
             $('.buttons-print').addClass('fa fa-print btn btn-info btn-sm btn-min-width btn-glow mr-1');
                          $('.buttons-copy').addClass('fa fa-copy btn btn-primary btn-sm btn-min-width btn-glow mr-1');





</script>
<script>
$(".cc").click(function(e) {
   var el = this;
  e.preventDefault();
 var del_id= $(this).attr('id');
 swal({
  title: "Are You Sure to Delete Class?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
 .then((willDelete) => {
  if (willDelete) {
     $.ajax({
                url:"deleteclass.php?id="+del_id,
                cache:false,
                success:function(result){

                  if(result == 1){
   // Remove row from HTML Table
   $(el).closest('tr').css('background','red');
   $(el).closest('tr').fadeOut(800,function(){
      $(this).remove();
      location.reload();
   });
      }
     
    }
                  
                
              });
}
});



 
  });

</script>