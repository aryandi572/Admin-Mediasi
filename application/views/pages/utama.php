<?php $total=0;
  if( ! empty($datautama)){
    foreach($datautama as $data){
      $total += $data->JML_PENGUNJUNG;
    }
  };
?>
<div class="row">
  <!-- Left col -->
  <section class="col-lg-5 connectedSortable">
    <div class="info-box">
      <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Total Artikel</span>
        <span class="info-box-number"><?php echo $jml_art?></span>
      </div>
      <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
      <?php include_once("part/kategori.php"); ?>
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?php echo $total?></h3>
          <p>Total Visitor</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">
          Pengunjung Terbaru
          <i class="fa fa-arrow-circle-right"></i>
        </a>
      </div>
    </section><!-- /.Left col -->

    <section class="col-lg-7 connectedSortable">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Artikel Populer</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body no-padding">
        <table class="table table-striped">
          <tbody>
            <tr>
              <th style="width: 10px">#</th>
              <th>Judul</th>
              <th>Statistik</th>
              <th style="width: 40px">Pengunjung</th>
            </tr>
            <?php $i=1;
              if( ! empty($datautama)){
                if($total>0){
                  foreach($datautama as $data){
                    $persen = ($data->JML_PENGUNJUNG/$total)*100;

                    echo "
                      <tr>
                        <td>".$i."</td>
                        <td>".$data->JUDUL_ARTIKEL."</td>
                        <td>
                          <div class='progress progress-xs'>
                            <div class='progress-bar progress-bar-success' style='width:".$persen."%'></div>
                          </div>
                        </td>
                        <td><span class='badge bg-red'>".$data->JML_PENGUNJUNG."</span></td>
                      </tr>
                      <tr>
                    ";
                    $i++;
                  }
                }
              }else {
                # code...
              };
            ?>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
  </section><!-- right col -->
</div>
