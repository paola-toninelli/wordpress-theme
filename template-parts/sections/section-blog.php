<?php
   $args = array(
       'posts_per_page' => 4,
       'post_type' => 'post',
       'post_status' => 'publish',
       'orderby' => 'date',
       'order'   => 'DESC',
   );
   
   // The Query
   $the_query = new WP_Query( $args );
   
   ?>
<section>
   <div class="container">
      <div class="row">
         <div class="col-12 mt-5 mb-3">
            <h2 class="text-primary">BLOG</h2>
         </div>
         <?php  // The Loop
            if ( $the_query->have_posts() ) {
              
                while ( $the_query->have_posts() ) {
                    $the_query->the_post(); ?> 
         <div class="col-lg-3 col-md-6"> 
            <?php get_template_part('template-parts/teases/tease-post')?>
         </div>
         <?php
            }
            
            } else {
            // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();
            ?>
      </div>
      <div class="row mt-5">
         <div class="col-12">
            <a href="#" class="btn btn-primary text-uppercase rounded-0">Continua</a>   
         </div>
      </div>
   </div>
</section>