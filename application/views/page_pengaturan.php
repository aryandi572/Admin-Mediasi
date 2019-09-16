<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Mediasi | Beranda</title>
    <?php include_once("lib/lib_page.php"); ?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <!-- Header -->
      <?php include_once("widget/header.php"); ?>
      <!-- Left side column. contains the logo and sidebar -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">

          <div class="box box-primary" style="padding: 10px; width: 80%; margin: auto;">
            <div class="box-header with-border">
              <h3 class="box-title">Pengaturan</h3>
            </div>

            <div class="tab-content" style="margin-top: 15px;">

              <div class="form-horizontal">
  <?php echo form_open('set_password/'.$user);?>
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Ubah Password :</label>
                </div>
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Password Sekarang</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="currentPass" placeholder="Password saat ini" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail" class="col-sm-2 control-label">Password Baru</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="newPass" placeholder="Password Baru" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Konfirmasi Password Baru</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="conPass" placeholder="Konfirmasi Password Baru" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
<?php echo form_close()?>
              </div>

            </div>
          </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!-- Footer -->
      <?php include_once("widget/footer.php"); ?>
      <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
  </body>
</html>
