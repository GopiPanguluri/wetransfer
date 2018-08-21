<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('admin/dashboard'); ?>" class="logo">
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
          <?php //if(!isset($_SESSION['home_user_theme'])||(isset($_SESSION['home_user_theme'])&&$_SESSION['home_user_theme']=='')){ $_SESSION['home_user_theme']='black'; }  $all_colors = array(''=>'Select Theme','red'=>'red','blue'=>'blue','green'=>'green','black'=>'black','orange'=>'orange','aqua'=>'aqua','indigo'=>'indigo','violet'=>'violet'); ?>
          <?php //echo form_dropdown('navyOp',$all_colors,$_SESSION['home_user_theme'],'onchange="test(this.value);" class="themeclassblack" id="selectid2"'); ?>
          <li><a href="<?php echo base_url(); ?>" target="_blank"><span class="glyphicon glyphicon-home"></span>&nbsp; Visit Site</a></li>
          <li class="dropdown user user-menu" style="min-width: 135px;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img style="border-radius: 14%;width: 100%;max-width: 45px;height: auto;" src="<?php echo profile_img($_SESSION['admin_image']); ?>" style="width: 30px;height: 30px;" class="user-image" alt="User Image"/>
              <span class="hidden-xs"><?php echo character_limiter($this->session->userdata('admin_name').' '.$this->session->userdata('admin_last_name'),10);?></span>
            </a>
            <ul class="dropdown-menu" style="right: inherit;">
              <li>
                <a href="<?php echo site_url('admin/profile/admin_password') ?>" class="">Change Password</a>
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