<section class="site-search-overlay">
  <button class="search-close show-for-large">&#10005;</button>
  <div class="search-container">
    <header class="search-header">
      <div class="page-icon show-for-large">
        <div class="image-icon"></div>
      </div>
      <h2>Search the WE Tranformation </h2>
    </header>
    <div class="block search-form-container">
      <form action="<?php echo base_url('home/search'); ?>" method="get" id="site-search">
        <input type="text" id="search_term" required="" name="search_term" value="" placeholder="Search keywords..." autofocus=""/>
        <ul class="no-bullet search-filters"> 
          <?php $pre_programs = $this->config->item('pre_programs');
          $usr_programs = $this->config->item('usr_prgms'); //echo '<pre>'; print_r($usr_programs);exit;
           foreach($pre_programs as $rw_pre_programs){ ?>
              <li class="form-field">
                <div class="checkbox-container">
                  <input type="checkbox" id="consulting-accelerator" name='products[]' value='1' <?php if(in_array($rw_pre_programs['program_id'], $usr_programs)){ echo 'checked=""'; }else{ echo 'disabled=""'; } ?>/>
                  <label class="" for="consulting-accelerator"><?php echo $rw_pre_programs['program_name']; ?><sup>TM</sup></label>
                </div>
              </li>
          <?php } ?>
          <!--li class="form-field">
            <div class="checkbox-container">
              <input type="checkbox" id="quantum-mastermind" name='products[]' value='3' disabled=""/>
              <label class="" for="quantum-mastermind">WE Retreats<sup>TM</sup></label>
            </div>
          </li-->
        </ul>
        <button class="button primary hide-for-large">Show Results</button>
      </form>
    </div>
    <!-- /.search-form-container -->
  </div>
</section>
<div class="reveal program" id="program-type-for-calls" data-reveal>
  <div class="row reveal-inner">
    <header class="reveal-header columns small-12">
      <div class="sub-heading">Weekly Q&A Calls</div>
      <h1 class="text-center">Please select the program</h1>
    </header>
    <div class="reveal-content">
      <div class="columns small-12">
        <ul class="no-bullet text-center programs-list">
          <?php foreach($pre_programs as $rw_pre_programs){ ?>
              <li>
                <a <?php if(in_array($rw_pre_programs['program_id'], $usr_programs)){ echo 'target="_blank" href="https://zoom.us/j/134971836?pwd=&status=success"'; }else{ echo 'href="#"'; } ?>><?php echo $rw_pre_programs['program_name']; ?><sup>TM</sup><?php if(in_array($rw_pre_programs['program_id'], $usr_programs)){}else{ echo '<i class="fa fa-lock"></i>'; } ?></a>
              </li>
          <?php } ?>
          <!--li>
            <a target="_blank" href="https://zoom.us/j/134971836?pwd=&status=success">WE Retreats<sup>TM</sup></a>
          </li-->              
        </ul>
      </div>
    </div>
    <!-- /.reveal-content -->
  </div>
  <!-- /.reveal-inner -->
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&#10005;</span>
  </button>
</div>
<div class="reveal program" id="how-to-get-help" data-reveal>
  <div class="row reveal-inner">
    <header class="reveal-header columns small-12">
      <div class="sub-heading">How To Get Help</div>
    </header>
    <div class="reveal-content">
      <div class="columns small-12">
        <p><b>Help Center:</b> If you have any issues that cannot be answered inside of the Facebook group write us an email here and we'll get to you as soon as we can.       email : <a href="mailto:mycreditmasterysolutions@gmail.com">mycreditmasterysolutions@gmail.com</a></p>
      </div>
    </div>
    <!-- /.reveal-content -->
  </div>
  <!-- /.reveal-inner -->
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&#10005;</span>
  </button>
</div>
<div class="reveal program" id="program-type-for-community" data-reveal>
  <div class="row reveal-inner">
    <header class="reveal-header columns small-12">
      <div class="sub-heading">Facebook Group</div>
      <h1 class="text-center">Please select the program</h1>
    </header>
    <div class="reveal-content">
      <div class="columns small-12">
        <ul class="no-bullet text-center programs-list">
          <?php foreach($pre_programs as $rw_pre_programs){ ?>
              <li>
                <a <?php if(in_array($rw_pre_programs['program_id'], $usr_programs)){ echo 'target="_blank" href="https://www.facebook.com/groups/1667149670243948"'; }else{ echo 'href="#"'; } ?>><?php echo $rw_pre_programs['program_name']; ?><sup>TM<?php if(in_array($rw_pre_programs['program_id'], $usr_programs)){}else{ echo '<i class="fa fa-lock"></i>'; } ?></sup></a>
              </li>
          <?php } ?>
          
        </ul>
      </div>
    </div>
    <!-- /.reveal-content -->
  </div>
  <!-- /.reveal-inner -->
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&#10005;</span>
  </button>
</div>