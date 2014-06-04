<?php
// Start the engine
include_once( get_template_directory() . '/lib/init.php' );

// Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Rootbeer' );
define( 'CHILD_THEME_URL', 'http://github.com/joshmedeski/rootbeer/' );
define( 'CHILD_THEME_VERSION', '0.0.1' );

// TGM Plugin Activation
require_once( get_stylesheet_directory() . '/lib/functions/plugins.php');

// HTML5 markup structure
add_theme_support( 'html5' );

// Viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

// Custom background
// add_theme_support( 'custom-background' );

// Add new image sizes
// add_image_size('grid-thumbnail', 100, 100, TRUE);

// Video Wrapper
function add_video_wmode_transparent_and_wrapper($html, $url, $attr) {

  if ( strpos( $html, "<embed src=" ) !== false )
  {
    $html = str_replace('</param><embed', '</param><param name="wmode" value="opaque"></param><embed wmode="opaque" ', $html);
  }
  elseif ( strpos ( $html, 'feature=oembed' ) !== false )
  {
    $html = str_replace( 'feature=oembed', 'feature=oembed&wmode=opaque&rel=0&showinfo=0&controls=0', $html );
  }
  $return = '<div class="flex-video">'.$html.'</div>';
  return $return;
}
add_filter( 'embed_oembed_html', 'add_video_wmode_transparent_and_wrapper', 10, 3);

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

// Reposition the primary navigation menu to the top of the site
// remove_action( 'genesis_after_header', 'genesis_do_nav' );
// add_action( 'genesis_before_header', 'genesis_do_nav' );

// Custom Fonts
// include_once( get_stylesheet_directory() . '/lib/functions/fonts.php' );

// Jetpack Sharing
// include_once( get_stylesheet_directory() . '/lib/functions/jetpack-sharing.php' );

// Breadcrumb Modifications
include_once( get_stylesheet_directory() . '/lib/functions/breadcrumb.php' );
