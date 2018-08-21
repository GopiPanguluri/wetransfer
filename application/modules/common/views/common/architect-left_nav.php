<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo profile_img($_SESSION['admin_image']); ?>" style="height:40px;" class="img-circle" alt="User Image"/>
        </div>
        <div class="pull-left info">
          <p><?php echo character_limiter($this->session->userdata('admin_name'),10);?></p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li id="nav-dashbooard"><a href="<?php echo site_url('admin/dashboard') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        
        <!--<li id="nav-banners"><a href="<?php echo site_url('admin/banners') ?>"><i class="fa fa-photo"></i> <span>Banners</span></a></li>-->
        <!--<li id="nav-testimonials"><a href="<?php echo site_url('admin/testimonials') ?>"><i class="fa fa-th-large"></i> <span> Testimonials </span></a></li>-->
        <li id="nav-users"><a href="<?php echo site_url('admin/users') ?>"><i class="fa fa-users"></i> <span> Users Management </span> </a></li>
        <li id="nav-settings">
            <a href="javascript:void(0)">
            <i class="fa fa-home"></i> <span> Settings </span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?php echo site_url('admin/classes') ?>"><i class="fa fa-circle-o"></i> <span>Manage Classes</span> </a></li>
                <li><a href="<?php echo site_url('admin/sections') ?>"><i class="fa fa-circle-o"></i> <span>Manage Sections</span> </a></li>
                <li><a href="<?php echo site_url('admin/subjects') ?>"><i class="fa fa-circle-o"></i> <span>Manage Subjects</span> </a></li>
            </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
</aside>