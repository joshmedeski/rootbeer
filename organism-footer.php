<?php
/**
 * The organism for displaying footer content.
 *
 * @package WordPress
 * @subpackage Root Beer
 * @author Josh Medeski
 * @framework Foundation
 */
?>

<footer>
	<section id="footer-widgets">
		<!-- Widgets -->
		<div class="row">
			<?php if ( is_active_sidebar( 'bottom-sidebar' ) ) : ?>
			<?php dynamic_sidebar( 'bottom-sidebar' ); ?>
	<?php endif; ?>
		</div>
	</section>
	
	<section id="footer-colophon">
		<div class="row">
			<hr>
			<!-- Footer Menu -->
			<div class="large-6 medium-6 columns">
				<?php if ( function_exists('rootbeer_footer_nav') ) : ?>
					<nav class="footer-links" role="navigation">
						<?php rootbeer_footer_nav(); ?>
					</nav><!-- #footer-links -->
				<?php endif; ?>
			</div>
			<!-- Colphon -->
			<div class="large-6 medium-6 columns">
				<p class="colophon">&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>.</p>
			</div>
		</div>
	</section>
</footer>