<?php
/**
 * This is the Top Bar.
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @author     JoshMedeski
 * @framework  Foundation
 */
?>

<div class="contain-to-grid">
  <!-- Starting the Top-Bar -->
  <nav class="top-bar">
      <ul class="title-area">
          <li class="name">
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          </li>
      <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
      <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
      </ul>
      <section class="top-bar-section">
      <?php
          wp_nav_menu( array(
              'theme_location' => 'topbar',
              'container' => false,
              'depth' => 0,
              'items_wrap' => '<ul class="right">%3$s</ul>',
              'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
              'walker' => new rootbeer_walker( array(
                  'in_top_bar' => true,
                  'item_type' => 'li'
              ) ),
          ) );
      ?>
      </section>
  </nav>
  <!-- End of Top-Bar -->
</div>