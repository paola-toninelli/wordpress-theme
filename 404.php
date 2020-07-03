<?php
   /**
    * @package WordPress
    * @subpackage paola_theme
    * @since 1.0.0
    */

    $template_directory = get_template_directory_uri();
    $path_images = $template_directory . '/assets/images/';
   
   get_header();
   ?>
<main id="site-content" role="main">
   <div class="container text-center">
      <div class="row mt-3">
         <div class="col">
            <div class="section-inner thin error404-content">
            <h1 class="entry-title text-primary"><?php _e( 'OOPS!', 'paola-theme' ); ?></h1>
            <img src="<?php echo $path_images; ?>404.png" alt="404">
               <h2><?php _e( 'Pagina non trovata', 'paola-theme' ); ?></h2>
               <div class="intro-text mt-3">
                  <p><?php _e( 'La pagina che stavi cercando non è stata trovata. Potrebbe essere stata rimossa, rinominata o non esistere.', 'paola-theme' ); ?></p>
               </div>
               
               <?php
                  get_search_form(
                      array(
                          'label' => __( '404 not found', 'paola-theme' ),
                      )
                  );
                  ?>
            </div>
         </div>
      </div>
   </div>
</main>

<?php get_footer();?>