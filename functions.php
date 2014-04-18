<?php
// Start the engine
include_once( get_template_directory() . '/lib/init.php' );

// Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Rootbeer' );
define( 'CHILD_THEME_URL', 'http://github.com/joshmedeski/rootbeer/' );
define( 'CHILD_THEME_VERSION', '0.0.1' );

// HTML5 markup structure
add_theme_support( 'html5' );

// Viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

// Custom background
// add_theme_support( 'custom-background' );

// Add new image sizes
// add_image_size('grid-thumbnail', 100, 100, TRUE);

// Display author box on single posts
add_filter( 'get_the_author_genesis_author_box_single', '__return_true' );

// Before header widget
include_once( get_stylesheet_directory() . '/lib/functions/widget-before-header.php' );

// After header widget
include_once( get_stylesheet_directory() . '/lib/functions/widget-after-header.php' );

// After post widget
include_once( get_stylesheet_directory() . '/lib/functions/widget-after-post.php' );

// Footer widgets
add_theme_support( 'genesis-footer-widgets', 4 );

// Color style options
// include_once( get_stylesheet_directory() . '/lib/functions/color-styles.php' );

// Custom Fonts
// include_once( get_stylesheet_directory() . '/lib/functions/fonts.php' );

// Jetpack Sharing
// include_once( get_stylesheet_directory() . '/lib/functions/jetpack-sharing.php' );

// Breadcrumb Modifications
include_once( get_stylesheet_directory() . '/lib/functions/breadcrumb.php' );
