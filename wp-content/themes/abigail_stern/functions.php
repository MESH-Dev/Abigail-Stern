<?php
  //enqueue scripts and styles *use production assets. Dev assets are located in assets/css and assets/js
  function WPS_scripts() {
    // wp_enqueue_style( 'WPS-script', get_template_directory_uri().'/assets/js/production.min.css' );
    wp_enqueue_script( 'ASternScript', get_template_directory_uri().'/assets/js/WPStarter.js', array('jquery'), '1.0.0', true );
    wp_localize_script( 'ASternScript', 'AStern', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
    wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/libs/font-awesome-4.1.0/css/font-awesome.min.css');

    wp_enqueue_script( 'AllScript', get_template_directory_uri().'/assets/js/custom.js', array(), '1.0.0', true);

    if ( basename( get_page_template() ) == 'projects.php' ) {
         wp_enqueue_script( 'ProjectScript', get_template_directory_uri().'/assets/js/custom-project.js', array(), '1.0.0', true);
    };

    if ( basename( get_page_template() ) == 'portfolio.php' ) {
         wp_enqueue_script( 'PortfolioScript', get_template_directory_uri().'/assets/js/custom-portfolio.js', array(), '1.0.0', true);
         wp_enqueue_script( 'Portfolio1Script', get_template_directory_uri().'/assets/js/jquery.kinetic.min.js', array(), '1.0.0', true);
         wp_enqueue_script( 'Portfolio2Script', get_template_directory_uri().'/assets/js/jquery.mousewheel.min.js', array(), '1.0.0', true);
         wp_enqueue_script( 'Portfolio3Script', get_template_directory_uri().'/assets/js/jquery.smoothdivscroll-1.3-min.js', array(), '1.0.0', true);
    };

  }

  add_action( 'wp_enqueue_scripts', 'WPS_scripts' );

  //theme supports
  add_theme_support('post-thumbnails');
  add_image_size('project-thumbnail', 70, 70, true);

  add_theme_support('custom-header', $defaults);
  add_theme_support('custom-background');
  add_theme_support('html5');
  add_theme_support('automatic-feed-links');

  //menus
  register_nav_menus(array(
  	'main_nav' => 'Header and breadcrumb trail heirarchy',
  	'social_nav' => 'Social menu used throughout'
  ));

  //widgets
  register_sidebar(array(
	   'name'          => __( 'Footer - Left' ),
	   'id'            => 'footer-left',
	   'description'   => '',
     'class'         => '',
	   'before_widget' => '',
	   'after_widget'  => '',
	   'before_title'  => '<h2>',
	   'after_title'   => '</h2>' ));

  //editor style
  add_editor_style('assets/wp-admin/custom-editor-style.css');

  //login page style
  function WPS_loginCSS() {
	   echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_directory').'/assets/img/wp-login.css"/>';
  } add_action('login_head', 'WPS_loginCSS');

  //footer attribution
  function WPS_footer_admin () {
	   echo 'Theme developed by <a href="http://pateason.com">Pat Eason</a>.';
  } add_filter('admin_footer_text', 'WPS_footer_admin');

  //disable code editors
  define('DISALLOW_FILE_EDIT', true);

function siblings($link) {
    global $post;
    $siblings = get_pages('child_of='.$post->post_parent.'&parent='.$post->post_parent);
    foreach ($siblings as $key=>$sibling){
        if ($post->ID == $sibling->ID){
            $ID = $key;
        }
    }
    $closest = array('before'=>get_permalink($siblings[$ID-1]->ID),'after'=>get_permalink($siblings[$ID+1]->ID));

    if ($link == 'before' || $link == 'after') { echo $closest[$link]; } else { return $closest; }
}


?>
