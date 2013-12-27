<div class="contain-to-grid">
  <nav class="top-bar" data-topbar>
    <ul class="title-area">
      <li class="name"></li>
      <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>

    <section class="top-bar-section">
    <!-- Left Nav Section -->
    <? $topbar = array(
      'theme_location' => 'primary',
      'container'      => false,
      'depth'          => 0,
      'items_wrap'     => '<ul class="left">%3$s</ul>',
      'fallback_cb'    => 'reverie_menu_fallback', // workaround to show a message to set up a menu
      'walker'         => new rootbeer_walker( array( 'in_top_bar' => true, 'item_type'      => 'li') )
    ); 
    wp_nav_menu( $topbar ); ?>
      <!-- Right Nav Section -->
      <ul class="right">
        <li class="has-form show-for-small">
          <form class="search-form" method="get" role="search" action="<?php echo home_url(); ?>
            ">
            <div class="row collapse">
              <div class="small-8 columns">
                <input name="s" type="text" placeholder="<?php echo esc_attr__('Search', 'rootbeer'); ?>" value="<?php get_search_query(); ?>"></div>
              <div class="small-4 columns">
                <input class="secondary button expand" type="submit" value="<?php echo esc_attr__('Search', 'rootbeer'); ?>"></div>
            </div>
          </form>
        </li>
      </ul>
    </section>
  </nav>
</div>