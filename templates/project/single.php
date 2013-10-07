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
		<hgroup>
			<h1><?php the_title(); ?></h1>
			<h6><?php the_time(get_option('date_format')); ?> by <?php the_author(); ?> in 
			<?php 
				$categories = get_the_category();
				$separator = ' , ';
				$output = '';
				if($categories){
				foreach($categories as $category) {
				$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
				}
				echo trim($output, $separator);
				} ?></h6>
		</hgroup>
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