<?php
/* Page Template: Full Width
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @framework  Foundation
 * @author     JoshMedeski
 */
get_header(); ?>

<section class="site__content">
	<div class="row">
		<main role="main" class="site__main large-10 large-centered columns">
			<?php if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );
				endwhile;
			endif;?>
		</main>
	</div>
</section>

<?php get_footer(); ?>