<?php
/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage paola_theme
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

<?php 
//wordpress loop
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        // Display post content
        ?>
        <h1>
            <?php the_title();?>
        </h1>
        <div>
            <?php the_content();?>
        </div>
        <small>
            <?php the_excerpt();?>
        </small>
        <?php
    endwhile; 
else:
    _e('Sorry, no posts matched your criteria.','paolatheme');
endif; 
?>

<?php get_footer(); ?>