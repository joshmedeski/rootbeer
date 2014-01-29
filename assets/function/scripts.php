<?php
/* Scripts
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @framework  Foundation
 * @author     JoshMedeski
 */

// Remove Mailchimp Styles (mc4wp)
add_action( 'wp_print_styles', 'mailchimp_deregister_styles', 100 );

function mailchimp_deregister_styles() {
	wp_deregister_style( 'mailchimp-for-wp' );
}

// Add Files
add_action( 'wp_enqueue_scripts', 'rootbeer_modernizer_script' );
add_action( 'wp_enqueue_scripts', 'rootbeer_jquery_script' );
add_action( 'wp_enqueue_scripts', 'rootbeer_foundation_script' );

// Fuctions
function rootbeer_modernizer_script() {
	wp_enqueue_script(
		'modernizer',
		get_template_directory_uri() . '/js/modernizr.js',
		false,
		"2.7.1",
		false
	);
}
function rootbeer_jquery_script() {
	wp_deregister_script('jquery');
	wp_enqueue_script(
		'jquery',
		get_template_directory_uri() . '/js/jquery.js',
		false,
		"2.0.3",
		true
	);
}
function rootbeer_foundation_script() {
	wp_enqueue_script(
		'foundation',
		get_template_directory_uri('jquery') . '/js/foundation.js',
		array('jquery'),
		"5.0.2",
		true
	);
}
?>