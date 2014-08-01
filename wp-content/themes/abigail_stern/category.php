<?php
	if(have_posts()) :
		while (have_posts()) : the_post();
		      wp_redirect(get_permalink($post->ID));
		endwhile;
    else :
        wp_redirect(bloginfo('template_url'));
	endif;
?>
