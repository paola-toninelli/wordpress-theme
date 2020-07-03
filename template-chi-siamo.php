<?php
    /**
     * Template Name: Chi Siamo
   */
?>

<?php get_header();?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>  
    <section class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <h1 class="text-white my-3">
                        <?php the_title();?>
                    </h1>
                    <div class="d-none d-md-block">
                        <?php the_content();?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer();?>