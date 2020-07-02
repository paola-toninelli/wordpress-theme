<?php
/**
 * Template Name: Text
 * 
 * https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
*/
?>


<?php
 
 $args = array(
     'post_type'=> 'post',
     'posts_per_page'=> 2,
     'paged'=> 2,
   
 );
 
 // The Query
 $the_query = new WP_Query( $args );
 



 ?>
<?php get_header();?>
<div class="container">
    <div class="row">
    <div class="col">
    <?php 
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
        $the_query->the_post(); 

        $post_link= get_permalink();
        $post_title= get_the_title();

		?>
		
        <a href="<?php echo $post_link; ?>"><h1><?php echo $post_title;?></h1></a>
		
        <?php
	} // end while
} // end if
?>
    </div>
    </div>
</div>

<?php get_footer();?>