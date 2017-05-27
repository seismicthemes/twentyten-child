<?php
/**
 * let's import the original twentyten stylesheet
 */
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('twentyten-child', get_stylesheet_directory_uri().'/style.css', false, '1.0.0');

}

/**
 * Tell WordPress to add our stylesheets to the head.
 */
function theme_scripts() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'menu-toggle', get_stylesheet_directory_uri() . '/js/menu.js');
}
add_action('wp_enqueue_scripts', 'theme_scripts');
?>