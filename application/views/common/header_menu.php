<header id="nav" class="header header-1 header-no-bg">
    <div class="header-wrapper ">
        <div class="container">
            <div class="logo-row">
            <!-- LOGO -->
                <div class="logo-container">
                    <a href="<?php echo config_item('root_dir'); ?>">
                        <div class="logo">
                            <img src="<?php echo config_item('frontend_assets');?>images/logo.png" class="logo-img" alt="Logo"/>
                        </div>
                    </a>
                </div>
            <!-- BUTTON -->
                <div class="menu-btn-respons-container">
                    <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".main-menu .navbar-collapse">
                        <span class="text">MENU</span>
                        <span aria-hidden="true" class="icon_menu main-menu-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    <!-- CONTAINER -->
        <div class="main-menu-container">
            <div class="container">
            <!-- MAIN MENU -->
                <div class="main-menu">
                    <div class="navbar navbar-default" role="navigation">
                    <!-- MAIN MENU LIST-->
                        <nav class="collapse collapsing navbar-collapse right">
                            <ul class="nav navbar-nav">
                                <li class="parent current">
                                    <a href="<?php echo config_item('root_dir');?>"><span aria-hidden="true" class="icon_house_alt main-menu-icon"></span><div class="main-menu-title">HOME</div></a>
                                </li>
                                <li class="parent megamenu">
                                    <a href="#"><span aria-hidden="true" class="icon_lightbulb_alt main-menu-icon"></span><div class="main-menu-title">SOLUTIONS</div></a>
                                </li>
                                <li class="parent">
                                    <a href="#"><span aria-hidden="true" class="icon_toolbox_alt main-menu-icon"></span><div class="#">NEWSROOM</div></a>
                                </li>
                                <li class="parent">
                                    <a href="<?php echo config_item('root_dir');?>index.php/about_us"><span aria-hidden="true" class="icon_pens main-menu-icon"></span><div class="main-menu-title">ABOUT US</div></a>
                                </li>
                                <li id="menu-contact-info-big" class="parent megamenu">
                                    <a href="<?php echo config_item('root_dir');?>index.php/contact"><span aria-hidden="true" class="icon_mail_alt main-menu-icon"></span><div class="main-menu-title">CONTACT</div></a>
                                </li>
                                <li id="menu-contact-info-big" class="parent megamenu">
                                    <a href="#"><i class="fa fa-sign-in main-menu-icon" data-toggle="modal" data-target="#login-modal" aria-hidden="true"></i><div class="main-menu-title">LOGIN</div></a>
                                    <div class="modal fade main-menu-title" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                                    <h4 class="modal-title" id="myModalLabel">Login - <a href="#">CONSTRUCTION BAY</a></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;"><!-- Tab panes -->
                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="Login">
                                                                     <form method="post" action="<?php echo base_url('admin/login/login_status'); ?>" id="login_form">
                                                                        <div class="form-group">
                                                                            <label for="email" class="col-sm-2 control-label">Email</label>
                                                                            <div class="col-sm-10">
                                                                                <input name="email" type="email" class="form-control" placeholder="Email" required=""/>
                                                                                <label id="email-error" class="error" for="email"></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="email" class="col-sm-2 control-label">Password</label>
                                                                            <div class="col-sm-10">
                                                                                <input name="password" type="password" class="form-control" placeholder="Password" required=""/>
                                                                                <label id="password-error" class="error" for="password"></label>
                                                                            </div>
                                                                        </div>
                                                                        <br />
                                                                        <div class="row">
                                                                            <div class="col-xs-8">
                                                                              <div class="checkbox icheck">
                                                                                <label>
                                                                                    <input type="checkbox"/> Remember Me
                                                                                </label>
                                                                              </div>
                                                                            </div>
                                                                            
                                                                            <!-- /.col -->
                                                                            <div class="col-xs-4">
                                                                              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                                                                            </div>
                                                                            <!-- /.col -->    
                                                                        </div>
                                                                        <br/>
                                                                        <!--a href="#">I forgot my password</a><br />
                                                                        <a href="<?php //echo base_url('admin/login/register'); ?>">Register as new membership</a-->
                                                                         <div class="error_msg alert alert-danger alert-dismissible"></div>
                                                                         <div class="info_msg alert alert-success alert-dismissible"></div>
                                                                    </form>
                                                                    <a id="register_as_member">Register as new membership</a><br />
                                                                    <a href="#">I forgot my password</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                
                                </li>
                                <li id="menu-contact-info-big" class="parent megamenu">
                                    <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle main-menu-icon" aria-hidden="true"></i>SIGN UP</a>
                                <!--<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                SIGN UP</button>-->
                                    <div class="modal fade main-menu-title" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                                    <h4 class="modal-title" id="myModalLabel">Registration - <a href="#">CONSTRUCTION BAY</a></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                                                        <!-- Tab panes -->
                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="Registration">
                                                                     <form action="<?php echo base_url('admin/login/save_register_member'); ?>" method="post" id="registr_form">
                                                                        <div class="form-group text-center">
                                                                            <label>
                                                                              <input type="radio" id="type" name="type" class="minimal" value="1"/>
                                                                              Seller
                                                                            </label>
                                                                            <label>
                                                                              <input type="radio" id="type" name="type" class="minimal" value="5"/>
                                                                              Professional
                                                                            </label>
                                                                            <label>
                                                                              <input type="radio" id="type" name="type" class="minimal" value="2"/>
                                                                              Buyer
                                                                            </label>
                                                                            <label>
                                                                              <input type="radio" id="type" name="type" class="minimal" value="3"/>
                                                                              Student
                                                                            </label>
                                                                            <label>
                                                                              <input type="radio" id="type" name="type" class="minimal" value="4"/>
                                                                              Franchise
                                                                            </label>
                                                                            <label id="type-error" class="error" for="type"></label>
                                                                        </div>
                                                                        <div class="form-group has-feedback">
                                                                            <?php echo form_dropdown('c_id',$this->config->item('r_categories'),'','id="c_id" class="form-control"'); ?>
                                                                            <span class="glyphicon glyphicon-th-list form-control-feedback"></span>
                                                                            <label id="c_id-error" class="error" for="c_id"></label>
                                                                        </div>
                                                                        <div class="form-group text-center">
                                                                            <label>
                                                                              <input type="radio" id="type_indi_com" name="type_indi_com" class="minimal" value="1"/>
                                                                              Company
                                                                            </label>
                                                                            <label>
                                                                              <input type="radio" id="type_indi_com" name="type_indi_com" class="minimal" value="2"/>
                                                                              Individual
                                                                            </label>
                                                                            <label id="type_indi_com-error" class="error" for="type_indi_com"></label>
                                                                        </div>
                                                                        <div class="form-group has-feedback">
                                                                            <input type="text" class="form-control" name="name" id="name" placeholder="Full name"/>
                                                                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                                            <label id="name-error" class="error" for="name"></label>
                                                                        </div>
                                                                        <div class="form-group has-feedback">
                                                                            <input type="text" class="form-control" name="username" id="username" placeholder="User Name"/>
                                                                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                                            <label id="name-error" class="error" for="username"></label>
                                                                        </div>
                                                                        <div class="form-group has-feedback">
                                                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email"/>
                                                                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                                                            <label id="name-error" class="error" for="email"></label>
                                                                        </div>
                                                                        <div class="form-group has-feedback">
                                                                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile No"/>
                                                                            <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                                                                            <label id="name-error" class="error" for="mobile"></label>
                                                                        </div>
                                                                        <div class="form-group has-feedback">
                                                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password"/>
                                                                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                                            <label id="name-error" class="error" for="password"></label>
                                                                        </div>
                                                                        <div class="form-group has-feedback">
                                                                            <input type="password" class="form-control" name="con_password" id="con_password" placeholder="Retype password"/>
                                                                            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                                                                            <label id="name-error" class="error" for="con_password"></label>
                                                                        </div>
                                                                        
                                                                        <div class="row">
                                                                            <div class="col-xs-8">
                                                                                <div class="checkbox icheck">
                                                                                    <label>
                                                                                      <input type="checkbox" name="terms" id="terms"/> I agree to the <a href="#">terms</a>
                                                                                      <label id="terms-error" class="error" for="terms"></label>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <!-- /.col -->
                                                                            <div class="col-xs-4">
                                                                                <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                                                                            </div>
                                                                            <!-- /.col -->
                                                                        </div>
                                                                        <div class="error_msg alert alert-danger alert-dismissible"></div>
                                                                        <div class="info_msg alert alert-success alert-dismissible"></div>
                                                                    </form>
                                                                    <a id="i_already_member">I already a member</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="row text-center sign-with">
                                                            <div class="col-md-12">
                                                                <h3>
                                                                Sign in with</h3>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="btn-group btn-group-justified">
                                                                    <a href="#" class="btn btn-primary">Facebook</a> 
                                                                    <a href="#" class="btn btn-danger">Google</a>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- SEARCH MOBILE READ DOCUMENTATION-->
                                <li class="hide-desck">
                                    <form class="form-search-respons" id="searchForm-respons" action="<?php echo base_url('search/search_query'); ?>" method="get">
                                        <input class="sb-search-input-respons" placeholder="SEARCH HERE..." type="text" value="" name="q" id="a"/>
                                        <input class="sb-search-submit-respons" type="submit" value="SEARCH"/>
                                    </form>
                                </li>
                            </ul>
                            <!-- SEARCH READ DOCUMENTATION -->
                            <div id="sb-search" class="search sb-search right hide-respons">
                                <form class="form-search" id="searchForm" action="<?php echo base_url('search/search_query'); ?>" method="get">
                                    <input class="sb-search-input" placeholder="SEARCH HERE..." type="text" value="" name="q" id="q"/>
                                    <input class="sb-search-submit" type="submit" value="SEARCH"/>
                                    <span class="sb-icon-search"><span aria-hidden="true" class="icon_search main-menu-icon"></span></span>
                                </form>
                            </div>
                        </nav>
                    </div>
                </div>
            <!-- main-menu -->
            </div>
        <!-- container -->
        </div>
    <!--main-menu-container -->
    </div>
<!-- header-wrapper -->
</header>