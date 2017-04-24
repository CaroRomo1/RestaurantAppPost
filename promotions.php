<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Restaurant App </title>

  <!-- Bootstrap -->
  <link href="gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="gentelella/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="homepage_consumers.php" class="site_title"><i class="fa fa-cutlery"></i> <span>Restaurant App</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <ul class="nav side-menu">
                <li id="homapage_list_consumer" ><a><i class="fa fa-home"  ></i> Homepage </a> </li>
                <li id="restaurant_reviews_list_consumer"><a><i class="fa fa-edit"></i> Restaurants Reviews </a> </li>
                <li id="promotions_list_consumer"><a><i class="fa fa-star"></i> Promotions </a></li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->

          <br />

        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="images/img.jpg" alt="">User
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="consumer_profile.php"> Profile</a></li>
                  <li id="log_out_button"><a href="index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
              </li>

            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Promotions<small> </small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="row" id="row">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          Restaurant App | Consumer
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>
  <script type="text/javascript" src="js/scriptSideMenu_Consumer.js"></script>

  <!-- jQuery -->
  <script src="gentelella/vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="gentelella/vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="gentelella/vendors/nprogress/nprogress.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="gentelella/build/js/custom.min.js"></script>

  <!-- js own scripts -->
    <script type="text/javascript" src="js/scriptSideMenu_Consumer.js"></script>
    <script type="text/javascript" src="js/scriptPromotions.js"></script>
</body>
</html>