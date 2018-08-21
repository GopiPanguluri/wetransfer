<header class="main-header">
    <!-- Logo -->
    <a href="<?php 
    if($_SESSION['admin_type']=='0'){
        $red_url = 'admin/dashboard';
    }elseif($_SESSION['admin_type']=='1'){
        $red_url = 'seller/dashboard';
    }elseif($_SESSION['admin_type']=='2'){
        $red_url = 'buyer/dashboard';
    }elseif($_SESSION['admin_type']=='3'){
        $red_url = 'architect/dashboard';
    }
     echo base_url($red_url); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><?php echo $this->config->item('site_title_mini'); ?></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><?php echo $this->config->item('site_title'); ?></b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <!--li><a href="javascript:void(0)" target="_blank"><span class="glyphicon glyphicon-home"></span>&nbsp; Visit Site</a></li-->
          <li class="dropdown user user-menu" style="min-width: 135px;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo profile_img($_SESSION['admin_image']); ?>" style="width: 30px;height: 30px;" class="user-image" alt="User Image"/>
              <span class="hidden-xs"><?php echo character_limiter($this->session->userdata('admin_name'),10);?></span>
            </a>
            <ul class="dropdown-menu" style="right: inherit;">
              <li>
                <a href="<?php echo site_url('common/profile/change_password') ?>" class="">Change Password</a>
              </li>
              <li>
                <a href="<?php echo site_url('admin/login/admin_logout') ?>" class="">Sign out</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
</header>