<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Restaurant App </title>

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Bootstrap -->
  <link href="gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- Datatables -->
  <link href="gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="gentelella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <!link href="gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="gentelella/build/css/custom.min.css" rel="stylesheet">

</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="homepage_restaurant.php" class="site_title"><i class="fa fa-cutlery"></i> <span>Restaurant App </span></a>
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
                <li id="homapage_list_consumer" ><a><i class="fa fa-home"  ></i> Homepage </a> </li>
                <li id="restaurant_reviews_list_consumer"><a><i class="fa fa-edit"></i> Restaurants Reviews </a> </li>
                <li id="promotions_list_consumer"><a><i class="fa fa-star"></i> Promotions </a></li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->

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
          <div class="page-title">

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
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
                  <h2>Restaurants</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                    <thead>
                      <tr>
                        <th>
                          <th>Favorite</th>
                        </th>
                        <th>Name</th>
                        <th>Rating</th>
                        <th>Location</th>
                        <th>Availability</th>
                        <th>Web Page</th>
                      </tr>
                    </thead>
                    <tbody  >
                 </tbody>
               </table>
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

<!-- js own scripts -->

<!-- jQuery -->
<script  src="gentelella/vendors/jquery/dist/jquery.min.js"></script>
<script async type="text/javascript" src="js/scriptSideMenu_Consumer.js"></script>
<script async type="text/javascript" src="js/scriptHomepage_Consumer.js"></script>


<!-- Bootstrap -->
<script  src="gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script   src="gentelella/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script  src="gentelella/vendors/nprogress/nprogress.js"></script>
<!-- iCheck -->
<script  src="gentelella/vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script defer src="gentelella/vendors/datatables.net/js/jquery.dataTables.js"></script>
<script defer src="gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.js"></script>
<script defer src="gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.js"></script>
<script defer src="gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.js"></script>
<script defer src="gentelella/vendors/datatables.net-buttons/js/buttons.flash.js"></script>
<script defer src="gentelella/vendors/datatables.net-buttons/js/buttons.html5.js"></script>
<script  src="gentelella/vendors/datatables.net-buttons/js/buttons.print.js"></script>
<script  src="gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.js"></script>
<script  src="gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.js"></script>
<script  src="gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.js"></script>
<script  src="gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<!script  src="gentelella/vendors/datatables.net-scroller/js/dataTables.scroller.js"><!/script>
<script  src="gentelella/vendors/jszip/dist/jszip.js"></script>
<script  src="gentelella/vendors/pdfmake/build/pdfmake.js"></script>
<script  src="gentelella/vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<!script src="gentelella/build/js/custom.min.js"><!/script>

</body>
</html>