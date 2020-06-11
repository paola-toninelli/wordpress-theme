<?php
/**
 * header logo template part
 * 
 */

// Image variables.
$navbar_logo = get_field('navbar_logo', 'option');
?>
<a class="navbar-brand" href="<?php echo get_home_url(); ?>">

<?php if( $navbar_logo ): 
    $alt = $navbar_logo['alt'];
    $medium = $navbar_logo['sizes']['medium'];
    // print("<pre>".print_r($navbar_logo,true)."</pre>");
?>
    <img src="<?php echo esc_url($medium); ?>" alt="<?php echo esc_attr($alt); ?>" />
<?php 
else: 
    $blog_title = get_bloginfo( 'name' ); 
    echo $blog_title;
endif; 
?>
</a>