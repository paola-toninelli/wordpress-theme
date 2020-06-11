<?php
/**
 * Sam Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */

if ( ! function_exists( 'samtheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which runs
	 * before the init hook. The init hook is too late for some features, such as indicating
	 * support post thumbnails.
	 */
	function samtheme_setup() {
	 
		/**
		 * Make theme available for translation.
		 * Translations can be placed in the /languages/ directory.
		 */
		load_theme_textdomain( 'samtheme', get_template_directory() . '/languages' );
	 
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
			'primary'   => __( 'Primary Menu', 'samtheme' ),
			'secondary' => __( 'Secondary Menu', 'samtheme' )
		) );
	 
		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
	}
endif; // samtheme_setup

add_action( 'after_setup_theme', 'samtheme_setup' );


function register_my_menus() {
	register_nav_menus(
	  array(
		'primary' => __( 'Primary Menu', 'samtheme' ),
		'secondary' => __( 'Secondary Menu', 'samtheme' ),
		'aside' => __( 'Aside Menu', 'samtheme' ),
		'footer' => __( 'Footer Menu', 'samtheme' )
	   )
	 );
   }
   add_action( 'init', 'register_my_menus' );
  

if (! function_exists('samtheme_register_scripts')):
/**
 * Register and Enqueue Styles.
 */
function samtheme_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'main', get_theme_file_uri('/assets/css/main.css'),array(), $theme_version );
	wp_enqueue_script( 'main', get_theme_file_uri('/assets/js/main.js'),array(), $theme_version,true );
	wp_enqueue_script( 'bootstrap', get_theme_file_uri('node_modules/bootstrap/dist/js/bootstrap.min.js'),array('jquery'), $theme_version,true );

}
endif;

add_action( 'wp_enqueue_scripts', 'samtheme_register_styles' );


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}