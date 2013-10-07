<?php
/* This is the Wordpress footer file.
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @author     JoshMedeski
 * @framework  Foundation
 */
wp_footer(); ?>
 
	<footer class="site--footer">
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