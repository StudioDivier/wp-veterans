<?php
/*
    Template Name: Услуга
*/
?>
<?php get_header(); ?>

16
<div id="primary" class="site-content">
    17
    <div id="content" role="main">
        18

        19
        <?php while ( have_posts() ) : the_post(); ?>
            20
            <?php get_template_part( 'content', 'page' ); ?>
            21
            <?php comments_template( '', true ); ?>
            22
        <?php endwhile; // end of the loop. ?>
        23

        24
    </div><!-- #content -->
    25
</div><!-- #primary -->


<?php get_footer(); ?>

