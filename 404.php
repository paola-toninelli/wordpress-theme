<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage paola_theme
 * @since 1.0.0
 */

get_header();
?>

<main id="site-content" role="main">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-inner thin error404-content">

                    <h1 class="entry-title"><?php _e( 'Page Not Found', 'paola-theme' ); ?></h1>

                    <div class="intro-text"><p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'paola-theme' ); ?></p></div>

                    <?php
                    get_search_form(
                        array(
                            'label' => __( '404 not found', 'paola-theme' ),
                        )
                    );
                    ?>

                </div><!-- .section-inner -->
            </div>
        </div>
    </div>

	

</main><!-- #site-content -->

<?php
get_footer();?>