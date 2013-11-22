		<section class="widgets--bottom">
			<?php if ( is_active_sidebar( 'bottom-widgets' ) ) :
				dynamic_sidebar( 'bottom-widgets' );
			endif; ?>
		</section>
		
		<footer class="footer">
			<div class="row">
				<?php 
					$footer_navigation = array(
						'theme_location'  => 'footer',
						'container'       => 'div',
						'container_class' => 'footer__nav',
						'menu_class'      => 'inline-list',
						'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
						'depth'           => 1,
						'echo'            => true,
						'fallback_cb'     => 'false'
					);
				wp_nav_menu( $footer_navigation ); ?>

				<div class="footer__copyright">
					<p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>.</p>
				</div>
				</div>
		</footer>

		<?php wp_footer(); ?>

		<script>
  		$(document).foundation();
		</script>
	</body>
</html>