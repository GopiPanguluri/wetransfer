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
                <?php $this->load->view('common/profile_left_nav',array('data'=>'addresses')); ?>
              </li>
            </ul>
          </div>
        </aside>
        <main class="columns large-9" role="main">
          <article class="block block-content-container">
            <header class="page-header">
              <div class="row title-container">
                <div class="columns medium-12">
                  <h1>Edit Your Billing Address</h1>
                </div>
              </div>
            </header>
        
            <div class="block-content">
                <form class="addresses_form" action="<?php echo base_url('home/profile/save_addresses'); ?>" method="post" novalidate="">
                    <div class="row columns large-11 address-form-container billing ">
                      <div class="row">
                        <div class="medium-12 columns">
                          <label for="ads_bil_street"> Street Address</label>
                          <input id="ads_bil_street" name="ads_bil_street" value="<?php if(isset($addresses)&&count($addresses)!==0) echo $addresses['ads_bil_street'] ?>" type="text" required=""/>
                          <div class="form-error">
                            Please enter a valid address
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="medium-12 columns">
                          <label for="ads_bil_etd_street"> Extended Address (Optional)</label>
                          <input id="ads_bil_etd_street" name='ads_bil_etd_street' value="<?php if(isset($addresses)&&count($addresses)!==0) echo $addresses['ads_bil_etd_street'] ?>" type="text"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="medium-6 columns">
                          <label for="ads_bil_city"> City</label>
                          <input id="ads_bil_city" type="text" name="ads_bil_city" value="<?php if(isset($addresses)&&count($addresses)!==0) echo $addresses['ads_bil_city'] ?>" required=""/>
                          <div class="form-error">
                            City is requierd
                          </div>
                        </div>
                        <div class="medium-6 columns">
                          <label for="ads_bil_state"> State/Region</label>
                          <input id="ads_bil_state" name='ads_bil_state' value='<?php if(isset($addresses)&&count($addresses)!==0) echo $addresses['ads_bil_state'] ?>' type="text" required=""/>
                          <div class="form-error">
                            State is required
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="medium-6 large-3 columns">
                          <label for="ads_bil_zip_code"> Zip / Postal Code</label>
                          <input id="ads_bil_zip_code" name="ads_bil_zip_code" value="<?php if(isset($addresses)&&count($addresses)!==0) echo $addresses['ads_bil_zip_code'] ?>" type="text" required=""/>
                          <div class="form-error">
                            Zip / Postal Code is required
                          </div>
                        </div>
                        <div class="medium-6 large-9 columns">
                          <label for="country"> What country are you in?</label>
                            <?php $cntry= ''; if(isset($addresses)&&count($addresses)!==0) $cntry = $addresses['ads_bil_country']; ?>
                            <?php echo form_dropdown('ads_bil_country',$cn_ls,$cntry,'id="ads_bil_country" class="chosen-select-with-search" data-placeholder="Choose a country..." required=""'); ?>
                          <div class="form-error">
                              Please select your country
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.row columns large-10 -->
                    <div class="row">
                      <div class="small-12 columns">
                        <div class="switch-container">
                          <div class="switch">
                            <input class="switch-input" id="ads_bil_same" name="ads_bil_same" type="checkbox" value="1"/>
                            <label class="switch-paddle" for="ads_bil_same">
                              <span class="show-for-sr">Shipping and billing adress are the same</span>
                            </label>
                          </div>
                          <div class="switch-label">
                            Shipping and billing adress are the same
                          </div>
                        </div>
                        <!-- /.switch-container -->
                      </div>
                    </div>
                    <div class="row columns large-11 address-form-container shipping">
                      <hr/>
                      <h1 class="shipping-address-title">Edit Your Shipping Address</h1>
                      <div class="row">
                        <div class="medium-12 columns">
                          <label for="ads_ship_street"> Street Address</label>
                          <input id="ads_ship_street" name='ads_ship_street' value='<?php if(isset($addresses)&&count($addresses)!==0) echo $addresses['ads_ship_street'] ?>' type="text" required=""/>
                          <div class="form-error">
                            Please enter a valid address
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="medium-12 columns">
                          <label for="ads_ship_etd_street"> Extended Address (Optional)</label>
                          <input id="ads_ship_etd_street" name='ads_ship_etd_street' value='<?php if(isset($addresses)&&count($addresses)!==0) echo $addresses['ads_ship_etd_street'] ?>' type="text"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="medium-6 columns">
                          <label for="ads_ship_city"> City</label>
                          <input id="ads_ship_city" name='ads_ship_city' value='<?php if(isset($addresses)&&count($addresses)!==0) echo $addresses['ads_ship_city'] ?>' type="text" required=""/>
                          <div class="form-error">
                            City is requierd
                          </div>
                        </div>
                        <div class="medium-6 columns">
                          <label for="ads_ship_state"> State/Region</label>
                          <input id="ads_ship_state" name='ads_ship_state' value='<?php if(isset($addresses)&&count($addresses)!==0) echo $addresses['ads_ship_state'] ?>' type="text" required=""/>
                          <div class="form-error">
                            State is required
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="medium-6 large-3 columns">
                          <label for="ads_ship_zip_code"> Zip / Postal Code</label>
                          <input id="ads_ship_zip_code" name='ads_ship_zip_code' value='<?php if(isset($addresses)&&count($addresses)!==0) echo $addresses['ads_ship_zip_code'] ?>' type="text" required=""/>
                          <div class="form-error">
                            Zip / Postal Code is required
                          </div>
                        </div>
                        <div class="medium-6 large-9 columns">
                          <label for="country-select-shipping"> What country are you in?</label>
                            <?php $shp_cntry = ''; if(isset($addresses)&&count($addresses)!==0) $shp_cntry = $addresses['ads_ship_country']; ?>
                            <?php echo form_dropdown('ads_ship_country',$cn_ls,$shp_cntry,'id="ads_ship_country" class="chosen-select-with-search" data-placeholder="Choose a country..." required=""'); ?>
                            <div class="form-error">
                              Please select your country
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="error_msg alert alert-danger alert-dismissible"></div>
                    <div class="info_msg alert alert-success alert-dismissible"></div>
                    <!-- /.row columns large-10 -->
                    <div class="row">
                      <div class="small-12 columns">
                        <button class="button primary" type="submit">Save Changes</button>  
                      </div>
                    </div>
                  </form>
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
    $(".addresses_form").validate({
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