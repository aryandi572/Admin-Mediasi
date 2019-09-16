<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">List Artikel</h3>
    <div class="box-tools pull-right">
      <?php echo form_open('search_post/'.$user.'/post');?>
      <div class="has-feedback">
        <input type="text" name="search" class="form-control input-sm" placeholder="Cari Post" value="<?php $cari?>">
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
        <div class="btn-group">
          <?php
    			  //echo $this->pagination->create_links();
    			?>
          <button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
          <button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
        </div><!-- /.btn-group -->
      </div><!-- /.pull-right -->
    </div>
    <div id="table-res"class="mailbox-messages">
      <table class="table table-hover table-striped table-bordered">
        <thead>
          <tr>
            <th style="width: 15%"><center>Penulis</center></th>
            <th style="width: 15%"><center>Judul</center></th>
            <th><center>Kategori</center></th>
            <th ><center>Tanggal</center></th>
            <th colspan="2"><center>Aksi</center></th>
          </tr>
        </thead>
        <tbody>
          <?php if( ! empty($dataartikel)){
            foreach($dataartikel as $data){
              if(strtolower($data->PENULIS) == strtolower($user)){
                if($data->POSTING == 1){
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
                          <a href='".base_url("del_post/".$data->PENULIS."/".$data->ID_ARTIKEL."/".$data->POSTING)."' class='fa fa-fw fa-trash' style='font-size:1.25em;' onclick='return confirm(\"Anda Yakin Akan Menghapus Data\")'></a>
                        </center>
                      </td>
                    </tr>";
                  }
                }
              }
            }else{
              echo "<tr><td align='center' colspan='6'>Tidak ada post</td></tr>";
            }
          ?>
        </tbody>
        <tfoot>
          <tr>
            <th style="width: 15%"><center>Penulis</center></th>
            <th style="width: 15%"><center>Judul</center></th>
            <th><center>Kategori</center></th>
            <th ><center>Tanggal</center></th>
            <th colspan="2"><center>Aksi</center></th>
          </tr>
        </tfoot>
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
