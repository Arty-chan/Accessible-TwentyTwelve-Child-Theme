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
?>