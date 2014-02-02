<? function rootbeer_setup() {
  
  // This styles the login screen with login-style.css to match the theme style
  function login_stylesheet() { ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/login-style.css" type="text/css" media="all" />
  <?php }
  // add_action( 'login_enqueue_scripts', 'login_stylesheet' ); 

  // Menus
  add_theme_support('menus');

  // Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
  add_theme_support('post-thumbnails');
  // set_post_thumbnail_size(150, 150, false);
  // add_image_size('category-thumb', 300, 9999); // 300px wide (and unlimited height)

  
  // Add post formats (http://codex.wordpress.org/Post_Formats)
  // add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style('/assets/css/editor-style.css');
}
add_action( 'after_setup_theme', 'rootbeer_setup' );
