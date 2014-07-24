<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
  <link rel='stylesheet'  href='<?php bloginfo("template_url") ?>/style.css' type='text/css' media='all' />
  <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css" />

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>

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
      <div id="project-controls">
          <div class="control"><i class="fa fa-angle-right fa-2x"></i></div>
          <div class="control"><i class="fa fa-angle-left fa-2x"></i></div>
          <div class="control"><i class="fa fa-plus fa-2x"></i></div>
          <div class="control"><i class="fa fa-th-large fa-2x"></i></div>
      </div>
      <div style="clear: both; height: 10px;"></div>
      <div id="project-details">
          <h3><?php the_field('project_name') ?></h3>
          <p><?php the_field('project_description') ?></p>
      </div>
      <div id="project-thumbnails">

              <?php

               if( have_rows('images') ):

                    while ( have_rows('images') ) : the_row();

                        $imageArray = get_sub_field('image');
                        $imageAlt = $imageArray['alt'];
                        $imageThumbURL = $imageArray['url'];

                        echo '<div class="project-thumbnail">';
                        echo '<img src="' . $imageThumbURL . '" />';
                        echo '</div>';

                    endwhile;

                else :

                    // no rows found

                endif;

              ?>

          <div style="clear: both;"></div>
          <div class="left-arrow">

                  <i class="fa fa-angle-left fa-2x"></i>

          </div>

          <div class="right-arrow">
              <a href="#">
                  <i class="fa fa-angle-right fa-2x"></i>
              </a>
          </div>

      </div>
    </div>

</header>

<footer>

    <script>

        $('html').css('background', ' no-repeat center center fixed');
        $('html').css('-webkit-background-size', 'cover');
        $('html').css('-moz-background-size', 'cover');
        $('html').css('-o-background-size', 'cover');
        $('html').css('background-size', 'cover');

        var $curr = $(this);

        $(".project-thumbnail").click(function() {

            $curr = $(this);

            var thumbURL = $(this).children().first().attr('src');

            $(this).addClass('selected');

            $('html').css('background', 'url(' + thumbURL + ') no-repeat center center fixed');
            $('html').css('-webkit-background-size', 'cover');
            $('html').css('-moz-background-size', 'cover');
            $('html').css('-o-background-size', 'cover');
            $('html').css('background-size', 'cover');

        });

        $(".left-arrow").click(function() {

            $curr = $curr.prev();

            var nextImage = $curr.children().first().attr('src');

            $('html').css('background', 'url(' + nextImage + ') no-repeat center center fixed');
            $('html').css('-webkit-background-size', 'cover');
            $('html').css('-moz-background-size', 'cover');
            $('html').css('-o-background-size', 'cover');
            $('html').css('background-size', 'cover');
        });

        $(".right-arrow").click(function() {

            $curr = $curr.next();

            var nextImage = $curr.children().first().attr('src');

            $('html').css('background', 'url(' + nextImage + ') no-repeat center center fixed');
            $('html').css('-webkit-background-size', 'cover');
            $('html').css('-moz-background-size', 'cover');
            $('html').css('-o-background-size', 'cover');
            $('html').css('background-size', 'cover');
        });

    </script>

</footer>
