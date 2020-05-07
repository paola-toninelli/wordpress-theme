<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */
?>

<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col">

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
    _e('Sorry, no posts matched your criteria.','samtheme');
endif; 
?>

        </div>
    </div>
</div>
<?php get_footer(); ?>