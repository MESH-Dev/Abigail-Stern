jQuery(document).ready(function($){

    // Portfolio Images

    $image1 = $(".category-1").children().attr('src');
    $image2 = $(".category-2").children().attr('src');
    $image3 = $(".category-3").children().attr('src');

      jQuery(function($){

          $.supersized({

              // Functionality
              slideshow               :   1,			// Slideshow on/off
              autoplay				:	0,			// Slideshow starts playing automatically
              start_slide             :   1,			// Start slide (0 is random)
              stop_loop				:	0,			// Pauses slideshow on last slide
              random					: 	0,			// Randomize slide order (Ignores start slide)
              slide_interval          :   3000,		// Length between transitions
              transition              :   6, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
              transition_speed		:	10000,		// Speed of transition
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
              fit_portrait         	:   0,			// Portrait images will not exceed browser height
              fit_landscape			:   0,			// Landscape images will not exceed browser width

              // Components
              slide_links				:	false,	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
              thumb_links				:	1,			// Individual thumb links for each slide
              thumbnail_navigation    :   1,			// Thumbnail navigation
              slides 					:  	[			// Slideshow Images
                                                  {image : $image1, title : 'Image Credit: Maria Kazvan', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/kazvan-1.jpg'},
                                                  {image : $image2, title : 'Image Credit: Maria Kazvan', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/kazvan-1.jpg'},
                                                  {image : $image3, title : 'Image Credit: Maria Kazvan', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/kazvan-1.jpg'}
                                          ],

              // Theme Options
              progress_bar			:	1,			// Timer for each slide
              mouse_scrub				:	0

          });
      });

    $(".swim").click(function(){
      api.goTo(1);
      $("div.swim").addClass("open");
      $("div.lingerie").removeClass("open");
      $("div.outerwear").removeClass("open");
    });

    $(".lingerie").click(function(){
      api.goTo(2);
      $("div.lingerie").addClass("open");
      $("div.swim").removeClass("open");
      $("div.outerwear").removeClass("open");
    });

    $(".outerwear").click(function(){
      api.goTo(3);
      $("div.outerwear").addClass("open");
      $("div.swim").removeClass("open");
      $("div.lingerie").removeClass("open");
    });

    // Figure out how to add open class to next category

    $("#nextslide").click(function(){
        $curr = $(".open").next();
        $(".open").removeClass("open");

        if ($curr.length) {
            $curr.addClass("open");
        } else {
            $(".category:first").addClass("open");
        }
    });

    $("#prevslide").click(function(){
        $curr = $(".open").prev();
        $(".open").removeClass("open");

        $curr.addClass("open");

        if ($curr.length) {
            $curr.addClass("open");
        } else {
            $(".category:last").addClass("open");
        }
        console.log($curr.length);
    });

});
