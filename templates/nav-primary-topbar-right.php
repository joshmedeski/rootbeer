<div class="contain-to-grid">
  <nav class="top-bar" data-topbar>
    <ul class="title-area">
      <li class="name">
        <h1 class="site-title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>

    <section class="top-bar-section">
      <? $topbar = array(
        'theme_location' => 'primary',
        'container'      => false,
        'depth'          => 0,
        'items_wrap'     => '<ul class="right">%3$s</ul>',
        'fallback_cb'    => 'reverie_menu_fallback', // workaround to show a message to set up a menu
        'walker'         => new rootbeer_walker( array( 'in_top_bar' => true, 'item_type'      => 'li') )
      ); 
      wp_nav_menu( $topbar ); ?>
    </section>
  </nav>
</div>