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


// Register Sidebar
function rootbeer_main_sidebar() {
	register_sidebar( array(
		'name' => __( 'Side Widgets', 'rootbeer' ),
		'id' => 'main-sidebar',
		'description' => __( 'Appears on the sidebar of every post & page.', 'rootbeer' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );
}
add_action( 'widgets_init', 'rootbeer_main_sidebar' );

// Footer Sidebar
function rootbeer_bottom_sidebar() {
	register_sidebar( array(
		'name' => __( 'Bottom Widgets', 'rootbeer' ),
		'id' => 'bottom-sidebar',
		'description' => __( 'Appears on the bottom of every post & page, best results with 4 widgets.', 'rootbeer' ),
		'before_widget' => '<aside id="%1$s" class="large-3 columns widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
}
add_action( 'widgets_init', 'rootbeer_bottom_sidebar' );


	
register_nav_menu('topbar-right', 'Top Bar Right');
	if ( !function_exists('rootbeer_topbar_right') ) {
		function rootbeer_topbar_right() {
			$defaults = array( 
				'theme_location'  => 'topbar-right',
				'container'       => false,
				'menu_class'      => 'top-bar-menu right',
				'echo'            => true,
				'fallback_cb'     => false,
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker' 					=> new RootbeerTopbarWalker()
			 );
			return wp_nav_menu( $defaults );
		}
	}
	
register_nav_menu('inline-list', 'Inline List');
	if ( !function_exists('rootbeer_inline_list') ) {
		function rootbeer_inline_list() { 
			$defaults = array( 
				'theme_location'  => 'inline-list',
				'container'       => false,
				'menu_class'      => 'inline-list',
				'echo'            => true,
				'fallback_cb'     => false,
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 1,
			);
			wp_nav_menu( $defaults );
		}
	}

register_nav_menu('footer-nav', 'Footer');
	if ( !function_exists('rootbeer_footer_nav') ) {
		function rootbeer_footer_nav() { 
			$defaults = array( 
				'theme_location'  => 'footer-nav',
				'container'       => false,
				'menu_class'      => 'inline-list',
				'echo'            => true,
				'fallback_cb'     => false,
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 1,
			);
			wp_nav_menu( $defaults );
		}
}

?>