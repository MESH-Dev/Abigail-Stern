<?php get_header(); ?>

<!-- <?php
$videoArray = get_field('video');
$video = $videoArray['url'];
?> -->

<div id="background-panel">
	<video id="videoBG" autoplay preload loop>
		<source src="<?php bloginfo('template_url') ?>/assets/girl.mp4" type="video/mp4">
		<!--<source src="/assets/video.ogg" type="video/ogg">!-->
		Sorry Charlie, check this out in a Webkit browser instead.
	</video>
</div>

<div id="control-panel">
    <div id="mute" class="control"><img src="<?php bloginfo('template_url') ?>/assets/icons/mute.png" /></div>
    <div id="sound" class="control"><img src="<?php bloginfo('template_url') ?>/assets/icons/volumeup.png" /></div>
    <div id="pause" class="control"><img src="<?php bloginfo('template_url') ?>/assets/icons/pause.png" /></div>
    <div id="play" class="control"><img src="<?php bloginfo('template_url') ?>/assets/icons/play.png" /></div>
</div>

<?php get_footer(); ?>
