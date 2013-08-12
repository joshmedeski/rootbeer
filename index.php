<?php
/**
 * The page for displaying 404 pages (Not Found).
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @author     JoshMedeski
 * @framework  Foundation
 */
get_header(); get_template_part( 'organism-header' ); ?>

<div class="row">
    <!-- Main Content -->
    <div class="large-9 columns">
        <?php if ( have_posts() ) : ?>
            <h1>From the Blog</h1>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>
        <?php else : ?>
            
            <h2>Nothing here, come back soon!</h2>
        <?php endif; // end have_posts() check ?>
    </div>
    <!-- Sidebar -->
    <div class="large-3 columns">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_template_part( 'organism-footer' ); get_footer(); ?>