<?php
/**
 * The page for displaying single pages.
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @author     JoshMedeski
 * @framework  Foundation
 */
get_header(); get_template_part( 'components/header-default' ); while ( have_posts() ) : the_post(); ?>

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
	<div class="large-9 columns">
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

<?php get_template_part( 'components/footer-default' ); get_footer(); ?>

