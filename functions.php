<?php
/* Functions
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @author     JoshMedeski
 */

// Theme Support
add_theme_support('menus');

// Includes
include_once('functions-styles.php');
include_once('functions-scripts.php');
include_once('functions-widgets.php');
include_once('functions-menus.php');

function rootbeer_setup() {
	
	// This styles the login screen with login-style.css to match the theme style
	function login_stylesheet() { ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/login-style.css" type="text/css" media="all" />
	<?php }
	add_action( 'login_enqueue_scripts', 'login_stylesheet' ); 

}
add_action( 'after_setup_theme', 'rootbeer_setup' );

// Foundation's flex-video class for embedded videos (just paste the youtube link!)
// Credit: thanks davidmcnee (http://wordpress.org/support/topic/adding-a-wrapping-div-to-video-embeds)
add_filter('embed_oembed_html', 'my_embed_oembed_html', 99, 4);
function my_embed_oembed_html($html, $url, $attr, $post_id) {
  return '<div class="flex-video">' . $html . '</div>';
}

?>