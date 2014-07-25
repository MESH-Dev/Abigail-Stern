<div id="project-controls">
    <div class="control"><i class="fa fa-angle-right fa-2x"></i></div>
    <div class="control"><i class="fa fa-angle-left fa-2x"></i></div>
    <div class="control thumbnails"><i class="fa fa-plus fa-2x"></i><i class="fa fa-minus fa-2x"></i></div>
    <div class="control description"><i class="fa fa-th-large fa-2x"></i><i class="fa fa-stop fa-2x"></i></div>
</div>
<div style="clear: both; height: 10px;"></div>
<div id="project-details">
    <h3><?php the_field('project_name') ?></h3>
    <p><?php the_field('project_description') ?></p>
</div>
<ul id="project-thumbnails">

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

</div>
