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
                <?php $this->load->view('common/profile_left_nav',array('data'=>'email')); ?>
              </li>
            </ul>
          </div>
        </aside>
        <main class="columns large-9" role="main">
          <article class="block block-content-container">
            <header class="page-header">
              <div class="row title-container">
                <div class="columns medium-12">
                  <h1>Email Preferences</h1>
                </div>
              </div>
            </header>
        
            <div class="block-content">
                                          <form data-hj-masked action="" method="post">
        
                <ul class="no-bullet">
                  <li class="switch-container">
                    <div class="switch">
                      <input class="switch-input" id="update-specific-purchase" type="checkbox" name='product_updates' checked>
                      <label class="switch-paddle" for="update-specific-purchase">
                        <span class="show-for-sr">Product updates for my specific purchases</span>
                      </label>
                    </div>
        
                    <div class="switch-label">
                      Product updates for my specific purchases
                    </div>
                  </li>
        
                  <li class="switch-container">
                    <div class="switch">
                      <input class="switch-input" id="update-sam-ovens" type="checkbox" name='samovens_blog' checked>
                      <label class="switch-paddle" for="update-sam-ovens">
                        <span class="show-for-sr">Product updates from samovens.com</span>
                      </label>
                    </div>
        
                    <div class="switch-label">
                      Product updates from samovens.com
                    </div>
                  </li>
        
                  <li class="switch-container">
                    <div class="switch">
                      <input class="switch-input" id="update-consulting" type="checkbox" name='consulting_blog' checked>
                      <label class="switch-paddle" for="update-consulting">
                        <span class="show-for-sr">Product updates from consulting.com</span>
                      </label>
                    </div>
        
                    <div class="switch-label">
                      Product updates from consulting.com
                    </div>
                  </li>
        
                  <li class="switch-container">
                    <div class="switch">
                      <input class="switch-input" id="update-promotional" type="checkbox" name='promotions' checked>
                      <label class="switch-paddle" for="update-promotional">
                        <span class="show-for-sr">Promotional Emails</span>
                      </label>
                    </div>
        
                    <div class="switch-label">
                      Promotional Emails
                    </div>
                  </li>
        
        
                </ul>
        
        
        
        
                <div class="row">
                  <div class="small-12 columns">
                    <button class="button primary">Save Changes</button>
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
  </body>
</html>