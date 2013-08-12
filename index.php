<?php
/* Index Content
 *
 * @package RootBeer
 * @author JoshMedeski
 */
?>

<?php
/**
 * The default template file
 *
 * @package Root
 * @subpackge Templates
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

<div class="row">
    <!-- Main Content -->
    <div class="large-9 columns">
        <?php if ( have_posts() ) : ?>
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
<?php get_footer(); ?>
