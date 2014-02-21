<?php
/**
 * Twenty Twelve Accessible Child Theme functions and definitions
 *
 * Mostly to add the footer options page.
 *
 * @package Twenty_Twelve
 * @subpackage Twenty_Twelve_Child
 * @since Twenty Twelve Child 1.0
 */
add_action( 'after_setup_theme', 'childtheme_setup' );
function childtheme_setup() {
	require_once( get_stylesheet_directory() . '/inc/childtheme-settings.php' );
}

/**
 * must use priority greater than 10
 * then add our special version in child theme's css folder
 */
function mytheme_enqueue_styles() {
	global $wp_styles;
	wp_enqueue_style( 'mytheme-ie', get_stylesheet_directory_uri() . '/css/ie.css', array( 'twentytwelve-style' ), '1.0' );
	$wp_styles->add_data( 'mytheme-ie', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles', 11 );
?>