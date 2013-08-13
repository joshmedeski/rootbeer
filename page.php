<?php
/**
 * The template for displaying pages.
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @author     JoshMedeski
 * @framework  Foundation
 */
get_header(); get_template_part( 'components/header-default' ); while (have_posts()) : the_post(); ?>

<!-- The Title -->
<section id="title">
	<div class="row">
		<div class="small-12 columns">
			<h1><?php the_title(); ?></h1>
		</div>
		<hr>
	</div>
</section>

<!-- Main Content -->
<div class="row">
	<div class="large-8 columns">
		<p><?php the_post_thumbnail(); ?></p>
		<?php the_content(); ?>
		<?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
	</div>
	<?php get_sidebar(); ?>
</div>

<?php endwhile; get_template_part( 'components/footer-default' ); get_footer(); ?>