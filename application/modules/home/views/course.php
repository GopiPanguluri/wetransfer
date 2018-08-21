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
    .original
    {
    height:45px;
    width:155px;
    background-color:white;
    color:green;
    border: 2px solid green;
    border-radius:5px;
    
    margin-left:2%;
    }
.original:hover
{
height:45px;
width:155px;
background-color:green;
color:white;
border: 2px solid green;
border-radius:5px;

margin-left:2%;
}




.dup
{
height:45px;
width:155px;
background-color:green;
color:white;
border: 2px solid green;
border-radius:5px;

margin-left:2%;
}
.dup:hover
{
height:45px;
width:155px;
background-color:darkgreen;
color:white;
border: 2px solid green;
border-radius:5px;

margin-left:2%;
}
</style>
  </head>
  <body class="training action-items">

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
    

    <div class="off-canvas-content" data-off-canvas-content>

      <!-- Mobile Menu -->
       <?php $this->load->view('common/header'); ?>
       <div class="row site-content-container small-collapse medium-uncollapse">
        <aside class="columns large-3 show-for-large">
          <h3><?php echo $program['program_name']; ?></h3>
          <!--div class="block week-theme-container">
            <small>Week Theme</small>
            <h5 class="week-theme">Welcome To A New World</h5>
          </div-->
          <!-- /.block week-theme-container -->
          <div class="block transparent progress-container">
            <div class="row collapse progress-details">
              <div class="columns small-6">
                  <small id="percentage"><?php echo $get_pro; ?>% Complete</small>
              </div>
              <div class="columns small-6 text-right">
                <small><a href="javascript:void(0)" class="progress-details-link">Progress Details</a></small>
              </div>
            </div>
            <div class="success progress" role="progressbar" tabindex="0" aria-valuenow="0" aria-valuemin="0" aria-valuetext="0 percent" aria-valuemax="100" id="01">
              <div class="progress-meter" style="width: <?php echo $get_pro; ?>%"></div>
            </div>	
          </div>          
          <div class="block transparent week-dropdown-container">
              <form action="">
                <?php echo form_dropdown('programs',$programs,$prgm_sel_id,'onchange="location = this.value;" id="programs" class="chosen-select week-dropdown"'); ?>
              </form>
            <!-- /. -->
          </div>
          <div class="block transparent week-dropdown-container">
              <form action="">
                <?php echo form_dropdown('week_dropdown',$chapters_ls,$chaptr_sel_id,'onchange="location = this.value;" id="week_dropdown" class="chosen-select week-dropdown"'); ?>
              </form>
            <!-- /. -->
          </div>
          <div class="block transparent week-dropdown-container">
              <form action="">
                <?php echo form_dropdown('lessions_dropdown',$lessions_ls,$less_sel_id,'onchange="location = this.value;" id="lessions_dropdown" class="chosen-select week-dropdown"'); ?>
              </form>
          </div>
          <!-- /.block week-dropdown-container-->
          <div class="block transparent lessons-list">
            <ul class="menu vertical">
                <?php //print_r(next($videos));exit; 
                if(count($videos)!==0){ foreach($videos as $rw_key => $rw_videos){ $complte=''; if($rw_videos['seen_status']=='1'){ $complte = 'completed'; } //echo $rw_videos['video_id'].$complte; exit; ?>
                    <li class='video_li_<?php echo $rw_videos['video_id'].' ';  if($pre_video['video_id']==$rw_videos['video_id']){ echo 'active'; $pre_key = $rw_key; } echo ' '.$complte; ?>'><a href='<?php echo base_url('home/products/'.$prgm_id.'/'.$chaptr_id.'/'.$lession_id.'/'.$rw_videos['video_id']); ?>'><?php echo $rw_videos['video_name']; ?></a></li>
                <?php } }else{ ?>
                    <li class='active'><a href='javascript:void(0)'>No Videos</a></li>
                <?php } ?>
                <!--li class='completed'><a href='welcome-1.html'>How this program works</a></li-->
            </ul>
          </div>
          <!-- /.block lessons-list-->
        </aside>
        <main class="columns large-9" role="main">
          <article class="block block-content-container">
            <header class="row page-header">
              <div class="column small-12 text-center hide-for-large">
                <button id='mark-complete' class="button mobile-lesson-complete ">
                  <i class="fa fa-check" aria-hidden="true"></i>
                </button>
              </div>
              <nav class="column small-12 breadcrumbs-container" aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                  <li><?php echo $program['program_name']; ?><sup>TM</sup></li>
                  <li><?php echo $chapters_ls[$chaptr_sel_id]; ?></li>
                </ul>
              </nav>
              <?php if(isset($pre_video)&&count($pre_video)!==0){ ?>
              <div class="column small-12 title-container">
                <div class="row collapse">
                  <div class="columns medium-12 large-9">
                    <h1><?php echo $pre_video['video_name']; ?></h1>
                  </div>	  
                  <?php if(isset($vid_sts)&&count($vid_sts)!==0){ ?>
                      <button onclick="cb1(<?php echo $pre_video['video_id']; ?>)" class="original" id="btn1" <?php if($vid_sts['seen_status']=='1'){ echo 'style="display:none;"'; } ?>><b>Mark Complete</b></button>
                      <button onclick="cb2(<?php echo $pre_video['video_id']; ?>)" class="dup" id="btn2" <?php if($vid_sts['seen_status']=='2'){ echo 'style="display:none;"'; } ?>><b>Lesson Completed</b></button>
                  <?php }else{ ?>
                      <button onclick="cb1(<?php echo $pre_video['video_id']; ?>)" class="original" id="btn1"><b>Mark Complete</b></button>
                      <button onclick="cb2(<?php echo $pre_video['video_id']; ?>)" class="dup" id="btn2" style="display:none;"><b>Lesson Completed</b></button>
                  <?php } ?>
                </div>
              </div>
              <?php } ?>
            </header>
            <?php if(isset($pre_video)&&count($pre_video)!==0){ ?>
                <div class="block-content">
                  <div class="module-container">
                    <div class="row small-collapse large-uncollapse video-container">
                      <div class="columns small-12 dim-the-lights-button invisible">
                        <a href="#"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Turn <span class="state">off</span> the lights</a>
                      </div>
                      <div class="columns large-12">
                        <div class="stretch-to-edge">
                          <!--iframe src="<?php $vide = explode('/',$pre_video['video_act']); //echo '<pre>'; print_r($vide);exit; ?>" width="850" height="550"></iframe-->
                          <iframe src="https://player.vimeo.com/video/<?php echo $vide[3]; ?>?title=0&byline=0&portrait=0" width="850" height="550" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>  
                        </div>
                      </div>
                    </div>    
                    <div class="row lesson-nav ">
                      <div class="columns small-6 text-left">
                            <?php $prev=$pre_key; if (array_key_exists(($prev-1), $videos)) {
                                $prev_vid = $videos[($prev-1)]; 
                                $pr_style = 'style="color: black !important;"';   
                            }else{
                                $prev_vid = array();
                                $pr_style = '';
                            }  //echo $prev.'<pre>'; print_r($prev_vid);exit;
                            ?>
                            <a class="lesson-prev" <?php echo $pr_style; ?> href="<?php if(isset($prev_vid)&&count($prev_vid)!==0){ echo base_url('home/products/'.$prgm_id.'/'.$chaptr_id.'/'.$lession_id.'/'.$prev_vid['video_id']); }else{ echo '#'; } ?>">Previous Lesson</a>
                      </div>
                      <div class="columns small-6">
                      </div>
                      <div class="columns small-6 text-right">
                            <?php if (array_key_exists(($pre_key+1), $videos)) {
                                $next_vid = $videos[($pre_key+1)]; 
                                $nt_style = 'style="color: black !important;"';    
                            }else{
                                $next_vid = array();
                                $nt_style = '';
                            }  //echo $pre_key.'<pre>'; print_r($next_vid);exit;
                            ?>
                            <a class="lesson-next" <?php echo $nt_style; ?> href="<?php if(isset($next_vid)&&count($next_vid)!==0){ echo base_url('home/products/'.$prgm_id.'/'.$chaptr_id.'/'.$lession_id.'/'.$next_vid['video_id']); }else{ echo '#'; } ?>">Next Lesson</a>
                      </div>
                    </div>
                    <!-- /.lessons-nav -->
                    <div class="row lesson-description">
                      <div class="columns large-8 lesson-section lesson-about">
                        <h2>About this lesson</h2>
                        <?php echo $pre_video['video_short_desc']; ?>
                      </div>
                      <div class="columns large-4 lesson-section lesson-resources">
                      </div>
                    </div>
                    <!-- /.lesson-description -->
                    <section class="row lesson-section video-transcript-container">
                      <header class="columns small-12">
                        <div class="row collapse">
                          <div class="columns small-8">
                            <h2>Full video transcript  / <a href="#" id="open-module-audio">MP3</a> </h2>
                          </div>
                          <div class="columns small-4 text-right section-options">
                            <a class="expand-transcript" href="#">Expand View</a>
                          </div>
                        </div>
                      </header>        
                      <div class="columns">
                        <div class="row collapse audio-container">
                          <div class="columns large-8 player">
                            <div class="player-wrap">
                              <div class="track-container">
                                <div class="player-controls">
                                  <div class="player-progress-container">
                                    <div class="player-progress-bar">
                                      <progress class="player-progress" value="0"></progress>
                                      <div class="progress-bar-fix"></div>
                                      <div class="progress-bar-thumb"></div>
                                    </div>
                                    <div class="player-progress-time">
                                      <div class="player-currenttime player-time">00:00</div> / <div class="player-duration player-time">00:00</div>
                                    </div>
                                  </div>
                                  <div class="player-container">
                                    <div class="player-buttons">
                                      <button class="player-play play"></button>
                                      <button class="player-pause pause"></button>
                                      <button class="player-speed">1x</button>
                                      <audio id="player" src="<?php echo config_item('site_base_path'); ?>media/08907a6a09f91a339c47412dc958af75.mp3"></audio>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>  
                      <div class="columns small-12">
                        <div class="video-transcript">
                          <div class="video-transcript-inner scroll-area"><?php echo $pre_video['video_full_desc']; ?></div>
                          <div class="column small-12 text-center">
                            <button class="read-more small button primary">Read More</button>
                          </div>
                        </div>
                      </div>
                    </section>
                    <!-- /.video-transcript-container -->                                          
                  </div>
                  <!-- /.module-container -->
                </div>
             <?php }else{ ?>
                No Courses Found.
             <?php } ?>
            <!-- /.block-content -->
          </article>
        </main>
        
      </div><!-- / .site-content-container -->
    </div><!-- / .off-canvas-content -->

    <?php $this->load->view('common/footer'); ?>
    <?php $this->load->view('common/js'); ?>
  <script>
    var categoryName = "Welcome!"
    var moduleName = "Welcome!"
  </script>

      <script>
      var audioPlayer = document.querySelector('audio')
      var lastAudioTime = localStorage.getItem('seek-audio-256')

      if(lastAudioTime)
        audioPlayer.currentTime = lastAudioTime;

      audioPlayer.ontimeupdate = function() {
        localStorage.setItem('seek-audio-256', audioPlayer.currentTime)
      }
    </script>
    <script>
    var segmentTracker = function(){
        if (!categoryName) var categoryName = "Welcome!";
        if (!moduleName) var moduleName = "Welcome!";
        if (!file) var file = "https://s3.amazonaws.com/consulting-training-vault/modules-audio/08907a6a09f91a339c47412dc958af75.mp3";
        var audioPlayer = document.querySelectorAll(".player-wrap");
        var currentPlayerTime = function () {
            return Math.round(
            Number(audio.currentTime)
            );
        };
        for (var i = 0; i < audioPlayer.length; i++) {
        var player = audioPlayer[i];
        var audio = player.querySelector("audio");
        var play = player.querySelector(".player-play");
        var pause = player.querySelector(".player-pause");
        var progress = player.querySelector(".player-progress");
        var speed = player.querySelector(".player-speed");
        
        play.addEventListener('click', function () {
            analytics.track("Pressed Play", {
                category: categoryName,
                module: moduleName,
                file: file,
                started_at: currentPlayerTime()
            });
        }, false);
        
        pause.addEventListener('click', function () {
            analytics.track("Pressed Pause", {
                category: categoryName,
                module: moduleName,
                file: file,
                paused_at: currentPlayerTime(),
                current_speed: audio.playbackRate
            });
        }, false);
        
        speed.addEventListener('click', function () {
            analytics.track("Pressed Speed", {
                category: categoryName,
                module: moduleName,
                file: file,
                set_at: audio.playbackRate
            });
        }, false);
        
            progress.addEventListener('click', function () {
                analytics.track("Pressed Seek", {
                    category: categoryName,
                    module: moduleName,
                    file: file,
                    jumped_to: currentPlayerTime(),
                    current_speed: audio.playbackRate
                });
            }, false);    
        }
    };
    segmentTracker();
    $(document).on('change', '#change-category', function() {
        location.href = "#/products/consulting-accelerator/" + $('#change-category option:selected').val()
    });
    $('#mark-complete, .mark-complete').on('click', function(){
        $.get('#/products/mark-complete/256', function(result){
        location.href = location.href
        });
    });
    $('#mark-incomplete, .mark-incomplete').on('click', function(){
        $.get('#/products/mark-incomplete/256', function(result){
        location.href = location.href
        });
    });
    var marketAsComplete = false
    window._wq = window._wq || [];
    _wq.push({ id: "s5e9fpyegm", onReady: function(video) {
    video.email("christophertduffee@gmail.com");
    var lastTime = localStorage.getItem('seek-video-256');
    if(lastTime)
        video.time(lastTime);
        video.bind("timechange", function(t) {
        localStorage.setItem('seek-video-256', t)
        var percentWatched = t / video.duration()
        if(percentWatched > 0.9 && !marketAsComplete) {
        marketAsComplete = true
        $.get('#/products/mark-complete/256');
        }
    });
        var videoDimLightElement = $('#video-dim-lights');
        var videoDimLightTrigger = $('.dim-the-lights-button');
        var videoContainer = $('.video-container');
    }});
    localStorage.setItem('product-last-location-1', location.href);
    function cb1(video_id)
    {
        document.getElementById("btn1").style.display="none";
        document.getElementById("btn2").style.display="block";
//        document.getElementById("0").style.display="none";
//        document.getElementById("1").style.display="block";
//        document.getElementById("01").style.display="none";
//        document.getElementById("11").style.display="block";
        $.ajax({
            url: "<?php echo base_url('home/change_status_course'); ?>",
            type: "post",
            dataType: "json",
            data: {
                video_id: video_id,
                seen_status: '1'
            },
            success: function(res){
                if(res=='1'){
//                    $('.error_msg').hide();
//                    $('.info_msg').show();
//                    $('.info_msg').html(res.info_msg);
//                    $(location).attr('href', BASE_URL + res.go_to)
                      $('.video_li_'+video_id).addClass('completed');
                      get_progress_status();
                }else{
                    alert('Something went Wrong! Please try again.');
                }
            }            
        });
    }
    function cb2(video_id)
    {
        document.getElementById("btn1").style.display="block";
        document.getElementById("btn2").style.display="none";
//        document.getElementById("0").style.display="block";
//        document.getElementById("1").style.display="none";
//        document.getElementById("01").style.display="block";
//        document.getElementById("11").style.display="none";
        $.ajax({
            url: "<?php echo base_url('home/change_status_course'); ?>",
            type: "post",
            dataType: "json",
            data: {
                video_id: video_id,
                seen_status: '2'
            },
            success: function(res) {
                if(res==1){
//                    $('.error_msg').hide();
//                    $('.info_msg').show();
//                    $('.info_msg').html(res.info_msg);
//                    $(location).attr('href', BASE_URL + res.go_to)
                      $('.video_li_'+video_id).removeClass('completed');
                      get_progress_status();
                }else{
                    alert('Something went Wrong! Please try again.');
                }
            }            
        });
    } 
    function get_progress_status(){
        $.ajax({
            url: "<?php echo base_url('home/get_progress_status'); ?>",
            type: "post",
            dataType: "json",
            data: {
                program_id: "<?php echo $program['program_id']; ?>",
                user_id: "<?php echo $_SESSION['home_user_id']; ?>",
            },
            success: function(res) {
                if(res.status=='1'){
                    //$('.error_msg').hide();
//                    $('.info_msg').show();
//                    $('.info_msg').html(res.info_msg);
//                    $(location).attr('href', BASE_URL + res.go_to)
                      $('#percentage').html(res.percentage+'% Complete');
                      $('.progress-meter').removeAttr('style');
                      $('.progress-meter').css("width",res.percentage+"%");
                }else{
                    alert('Something went Wrong! Please try again.');
                }
            }            
        });
    }
    </script>
  </body>
</html>