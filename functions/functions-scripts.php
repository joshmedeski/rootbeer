<?php
/* Scripts
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @framework  Foundation
 * @author     JoshMedeski
 */

// Remove jQuery
// wp_deregister_script('jquery');

// Add Files
add_action( 'wp_enqueue_scripts', 'rootbeer_modernizer_script' );
add_action( 'wp_enqueue_scripts', 'rootbeer_jquery_script' );
add_action( 'wp_enqueue_scripts', 'rootbeer_foundation_script' );

// Fuctions
function rootbeer_modernizer_script() {
	wp_enqueue_script(
		'modernizer',
		get_template_directory_uri() . '/js/modernizr.js',
		"2.7.1",
		array(),
		false
	);
}
function rootbeer_jquery_script() {
	wp_deregister_script('jquery');
	wp_enqueue_script(
		'jquery',
		get_template_directory_uri() . '/js/jquery.js',
		"2.0.3",
		array(),
		true
	);
}
function rootbeer_foundation_script() {
	wp_enqueue_script(
		'foundation',
		get_template_directory_uri('jquery') . '/js/foundation.js',
		"5.0.2",
		array(),
		true
	);
}
?>