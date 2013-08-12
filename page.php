<?php
/**
 * The template for displaying pages.
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @author     JoshMedeski
 * @framework  Foundation
 */
get_header(); get_template_part( 'organism-header' ); ?>


<div class="row">
	<!-- Article -->
	<div class="large-9 columns">
		<?php while (have_posts()) : the_post(); ?>
			<h1 class="entry-title"><?php the_title(); ?></h1> 
			<?php the_content(); ?>
			<?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
		<?php endwhile; ?>
	</div>
  <!-- Sidebar -->
  <div class="large-3 columns">
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_template_part( 'organism-footer' ); get_footer(); ?>