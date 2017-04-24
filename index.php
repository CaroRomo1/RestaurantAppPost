<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Page | </title>

    <!-- Bootstrap -->
    <link href="gentelella/vendors/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="gentelella/vendors/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="gentelella/vendors/animate.css/animate.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="gentelella/build/css/custom.css" rel="stylesheet">
    <!-- Original CSS -->
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1>Login Form</h1>
              <div>
                <input id="userName" type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input id="password" type="password" class="form-control" placeholder="Password" required="" />
              </div>
               <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Login As:</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div id="type_user" class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input id="t1" type="radio" name="type_user" value="1"> &nbsp; Consumer &nbsp;
                    </label>
                    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input id="t2"  type="radio" name="type_user" value="2"> Manager
                    </label>
                  </div>
                </div>
              </div> 
              <input id="remember" type="checkbox" name="remember" value="1"> Remember me
              <div>
                <a class="btn btn-default submit" id="loginButton">Log in</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="register_consumer.php" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-cutlery"></i> Restaurant App</h1>
                  <p>©2017 All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
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
        <!-- bootstrap-progressbar -->
        <script src="gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- iCheck -->
        <script src="gentelella/vendors/iCheck/icheck.min.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="gentelella/vendors/moment/min/moment.min.js"></script>
        <script src="gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap-wysiwyg -->
        <script src="gentelella/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
        <script src="gentelella/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
        <script src="gentelella/vendors/google-code-prettify/src/prettify.js"></script>
        <!-- jQuery Tags Input -->
        <script src="gentelella/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
        <!-- Switchery -->
        <script src="gentelella/vendors/switchery/dist/switchery.min.js"></script>
        <!-- Select2 -->
        <script src="gentelella/vendors/select2/dist/js/select2.full.min.js"></script>
        <!-- Parsley -->
        <script src="gentelella/vendors/parsleyjs/dist/parsley.min.js"></script>
        <!-- Autosize -->
        <script src="gentelella/vendors/autosize/dist/autosize.min.js"></script>
        <!-- jQuery autocomplete -->
        <script src="gentelella/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
        <!-- starrr -->
        <script src="gentelella/vendors/starrr/dist/starrr.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="gentelella/build/js/custom.min.js"></script>

        <!-- js own scripts -->
        <script type="text/javascript" src="js/scriptSideMenu_Register.js"></script>
        <script type="text/javascript" src="js/scriptRegister.js"></script>
        <script type="text/javascript" src="js/scriptLogin.js"></script>
  </body>
</html>
