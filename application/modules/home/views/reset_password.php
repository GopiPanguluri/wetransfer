<!doctype html>
<html class="no-js" lang="en">
  <head>
  <?php $this->load->view('common/css'); ?>
  <style>
  sup{
    vertical-align: top;
    font-size: 9px;
    top: 0.9em;
  }
  </style>
  </head>
  <body class="training-programs">
    <!--[if IE 9]>
      <div class="legacy-browser-message">
        <p>You are using an outdated browser. <a href="http://browsehappy.com/" target="_blank">Upgrade your browser today</a> for better experience!</p>
      </div>
    <![endif]-->

    <!--[if lt IE 9]>
      <div class="legacy-browser-message lt-ie-9">
        <p>You are using an outdated browser. <a href="http://browsehappy.com/" target="_blank">Upgrade your browser today</a> for better experience!</p>
      </div>
    <![endif]-->
    <div class="off-canvas position-left" id="offCanvas" data-off-canvas="" data-transition="overlap">
      <div class="mobile-header">
        <div class="brand text-center">
          <img src="<?php echo config_item('site_base_path'); ?>images/consulting.com_logo@2x.png" alt="Consulting.com"/>
        </div>
      </div>
      <!-- Mobile menu content  -->
      <button class="close-button" aria-label="Close menu" type="button" data-close="">
        <span aria-hidden="true">&#10005;</span>
      </button>
      <?php $this->load->view('common/mobile_header'); ?>
    </div><!-- / .off-canvas -->
    <div class="off-canvas-content" data-off-canvas-content="">
      <!-- Mobile Menu -->
      <?php $this->load->view('common/header'); ?>
      <div class="row site-content-container  medium-uncollapse">                  
        <aside class="columns large-3">
          <div class="block menu-block options">
            <ul class="menu vertical">
                <?php $this->load->view('common/profile_left_nav',array('data'=>'reset_password')); ?>
              </li>
            </ul>
          </div>
        </aside>
        <main class="columns large-9" role="main">
          <article class="block block-content-container">
            <header class="page-header">
              <div class="row title-container">
                <div class="columns medium-12">
                  <h1>Reset Your Password</h1>
                </div>
              </div>
            </header>
            <div class="block-content">
              <div class="row">
                <div class="columns large-11">
                    <form id="account-password" method="post" action="<?php echo base_url('home/profile/reset_password'); ?>">
                        <div class="row">
                          <div class="medium-6 columns">
                            <label for="current-password"> Current Password</label>
                            <input id="password" type="password" name="password" required=""/>
                            <input id="change_pass" type="hidden" name="change_pass"/>
                            <div class="form-error">
                              Please enter your current password
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="medium-6 columns">
                            <label for="new-password"> New Password</label>
                            <input id="new_password" name="new_password" type="password" pattern="password" required=""/>
                            <div class="form-error">
                              Please enter a password with minimum 6 characters
                            </div>
                          </div>
                          <div class="medium-6 columns">
                            <label for="confirm-password"> Confirm Password</label>
                            <input name="conf_new_password" id="conf_new_password" type="password" data-equalto="new_password" required=""/>
                            <div class="form-error">
                              Password doesn't match
                            </div>
                          </div>
                        </div>
                        <div class="error_msg alert alert-danger alert-dismissible"></div>
                        <div class="info_msg alert alert-success alert-dismissible"></div>
                        <div class="row footer-buttons-container">
                          <div class="small-12 columns">
                            <button class="button primary">Save Changes</button>
                          </div>
                        </div>
                   </form>
               </div>
                <!-- /.columns large-11 -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.block-content -->
          </article>
        </main>
      </div><!-- / .site-content-container -->
      <!-- Billing Issue Reveal -->
      <div class="reveal billing issue" id="billing-issue" data-reveal>
          <div class="row reveal-inner"> 
            <header class="reveal-header columns small-12">
              <h1 class="text-center">Oops!<br>We Had Trouble Billing Your Card…</h1>
            </header>
            <div class="reveal-content">
              <div class="columns small-12">
                <div class="page-icon">
                  <div class="image-icon billing-issue"></div>
                </div>
                <p>I’m sorry we had trouble charging your card on file for your latest payment and your account has been suspended until this overdue balance is paid.</p>
                <p>Please click the “Fix Billing” button below to update your card on file and get your account back up and running again. </p>
              </div>
            </div>
            <!-- /.reveal-content -->
            <div class="columns small-12 footer-buttons-container text-center">
              <a href='#' class="button primary uppercase">Fix billing information</a>
            </div>
            <!-- /.columns small-12 footer-buttons-container -->
          </div>
          <!-- /.reveal-inner -->
          <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&#10005;</span>
          </button>
      </div>
      <!-- Suspended Reveal -->
      <div class="reveal account issue" id="account-suspended" data-reveal>
          <div class="row reveal-inner"> 
            <header class="reveal-header columns small-12">
              <h1 class="text-center">Yikes!<br>Your Account Has Been Suspended…</h1>
            </header>
            <div class="reveal-content">
              <div class="columns small-12">
                <div class="page-icon">
                  <div class="image-icon account-issue"></div>
                </div>
                <p id="suspend-modal-message">Unfortunately your access to the content has been suspended.<br/>
                    If you have any questions please email us to <a href="#"><span class="__cf_email__" data-cfemail="cdbeb8bdbda2bfb98daea2a3beb8a1b9a4a3aae3aea2a0">[email&#160;protected]</span></a>
                </p>
              </div>
            </div>
            <!-- /.reveal-content -->
            <div class="columns small-12 footer-buttons-container text-center">
            </div>
            <!-- /.columns small-12 footer-buttons-container -->
          </div>
          <!-- /.reveal-inner -->
          <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&#10005;</span>
          </button>
      </div>
    </div>
    <?php $this->load->view('common/footer'); ?>
    <?php $this->load->view('common/js'); ?>
<script src="<?php echo config_item('ui_base_path') ?>custom/js/jquery.validate.min.js"></script>
<script>
    var BASE_URL = '<?php echo base_url(); ?>';
    $(document).ready(function() {
    $.validator.setDefaults({
            ignore: []
    });
    $("#account-password").validate({
        rules: {
        password: {
            required: true,
            minlength:5
        },
        new_password: {
            required: true,
            minlength:5
        },
        conf_new_password: {
            required: true,
            minlength:5,
            equalTo:"#new_password"
        }
        },
        messages: {				
            email: {					
                required: "Email should not leave empty.",
                email: "Please enter valid email id."
                },
            password: {					
                required: "Password is required.",
                minlength: "Please enter the password with minimum 5 characters"
                }
        },
        submitHandler: function(form,event){
        event.preventDefault();// using this page stop being refreshing
        $.ajax({
            url: form.action,
            type: form.method,
            dataType: "json",
            data: $(form).serialize(),
            success: function(res) {
                if(res.status==0){
                    $('.error_msg').hide();
                    $('.info_msg').show();
                    $('.info_msg').html(res.message);
                    $('.info_msg').fadeOut(2000);
                }else{
                    $('.error_msg').show();
                    $('.info_msg').hide();
                    $('.error_msg').html(res.message);
                    $('.error_msg').fadeOut(2000);
                }
            }            
        });
    }
    });
    });
</script>
  </body>
</html>