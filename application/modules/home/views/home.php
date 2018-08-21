<!doctype html>
<html class="no-js" lang="en">
  <head>
  <?php $this->load->view('common/css'); ?>

  <style>
  .padd-frame,.padd-div {
    padding-top:2%;
  }
  sup{
    vertical-align: top;
    font-size: 9px;
    top: 0.9em;
  }


  .themeclassblack
  {
      margin-left: -56%;
      width: 200px;
      color: white;
      background-color: black;
      border: 1;
      height: 39px;
  }

  .themeclassblack:focus
  {
      margin-left: -56%;
      width: 200px;
      color: white;
      background-color: black;
      border: 1;
  }
    .themeclassred
  {
      margin-left: -56%;
      width: 200px;
      color: white;
      background-color: red;
      border: 1;
  }

  .themeclassred:focus
  {
      margin-left: -56%;
      width: 200px;
      color: white;
      background-color: red;
      border: 1;
  }
  .mobiletheme
  {
    font-size: 1rem;
    color: #fefefe;
    border: none;
    border-bottom: 1px solid #444!important;
    background: #000;
    height: 55px;
   
  }
   .mobiletheme:focus
  {
    font-size: 1rem;
    color: #fefefe;
    border: none;
    border-bottom: 1px solid #444!important;
    background: #000;
    height: 55px;

  }
  
 @media print, screen and (min-width: 64em) {
    .training-programs .training-program .program-brand {
        height: 210px;
    }
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
        <main class="columns small-12 padd-frame" role="main">
          <div class="outter-page-title text-center">
            <h1>Your Training Programs</h1>
          </div>
          <div class="row padd-div" data-equalizer data-equalize-on="medium">
             <?php foreach($programs as $rw_programs){ ?>
                <section class="columns medium-10 medium-push-1 large-4 large-push-0 training-program accelerator active text-center">
                  <div class="block" data-equalizer-watch>
                    <header class="block-header">
                      <div class="program-brand"><?php $prg_id_vw = $rw_programs['program_id']; ?>
                        <!-- video popup code starts here -->
                        <?php $image_ext = explode(".",$rw_programs['prg_img_vid_name']); $image_ext = end($image_ext);
                            if($rw_programs['prg_img_or_vid']=='1'){ ?>
                            <img src="<?php echo prg_img_vid_name($rw_programs['prg_img_vid_name']); ?>" alt="Program"/>
                        <?php }else{ ?>
                            <video id="myBtn<?php echo $prg_id_vw; ?>" style="margin-top: -20px;height: 210px;margin-left: -22px;" autoplay>
                              <source src="<?php echo prg_img_vid_name($rw_programs['prg_img_vid_name']); ?>" type="video/<?php echo $image_ext; ?>"/>
                            </video>
                        <?php } ?>
                        <div id="myModal<?php echo $prg_id_vw; ?>" class="modal<?php echo $prg_id_vw; ?>">
                            <div class="modal-content ctn">
                                <div class="modal-header modal-headerq">
                                  <img style="width: 6%; margin-left: 94%;" class="close close<?php echo $prg_id_vw; ?>" float="middle" src="<?php echo config_item('site_base_path'); ?>images/close-image.png"/>
                                </div>      
                                <?php if($rw_programs['prg_img_or_vid']=='1'){ ?>
                                    <img src="<?php echo prg_img_vid_name($rw_programs['prg_img_vid_name']); ?>" alt="Program"/>
                                <?php }else{ ?>
                                    <video controls="" style="width: 100%">
                                      <source src="<?php echo prg_img_vid_name($rw_programs['prg_img_vid_name']); ?>" type="video/<?php echo $image_ext; ?>"/>
                                    </video>
                                <?php } ?>
                                
                            </div>
                        </div>
                        <!-- video popup code ends here -->
                      </div>
                      <h2><?php echo $rw_programs['program_name']; ?><sup>TM</sup></h2>
                    </header>
                    <div class="block-content">
                      <?php if($rw_programs['get_program_sts']=='0'){ ?>
                          <div class="row program-status">
                            <div class="columns small-8 small-centered progress-container">
                              <div class="progress-details"> <?php echo $rw_programs['get_pro']; ?>% Complete</div>
                              <div class="success progress" role="progressbar" tabindex="0" aria-valuenow="31" aria-valuemin="0" aria-valuetext="31 percent" aria-valuemax="100">
                                <div class="progress-meter" style="width: <?php echo $rw_programs['get_pro']; ?>%"></div>
                              </div>
                            </div>
                          </div>
                      <?php }else{ ?>
                          <div class="program-status">
                             <i class='fa fa-lock'></i>
                          </div>
                      <?php } ?>
                      <div class="program-description">
                        <p style="height: 50px;min-height: 78px;"><?php echo $rw_programs['program_description']; ?></p>
                      </div>
                      <?php if($rw_programs['get_program_sts']=='0'){ ?>
                        <a href="<?php $string1 = str_replace(' ', '-', $rw_programs['program_name']); echo base_url('home/products/'.$string1); ?>" class="button primary continue-link" data-id='1'>Continue Lesson</a>
                      <?php }else{ ?>
                        <a href="#" class="button success" data-id='1'>Coming Soon</a>
                      <?php } ?>
                    </div>
                  </div>
                </section>
              <?php } ?>                  
          </div>
          <!-- / .training-programs -->
        </main>
      </div><!-- / .site-content-container -->
      <!-- Billing Issue Reveal -->
      <div class="reveal billing issue" id="billing-issue" data-reveal>
          <div class="row reveal-inner"> 
            <header class="reveal-header columns small-12">
              <h1 class="text-center">Oops!<br>We Had Trouble Billing Your Card�</h1>
            </header>
            <div class="reveal-content">
              <div class="columns small-12">
                <div class="page-icon">
                  <div class="image-icon billing-issue"></div>
                </div>
                <p>I�m sorry we had trouble charging your card on file for your latest payment and your account has been suspended until this overdue balance is paid.</p>
                <p>Please click the �Fix Billing� button below to update your card on file and get your account back up and running again. </p>
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
              <h1 class="text-center">Yikes!<br>Your Account Has Been Suspended�</h1>
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
    <script type="text/javascript">
        <?php /* foreach($programs as $rw_programs){ ?>
        <?php $prg_id_vw = $rw_programs['program_id']; ?>
                var modal<?php echo $prg_id_vw; ?> = document.getElementById('myModal<?php echo $prg_id_vw; ?>');
                var btn<?php echo $prg_id_vw; ?> = document.getElementById("myBtn<?php echo $prg_id_vw; ?>");
                var span<?php echo $prg_id_vw; ?> = document.getElementsByClassName("close<?php echo $prg_id_vw; ?>")[0];
                btn<?php echo $prg_id_vw; ?>.onclick = function() 
                {
                    modal<?php echo $prg_id_vw; ?>.style.display = "block";
                }
                span<?php echo $prg_id_vw; ?>.onclick = function() 
                {
                    modal<?php echo $prg_id_vw; ?>.style.display = "none";
                    $('video').trigger('pause');
                }
                window.onclick = function(event) 
                {
                    if (event.target == modal<?php echo $prg_id_vw; ?>) 
                    {
                        modal<?php echo $prg_id_vw; ?>.style.display = "none";
                        $('video').trigger('pause');
                    }
                }
        <?php } */ ?>
    </script>
</body>
</html>