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
        </aside>
        <main class="columns large-9" role="main">
            <article class="block block-content-container">
                <header class="row page-header">

                    <div class="column small-12 title-container">
                        <div class="row collapse">
                            <div class="columns">
                                <h1>Refer Your Friends And Earn Money!</h1>
                            </div>
                        </div>
                    </div>
                </header>


                <div class="block-content">
                    <div class="module-container">
                        <div class="row lesson-description">
                            <div class="columns large-8">
                                <p>Refer a friend and BOTH of you win $500!</p>
                                <p>Here's how it works:</p>
                                <ol>
                                    <li>Refer a friend by entering their name, email and a message below.</li>
                                    <li>Your friend will receive an email inviting them to join with a
                                        $500 discount.
                                    </li>
                                    <li>If your friend purchases you'll earn $500 too.</li>
                                </ol>
                                <p>Refer-a-friend used to be capped to 3 invites only but now it's UNLIMITED! Refer as many people as you want! Some students are making $500-$1,000 /day just by referring friends.</p>
                            </div>
                            <aside class="columns large-3 help-aside">
                                <div class="help-video-thumbnail">
                                    <script src="https://fast.wistia.com/embed/medias/smmxc85nwo.jsonp" async=""></script>
                                    <script src="https://fast.wistia.com/assets/external/E-v1.js" async=""></script>
                                    <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                                        <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
                                            <span class="wistia_embed wistia_async_smmxc85nwo popover=true popoverAnimateThumbnail=true videoFoam=true" style="display:inline-block;height:100%;width:100%">&nbsp;
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- / .help-video-thumbnail -->
                                <p>Watch this tutorial video to see how it works.</p>
                            </aside>
                        </div>
                        <!-- /.lesson-description -->
                        <div class="row">
                            <div class="columns lesson-section referral-contaienr">
                                <h2>Invite a friend</h2>
                                <div class="alert alert-warning">
                                    <p></p>
                                </div>
                                <form action="#" method="POST" id="referralForm" data-abide="" novalidate="">
                                    <fieldset>
                                            <div class="row">
                                                <div class="columns large-10">
                                                    <div class="row">
                                                        <div class="columns medium-2 large-3">
                                                            <label for="first-name">First name</label>
                                                        </div>
                                                        <div class="columns medium-8 end" id="input-name">
                                                            <input name="first_name" id="first-name" class="referral-first-name" type="text" placeholder="Friend's first name" autofocus="" required=""/>
                                                            <div class="form-error"> Please enter a valid name </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="columns medium-2 large-3">
                                                            <label for="email">Email address</label>
                                                        </div>
                                                        <div class="columns medium-8 end" id="input-email">
                                                            <input name="email" id="email" class="refferal-email" type="email" placeholder="Friend's email address" pattern="email" data-hj-masked="" required=""/>
                                                            <div class="form-error"> Please provide a valid email address </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="columns medium-2 large-3">
                                                            <label for="email-body">Message</label>
                                                        </div>
                                                        <div class="columns medium-8 end" id="input-body">
                                                            <div class="email-container">
                                                                <div class="email-uneditable-section">
                                                                    <p>Hey <span id="email-first-name">[Name]</span>,</p>
                                                                    ----------------------------------------------------------------------------------
                                                                </div>
                                                                <textarea name="body" id="email-body" class="email-body" rows="8" cols="80">I recently joined a training program that helped me to start a consulting business and improve my life for the better.&#013;&#010;&#013;&#010; If you join using my invitation you will receive a massive $500 discount.&#013;&#010;&#013;&#010;This program changed my life and I know it can do the same for you.</textarea>
                                                                <div class="form-error">
                                                                    Please provide a valid message
                                                                </div>
                                                                <div class="email-uneditable-section">
                                                                    ----------------------------------------------------------------------------------
                                                                    <p>Click the button below to accept my invitation and learn more.</p>
                                                                </div>
                                                            </div>
                                                            <div class="form-error">
                                                                Please provide a valid message
                                                            </div>
                                                            <textarea class="hide" name="name" rows="8" cols="80"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="columns medium-2 large-3">&nbsp;</div>
                                                        <div class="column medium-8 end">
                                                            <button class="button small success send-referral"> Refer Friend #1 </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- / .columns .xlarge-10 -->
                                            </div>
                                            <!-- /.row -->
                                        </fieldset>
                                    </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.module-container -->


                </div>
                <!-- /.block-content -->
            </article>
        </main>


        <div class="reveal" id="referralReveal" data-reveal>
            <h1>Please Confirm</h1>
            <p>Are you sure you want to refer this friend?<br>
            If this friend doesn't purchase within 7 days the invite will expire.<br>
            Please check their name and email address are correct.</p>

            <div id="referral-details">
                <ul class="no-bullet">
                    <li>Name: <span class="name"></span></li>
                    <li>Email: <span class="email"></span></li>
                </ul>

                <div id="reveal-ajax-error" style="color: red; border: 1px solid red; padding: 20px;" class="hide">
                    <i class="fa fa-warning"></i>
                    <span id="reveal-ajax-error-text"></span>
                </div>
            </div>

            <div class="footer-buttons-container text-center">
                <button class="button primary" type="button" id="referral-reveal-confirm">Confirm and Send</button>
                <button class="button alert" data-close aria-label="Close modal" type="button">Cancel</button>
            </div>
            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="reveal" id="referralEmailSentReveal" data-reveal>
            <h1>Boom! Your invitation is sent!</h1>
            <p id="referralEmailSentRevealText">
                [Name] will receive an email invitation to join with a $500 discount and
                will have 7 days to purchase before the invitation expires. We
                recommend talking to [Name] to educate him/her about the program and how it can help them. Sometimes
                people need some help getting over the line.
            </p>

            <div class="footer-buttons-container text-center">
                <a href="#/referral" class="button success">Refer Another Friend</a>
                <a href="#/referral/your-earnings" class="button primary">View Tracking & Earnings</a>
            </div>
            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

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