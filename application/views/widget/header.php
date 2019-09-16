<header class="main-header">
  <!-- Logo -->
  <a href="#" class="logo">
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Admin</b>Mediasi</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="hidden-xs"><?php echo $user?></span>
            <img src="<?php echo base_url('/asset/profile/'.$foto);?>" class="user-image" alt="User Image">
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?php echo base_url('/asset/profile/'.$foto);?>" class="img-circle" alt="User Image">
              <p>
                <?php echo $user ?> - Writer
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="<?php echo base_url('page/profile/'.$user);?>" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="<?php echo base_url('page/signout');?>" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
