<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Draft Artikel</h3>
    <div class="box-tools pull-right">
      <?php echo form_open('search_post/'.$user.'/draft');?>
      <div class="has-feedback">
        <input type="text" name="search" class="form-control input-sm" placeholder="Cari Draft">
        <span class="glyphicon glyphicon-search form-control-feedback"></span>
      </div>
      <?php echo form_close()?>
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body no-padding">
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
    <div class="table-responsive mailbox-messages">
      <table class="table table-hover table-striped table-bordered">
        <tbody>
          <tr>
            <th style="width: 15%"><center>Penulis</center></th>
            <th style="width: 15%"><center>Judul</center></th>
            <th><center>Kategori</center></th>
            <th ><center>Tanggal</center></th>
            <th colspan="2"><center>Aksi</center></th>
          </tr>
          <?php if( ! empty($dataartikel)){
            foreach($dataartikel as $data){
              if(strtolower($data->PENULIS) == strtolower($user)){
                if($data->POSTING == 0){
                  $datetimearray = explode(" ",  $data->TANGGAL_ARTIKEL);
                  $date = $datetimearray[0];
                  $reformatted_date = date('d - M - Y',strtotime($date));
                  echo "
                    <tr>
                      <td style='width:15%'>
                        <center>".$data->PENULIS."</center>
                      </td>
                      <td style='width:35%'>
                        ".$data->JUDUL_ARTIKEL."
                      </td>
                      <td >
                        <center>".$data->KATEGORI."</center>
                      </td>
                      <td >
                        <center>".$reformatted_date."</center>
                      </td>
                      <td>
                        <center>
                          <a href='".base_url("update_post/".$data->PENULIS."/".$data->ID_ARTIKEL."/".$data->POSTING)."' class='fa fa-fw fa-edit' style='font-size:1.25em;'></a>
                        </center>
                      </td>
                      <td>
                        <center>
                          <a href='".base_url("del_post/".$data->PENULIS."/".$data->ID_ARTIKEL."/".$data->POSTING)."' class='fa fa-fw fa-trash' style='font-size:1.25em;'></a>
                        </center>
                      </td>
                    </tr>";
                  }
                }
              }
            }else{
              echo "<tr><td align='center' colspan='6'>Tidak ada draft</td></tr>";
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
