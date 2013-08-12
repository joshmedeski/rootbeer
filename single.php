<?php
/**
 * The page for displaying single pages.
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @author     JoshMedeski
 * @framework  Foundation
 */
get_header(); get_template_part( 'organism-header' ); ?>

<!-- Main Content -->
<div class="row">
	<div class="large-9 columns">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>
			
			<hr>
			
			<nav class="nav-single row">
				<div class="nav-previous large-6 columns"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></div>
				<div class="nav-next large-6 columns text-right"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></div>
			</nav>
			
			<hr>

			<?php comments_template( '', true ); ?>

			<hr>

		<?php endwhile; // end of the loop. ?>
		</div>

    <!-- Sidebar -->
    <div class="large-3 columns">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_template_part( 'organism-footer' ); get_footer(); ?>

