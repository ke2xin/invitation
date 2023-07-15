var Hwqi = jQuery.noConflict();
var audioElementHovertree = document.createElement('audio');
Hwqi(document).ready(function () {

    audioElementHovertree.setAttribute('src', 'http://down.hovertree.com/hovertreesound/hovertreehappy.mp3');
    audioElementHovertree.setAttribute('autoplay', 'autoplay');
    audioElementHovertree.setAttribute('loop', 'loop');
    Hwqi.get();

    audioElementHovertree.addEventListener("load", function () {
        audioElementHovertree.play();
    }, true);

    Hwqi('.playHover' + 'tree').click(function () {
        audioElementHovertree.play();
        Hwqi(this).hide();
        Hwqi('.pauseH' + 'overtree').show();
    });

    Hwqi('.pauseH' + 'overtree').click(function () {
        audioElementHovertree.pause();
        Hwqi(this).hide();
        Hwqi('.playHover' + 'tree').show();
    });
    audioElementHovertree.play();
    document.addEventListener("touchstart", _touch, false);
});

function _touch(event) {
    audioElementHovertree.play();
    document.removeEventListener("touchstart", _touch);
}

function isWeixinHovertree() {
    var ua = window.navigator.userAgent.toLowerCase();
    if (ua.match(/MicroMessenger/i) == 'micromessenger') {
        return true;
    } else {
        return false;
    }//hovertree.com
}

if (isWeixinHovertree()) {
    //bug
    setTimeout(document.getElementById("hovertreemessage").style.display = "block", 5000);
}