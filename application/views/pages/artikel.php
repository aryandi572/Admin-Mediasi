<!-- Main content -->
  <section class="content">
    <div class="row">
      <?php
        if ($msg == "add") {
          include_once("part/nav_artikel.php");
        }else if($msg == "draft"){
          include_once("part/nav_artikel_draft.php");
        }else if ($msg == "histori"){
          include_once("part/nav_artikel_histori.php");
        }else{
          include_once("part/nav_artikel.php");
        }
      ?>
      <div class="col-md-9">
        <?php
          if ($msg == "add") {
            include_once("part/create_artikel.php");
          }else if($msg == "draft"){
            include_once("part/draft.php");
          }else if ($msg == "histori"){
            include_once("part/histori.php");
          }else if ($msg == "edit"){
            include_once("part/update_artikel.php");
          }else{
            include_once("part/listArtikel.php");
          }
        ?>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section>
<!-- /.content -->
