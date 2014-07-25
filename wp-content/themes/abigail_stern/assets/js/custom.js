// Project Slider

$image1 = $(".project-thumbnail-1").children().attr('src');
$image2 = $(".project-thumbnail-2").children().attr('src');
$image3 = $(".project-thumbnail-3").children().attr('src');
$image4 = $(".project-thumbnail-4").children().attr('src');

jQuery(function($){

    $.supersized({

        // Functionality
        slideshow               :   1,			// Slideshow on/off
        autoplay				:	0,			// Slideshow starts playing automatically
        start_slide             :   1,			// Start slide (0 is random)
        stop_loop				:	0,			// Pauses slideshow on last slide
        random					: 	0,			// Randomize slide order (Ignores start slide)
        slide_interval          :   9000,		// Length between transitions
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
        slide_links				:	false,	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
        thumb_links				:	1,			// Individual thumb links for each slide
        thumbnail_navigation    :   0,			// Thumbnail navigation
        slides 					:  	[			// Slideshow Images
                                            {image : $image1, title : 'Image Credit: Maria Kazvan', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/kazvan-1.jpg'},
                                            {image : $image2, title : 'Image Credit: Maria Kazvan', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/kazvan-2.jpg'},
                                            {image : $image3, title : 'Image Credit: Maria Kazvan', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/kazvan-3.jpg'},
                                            {image : $image4, title : 'Image Credit: Colin Wojno', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-1.jpg'}
                                    ],

        // Theme Options
        progress_bar			:	1,			// Timer for each slide
        mouse_scrub				:	0

    });
});

$(".project-thumbnail-1").click(function(){
    api.goTo(1);
});
$(".project-thumbnail-2").click(function(){
    api.goTo(2);
});
$(".project-thumbnail-3").click(function(){
    api.goTo(3);
});
$(".project-thumbnail-4").click(function(){
    api.goTo(4);
});


$(".fa-minus").hide();
$("#project-thumbnails").hide();
$("#project-details").hide();

$(".thumbnails").click(function(){
    $(".fa-plus").toggle();
    $(".fa-minus").toggle();
    $("#project-details").toggle("show", function(){});
});

$(".fa-stop").hide();

$(".description").click(function(){
    $(".fa-stop").toggle();
    $(".fa-th-large").toggle();
    $("#project-thumbnails").toggle("show", function(){});
});

// Portfolio Slider
