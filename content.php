<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>">
		<header class="entry-header">
			<?php if ( is_single() ) : ?>
			<h2 class="entry-title"><?php the_title(); ?></h2>
			<?php else : ?>
			<h2 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
			<?php endif; // is_single() ?>

			<?php get_template_part( 'components/meta' ); ?>

			<p><?php the_post_thumbnail(); ?></p>

			<?php if ( comments_open() ) : ?>
				<p><?php comments_popup_link(); ?></p>
			<?php endif; // comments_open() ?>
			
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
		<?php the_content( __( 'Read More &raquo;', 'rootbeer' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'rootbeer' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>
	</article>