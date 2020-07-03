<?php
    /**
     * Pagina blog
   */
?>

<?php get_header();?>
<?php
   $archive_title = __('Blog','theme');
   ?>
<section>
   <div class="container mt-3">
      <div class="row">
       <div class="col">
         <h1 class="text-primary text-uppercase">
            <?php echo $archive_title?>
         </h1>
         </div>
      </div>
      <div class="row mt-5">
            <?php  
               if ( have_posts() ) {
                 
                   while (have_posts() ) {
                       the_post(); ?> 
         <div class="col-lg-3 col-md-6"> 
               <?php get_template_part('template-parts/teases/tease-post')?>
         </div>
            <?php
               }
               
               } else {
               
               }
               
               wp_reset_postdata();
               ?>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <div class="col-12">                
            <?php get_template_part('template-parts/pagination'); ?>
         </div>
      </div>
   </div>
</section>
<?php get_footer();?>