<?php
/**
 * Paola Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Paola_Theme
 * @since 1.0.0
 */

if ( ! function_exists( 'Paolatheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which runs
	 * before the init hook. The init hook is too late for some features, such as indicating
	 * support post thumbnails.
	 */
	function Paolatheme_setup() {
	 
		/**
		 * Make theme available for translation.
		 * Translations can be placed in the /languages/ directory.
		 */
		load_theme_textdomain( 'Paolatheme', get_template_directory() . '/languages' );
	 
		/**
		 * Add default posts and comments RSS feed links to <head>.
		 */
		add_theme_support( 'automatic-feed-links' );
	 
		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support( 'post-thumbnails' );
	 
		/**
		 * Add support for two custom navigation menus.
		 */
		register_nav_menus( array(
			'primary'   => __( 'Primary Menu', 'Paolatheme' ),
			'secondary' => __( 'Secondary Menu', 'Paolatheme' )
		) );
	 
		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
	}
endif; // Paolatheme_setup

add_action( 'after_setup_theme', 'Paolatheme_setup' );

//menù

function register_my_menus() {
	register_nav_menus(
	  array(
		'primary' => __( 'Primary Menu', 'Paolatheme' ),
		'secondary' => __( 'Secondary Menu', 'Paolatheme' ),
		'aside' => __( 'Aside Menu', 'Paolatheme' ),
		'footer' => __( 'Footer Menu', 'Paolatheme' )
	   )
	 );
   }
   add_action( 'init', 'register_my_menus' );
  

if (! function_exists('Paolatheme_register_scripts')):
/**
 * Register and Enqueue Styles.
 */
function Paolatheme_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'main', get_theme_file_uri('/assets/css/main.css'),array(), $theme_version );

	wp_enqueue_script('googlemap','https://maps.googleapis.com/maps/api/js?key=AIzaSyCLIT9gLHFO2KLv3xupBgOR5LtAD4wtg2Q', array(), $theme_version, true);

	wp_enqueue_script( 'main', get_theme_file_uri('/assets/js/main.js'),array('googlemap','jquery'), $theme_version,true );
	wp_enqueue_script( 'bootstrap', get_theme_file_uri('node_modules/bootstrap/dist/js/bootstrap.min.js'),array('jquery'), $theme_version,true );

}
endif;

add_action( 'wp_enqueue_scripts', 'Paolatheme_register_styles' );

//ACF

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

/*
*
* Google Maps API key - ACF
*
*/

function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyCLIT9gLHFO2KLv3xupBgOR5LtAD4wtg2Q';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


/**
 * Add a sidebar.
 */

function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'textdomain' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );

//custum recent post widget

require_once( get_template_directory() . '/classes/recent-posts.php' );

function register_custom_widgets() {
	register_widget( 'My_Recent_Posts' );
}
add_action( 'widgets_init', 'register_custom_widgets' );