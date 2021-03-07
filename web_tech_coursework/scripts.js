
var vid, playbtn, slider;

function initializePlayer(){
    vid = document.getElementById("bunny");
    playbtn = document.getElementById("playpausebtn");
    slider = document.getElementById("slider");

        // event listeners
    playbtn.addEventListener("click", playPause, false);
    slider.addEventListener("change", vidSlide, false);
    vid.addEventListener("timeupdate", sliderTimeUpdate, false);

}
window.onload = initializePlayer;


    //function to update the location of the slider
 function sliderTimeUpdate () {
    var newTime = vid.currentTime * (100/vid.duration);
    slider.value = newTime;
}

    //function that allows you to slide the slider thumb
function vidSlide () {
    var goTo = vid.duration * (slider.value/100);
    vid.currentTime = goTo;
}

    //playing and pausing the video
function playPause () {
    if(vid.paused) {
        vid.play();
        playbtn.innerHTML = "Pause";
        
}   else {
        vid.pause();
        playbtn.innerHTML = "Play";
}
}


// ajax
/*

function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajax").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "card.txt", true);
  xhttp.send();
}

/////////////////////////
*/