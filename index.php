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

<section class="site__content">
    <div class="row">
        <main role="main" class="site__main large-8 columns">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
            <?php endif; ?>
        </main>
        <aside role="complementary" class="site__sidebar large-4 columns">
            <?php get_sidebar(); ?>
        </aside>
    </div>
</section>

<?php get_footer(); ?>