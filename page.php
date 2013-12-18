<?php get_header(); ?>
  <section class="content">
    <div class="row">
      <main class="large-8 columns" role="main">
        <h2 class="entry-title"><?php the_title(); ?></h2>
        <?php the_content('Read more...'); ?>
      </main>
      <?php get_sidebar(); ?>
    </div>
  </section>
<?php get_footer(); ?>