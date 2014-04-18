<?
// After Header Widget
//
// http://my.studiopress.com/tutorials/add-genesis-box/

// Register widget area
genesis_register_sidebar( array(
  'id'            => 'after-header',
  'name'          => __( 'After Header', 'rootbeer' ),
  'description'   => __( 'This is a widget area after the header', 'rootbeer' ),
) );

// Hook widget area after post content
add_action( 'genesis_after_header', 'rb_after_header', 9 );
  function rb_after_header() {
  if ( is_singular( 'post' ) )
    genesis_widget_area( 'after-header', array(
      'before' => '<div class="after-header widget-area">',
      'after' => '</div>',
  ) );
}
