<?php get_header(); ?>

<div id="background-panel">
	<video id="videoBG" autoplay preload muted loop>
		<source src="<?php echo get_bloginfo('template_url') ?>/assets/girl.mp4" type="video/mp4">
		<!--<source src="/assets/video.ogg" type="video/ogg">!-->
		Sorry Charlie, check this out in a Webkit browser instead.
	</video>
</div>

<script>
    var myVideo = document.getElementById("videoBG");

    function playPause() {
        if (myVideo.paused)
            myVideo.play();
        else
            myVideo.pause();
    }

</script>

<script type="text/javascript">

    $(document).ready(function(){

    $("#play").hide();
    $("#pause").show();

    $("#pause").click(function() {
       $("#play").show();
       $("#pause").hide();
    });

    $("#play").click(function() {
       $("#play").hide();
       $("#pause").show();
    });

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

</script>

<div id="control-panel">
    <div id="mute" class="control"><i class="fa fa-volume-off fa-2x"></i></div>
    <div id="sound" class="control"><i class="fa fa-volume-up fa-2x"></i></div>
    <div id="pause" class="control" onclick="playPause()"><i class="fa fa-pause fa-2x"></i></div>
    <div id="play" class="control" onclick="playPause()"><i class="fa fa-play fa-2x"></i></div>
</div>
