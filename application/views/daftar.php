<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Register</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Font Awesome -->
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url('asset/bootstrap/css/style.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/plugins/bootstrap/dist/css/bootstrap.min.css');?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('asset/dist/css/AdminLTE.min.css');?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('asset/plugins/iCheck/square/blue.css');?>">
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript">
      $(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		      var input = $(this),
			    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		      input.trigger('fileselect', [label]);
		   });
		  $('.btn-file :file').on('fileselect', function(event, label) {
		    var input = $(this).parents('.input-group').find(':text'), log = label;
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
		  });

  		function readURL(input) {
  		    if (input.files && input.files[0]) {
  		        var reader = new FileReader();

  		        reader.onload = function (e) {
  		            $('#img-upload').attr('src', e.target.result);
  		        }
  		        reader.readAsDataURL(input.files[0]);
  		    }
  		}

  		$("#imgInp").change(function(){
  		    readURL(this);
  		});

  		$("#clear").click(function(){
  		    $('#img-upload').attr('src','');
  		    $('#urlname').val('');
  		});
  	});
    </script>
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-logo">
        <a href="<?php echo base_url('register')?>"><b>Daftar Penulis</b> Mediasi</a>
      </div>

      <div class="register-box-body">
        <p class="login-box-msg">Daftar Mediasi</p>
        <?php if(validation_errors() || $msg != "" && $msg != "success") { ?>
          <div class="alert alert-danger">
          <?php
            echo validation_errors();
            echo $msg;
          ?>
          </div>
        <?php }else if($msg == "success"){ ?>
          <div class="alert alert-success">
          <?php
            header('Refresh:3; url= '. base_url().'login');
            echo "Registration is Success! Wait for Redirect to Login Page";
          ?>
          </div>
        <?php } ?>
        <?php echo form_open_multipart('register');?>
        <form action="#" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="kode" placeholder="Kode Penulis" required>
            <span class="glyphicon glyphicon-ok-circle form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="fname" placeholder="Nama Depan (min. 3 huruf)" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="lname" placeholder="Nama Belakang" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <label class>
              <div class="iradio_minimal" aria-checked="false" aria-disabled="false" style="position: relative;">
                <input type="radio" name="gender" value="L" class="minimal" checked style="position: absolute; opacity: 0;">
                Laki - Laki
              </div>
            </label>
            <label>
              <div class="iradio_minimal" aria-checked="false" aria-disabled="false" style="position: relative;">
                <input type="radio" name="gender" value="P" class="minimal">
                Perempuan
              </div>
            </label>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan (Mahasiswa, Blogger, Yotuber, dll..)" required>
            <span class="glyphicon glyphicon-education form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <textarea  class="form-control" name="tentang" placeholder="Tentang Anda ..." required></textarea >
            <span class="glyphicon glyphicon-pushpin form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="pass" placeholder="Password (min. 8 digit)" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="repass" placeholder="Konfirmasi password" required>
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <label>Upload Gambar</label>
            <div class="input-group">
          <span class="input-group-btn">
              <span class="btn btn-default btn-file">
                  Pilih...
                  <input type="file" id="imgInp" name="userfile" required>
              </span>
          </span>
          <input type="text" class="form-control" readonly>
      </div>
      <img id='img-upload' class="img-responsive"/>
          </div>
          <div class="row">
            <div class="col-xs-8">
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <input type="submit" name="submit" value="Daftar" class="btn btn-primary btn-block btn-flat"></input>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <?php echo form_close()?>
        <a href="<?php echo base_url("login")?>" class="text-center">Sudah terdaftar? Masuk</a>
      </div>
    <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

  <!-- jQuery 3 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url('asset/plugins/bootstrap/dist/js/bootstrap.min.js');?>"></script>
  <!-- iCheck -->
  <script src="<?php echo base_url('asset/plugins/iCheck/icheck.min.js');?>"></script>

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
