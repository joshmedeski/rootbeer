<?

// Add Jetpack share buttons above post
//
// Display the buttons at the top and bottom of your entry content
remove_filter( 'the_content', 'sharing_display', 19 );
remove_filter( 'the_excerpt', 'sharing_display', 19 );

add_filter( 'the_content', 'sp_share_buttons_above_post', 19 );
add_filter( 'the_excerpt', 'sp_share_buttons_above_post', 19 );

function sp_share_buttons_above_post( $content = '' ) {
  if ( function_exists( 'sharing_display' ) ) {
    return sharing_display() . $content;
  }
  else {
    return $content;
  }
}
