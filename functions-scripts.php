<?php
/* Scripts
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @framework  Foundation
 * @author     JoshMedeski
 */

// Vendor Scripts

// add_action( 'wp_enqueue_scripts', 'rootbeer_modernizr_script' );
// add_action( 'wp_enqueue_scripts', 'rootbeer_jquery_script' );
add_action( 'wp_enqueue_scripts', 'rootbeer_zepto_script' );

// Foundation Scripts

// add_action( 'wp_enqueue_scripts', 'rootbeer_abide_script' );
// add_action( 'wp_enqueue_scripts', 'rootbeer_alert_script' );
// add_action( 'wp_enqueue_scripts', 'rootbeer_clearing_script' );
// add_action( 'wp_enqueue_scripts', 'rootbeer_cookie_script' );
// add_action( 'wp_enqueue_scripts', 'rootbeer_dropdown_script' );
// add_action( 'wp_enqueue_scripts', 'rootbeer_forms_script' );
// add_action( 'wp_enqueue_scripts', 'rootbeer_interchange_script' );
// add_action( 'wp_enqueue_scripts', 'rootbeer_joyride_script' );
add_action( 'wp_enqueue_scripts', 'rootbeer_foundation_script' );
// add_action( 'wp_enqueue_scripts', 'rootbeer_magellan_script' );
// add_action( 'wp_enqueue_scripts', 'rootbeer_orbit_script' );
// add_action( 'wp_enqueue_scripts', 'rootbeer_placeholder_script' );
// add_action( 'wp_enqueue_scripts', 'rootbeer_reveal_script' );
// add_action( 'wp_enqueue_scripts', 'rootbeer_section_script' );
// add_action( 'wp_enqueue_scripts', 'rootbeer_tooltips_script' );
add_action( 'wp_enqueue_scripts', 'rootbeer_topbar_script' );

//
// Vendor Scripts
//

function rootbeer_modernizr_script() {
	wp_enqueue_script(
		'modernizr',
		get_template_directory_uri() . '/javascripts/vendor/custom.modernizr.js'
	);
}
function rootbeer_jquery_script() {
	wp_enqueue_script(
		'jquery',
		get_template_directory_uri() . '/javascripts/vendor/jquery.js'
	);
}
function rootbeer_zepto_script() {
	wp_enqueue_script(
		'zepto',
		get_template_directory_uri() . '/javascripts/vendor/zepto.js'
	);
}

//
// Foundation Scripts
//

function rootbeer_abide_script() {
	wp_enqueue_script(
		'abide',
		get_template_directory_uri() . '/javascripts/foundation/foundation.abide.js',
		true
	);
}
function rootbeer_alert_script() {
	wp_enqueue_script(
		'alert',
		get_template_directory_uri() . '/javascripts/foundation/foundation.alert.js',
		true
	);
}
function rootbeer_clearing_script() {
	wp_enqueue_script(
		'clearing',
		get_template_directory_uri() . '/javascripts/foundation/foundation.clearing.js',
		true
	);
}
function rootbeer_cookie_script() {
	wp_enqueue_script(
		'cookie',
		get_template_directory_uri() . '/javascripts/foundation/foundation.cookie.js',
		true
	);
}
function rootbeer_dropdown_script() {
	wp_enqueue_script(
		'dropdown',
		get_template_directory_uri() . '/javascripts/foundation/foundation.dropdown.js',
		true
	);
}
function rootbeer_forms_script() {
	wp_enqueue_script(
		'forms',
		get_template_directory_uri() . '/javascripts/foundation/foundation.forms.js',
		true
	);
}
function rootbeer_interchange_script() {
	wp_enqueue_script(
		'interchange',
		get_template_directory_uri() . '/javascripts/foundation/foundation.interchange.js',
		true
	);
}
function rootbeer_joyride_script() {
	wp_enqueue_script(
		'joyride',
		get_template_directory_uri() . '/javascripts/foundation/foundation.joyride.js',
		true
	);
}
function rootbeer_foundation_script() {
	wp_enqueue_script(
		'foundation',
		get_template_directory_uri() . '/javascripts/foundation/foundation.js',
		true
	);
}
function rootbeer_magellan_script() {
	wp_enqueue_script(
		'magellan',
		get_template_directory_uri() . '/javascripts/foundation/foundation.magellan.js',
		true
	);
}
function rootbeer_orbit_script() {
	wp_enqueue_script(
		'orbit',
		get_template_directory_uri() . '/javascripts/foundation/foundation.orbit.js',
		true
	);
}
function rootbeer_placeholder_script() {
	wp_enqueue_script(
		'placeholder',
		get_template_directory_uri() . '/javascripts/foundation/foundation.placeholder.js',
		true
	);
}
function rootbeer_reveal_script() {
	wp_enqueue_script(
		'reveal',
		get_template_directory_uri() . '/javascripts/foundation/foundation.reveal.js',
		true
	);
}
function rootbeer_section_script() {
	wp_enqueue_script(
		'section',
		get_template_directory_uri() . '/javascripts/foundation/foundation.section.js',
		true
	);
}
function rootbeer_tooltips_script() {
	wp_enqueue_script(
		'tooltips',
		get_template_directory_uri() . '/javascripts/foundation/foundation.tooltips.js',
		true
	);
}
function rootbeer_topbar_script() {
	wp_enqueue_script(
		'topbar',
		get_template_directory_uri() . '/javascripts/foundation/foundation.topbar.js',
		true
	);
}
?>