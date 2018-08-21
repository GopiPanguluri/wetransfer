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
        <li id="nav-sellers"><a href="<?php echo site_url('admin/seller') ?>"><i class="fa fa-users"></i> <span> Seller Management </span> </a></li>
        <li id="nav-buyers"><a href="<?php echo site_url('admin/buyer') ?>"><i class="fa fa-shopping-cart"></i> <span> Buyer Management </span> </a></li>
        <li id="nav-categories">
            <a href="javascript:void(0)">
            <i class="fa fa-cog"></i> <span> Site Settings </span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?php echo site_url('admin/categories') ?>"><i class="fa fa-circle-o"></i> <span> Categories </span> </a></li>
                <li><a href="<?php echo site_url('admin/company_types') ?>"><i class="fa fa-circle-o"></i> <span> Company Types </span> </a></li>
            </ul>
        </li>
        <li id="nav-settings">
            <a href="javascript:void(0)">
            <i class="fa fa-cog"></i> <span> Role Settings </span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="javascript:void(0)<?php //echo site_url('admin/addresses') ?>"><i class="fa fa-circle-o"></i> <span>Roles Settings</span> </a></li>
                <li><a href="javascript:void(0)<?php //echo site_url('admin/addresses') ?>"><i class="fa fa-circle-o"></i> <span>Add Roles </span> </a></li>
            </ul>
        </li>
        <li id="nav-profile">
            <a href="javascript:void(0)">
            <i class="fa fa-user"></i> <span> Profile </span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?php echo site_url('common/profile'); ?>"><i class="fa fa-circle-o"></i> <span>View Profile</span> </a></li>
                <li><a href="<?php echo site_url('common/profile/change_password'); ?>"><i class="fa fa-circle-o"></i> <span>Change Password</span> </a></li>
            </ul>
        </li>
        <li id="nav-franchise"><a href="javascript:void(0)<?php echo site_url('admin/franchise') ?>"><i class="fa fa-cubes"></i> <span> Franchise Management </span> </a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
</aside>