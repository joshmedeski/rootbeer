<?php if (!have_posts()) : ?>
  <div class="alert-box">
    <?php _e('Sorry, no results were found.', 'rootbeer'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_format()); ?>
<?php endwhile; ?>