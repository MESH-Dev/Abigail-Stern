<?php

    $next = get_next_post();
	$prev = get_previous_post();

	//Get new $next and $prev if those posts aren't available
	if($next == ''){
		$firstID = $wpdb->get_results("SELECT id
									   FROM wp_posts
									   WHERE `post_status` = 'publish'
									   AND `post_type` = 'post'
									   ORDER BY `post_date` ASC
									   LIMIT 1");
		$next = get_post($firstID[0]->id);
	}
	if($prev == ''){
		$firstID = $wpdb->get_results("SELECT id
									   FROM wp_posts
									   WHERE `post_status` = 'publish'
									   AND `post_type` = 'post'
									   ORDER BY `post_date` DESC
									   LIMIT 1");
		$prev = get_post($firstID[0]->id);
	}

?>

<div id="project-controls">
    <div class="control"><img class="rightarrow" src="<?php bloginfo('template_url') ?>/assets/icons/righttarrow.png" /></div>
    <div class="control"><img class="leftarrow" src="<?php bloginfo('template_url') ?>/assets/icons/leftarrow.png" /></div>
    <div class="control thumbnails"><img class="plus" src="<?php bloginfo('template_url') ?>/assets/icons/plus.png" /><img class="minus" src="<?php bloginfo('template_url') ?>/assets/icons/minus.png" /></div>
    <div class="control description"><img class="grid" src="<?php bloginfo('template_url') ?>/assets/icons/grid.png" /><img class="square" src="<?php bloginfo('template_url') ?>/assets/icons/square.png" /></div>
</div>
<div style="clear: both; height: 10px;"></div>

<div id="work-slides">

    <div id="work-curr" data-id="<?php echo get_the_id(); ?>" data-link="<?php the_permalink(); ?>">

        <div class="project-details">
            <h3><?php the_field('project_name') ?></h3>
            <p><?php the_field('project_description') ?></p>
        </div>
        <ul class="project-thumbnails">

            <?php if(get_field('image_1')) { ?>

              <li class="project-thumbnail-1">

                  <?php

                  $imageArray = get_field('image_1');
                  $imageAlt = $imageArray['alt'];
                  $imageThumbURL = $imageArray['url'];

                  echo '<img class="project-thumbnail" src="' . $imageThumbURL . '" />';

                  ?>

              </li>

            <?php } ?>

            <?php if(get_field('image_2')) { ?>

                <li class="project-thumbnail-2">

                    <?php

                    $imageArray = get_field('image_2');
                    $imageAlt = $imageArray['alt'];
                    $imageThumbURL = $imageArray['url'];

                    echo '<img class="project-thumbnail" src="' . $imageThumbURL . '" />';

                    ?>

                </li>

            <?php } ?>

            <?php if(get_field('image_3')) { ?>

                <li class="project-thumbnail-3">

                    <?php

                    $imageArray = get_field('image_3');
                    $imageAlt = $imageArray['alt'];
                    $imageThumbURL = $imageArray['url'];

                    echo '<img class="project-thumbnail" src="' . $imageThumbURL . '" />';

                    ?>

                </li>

             <?php } ?>

             <?php if(get_field('image_4')) { ?>

                <li class="project-thumbnail-4">

                    <?php

                    $imageArray = get_field('image_4');
                    $imageAlt = $imageArray['alt'];
                    $imageThumbURL = $imageArray['url'];

                    echo '<img class="project-thumbnail" src="' . $imageThumbURL . '" />';

                    ?>

                </li>

              <?php } ?>


            <div style="clear: both;"></div>
            <div class="left-arrow">

                    <a id="prevslide"><i class="fa fa-angle-left fa-2x"></i></a>

            </div>

            <div class="right-arrow">

                    <a id="nextslide"><i class="fa fa-angle-right fa-2x"></i></a>

            </div>

        </ul>

    </div>


    <div id="work-prev" data-id="<?php echo $prev->ID; ?>" data-link="<?php echo get_permalink($prev->ID); ?>">

    </div>

    <div id="work-next" data-id="<?php echo $next->ID; ?>" data-link="<?php echo get_permalink($next->ID); ?>">

    </div>
</div>
