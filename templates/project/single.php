<?php
/**
 * The page for displaying single pages.
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @author     JoshMedeski
 * @framework  Foundation
 */
get_header(); while ( have_posts() ) : the_post(); ?>

<!-- Main Content -->
<div class="row">
	<div class="large-8 columns main-content">
		<h1><?php the_title(); ?></h1>
		<p><?php the_post_thumbnail(); ?></p>
		<?php the_content(); ?>
		
		<hr>

		<nav class="nav-single row">
			<div class="nav-previous small-6 columns"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></div>
			<div class="nav-next small-6 columns text-right"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></div>
		</nav>
		<hr>
		<?php comments_template( '', true ); ?>
	</div>
<?php endwhile; // end of the loop. ?>


  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>

