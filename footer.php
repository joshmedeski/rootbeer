<?php get_sidebar('bottom'); ?>

<?php if ( 'top' === get_theme_mod( 'rootbeer_footer_style' ) ) { ?>

  <?php get_template_part( 'templates/footer', 'top' ); ?>
  
<?php } elseif ( 'right' === get_theme_mod( 'rootbeer_footer_style' ) ) { ?>

  <?php get_template_part( 'templates/footer', 'right' ); ?>

<?php } elseif ( 'left' === get_theme_mod( 'rootbeer_footer_style' ) ) { ?>

  <?php get_template_part( 'templates/footer', 'left' ); ?>

<?php } elseif ( 'center' === get_theme_mod( 'rootbeer_footer_style' ) ) { ?>

  <?php get_template_part( 'templates/footer', 'center' ); ?>

<?php } else { ?>

  <?php get_template_part( 'templates/footer', 'custom' ); ?>
 
<?php } // end if/else ?>		