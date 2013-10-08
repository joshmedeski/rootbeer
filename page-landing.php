<?php
/* Template Name: Landing Page
 * The template for displaying landing pages.
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @author     JoshMedeski
 * @framework  Foundation
 */
get_header(); while (have_posts()) : the_post(); ?>

<!-- Main Content -->
<div class="row">
	<div class="large-8 large-centered columns main-content">
		<h1 style="text-align:center;"><?php the_title(); ?></h1>
		<p><?php the_post_thumbnail(); ?></p>
		<?php the_content(); ?>
		<?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
	</div>
</div>

<?php endwhile; get_footer(); ?>