<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Title Credit: http://perishablepress.com/how-to-generate-perfect-wordpress-title-tags-without-a-plugin/ -->
  <title><?php
    if (function_exists('is_tag') && is_tag()) { 
      echo 'Tag Archive for &quot;'.$tag.'&quot; — '; 
    } 
    elseif (is_archive()) { 
      wp_title(''); echo ' Archive — '; 
    }
    elseif (is_search()) { 
      echo 'Search for &quot;'.wp_specialchars($s).'&quot; — '; 
    }
    elseif (!(is_404()) && (is_single()) || (is_page())) { 
      wp_title(''); echo ' — '; 
    }
    elseif (is_404()) {
      echo 'Not Found — '; 
    }
    if (is_home()) { 
      bloginfo('name'); echo ' — '; bloginfo('description'); 
    }
    else { bloginfo('name'); }
  ?></title>

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app.css">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

<body <?php body_class(); ?>>

		<?php get_template_part( 'header', '1' ); ?>