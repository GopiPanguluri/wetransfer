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
              <li class=""><a href="<?php echo base_url('home/progress'); ?>">Your Level of Play</a></li>
              <li class="active"><a href="<?php echo base_url('home/progress_product'); ?>">Your Program Progress</a></li>
            </ul>
          </div>
        </aside>
        <main class="columns large-9" role="main">
          <article class="block block-content-container no-padding">
            <div class="row collapse">
              <div class="columns large-4 level-progress-container">
                <div class="block-content">
                  <header class="level-progress-header">
                    <h2><?php echo $programs['0']['program_name']; ?></h2>
                  </header>
                  <div class="circle-progress-container">
                    <div class="level-circle-progress" data-progress="<?php echo $programs['0']['get_pro']; ?>">
                      <div class="progress-value-container">
                        <div class="progress-value"></div>
                        <div class="progress-complete-text">Completed</div>
                      </div>
                    </div>
                  </div>
                  <!-- / .circle-progress-container -->
                  <div class="block transparent level-list-container">
                    <ul class="no-bullet level-list">
                        <?php foreach($chapters as $rw_chapters){ ?>
                            <li class="current"><?php echo $rw_chapters['chapter_name']; ?></li>
                        <?php } ?>
                    </ul>
                  </div>
                </div>
                <!-- / .block-content -->
              </div>
              <!-- / .level-progress-container -->
              <div class="columns large-8 program-details">
                <header class="page-header block-inner-padding">
                  <div class="row title-container">
                    <div class="columns medium-12">
                      <div class="page-icon">
                        <div class="image-icon level-accelerator"></div>
                      </div>
                      <h1>Welcome To A New World</h1>
                      <p>This part of the training program shows you how everything works, what to expect, how to get the most from your experience and more.</p>
                      <div class="footer-buttons-container">
                        <a href="<?php echo base_url('home/products/'.str_replace(" ", "-", $programs['0']['program_name'])); ?>" class="button primary">Resume Training Module</a>
                      </div>
                    </div>
                  </div>
                </header>
              </div>
              <!-- / .program-details -->
            </div>
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
    <script>
        $(function() {
          $('.progress-value-special').text('Level ' + 1)
        })
    </script>
  </body>
</html>