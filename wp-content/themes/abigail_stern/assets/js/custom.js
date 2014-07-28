jQuery(document).ready(function($){

    //Homepage

    var myVideo = document.getElementById("videoBG");

    function playPause() {
        if (myVideo.paused)
            myVideo.play();
        else
            myVideo.pause();
    }

    $('#pause').click(function() {
        myVideo.pause();
        $("#play").show();
        $("#pause").hide();
    });

    $('#play').click(function() {
        myVideo.play();
        $("#play").hide();
        $("#pause").show();
    });

    $("#play").hide();
    $("#pause").show();


    $("#mute").show();
    $("#sound").hide();

    $("#mute").click(function() {
        $("#mute").hide();
        $("#sound").show();
        $("video").muted = true;
    });

    $("#sound").click(function() {
        $("#mute").show();
        $("#sound").hide();
        $("video").muted = false;
    });

});
