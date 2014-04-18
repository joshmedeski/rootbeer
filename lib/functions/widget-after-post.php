<?
// After Post Widget
//
// http://my.studiopress.com/tutorials/add-genesis-box/

// Register widget area
genesis_register_sidebar( array(
  'id'            => 'after-post',
  'name'          => __( 'After Post', 'rootbeer' ),
  'description'   => __( 'This is a widget area after the post', 'rootbeer' ),
) );

// Hook widget area after post content
add_action( 'genesis_after_post_content', 'rb_after_post', 9 );
  function rb_after_post() {
  if ( is_singular( 'post' ) )
    genesis_widget_area( 'after-post', array(
      'before' => '<div class="after-post widget-area">',
      'after' => '</div>',
  ) );
}
