 <body style="background-color:#fefefe" class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
<?php
	 ini_set('display_errors', '0');  
error_reporting(E_ALL | E_STRICT);
?>
    <!-- fixed-top-->
    <nav style="background-color: #1090CD; color: white" class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div style="background-color: #1090CD" class="navbar-header">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li   class="nav-item"><a class="navbar-brand" href="determine.php"><img style="object-fit:contain" class="brand-logo" alt="AL QAZI LOGO" src="logo.png">
                <h5 class="brand-text">CS&IT Department</h5></a></li>
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li style="color:white" class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i style="color: white" class="ft-menu">         </i></a></li>
              <li style="color:white" class="dropdown nav-item mega-dropdown">
                <ul class="mega-dropdown-menu dropdown-menu row">
                 
                  <li class="col-md-12">
                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="fa fa-envelope"></i> Contact Us</h6>
                    <form class="form form-horizontal">
                      <div class="form-body">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" for="inputName1">Name</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <input class="form-control" type="text" id="inputName1" placeholder="">
                              <div class="form-control-position pl-1"><i class="fa fa-user"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" for="inputEmail1">Contact No</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <input class="form-control" type="number" id="inputEmail1" placeholder="">
                              <div class="form-control-position pl-1"><i class="fa fa-phone"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" for="inputMessage1">Message</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <textarea class="form-control" id="inputMessage1" rows="2" placeholder=""></textarea>
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
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6><span class="notification-tag badge badge-default badge-danger float-right m-0">1 New</span>
                  </li>
                  <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading">Welcome to Cs&IT Department</h6>
                          <p class="notification-text font-small-3 text-muted"> Any new Notification from Cs&It will appear here</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00"></time>Warm Regards</small>
                        </div>
                      
                      </div></a></li>
                
                </ul>
              </li>
             
              <li class="dropdown dropdown-user nav-item"><a style="color:white" class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="avatar avatar-online"><img src="logo.png" alt="avatar"><i style="color: white"></i></span><span style="color: white" class="user-name"><?php echo $rowsession['username']?></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="destroyer.php"><i class="ft-power"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>