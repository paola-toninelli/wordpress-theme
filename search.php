<?php
/**
 * Template Name: Search page
 * @package Paola Theme
 */

get_header(); ?>

       <div class="container">
           <div class="row">
               <div class="col">
               <?php
                    get_search_form();
                    ?>

            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <h1 class="page-title"><?php printf( __( 'Risultati di ricerca per: %s', 'theme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                </header><!-- .page-header -->
<div class="row">

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
<div class="col-lg-4">
                    <?php get_template_part( 'template-parts/teases/tease', get_post_type() ); ?>
            </div>
                <?php endwhile; ?>

            </div>

            <?php else : ?>

                <h2 class="page-title"><?php printf( __( 'Non ci sono risultati di ricerca per: %s', 'theme' ), '<span>' . get_search_query() . '</span>' ); ?></h2>

            <?php endif; ?>

            </div>
            </div>
            </div>


<?php get_footer(); ?>