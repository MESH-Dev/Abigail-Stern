<div id="project-controls">
    <div class="control"><a href="<?php siblings('after'); ?>"><img class="rightarrow" src="<?php bloginfo('template_url') ?>/assets/icons/righttarrow.png" /></a></div>
    <div class="control"><a href="<?php siblings('before'); ?>"><img class="leftarrow" src="<?php bloginfo('template_url') ?>/assets/icons/leftarrow.png" /></a></div>
    <div class="control thumbnails"><img class="plus" src="<?php bloginfo('template_url') ?>/assets/icons/plus.png" /><img class="minus" src="<?php bloginfo('template_url') ?>/assets/icons/minus.png" /></div>
    <div class="control description"><img class="grid" src="<?php bloginfo('template_url') ?>/assets/icons/grid.png" /><img class="square" src="<?php bloginfo('template_url') ?>/assets/icons/square.png" /></div>
</div>
<div style="clear: both; height: 10px;"></div>
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
