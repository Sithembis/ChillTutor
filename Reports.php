<!DOCTYPE html>
<html>
  <head> 
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chilled Tutor</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/chillLogo.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
       <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-success">Chilled</strong><strong class="text-warning">Tutor</strong></div>
              <div class="brand-text brand-sm"><strong class="text-success">C</strong><strong class="text-warning">T</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          <div class="right-menu list-inline no-margin-bottom">    
            <div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>
           
           
            <!-- Megamenu-->
            
            <!-- Megamenu end     -->
            <!-- Languages dropdown    -->
            <!-- Log out               -->
            <div class="list-inline-item logout">       <a id="logout" href="login.html" class="nav-link"> <span class="d-none d-sm-inline">Logout </span><i class="icon-logout"></i></a></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="img/KingRa.png" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Qiniso Zikode</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
          <li><a href="index.html"> <i class="icon-home text-success"></i>Home </a></li>
          <li><a href="tables.html"> <i class="icon-grid text-success"></i>Tables </a></li>
          <li class="active"><a href="Reports.html"> <i class="fa fa-bar-chart text-success"></i>Reports </a></li>
          <li><a href="Course.html"> <i class="icon-padnote text-success"></i>Course </a></li>
          <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows text-success"></i>Assignments </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li class="text-success"><a href="#">Assignment 1</a></li>
              <li class="text-success"><a href="#">Assignment 2</a></li>
              
            </ul>
          </li>
          <li><a href="index.html"> <i class="icon-logout text-success"></i>Login page </a></li>
        
      </ul><span class="heading text-success">Extras</span>
        <ul class="list-unstyled">
          <li> <a href="#"> <i class="icon-settings text-success "></i>Settings </a></li> 
          <li> <a href="#"> <i class="icon-writing-whiteboard text-success"></i>Assignment </a></li>
        
        </ul>
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom text-success ">Reports</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item text-success"><a href="index.html" class="text-warning">Home</a></li>
            <li class="breadcrumb-item active text-success">Reports        </li>
          </ul>
        </div>
       
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom text-success">2019 &copy;Design by <a href="https://sites.google.com/view/zenotha/home " class="text-success">Zenotha IT Solutions</a>.</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/Reports.js/Reports.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/Reports-custom.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>