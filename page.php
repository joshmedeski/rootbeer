<?php
/* The template for displaying pages.
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @author     JoshMedeski
 * @framework  Foundation
 */
get_header(); while (have_posts()) : the_post(); ?>

<section class="page">
	<div class="page__row">
		<main class="page__columns">
			<h1 class="page__title"><?php the_title(); ?></h1>
			<div class="page__thumbnail"><?php the_post_thumbnail(); ?></div>
			<div class="page__content"><?php the_content(); ?></div>
			<?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
		</main>
		<aside class="page__sidebar">
			<?php get_sidebar(); ?>
		</aside>
	</div>
</section>

<?php endwhile; get_footer(); ?>