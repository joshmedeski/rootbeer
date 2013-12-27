<header class="header" role="banner">
  <div class="row">
    <div class="medium-8 columns">
      <h1 class="site-title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
      <p class="site-tagline subheader"><?php bloginfo('description'); ?></p>
    </div>
    <div class="medium-4 columns hide-for-small">
      <?php get_search_form(); ?>
    </div>
  </div>
</header>

<?php get_template_part( 'nav-primary', 'topbar' ); ?>