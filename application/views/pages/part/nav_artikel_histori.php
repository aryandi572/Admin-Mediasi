<div class="col-md-3">
  <a href="<?php echo base_url('page/artikel/'.$user.'/add');?>" class="btn btn-primary btn-block margin-bottom">Tambah Artikel</a>
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Folders</h3>
      <div class="box-tools">
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>
    <div class="box-body no-padding">
      <ul class="nav nav-pills nav-stacked">
        <li >
          <a href="<?php echo base_url('page/artikel/'.$user.'/post');?>">
            <i class="fa fa-pencil-square-o"></i> Post
            <span class="label label-primary pull-right">
              <?php $jumlah=0;
              if(!empty($dataartikel)){
                foreach($dataartikel as $data){
                  if(strtolower($data->PENULIS) == strtolower($user)){
                    if($data->POSTING == 1){
                      $jumlah++;
                    }
                  }
                }
              }?>
              <?php echo $jumlah; ?>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('page/artikel/'.$user.'/draft');?>">
            <i class="fa fa-file-text"></i> Draft
            <span class="label label-warning pull-right">
              <?php $jumlah=0;
              if(!empty($dataartikel)){
                foreach($dataartikel as $data){
                  if(strtolower($data->PENULIS) == strtolower($user)){
                    if($data->POSTING == 0){
                      $jumlah++;
                    }
                  }
                }
              }?>
              <?php echo $jumlah; ?>
            </span>
          </a>
        </li>
        <li class="active" >
          <a href="<?php echo base_url('page/artikel/'.$user.'/histori');?>">
            <i class="fa fa-history"></i> Histori
          </a>
        </li>
      </ul>
    </div><!-- /.box-body -->
  </div><!-- /. box -->
</div><!-- /.col -->
