<?php
/* Functions
 *
 * @package RootBeer
 * @author JoshMedeski
 */

function rootbeer_setup() {

// This theme styles the visual editor with editor-style.css to match the theme style.
add_editor_style();

}
add_action( 'after_setup_theme', 'rootbeer_setup' );


$args = array(
	'name'          => __( 'Main Sidebar', 'rootbeer' ),
	'id'            => 'main-sidebar',
	'class'         => 'content-sidebar',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h4 class="widgettitle">',
	'after_title'   => '</h4>' ); 
?>


