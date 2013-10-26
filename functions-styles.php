<?php
/* Styles
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @framework  Foundation
 * @author     JoshMedeski
 */

// Site Style
function rootbeer_site_style() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'rootbeer_site_style' );

// Login Style
function rootbeer_login_style() { ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-login.css">
<?php }
add_action( 'login_enqueue_scripts', 'rootbeer_login_style' );

// Editor Style
function rootbeer_editor_style() {
    add_editor_style( 'style-editor.css' );
}
add_action( 'init', 'rootbeer_editor_style' );

?>