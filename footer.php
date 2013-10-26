<?php
/* This is the Wordpress footer file.
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @author     JoshMedeski
 * @framework  Foundation
 */
wp_footer(); ?>

<footer class="footer">
	<?php if ( is_active_sidebar( 'footer_widgets' ) ) : ?>
		<?php dynamic_sidebar( 'footer_widgets' ); ?>
	<?php endif; ?>
	<section class="colophon">
		<?php wp_nav_menu( 'footer_navigation' ); ?>
		<div class="footer__colophon-text">
			<p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
		</div>
	</section>
</footer>

  <script>
  	document.write('<script src=' +
  	('__proto__' in {} ? '<?php echo get_template_directory_uri(); ?>/javascripts/vendor/zepto' : '<?php echo get_template_directory_uri(); ?>/javascripts/vendor/jquery') +
  	'.js><\/script>')
  </script>
  
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.abide.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.alerts.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.clearing.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.cookie.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.dropdown.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.forms.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.interchange.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.joyride.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.magellan.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.orbit.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.placeholder.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.reveal.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.section.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.tooltips.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.topbar.js"></script>
  
  <script>
    $(document).foundation();
  </script>

</body>
</html>