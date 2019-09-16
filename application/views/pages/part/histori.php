<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">History Artikel</h3>
    <div class="box-tools pull-right">
      <div class="has-feedback"></div>
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body no-padding">
    <div class="mailbox-controls">
      <!-- Check all button -->
      <div class="btn-group"></div><!-- /.btn-group -->
      <div class="pull-right">
        1-50/200
        <div class="btn-group">
          <button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
          <button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
        </div><!-- /.btn-group -->
      </div><!-- /.pull-right -->
    </div>
    <div class="table-responsive mailbox-messages">
      <table class="table table-hover table-striped table-bordered">
        <tbody>
          <tr>
            <th style="width: 12%"><center>Penulis</center></th>
            <th style="width: 40%"><center>Kegiatan</center></th>
            <th style="width: 13%"><center>Tanggal</center></th>
          </tr>
          <?php if( ! empty($datahistori)){
            foreach($datahistori as $data){
              if(strtolower($data->PENULIS) == strtolower($user)){
                $datetimearray = explode(" ",  $data->TANGGAL_HISTORI);
                $date = $datetimearray[0];
                $reformatted_date = date('d - M - Y',strtotime($date));
                echo "
                  <tr>
                    <td style='width:12%'>
                      <center>".$data->PENULIS."</center>
                    </td>
                    <td style='width:40%'>
                      ".$data->KEGIATAN."
                    </td>
                    <td style='width: 13%'>
                      <center>".$reformatted_date."</center>
                    </td>
                  </tr>";
                }
              }
            }else{
              echo "<tr><td align='center' colspan='3'>Tidak ada histori</td></tr>";
            }
          ?>
        </tbody>
      </table><!-- /.table -->
    </div><!-- /.mail-box-messages -->
  </div><!-- /.box-body -->
  <div class="box-footer no-padding">
    <div class="mailbox-controls">
      <!-- Check all button -->
      <div class="btn-group">
      </div><!-- /.btn-group -->
      <div class="pull-right">
        1-50/200
        <div class="btn-group">
          <button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
          <button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
        </div><!-- /.btn-group -->
      </div><!-- /.pull-right -->
    </div>
  </div>
</div><!-- /. box -->
