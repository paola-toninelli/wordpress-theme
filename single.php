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

<?php get_header();?>
<main>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <?php 
            if (have_posts()):
                while (have_posts()):
                the_post();?>
                <h1 class="text-primary text-uppercase">
                    <?php the_title_attribute();?>
            </h1>
            <?php $categories = get_the_category(); 
                             //var_dump($categories);
                            
                            ?>
                                <?php if (!empty($categories) && isset($categories[0])) :?> 

                                    <?php 
                                    $link_categoria = get_category_link($categories[0]);
                                    $nome_categoria = $categories[0]->name;

                                    ?>

                                    <a href="<?php echo $link_categoria; ?>"><span class="categoria">  <?php echo $nome_categoria ?> </span></a>
                                <?php endif; ?> 
                              
                                <span class="data-copy"><?php the_date(); ?></span>
                                <div class="mt-3">
            <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?></div>
           <div class="mt-3">
            <?php the_content();?></div>
            <p><?php the_tags(); ?></p>
            
            <?
           endwhile;
        endif;
        ?>
            
            
        </div>
        
    </div>   
</div>
</main>


<?php get_footer(); ?>