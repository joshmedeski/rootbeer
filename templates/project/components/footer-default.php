<?php
/* This will be seen on the bottom of every page.
 *
 * @package WordPress
 * @subpackage Root Beer
 * @author Josh Medeski
 * @framework Foundation
 */
?>

<footer>
	<?php if ( is_active_sidebar( 'bottom-sidebar' ) ) : ?>
		<section id="footer-widgets">
			<!-- Widgets -->
			<div class="row">
				<hr>
				<?php dynamic_sidebar( 'bottom-sidebar' ); ?>
			</div>
		</section>
	<?php endif; ?>
	
	<section id="footer-colophon">
		<div class="row">
			<hr>
			<!-- Footer Menu -->
			<div class="large-6 medium-6 columns">
      <?php
          wp_nav_menu( array(
              'theme_location' => 'footer',
              'container'      => false,
              'menu_class'     => 'inline-list',
							'echo'           => true,
							'fallback_cb'    => false,
              'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
              'depth'          => 1,
			) ); ?>
			</div>
			<!-- Colphon -->
			<div class="large-6 medium-6 columns">
				<p class="colophon">&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
			</div>
		</div>
	</section>
</footer>