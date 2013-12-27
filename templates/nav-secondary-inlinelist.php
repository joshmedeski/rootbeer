<?php 
  $footer_navigation = array(
    'theme_location'  => 'secondary',
    'container'       => 'div',
    'container_class' => 'footer__nav',
    'menu_class'      => 'inline-list',
    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
    'depth'           => 1,
    'echo'            => true,
    'fallback_cb'     => 'false'
  );
wp_nav_menu( $footer_navigation ); ?>