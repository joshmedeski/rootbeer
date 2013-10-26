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
	dynamic_sidebar( 'footer-widgets' );
endif; ?>

<footer class="footer">
	<div class="footer__row">
		<div class="footer__columns">
			<p class="footer__text">&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>.</p>
		</div>
	</div>
</footer>

	<script>
		document.write('<script src=' +
		('__proto__' in {} ? '/javascripts/vendor/zepto' : '/javascripts/vendor/jquery') + '.js><\/script>')
	</script>
  
	<script>
		$(document).foundation();
	</script>

</body>
</html>