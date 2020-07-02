<?php get_header(); ?>

<main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
            <?php 
                if ( have_posts() ) :
                    while (have_posts() ) :
                        the_post();?>

                        <h1 class="text-primary text-uppercase"><?php the_title(); ?> </h1>
                        <?php $categories = get_the_category();?>

                        <?php if (!empty($categories) && isset($categories[0])) :?>
                            <?php
                            $link_categoria = get_category_link($categories[0]);
                            $nome_categoria = $categories[0]->name;
                            ?>
                            <a href ="<?php echo $link_categoria; ?>"><span class="categoria"> <?php echo $nome_categoria ?> </span></a>  
                        <?php endif ?>
                        
                        <span class="data-copy text-muted"><?php the_date(); ?></span> 
                        <br> 
                        
                        <div class="mt-3">
                            <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                        <div class="mt-3">
                            <?php the_content(); ?>
                        </div>
                        <p id="tag"><?php the_tags('', ' ', ''); ?> </p>
                        
                        </div>
                        <?php
                    endwhile;
            
                endif;
            ?>
            
            </div>
            <div class="col-lg-4">
                <?php get_template_part( 'template-parts/main-sidebar'); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>