<?php
/* Footer
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @framework  Foundation
 * @author     JoshMedeski
 */
wp_footer(); ?>

<?php if ( is_active_sidebar( 'footer-widgets' ) ) :
	dynamic_sidebar( 'footer_navigation' );
endif; ?>

<footer class="footer">
	<div class="footer__row">
		<?php 
			$footer_navigation = array(
				'theme_location'  => 'footer',
				'container'       => 'div',
				'container_class' => 'footer__nav',
				'menu_class'      => 'nav--footer',
				'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
				'depth'           => 1,
				'echo'            => true,
				'fallback_cb'     => 'false'
			); 
		wp_nav_menu( $footer_navigation ); ?>
		<div class="footer__colophon">
			<p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>.</p>
		</div>
		</div>
</footer>

<script>
	$(document).foundation();
</script>

</body>
</html>