<header class="header" role="banner">
  <div class="row">
    <div class="large-6 columns">
      <h1 class="site-title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
      <p class="site-tagline subheader"><?php bloginfo('description'); ?></p>
    </div>
    <div class="large-6 columns">
      <?php get_template_part( 'nav-primary', 'inlinelist' ); ?>
    </div>
  </div>
</header>