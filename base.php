<?php get_header(); ?>

<?php if ( 'nav-bar' === get_theme_mod( 'rootbeer_header_style' ) ) { ?>
  <?php get_template_part( 'templates/header', 'nav-bar' ); ?>
<?php } elseif ( 'top-bar' === get_theme_mod( 'rootbeer_header_style' ) ) { ?>
  <?php get_template_part( 'templates/header', 'top-bar' ); ?>
<?php } elseif ( 'inline-list' === get_theme_mod( 'rootbeer_header_style' ) ) { ?>
  <?php get_template_part( 'templates/header', 'inline-list' ); ?>
<?php } else { ?>
  <?php get_template_part( 'templates/header', 'custom' ); ?>
<?php } // end if/else ?>

    <div class="row" role="document">
      <main class="content medium-8 columns">
        <?php include rootbeer_template_path(); ?>
      </main>
      <aside class="sidebar medium-4 columns" role="complementary">
        <?php include rootbeer_sidebar_path(); ?>
      </aside>
    </div>

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

<?php get_footer(); ?>
