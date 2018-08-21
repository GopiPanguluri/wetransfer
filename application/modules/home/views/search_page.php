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
        <aside class="columns large-3 _show-for-large">
          <form action="<?php echo base_url('home/search'); ?>" method="get" id="site-search">
            <div class="block transparent search-filters">
              <header class="block-header">
                <h3>Currently Searching:</h3>
              </header>
              <div class="block-content">
                <ul class="no-bullet search-filters-list">
                  <li>
                    <input type="text" required="" id="sidebar-search" name="search_term" value="<?php echo $this->input->get('search_term') ?>"/>
                  </li>
                  <li class="divider"></li>
                  <!--<li class="program accelerator">
                    <h4>Consulting Accelerator™</h4>
                    <ul class="no-bullet">
                      <li>
                        <div class="checkbox-container">
                          <input id="consulting-accelerator-modules" type="checkbox" name="filters[modules][]" value="1" checked="">
                          <label for="consulting-accelerator-modules">Modules</label>
                        </div>
                      </li>
                      <li>
                        <div class="checkbox-container">
                          <input id="consulting-accelerator-modules" type="checkbox" name="filters[modules][]" value="1" checked="">
                          <label for="consulting-accelerator-modules">Modules</label>
                        </div>
                      </li>
                    </ul>
                  </li>-->
                  <li class="divider"></li>
                  <li class="footer-buttons-container">
                    <button class="button primary">Filter Results</button>
                  </li>
                </ul>
              </div>
            </div>
          </form>
        </aside>
        <main class="columns large-9" role="main">
          <article class="block block-content-container">
            <header class="row page-header">
              <div class="column small-12 title-container">
                <h1><?php echo $items_count; ?> Search results for "<?php echo $this->input->get('search_term') ?>":</h1>
              </div>
            </header>
            <div class="block-content">
              <ul class="row no-bullet search-results-container">
              <div class="week-title"></div>
                <!--h4>Videos:</h4-->
                <?php foreach($items as $rw_items){ ?>
                    <li class="columns small-12 search-result">
                      <h2>
                        <a href="<?php echo base_url('home/products/'.str_replace(' ', '-', $rw_items['program_name']).'/'.$rw_items['chapter_id'].'/'.$rw_items['lession_id'].'/'.$rw_items['video_id']); ?>" target="_blank">
                            <?php echo $rw_items['video_name']; ?>
                        </a>
                      </h2>
                      <p>
                        <?php echo $rw_items['video_short_desc']; ?>
                        <a class="read-more" href="<?php echo base_url('home/products/'.str_replace(' ', '-', $rw_items['program_name']).'/'.$rw_items['chapter_id'].'/'.$rw_items['lession_id'].'/'.$rw_items['video_id']); ?>" target="_blank">
                          Read More
                        </a>
                      </p>
                    </li>
                <?php } ?>
                <!--hr/>
                <h4>Chapters:</h4-->
                <?php foreach($items_chapt as $rw_items_chapt){ ?>
                    <li class="columns small-12 search-result">
                      <h2>
                        <a href="<?php echo base_url('home/products/'.str_replace(' ', '-', $rw_items_chapt['program_name']).'/'.$rw_items_chapt['chapter_id']); ?>" target="_blank">
                            <?php echo $rw_items_chapt['chapter_name'].' - '.$rw_items_chapt['program_name']; ?>
                        </a>
                      </h2>
                      <p>
                        <a class="read-more" href="<?php echo base_url('home/products/'.str_replace(' ', '-', $rw_items_chapt['program_name']).'/'.$rw_items_chapt['chapter_id']); ?>" target="_blank">
                          Read More
                        </a>
                      </p>
                    </li>
                <?php } ?>
                <!--hr/>
                <h4>Lessions:</h4-->
                <?php foreach($items_less as $rw_items_less){ ?>
                    <li class="columns small-12 search-result">
                      <h2>
                        <a href="<?php echo base_url('home/products/'.str_replace(' ', '-', $rw_items_less['program_name']).'/'.$rw_items_less['chapter_id'].'/'.$rw_items_less['lession_id']); ?>" target="_blank">
                            <?php echo $rw_items_less['lession_name'].' - '.$rw_items_less['chapter_name']; ?>
                        </a>
                      </h2>
                      <p>
                        <a class="read-more" href="<?php echo base_url('home/products/'.str_replace(' ', '-', $rw_items_less['program_name']).'/'.$rw_items_less['chapter_id'].'/'.$rw_items_less['lession_id']); ?>" target="_blank">
                          Read More
                        </a>
                      </p>
                    </li>
                <?php } ?>
              </ul>
              <!-- /.search-results-container -->
            </div>
            <!-- /.block-content -->
          </article>
        </main>
      </div><!-- / .site-content-container -->
      <!-- Billing Issue Reveal -->
      
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