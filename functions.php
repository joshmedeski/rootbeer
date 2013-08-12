<?php
/* Functions
 *
 * @package RootBeer
 * @author JoshMedeski
 */

function rootbeer_setup() {

	// This styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();
	
	// This styles the login screen with login-style.css to match the theme style
	function login_stylesheet() { ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/login-style.css" type="text/css" media="all" />
	<?php }
	add_action( 'login_enqueue_scripts', 'login_stylesheet' ); 

}
add_action( 'after_setup_theme', 'rootbeer_setup' );
?>