<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php get_template_part( 'head', 'title' ); ?>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!--[if lt IE 8]>
      <div class="alert-box">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
      </div>
    <![endif]-->
    <?php get_header(); ?>
    <div class="container" role="document">
      <div class="content row">
        <main class="main medium-8 columns" role="main">
          <?php include rootbeer_template_path(); ?>
        </main>
        <aside class="sidebar medium-4 columns" role="complementary">
          <?php include rootbeer_sidebar_path(); ?>
        </aside>
      </div>
    </div>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>