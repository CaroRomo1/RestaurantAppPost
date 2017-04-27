<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Restaurant Homepage</title>

    <!-- Bootstrap -->
    <link href="gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="gentelella/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="homepage_restaurant.php" class="site_title"><i class="fa fa-cutlery"></i> <span>Restaurant App</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="gentelella/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome</span>
              <h2></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li id="homapage_list_manager"><a><i class="fa fa-home"></i> Homepage </a> </li>
                  <li id="restaurant_reviews_list_manager"><a><i class="fa fa-edit"></i> Custumer Reviews </a> </li>
                  <li id="promotions_list_manager"><a><i class="fa fa-star"></i> Promotions </a></li>
                  <li id="restaurant_profile_manager"><a><i class="fa fa-cutlery"></i> Profile </a> </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- /menu footer buttons -->
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
                    <img src="gentelella/production/images/img.jpg" alt="">User
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li><a href="index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
            <div class="page-title">
              <div class="title_left">
                <h3>Customer Reviews</h3>
              </div>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input id="searchText" type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button id= "searchBox" class="btn btn-default" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Reviews and Ratings</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Username</th>
                          <th>Review</th>
                          <th>Rating</th>
                        </tr>
                      </thead>
                      <tbody id="customersReviewsBody">
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            ©2017 All Rights Reserved.
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <!-- jQuery -->
    <script src="gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="gentelella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="gentelella/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="gentelella/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="gentelella/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="gentelella/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="gentelella/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="gentelella/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="gentelella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="gentelella/vendors/jszip/dist/jszip.min.js"></script>
    <script src="gentelella/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="gentelella/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <!script src="gentelella/build/js/custom.min.js"><!/script>

    <!-- js own scripts -->
    <script type="text/javascript" src="js/scriptSideMenu_Manager.js"></script>
    <script type="text/javascript" src="js/scriptSearchCustomers_reviews.js"></script>
  </body>
</html>