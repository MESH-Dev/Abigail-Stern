<?php
/*
Template Name: Portfolio
*/

?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
  <link rel='stylesheet'  href='<?php bloginfo("template_url") ?>/style.css' type='text/css' media='all' />
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css" />

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>

  <link rel='stylesheet'  href='<?php bloginfo("template_url"); ?>/assets/css/supersized.css' type='text/css' media='all' />
  <link rel='stylesheet'  href='<?php bloginfo("template_url"); ?>/assets/css/supersized.shutter.css' type='text/css' media='all' />

  <script src='<?php bloginfo("template_url") ?>/assets/js/jquery.easing.min.js'></script>
  <script src='<?php bloginfo("template_url") ?>/assets/js/supersized.3.2.7.min.js'></script>
  <script src='<?php bloginfo("template_url") ?>/assets/js/supersized.shutter.min.js'></script>

  <script type="text/javascript">

            jQuery(function($){

                $.supersized({

                    // Functionality
                    slideshow               :   1,			// Slideshow on/off
                    autoplay				:	1,			// Slideshow starts playing automatically
                    start_slide             :   1,			// Start slide (0 is random)
                    stop_loop				:	0,			// Pauses slideshow on last slide
                    random					: 	0,			// Randomize slide order (Ignores start slide)
                    slide_interval          :   3000,		// Length between transitions
                    transition              :   6, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed		:	1000,		// Speed of transition
                    new_window				:	1,			// Image links open in new window/tab
                    pause_hover             :   0,			// Pause slideshow on hover
                    keyboard_nav            :   1,			// Keyboard navigation on/off
                    performance				:	1,			// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
                    image_protect			:	1,			// Disables image dragging and right click with Javascript

                    // Size & Position
                    min_width		        :   0,			// Min width allowed (in pixels)
                    min_height		        :   0,			// Min height allowed (in pixels)
                    vertical_center         :   1,			// Vertically center background
                    horizontal_center       :   1,			// Horizontally center background
                    fit_always				:	0,			// Image will never exceed browser width or height (Ignores min. dimensions)
                    fit_portrait         	:   1,			// Portrait images will not exceed browser height
                    fit_landscape			:   0,			// Landscape images will not exceed browser width

                    // Components
                    slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
                    thumb_links				:	1,			// Individual thumb links for each slide
                    thumbnail_navigation    :   0,			// Thumbnail navigation
                    slides 					:  	[			// Slideshow Images
                                                        {image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/kazvan-1.jpg', title : 'Image Credit: Maria Kazvan', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/kazvan-1.jpg', url : 'http://www.nonsensesociety.com/2011/04/maria-kazvan/'},
                                                        {image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/kazvan-2.jpg', title : 'Image Credit: Maria Kazvan', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/kazvan-2.jpg', url : 'http://www.nonsensesociety.com/2011/04/maria-kazvan/'},
                                                        {image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/kazvan-3.jpg', title : 'Image Credit: Maria Kazvan', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/kazvan-3.jpg', url : 'http://www.nonsensesociety.com/2011/04/maria-kazvan/'},
                                                        {image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/wojno-1.jpg', title : 'Image Credit: Colin Wojno', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-1.jpg', url : 'http://www.nonsensesociety.com/2011/03/colin/'},
                                                        {image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/wojno-2.jpg', title : 'Image Credit: Colin Wojno', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-2.jpg', url : 'http://www.nonsensesociety.com/2011/03/colin/'},
                                                        {image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/wojno-3.jpg', title : 'Image Credit: Colin Wojno', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-3.jpg', url : 'http://www.nonsensesociety.com/2011/03/colin/'}
                                                ],

                    // Theme Options
                    progress_bar			:	1,			// Timer for each slide
                    mouse_scrub				:	0

                });
            });

    </script>

</head>
<body <?php body_class(); ?>>
<header>
    <div class="gutter cf">
      <div id="logo"><a href="<?php echo get_bloginfo('url') ?>"><?php echo get_bloginfo('name') ?></a></div>
      <div id="mainNav">
        <?php if(has_nav_menu('main_nav')){
            $defaults = array(
                'theme_location'  => 'main_nav',
                'menu'            => 'main_nav',
                'container'       => false,
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'menu',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => ''
            ); wp_nav_menu( $defaults );
          }else{
            echo "<p><em>main_nav</em> doesn't exist! Create it and it'll render here.</p>";
          } ?>
      </div>
    </div>

</header>

<div class="sidebar">
    <div class="category">Swim</div>
    <div class="category">Lingerie</div>
    <div class="category">Outerwear</div>
</div>

<a id="prevslide" class="load-item"></a>
<a id="nextslide" class="load-item"></a>

<?php get_footer(); ?>
