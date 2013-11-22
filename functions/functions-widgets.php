<?php
/* Widgets
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @framework  Foundation
 * @author     JoshMedeski
 */

// Sidebar Widgets
function rootbeer_sidebar_widgets() {
	register_sidebar( array(
		'name'          => __( 'Sidebar Widgets', 'rootbeer' ),
		'description'   => __( 'These are the widgets in the sidebar.', 'rootbeer' ),
		'id'            => 'sidebar-widgets',
		'class'         => 'widgets--sidebar',
		'before_widget' => '<div class="widgets--sidebar__widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgets--sidebar__title">',
		'after_title'   => '</h4>'
	) );
}
add_action( 'widgets_init', 'rootbeer_sidebar_widgets' );

// Footer Widgets
function rootbeer_footer_widgets() {
	register_sidebar( array(
		'name'          => __( 'Bottom Widgets', 'rootbeer' ),
		'description'   => __( 'These are the widgets in the bottom.', 'rootbeer' ),
		'id'            => 'bottom-widgets',
		'class'         => 'widgets--bottom',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget__title">',
		'after_title'   => '</h4>'
	) );
}
add_action( 'widgets_init', 'rootbeer_footer_widgets' );

?>