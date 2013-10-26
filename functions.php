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

// Register Sidebar Widgets
function sidebar_widgets() {
	register_sidebar( array(
		'name'          => __( 'Sidebar Widgets', 'rootbeer' ),
		'description'   => __( 'Appears in the sidebar.', 'rootbeer' ),
		'class'         => 'widgets--sidebar',
		'before_widget' => '<div class="widgets--sidebar__widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgets--sidebar__title">',
		'after_title'   => '</h4>'
	) );
}
add_action( 'widgets_init', 'sidebar_widgets' );

// Register Footer Widgets
function footer_widgets() {
	register_sidebar( array(
		'name'          => __( 'Footer Widgets', 'rootbeer' ),
		'description'   => __( 'Appears in the footer.', 'rootbeer' ),
		'class'         => 'widget--footer',
		'before_widget' => '<div class="widgets--footer__widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgets--footer__title">',
		'after_title'   => '</h4>'
	) );
}
add_action( 'widgets_init', 'footer_widgets' );

// Register Footer Navigation
$footer_navigation = array(
	'theme_location'  => 'footer_navigation',
	'container'       => 'section',
	'container_class' => 'navigation--footer',
	'menu_class'      => 'inline-list',
	'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
	'depth'           => 1,
	'echo'            => true,
	'fallback_cb'     => 'false'
);
wp_nav_menu( $footer_navigation );

// Add menu supports. http://codex.wordpress.org/Function_Reference/register_nav_menus
add_theme_support('menus');
register_nav_menus(array(
	'topbar' => __('Topbar', 'rootbeer'),
	'footer' => __('Footer', 'rootbeer')
));

/**
 * class required_walker
 * Custom output to enable the the ZURB Navigation style.
 * Courtesy of Kriesi.at. http://www.kriesi.at/archives/improve-your-wordpress-navigation-menu-output
 * From required+ Foundation http://themes.required.ch
 */
class rootbeer_walker extends Walker_Nav_Menu {

	/**
	 * Specify the item type to allow different walkers
	 * @var array
	 */
	var $nav_bar = '';

	function __construct( $nav_args = '' ) {

		$defaults = array(
			'item_type' => 'li',
			'in_top_bar' => false,
		);
		$this->nav_bar = apply_filters( 'req_nav_args', wp_parse_args( $nav_args, $defaults ) );
	}

	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {

        $id_field = $this->db_fields['id'];
        if ( is_object( $args[0] ) ) {
            $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
        }
        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		// Check for flyout
		$flyout_toggle = '';
		if ( $args->has_children && $this->nav_bar['item_type'] == 'li' ) {

			if ( $depth == 0 && $this->nav_bar['in_top_bar'] == false ) {

				$classes[] = 'has-flyout';
				$flyout_toggle = '<a href="#" class="flyout-toggle"><span></span></a>';

			} else if ( $this->nav_bar['in_top_bar'] == true ) {

				$classes[] = 'has-dropdown';
				$flyout_toggle = '';
			}

		}

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		if ( $depth > 0 ) {
			$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
		} else {
			$output .= $indent . ( $this->nav_bar['in_top_bar'] == true ? '<li class="divider"></li>' : '' ) . '<' . $this->nav_bar['item_type'] . ' id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
		}

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

		$item_output  = $args->before;
		$item_output .= '<a '. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $flyout_toggle; // Add possible flyout toggle
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

	function end_el( &$output, $item, $depth = 0, $args = array() ) {

		if ( $depth > 0 ) {
			$output .= "</li>\n";
		} else {
			$output .= "</" . $this->nav_bar['item_type'] . ">\n";
		}
	}

	function start_lvl( &$output, $depth = 0, $args = array() ) {

		if ( $depth == 0 && $this->nav_bar['item_type'] == 'li' ) {
			$indent = str_repeat("\t", 1);
    		$output .= $this->nav_bar['in_top_bar'] == true ? "\n$indent<ul class=\"dropdown\">\n" : "\n$indent<ul class=\"flyout\">\n";
    	} else {
			$indent = str_repeat("\t", $depth);
    		$output .= $this->nav_bar['in_top_bar'] == true ? "\n$indent<ul class=\"dropdown\">\n" : "\n$indent<ul class=\"level-$depth\">\n";
		}
  	}
}

// Foundation's flex-video class for embedded videos (just paste the youtube link!)
// Credit: thanks davidmcnee (http://wordpress.org/support/topic/adding-a-wrapping-div-to-video-embeds)
add_filter('embed_oembed_html', 'my_embed_oembed_html', 99, 4);
function my_embed_oembed_html($html, $url, $attr, $post_id) {
  return '<div class="flex-video">' . $html . '</div>';
}

?>