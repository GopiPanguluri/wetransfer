  // Audio Player
  (function() {
  var audioPlayer = document.querySelectorAll(".player-wrap");
  var speeds = [ 1, 1.5, 2 ]

  for(i=0;i<audioPlayer.length;i++) {
    var player = audioPlayer[i];
    var audio = player.querySelector("audio");
    var play = player.querySelector(".player-play");
    var pause = player.querySelector(".player-pause");
    var rewind = player.querySelector(".player-rewind");
    var forward = player.querySelector(".player-forward");
    var progress = player.querySelector(".player-progress");
    var speed = player.querySelector(".player-speed");
    var mute = player.querySelector(".player-mute");
    var currentTime = player.querySelector(".player-currenttime");
    var duration = player.querySelector(".player-duration");
    var progressthumb = player.querySelector(".progress-bar-thumb");
    var progressbarfix = player.querySelector(".progress-bar-fix");
    var curCalc = 0;
    var durCalc = 0;
    var currentSpeedIdx = 0;

    var toHHMMSS = function ( totalsecs ) {
        var sec_num = parseInt(totalsecs, 10); // don't forget the second param
        var hours   = 0; // Math.floor(sec_num / 3600);
        var minutes = Math.floor(sec_num / 60);
        var seconds = sec_num - (minutes * 60);

        if (hours   < 10) {hours   = "0"+hours; }
        if (minutes < 10) {minutes = "0"+minutes;}
        if (seconds < 10) {seconds = "0"+seconds;}

        if (hours == 0) {
          var time = minutes+':'+seconds;
        } else {
          var time = hours+':'+minutes+':'+seconds;
        }
        return time;
    }

    audio.addEventListener('loadedmetadata', function(){
      progress.setAttribute('max', Math.floor(audio.duration));
      duration.textContent  = toHHMMSS(audio.duration);
    });

    audio.addEventListener('timeupdate', function(){
      progress.setAttribute('value', audio.currentTime);
      currentTime.textContent  = toHHMMSS(audio.currentTime);
      durCalc = (audio.duration / 100);
      curCalc = (audio.currentTime / durCalc);
      progressthumb.style.left = (curCalc + "%");
      progressbarfix.style.width = (curCalc + "%");

      if(audio.currentTime >= audio.duration){
        pause.style.display = 'none';
        play.style.display = 'block';
      }
    });

    play.addEventListener('click', function(){
      this.style.display = 'none';
      pause.style.display = 'block';
      pause.focus();
      audio.play();
    }, false);

    pause.addEventListener('click', function(){
      this.style.display = 'none';
      play.style.display = 'block';
      play.focus();
      audio.pause();
    }, false);


    progress.addEventListener('click', function(e){
      audio.currentTime = Math.floor(audio.duration) * (e.offsetX / e.target.offsetWidth);
    }, false);

    speed.addEventListener('click', function(){
      currentSpeedIdx = currentSpeedIdx + 1 < speeds.length ? currentSpeedIdx + 1 : 0;
      audio.playbackRate = speeds[currentSpeedIdx];
      this.textContent  = speeds[currentSpeedIdx] + 'x';
      return true;
    }, false);

  }
  })(this);
