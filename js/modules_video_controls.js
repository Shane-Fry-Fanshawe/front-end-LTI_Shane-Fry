// Buttons
var video = document.querySelector("video"); //Make the video have the class of video

var playButton = document.querySelector('.play-pause');
var restartButton = document.querySelector('.restart-button');
var fullscreenButton = document.querySelector('.fullscreen-button');
var volumeslider =document.querySelector("#volumeslider");
var volumeButton = document.querySelector(".volume-button");
var progressBar = document.querySelector("#progress-bar");




// timer

video.ontimeupdate = function() {timer()};

function timer() {
  var time = Math.round(video.currentTime);
  var duration = Math.round(video.duration);
    document.getElementById("video-timer").innerHTML = "0:" + time + "/" + "0:" + duration ; //As of now this works but when it is over 1 minute, may break! Come back to this*

    //progress bar

    var progress = Math.round(time / duration * 100);

    progressBar.value = progress;

}



function playFunction() { // Declare a function

    if (video.paused == true) {
    // Play the video
    video.play();

    // Update the button to show the pause image
    playButton.src = "images/pause.svg";
  } else {
    // Pause the video
    video.pause();

    // Update the image to show the play image
    playButton.src = "images/play.svg";
  }
}


function restartFunction() {
    video.currentTime = 0;
    video.play();
    playButton.src = "images/pause.svg"; //So it allows you to pause since I have it set to an autoplay
}


function fullscreenFunction() {
    if (video.requestFullscreen) {
    video.requestFullscreen();
  } else if (video.mozRequestFullScreen) {
    video.mozRequestFullScreen(); // Firefox
  } else if (video.webkitRequestFullscreen) {
    video.webkitRequestFullscreen(); // Chrome and Safari
  }
}


function setvolume(){

  var volume_value = video.volume;

	    video.volume = volumeslider.value / 100;
    //  console.log(volume_value);

      //If the volume is 0, it shows the mute button
      if (volume_value === 0) {
      volumeButton.src = "images/mute.svg";
    } else if (volume_value => 0.01) {
      video.muted = false; //This will counter act the muting feature
      volumeButton.src = "images/volume.svg";
      }

    }

    function muteFunction() {
      if(video.muted){
      video.muted = false;
      volumeButton.src = "images/volume.svg";
    } else {
      video.muted = true;
      volumeButton.src = "images/mute.svg";
    }

    }







  //Event Listeners
  playButton.addEventListener("click", playFunction, false);
  restartButton.addEventListener("click", restartFunction, false);
  fullscreenButton.addEventListener("click", fullscreenFunction, false);
  volumeslider.addEventListener("click", setvolume, false);
  volumeButton.addEventListener("click", muteFunction, false);
