<?php
/* Single
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @framework  Foundation
 * @author     JoshMedeski
 */
get_header(); while ( have_posts() ) : the_post(); ?>

<section class="single">
	<div class="single__row">
		<article class="single__columns">
			<h1 class="single__title"><?php the_title(); ?></h1>
			<h6 class="single__meta"><?php the_time(get_option('date_format')); ?> by <?php the_author(); ?> in 
			<?php 
				$categories = get_the_category();
				$separator = ' , ';
				$output = '';
				if($categories){
				foreach($categories as $category) {
				$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
				}
				echo trim($output, $separator);
				} ?>
			</h6>
			<div class="single__content"><?php the_content(); ?></div>
			<div class="single__thumbnail"><?php the_post_thumbnail(); ?></div>
			<hr>
			<nav class="single__nav">
				<div class="single__nav--previous">
					<?php previous_post_link( '%link' ); ?>
				</div>
				<div class="single__nav--next">
					<?php next_post_link( '%link' ); ?>
				</div>
			</nav>
			<hr>
			<?php comments_template(); ?>
		</article>
		<aside class="single__sidebar">
			<?php get_sidebar(); ?>	
		</aside>
	</div>
</section>

<?php endwhile; get_footer(); ?>