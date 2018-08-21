<div data-sticky-container="">
    <div class="top-bar hide-for-large mobile-header"  data-sticky="" data-sticky-on="small" data-margin-top="0">
        <div class="row">
          <div class="small-2 columns">
            <button class="menu-icon" type="button" data-open="offCanvas" aria-expanded="false" aria-controls="offCanvasLeft"></button>
          </div>
          <div class="small-8 columns text-center">
            <div class="title-bar-title">
              <a class="brand" href="<?php echo base_url(''); ?>"><img src="<?php echo config_item('site_base_path'); ?>images/consulting.com_logo@2x.png" alt=""/></a>
            </div>
          </div>
          <div class="small-2 columns text-right search-buttons-container">
            <a class="search-button" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
            <a class="search-close" href="#">&times;</a>
          </div>
        </div>
    </div>
</div>
<div data-sticky-container="">
  <div class="top-bar show-for-large global-header" data-sticky="" data-margin-top="0">
      <div class="top-bar-title">
        <a class="brand" href="<?php echo base_url(''); ?>"><img src="<?php echo config_item('site_base_path'); ?>images/consulting.com_logo@2x.png" alt="Consulting.com"></a>
      </div>
      <div class="top-bar-right">
          <?php //if(!isset($_SESSION['home_user_theme'])||(isset($_SESSION['home_user_theme'])&&$_SESSION['home_user_theme']=='')){ $_SESSION['home_user_theme']='black'; }  $all_colors = array(''=>'Select Theme','red'=>'red','blue'=>'blue','green'=>'green','black'=>'black','orange'=>'orange','aqua'=>'aqua','indigo'=>'indigo','violet'=>'violet'); ?>
          <?php //echo form_dropdown('navyOp',$all_colors,$_SESSION['home_user_theme'],'onchange="test(this.value);" class="themeclassblack" id="selectid2"'); ?>
          <!--select name="navyOp" onchange="test(this.value);" class="themeclassblack" id="selectid2">
              <option>Select Theme</option>
              <option <?php //if(isset($_SESSION['home_user_theme'])&&$_SESSION['home_user_theme']=='red'){ 'selected="selected"'; } ?> value="red" style="background-color: red">red</option>
              <option <?php //if(isset($_SESSION['home_user_theme'])&&$_SESSION['home_user_theme']=='blue'){ 'selected="selected"'; } ?> value="blue" style="background-color: blue">blue</option>
              <option <?php //if(isset($_SESSION['home_user_theme'])&&$_SESSION['home_user_theme']=='green'){ 'selected="selected"'; } ?> value="green" style="background-color: green">green</option>
              <option <?php //if(isset($_SESSION['home_user_theme'])&&$_SESSION['home_user_theme']=='black'){ 'selected="selected"'; } ?> value="black" style="background-color: black">black</option>
              <option <?php //if(isset($_SESSION['home_user_theme'])&&$_SESSION['home_user_theme']=='orange'){ 'selected="selected"'; } ?> value="orange" style="background-color: orange">orange</option>
              <option <?php //if(isset($_SESSION['home_user_theme'])&&$_SESSION['home_user_theme']=='aqua'){ 'selected="selected"'; } ?> value="aqua" style="background-color: aqua">aqua</option>
              <option <?php //if(isset($_SESSION['home_user_theme'])&&$_SESSION['home_user_theme']=='indigo'){ 'selected="selected"'; } ?> value="indigo" style="background-color: indigo">indigo</option>
              <option <?php //if(isset($_SESSION['home_user_theme'])&&$_SESSION['home_user_theme']=='violet'){ 'selected="selected"'; } ?> value="violet" style="background-color: violet">violet</option>
          </select-->
        <ul class="dropdown menu" data-dropdown-menu="" role="navigation" style="margin-top: 0px !important;">
            <li><a href="<?php echo base_url('home/refer_a_friend'); ?>"><i class="fa fa-user-plus" aria-hidden="true"></i> Refer a friend </a></li>
            <li>
                <a href="#"><img src="<?php echo profile_img($_SESSION['home_image']); ?>" style="border-radius: 14%;width: 100%;max-width: 25px;height: auto;"/> Hi <?php echo character_limiter($this->session->userdata('home_name').' '.$this->session->userdata('home_last_name'),10);?>!</a>
                <ul class="menu vertical">
                  <li><a href="<?php echo base_url('home'); ?>"><i class="fa fa-lock" aria-hidden="true"></i> Your Products</a></li>
                  <li><a href="<?php echo base_url('home/progress'); ?>"><i class="fa fa-battery-half" aria-hidden="true"></i>Your Level of Play</a></li>
                  <li><a href="<?php echo base_url('home/profile'); ?>"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Your Profile</a></li>
                  <!--li><a href="<?php //echo base_url('home/refer_a_friend'); ?>"><i class="fa fa-dollar" aria-hidden="true"></i> Refer a Friend</a></li-->
                  <li><a href="<?php echo base_url('admin/login/home_logout'); ?>"><i class="fa fa-lock" aria-hidden="true"></i> Logout</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-home" aria-hidden="true"></i> Community</a>
                <ul class="menu vertical">
                  <li><a href="#" data-open="program-type-for-calls"><i class="fa fa-microphone" aria-hidden="true"></i> Weekly Q&amp;A Calls</a></li>
                  <li><a href="#" data-open="program-type-for-community"><i class="fa fa-facebook-square" aria-hidden="true"></i>
                   Facebook Groups</a></li>
                  <!--<li><a href="#"><i class="fa fa-bell" aria-hidden="true"></i>
                   Ring "The Bell"</a></li>-->
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-support" aria-hidden="true"></i> Help</a>
                <ul class="menu vertical">
                  <li><a href="#" data-open="how-to-get-help"><i class="fa fa-question-circle" aria-hidden="true"></i>How to Get Help</a></li>
                  <!--<li><a href="#"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Suggest an Idea</a></li>-->
                </ul>
            </li>
            <li>
                <a class="search-button" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
            </li>
        </ul>
      </div>
  </div>
</div>