<?

// Enqueue Open Sans
add_action( 'wp_enqueue_scripts', 'rb_open_sans' );
function rb_open_sans() {
  wp_enqueue_style( 'google-font-open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700', array(), CHILD_THEME_VERSION );
}
