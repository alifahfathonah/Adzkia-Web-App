<?php error_reporting(0); ?>
<!DOCTYPE>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adzkia | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  </head>
  <body class="hold-transition login-page" style="background-color: #ff0000 !important; background-image: url(img/bg_top.png) !important;background-repeat: repeat-x; position:absolute; margin-left: 500px; ">  
    <?php
        $mess=$_REQUEST['mess'];
        if (isset($mess)) {
            echo "
            <div class='pad margin no-print'>
                <div class='alert alert-info' style='margin-bottom: 0!important;'>
                    <i class='fa fa-info'></i>
                    <b>Note:</b> $mess
                </div>
            </div>
            ";
        }
    ?>
    <div class="login-box">
      <div class="login-logo">
        <a href="login.php" style="color: white;"><b>Siswa Adzkia</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body" style="box-shadow:inset 0px 0px 5px #000;">
        <p class="login-box-msg">Login Siswa Adzkia</p>
        <form action="login_proses.php" method="post">
          <div class="form-group has-feedback">
            <input type="text" name="username" class="form-control" placeholder="Username">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
