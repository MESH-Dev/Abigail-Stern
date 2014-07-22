<?php get_header(); ?>

<style>
    body {
        background: #e9e9e9;
    }
</style>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="container text">
    <div class="four-fifths">
        <?php the_content(); ?>
    </div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>
