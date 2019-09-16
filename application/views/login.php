<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url('/asset/plugins/bootstrap/dist/css/bootstrap.min.css');?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('/asset/dist/css/AdminLTE.min.css');?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('/asset/plugins/iCheck/square/blue.css');?>">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="<?php echo base_url('login')?>"><b>Admin</b> Mediasi</a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Masuk untuk membuat artikel</p>
        <?php echo form_open('proses_login');?>
        <form action="" method="post">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="email"required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password"required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8"></div>
            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" name="login" value="login" class="btn btn-primary btn-block btn-flat">Masuk</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <?php echo form_close()?>
        <a href="<?php echo base_url("register")?>" class="text-center">Register</a>
      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
    <!-- jQuery 3 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url('/asset/plugins/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('/asset/plugins/iCheck/icheck.min.js');?>"></script>
  </body>
</html>
