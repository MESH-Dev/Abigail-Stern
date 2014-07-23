<?php
/*
Template Name: Text
*/

?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<style>

    body {
        background: #e9e9e9;
    }

</style>

<div class="container text">
    <div class="four-fifths">
        <?php the_content(); ?>
    </div>
    <div class="one-fifth">
        <div class="social">
            <a href=""><i class="fa fa-linkedin-square fa-2x"></i></a>
        </div>
        <div class="social">
            <a href=""><i class="fa fa-twitter-square fa-2x"></i></a>
        </div>
        <div class="social">
            <a href=""><i class="fa fa-pinterest-square fa-2x"></i></a>
        </div>
    </div>
</div>

<?php endwhile; ?>
