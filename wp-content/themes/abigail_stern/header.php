<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(); ?></title>

  <?php wp_head(); ?>

  <link rel='stylesheet'  href='<?php bloginfo("template_url") ?>/style.css' type='text/css' media='all' />
  <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css" />

  <link rel='stylesheet'  href='<?php bloginfo("template_url"); ?>/assets/css/supersized.css' type='text/css' media='all' />
  <link rel='stylesheet'  href='<?php bloginfo("template_url"); ?>/assets/css/supersized.shutter.css' type='text/css' media='all' />

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

      <?php
          if ( is_single() ) {
               get_template_part( 'partials/project', 'header' );
          }
      ?>

    </div>

</header>
