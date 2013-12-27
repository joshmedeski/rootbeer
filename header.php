<?php if ( 'nav-bar' === get_theme_mod( 'rootbeer_header_style' ) ) { ?>

  <?php get_template_part( 'templates/header', 'nav-bar' ); ?>
  
<?php } elseif ( 'top-bar' === get_theme_mod( 'rootbeer_header_style' ) ) { ?>

  <?php get_template_part( 'templates/header', 'top-bar' ); ?>

<?php } elseif ( 'inline-list' === get_theme_mod( 'rootbeer_header_style' ) ) { ?>

  <?php get_template_part( 'templates/header', 'inline-list' ); ?>

<?php } else { ?>

  <?php get_template_part( 'templates/header', 'custom' ); ?>
 
<?php } // end if/else ?>