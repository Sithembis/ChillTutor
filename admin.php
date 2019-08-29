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
              <div class="brand-text brand-big visible text-uppercase "><strong class="text-primary text-success">Chilled</strong><strong class="text-warning">Tutor</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary text-success">C</strong><strong class="text-warning">T</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          <div class="right-menu list-inline no-margin-bottom">    
            <div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>
           
            <!-- Tasks-->
            
            <!-- Tasks end-->
            <!-- Megamenu-->
            
            <!-- Megamenu end     -->
            <!-- Languages dropdown    -->
            <!-- Log out               -->
            <div class="list-inline-item logout">                   <a id="logout" href="login.html" class="nav-link"> <span class="d-none d-sm-inline">Logout </span><i class="icon-logout"></i></a></div>
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
            <h1 class="h5 text-success">Qiniso Zikode</h1>
            <p text-success>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading text-success">Main</span>
        <ul class="list-unstyled">
          <li class="active"><a href="index.html"> <i class="icon-home text-success"></i>Home </a></li>
          <li><a href="tables.html"> <i class="icon-grid text-success"></i>Tables </a></li>
          <li><a href="Reports.html"> <i class="fa fa-bar-chart text-success"></i>Reports </a></li>
          <li><a href="Course.html"> <i class="icon-padnote text-success"></i>Course </a></li>
          <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows text-success"></i>Assignments </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled text-success">
              <li><a href="#">Assignment 1</a></li>
              <li><a href="#">Assignment 2</a></li>
              
            </ul>
          </li>
          <li><a href="login.html"> <i class="icon-logout text-success"></i>Login page </a></li>
        </ul><span class="heading text-success">Extras</span>
        <ul class="list-unstyled">
          <li> <a href="#"> <i class="icon-settings text-success"></i>Settings </a></li> 
          <li> <a href="#"> <i class="icon-writing-whiteboard text-success"></i>Assignment </a></li>
        
        </ul>
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom "><p class="text-success">AdminBoard</p></h2>
          </div>
        </div>

        
  
       
        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="checklist-block block">
                  <div class="title"><strong class="text-success">To Do List</strong></div>
                  <div class="checklist">
                    <div class="item d-flex align-items-center">
                      <input type="checkbox" id="input-1" name="input-1" class="checkbox-template text-success">
                      <label for="input-1">//</label>
                    </div>
                    <div class="item d-flex align-items-center">
                      <input type="checkbox" id="input-2" name="input-2" checked class="checkbox-template">
                      <label for="input-2">//</label>
                    </div>
                    <div class="item d-flex align-items-center">
                      <input type="checkbox" id="input-3" name="input-3" class="checkbox-template">
                      <label for="input-3">//</label>
                    </div>
                    <div class="item d-flex align-items-center">
                      <input type="checkbox" id="input-4" name="input-4" class="checkbox-template">
                      <label for="input-4">//</label>
                    </div>
                    <div class="item d-flex align-items-center">
                      <input type="checkbox" id="input-5" name="input-5" class="checkbox-template">
                      <label for="input-5">//</label>
                    </div>
                    <div class="item d-flex align-items-center">
                      <input type="checkbox" id="input-6" name="input-6" class="checkbox-template">
                      <label for="input-6">//</label>
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
          </div>
        </section>
        <section>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4">
                <div class="stats-with-chart-2 block">
                  <div class="title"><strong class="d-block"><p class="text-success">Test1</p></strong><span class="d-block text-success">progress</span></div>
                  <div class="piechart chart">
                    <canvas id="pieChartHome1"></canvas>
                    <div class="text text-success"><strong class="d-block">100%</strong><span class="d-block">pass</span></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="stats-with-chart-2 block">
                  <div class="title text-success"><strong class="d-block text-success">Test2</strong><span class="d-block">progress</span></div>
                  <div class="piechart chart">
                    <canvas id="pieChartHome2"></canvas>
                    <div class="text text-success"><strong class="d-block">100%</strong><span class="d-block">pass</span></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="stats-with-chart-2 block">
                  <div class="title text-success"><strong class="d-block text-success">Test3</strong><span class="d-block">progress</span></div>
                  <div class="piechart chart">
                    <canvas id="pieChartHome3"></canvas>
                    <div class="text text-success"><strong class="d-block text-success">100%</strong><span class="d-block">pass</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center text-success">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom text-success">2019 &copy; Design by <a href="https://sites.google.com/view/zenotha/home" class="text-success">Zenotha IT Solutions</a>.</p>
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
    <script src="js/Reports-home.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>