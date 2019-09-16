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
      <?php include_once("widget/navigasi.php"); ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          <?php include_once("load_content.php"); ?>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!-- Footer -->
      <?php include_once("widget/footer.php"); ?>
      <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
  </body>
</html>
