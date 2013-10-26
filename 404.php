<?php
/* 404
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @framework  Foundation
 * @author     JoshMedeski
 */
get_header(); ?>

<div class="row">
	<div class="text-center entry-header small-12 columns">
		<h2>"These aren&rsquo;t the droids you&rsquo;re looking for."</h2>
		<img src="<?php echo get_template_directory_uri(); ?>/images/404.png" alt="Old Ben">
	</div>
</div>

<div class="row">
	<div class="large-12 columns">
		<hr>
		<p class="text-center">It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
		<div class="medium-8 medium-centered large-6 large-centered columns">
			<?php get_search_form(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>