<?
// After Header Widget
//
// http://my.studiopress.com/tutorials/add-genesis-box/

// Register widget area
genesis_register_sidebar( array(
  'id'            => 'before-header',
  'name'          => __( 'Before Header', 'rootbeer' ),
  'description'   => __( 'This is a widget area before the header', 'rootbeer' ),
) );

// Hook widget area after post content
add_action( 'genesis_before_header', 'rb_before_header', 9 );
  function rb_before_header() {
  if ( is_singular( 'post' ) )
    genesis_widget_area( 'before-header', array(
      'before' => '<div class="before-header widget-area">',
      'after' => '</div>',
  ) );
}
