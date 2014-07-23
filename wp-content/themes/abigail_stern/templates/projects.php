<?php
/*
Template Name: Projects
*/

?>

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

 <style>
      html {
        background: url(http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/kazvan-1.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
  }
  </style>


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
          <h3>Something</h3>
          <p>Here's a thing that we do and we think about it so that's it.</p>
      </div>
      <div id="project-thumbnails">
          <div class="project-thumbnail">
          </div>
          <div class="project-thumbnail">
          </div>
          <div class="project-thumbnail">
          </div>
          <div class="project-thumbnail">
          </div>
          <div style="clear: both;"></div>
          <div class="left-arrow">
              <a href="#">
                  <i class="fa fa-angle-left fa-2x"></i>
              </a>
          </div>

          <div class="right-arrow">
              <a href="#">
                  <i class="fa fa-angle-right fa-2x"></i>
              </a>
          </div>

      </div>
    </div>

</header>
