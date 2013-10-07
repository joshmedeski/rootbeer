<?php
/**
 * The page for displaying the Index.
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @author     JoshMedeski
 * @framework  Foundation
 */
get_header(); ?>

<!-- TODO: Intro CTA here, mailchimp signup -->

<div class="row">
    <!-- Main Content -->
    <div class="large-8 columns main-content">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>
        <?php else : ?>
            
            <h2>Nothing here, come back soon!</h2>
        <?php endif; // end have_posts() check ?>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>