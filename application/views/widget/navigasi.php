<?php if($panggil == "artikel"){ ?>
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('/asset/profile/'.$foto);?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url('page/utama/'.$user);?>">
            <i class="fa fa-dashboard"></i>
            <span>Halaman Utama</span></i>
          </a>
        </li>
        <li class="active">
          <a href="<?php echo base_url('page/artikel/'.$user.'/post');?>">
            <i class="fa fa-pencil-square-o"></i>
            <span>Posting</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('page/pengaturan/'.$user.'/baru');?>">
            <i class="fa fa-wrench"></i>
            <span>Pengaturan</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<?php }else if($panggil == "pengaturan"){ ?>
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('/asset/profile/'.$foto);?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url('page/utama/'.$user);?>">
            <i class="fa fa-dashboard"></i>
            <span>Halaman Utama</span></i>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('page/artikel/'.$user.'/post');?>">
            <i class="fa fa-pencil-square-o"></i>
            <span>Posting</span>
          </a>
        </li>
        <li class="active">
          <a href="<?php echo base_url('page/pengaturan/'.$user.'/baru');?>">
            <i class="fa fa-wrench"></i>
            <span>Pengaturan</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<?php }else{ ?>
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('/asset/profile/'.$foto);?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="<?php echo base_url('page/utama/'.$user);?>">
            <i class="fa fa-dashboard"></i>
            <span>Halaman Utama</span></i>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('page/artikel/'.$user.'/post');?>">
            <i class="fa fa-pencil-square-o"></i>
            <span>Posting</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('page/pengaturan/'.$user.'/baru');?>">
            <i class="fa fa-wrench"></i>
            <span>Pengaturan</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<?php  } ?>
