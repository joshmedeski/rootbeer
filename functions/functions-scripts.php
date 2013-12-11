<?php
/* Scripts
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @framework  Foundation
 * @author     JoshMedeski
 */

function rootbeer_modernizer_script() {
	wp_enqueue_script(
		'modernizer',
		get_template_directory_uri() . '/js/modernizer.js'
	);
}
add_action( 'wp_enqueue_scripts', 'rootbeer_modernizer_script' );

function rootbeer_jquery_script() {
	wp_enqueue_script(
		'jquery',
		get_template_directory_uri() . '/js/jquery.min.js',
		array(),
		true
	);
}
// add_action( 'wp_enqueue_scripts', 'rootbeer_jquery_script' );

function rootbeer_foundation_script() {
	wp_enqueue_script(
		'foundation',
		get_template_directory_uri() . '/js/foundation.min.js',
		true
	);
}
// add_action( 'wp_enqueue_scripts', 'rootbeer_foundation_script' );
?>