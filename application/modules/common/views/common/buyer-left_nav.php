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
        <li id="nav-dashbooard"><a href="<?php echo site_url('buyer/dashboard') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li id="nav-negotiation"><a href="javascript:void(0)<?php //echo site_url('admin/users') ?>"><i class="fa fa-users"></i> <span> Negotiation List </span> </a></li>
        <li id="nav-orders"><a href="javascript:void(0)<?php //echo site_url('admin/users') ?>"><i class="fa fa-users"></i> <span> Orders List </span> </a></li>
        <li id="nav-invoice"><a href="javascript:void(0)<?php //echo site_url('admin/users') ?>"><i class="fa fa-users"></i> <span> Invoice </span> </a></li>
        <li id="nav-address"><a href="javascript:void(0)<?php //echo site_url('admin/buyers') ?>"><i class="fa fa-envelope-o"></i> <span> Manage Addresses </span> </a></li>
        <li id="nav-search"><a href="javascript:void(0)<?php //echo site_url('admin/buyers') ?>"><i class="fa fa-search"></i> <span> Search Product/Service </span> </a></li>
        <li id="nav-profile">
            <a href="javascript:void(0)">
            <i class="fa fa-home"></i> <span> Profile Settings </span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?php echo site_url('common/profile'); ?>"><i class="fa fa-circle-o"></i> <span>View Profile</span> </a></li>
                <li><a href="<?php echo site_url('common/profile/change_password'); ?>"><i class="fa fa-circle-o"></i> <span>Change Password</span> </a></li>
                <li><a href="<?php echo site_url('common/profile/profile_edit') ?>"><i class="fa fa-circle-o"></i> <span>Edit Profile</span> </a></li>
            </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
</aside>