<?php
/*
Template Name: Portfolio
*/

?>

<?php get_header(); ?>

<?php get_template_part('partials/portfolio', 'sidebar'); ?>

<a id="prevslide" class="load-item"></a>
<a id="nextslide" class="load-item"></a>

<ul id="projects" style="display:none">

    <li class="category-1">
    <?php if(get_field('swim')) {

          $imageArray = get_field('swim');
          $imageSwimURL = $imageArray['url'];
          echo '<img src="' . $imageSwimURL . '" />';
    } ?>
    </li>

    <li class="category-2">
    <?php if(get_field('lingerie')) {

          $imageArray = get_field('lingerie');
          $imageLingerieURL = $imageArray['url'];
          echo '<img src="' . $imageLingerieURL . '" />';

    } ?>
    </li>

    <li class="category-3">
    <?php if(get_field('outerwear')) {

          $imageArray = get_field('outerwear');
          $imageOuterwearURL = $imageArray['url'];
          echo '<img src="' . $imageOuterwearURL . '" />';

    } ?>
    </li>

</ul>

<?php get_footer(); ?>
