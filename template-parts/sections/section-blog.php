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
   
   $template_directory = get_template_directory_uri();

   $blog= get_field('blog');
   
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
      <div class="row">
         <div class="col-12">
         <?php if(isset($blog['call_to_action']) && $blog['call_to_action'] ):?>
            <a href="<?php echo $blog['call_to_action']['url'] ?>" target="<?php echo $blog['call_to_action']['target'] ?>" class="btn btn-primary text-uppercase btn-lg rounded-0 mt-4"><?php echo $blog['call_to_action']['title'] ?></a>
            <?php endif; ?>
         </div>
      </div>
   </div>
</section>