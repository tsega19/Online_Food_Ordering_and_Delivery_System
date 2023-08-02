<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="admin/image/png" sizes="16x16" href="admin/images/favicon.png">
    <title>Restaurant</title>
    <link href="admin/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="admin/css/helper.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">
  </head>
  <body class="fix-header fix-sidebar">
    <div class="preloader">
      <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
      </svg>
    </div>
    <div id="main-wrapper">
      <div class="header">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
          <div class="navbar-header">
            <!-- Navbar toggle button -->
            <button type="button" class="navbar-toggler navbar-toggler-left hidden-md-up waves-effect waves-dark"
              data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
              aria-expanded="false" aria-label="Toggle navigation">
              <i class="ti-menu"></i>
            </button>
            <!-- Logo -->
            <a class="navbar-brand" href="#">
              <b><img src="admin/images/logo.png" alt="homepage" class="dark-logo" /></b>
              <span><img src="admin/images/logo-text.png" alt="homepage" class="dark-logo" /></span>
            </a>
          </div>
          <!-- Navbar links -->
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto mt-md-0">
              <li class="nav-item"> 
                <a class="nav-link waves-effect waves-dark" href="#">
                  <i class="mdi mdi-bell"></i>
                  <span class="badge badge-pill badge-danger">5</span>
                </a> 
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="font-18 mdi mdi-account-circle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown"
                  aria-labelledby="2">
                  <ul>
                    <li>
                      <div class="">
                        <!-- User image -->
                        <a href="#" class="">
                          <img src="../assets/images/users/1.jpg" alt="" class="">
                          <span class=""></span>
                        </a>
                        <!-- User details -->
                        <div class="">
                          <a href="#" class=""><strong>John Doe</strong></a>
                          <span class="">johndoe@gmail.com</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <a href="#" class="">
                        <div class="">
                          <i class=""></i><span></span> View Profile
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="">
                        <div class="">
                          <i class=""></i><span></span> Logout
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul> 
          </div>
        </nav>
      </div>

      <!-- Left Sidebar -->
      <div class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <!-- Menu Item -->
              <li> 
                <a href="#" aria-expanded="false">
                  <i class=""></i><span></span> Dashboard
                </a> 
              </li>
              <!-- Menu Item -->
              <li> 
                <a href="#" aria-expanded="false">
                  <i class=""></i><span></span> Orders
                </a> 
              </li>
              <!-- Menu Item -->
              <li> 
                <a href="#" aria-expanded="false">
                  <i class=""></i><span></span> Categories
                </a> 
              </li>
              <!-- Menu Item -->
              <li> 
                <a href="#" aria-expanded="false">
                  <i class=""></i><span></span> Items
                </a> 
              </li>
            </ul>
          </nav>
        </div>
      </div>

      <!-- Main Content -->
      <div class="page-wrapper">
        <!-- Page Title -->
        <div class="row page-titles">
          <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> 
          </div>
        </div>

        <!-- Page Content -->
        <div class="container-fluid">
          <!-- Row -->
          <div class="row"> 
            <!-- Col --> 
            <div class=""></div> 
            <!-- Col End --> 
          </div> 
          <!-- Row End --> 
        </div>

      </div>

    </div>

    <!-- Scripts -->
    <script src="admin/js/lib/jquery/jquery.min.js"></script>
    <script src="admin/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="admin/js/lib/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>

