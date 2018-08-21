<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img style="border-radius: 14%;" src="<?php echo profile_img($_SESSION['admin_image']); ?>" style="height:40px;" class="img-circle" alt="User Image"/>
        </div>
        <div class="pull-left info">
          <p><?php echo character_limiter($this->session->userdata('admin_name').' '.$this->session->userdata('admin_last_name'),10);?></p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li id="nav-dashbooard"><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li id="nav-users"><a href="<?php echo site_url('admin/users'); ?>"><i class="fa fa-users"></i> <span>Users Management</span></a></li>
        <?php if($_SESSION['admin_role_id']!=='2'){ ?>
            <li id="nav-settings"><a href="<?php echo site_url('admin/settings'); ?>"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
            <li id="nav-programs"><a href="<?php echo site_url('admin/programs'); ?>"><i class="fa fa-graduation-cap"></i> <span>Programs</span></a></li>
            <li id="nav-chapters"><a href="<?php echo site_url('admin/chapters'); ?>"><i class="fa fa-book"></i> <span>Chapters</span></a></li>
            <li id="nav-lessions"><a href="<?php echo site_url('admin/lessions'); ?>"><i class="fa fa-tasks"></i> <span>Lessions</span></a></li>
            <li id="nav-videos"><a href="<?php echo site_url('admin/videos'); ?>"><i class="fa fa-play-circle-o"></i> <span>Video Tutorials</span></a></li>
        <?php } ?>
        <li id="nav-profile">
            <a href="javascript:void(0)">
            <i class="fa fa-user"></i> <span> Profile </span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?php echo site_url('admin/profile'); ?>"><i class="fa fa-circle-o"></i> <span>View Profile</span> </a></li>
                <li><a href="<?php echo site_url('admin/profile/admin_password'); ?>"><i class="fa fa-circle-o"></i> <span>Change Password</span> </a></li>
            </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
</aside>