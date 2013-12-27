<?php get_header(); ?>
  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main large-8 columns" role="main">
        <?php include rootbeer_template_path(); ?>
      </main>
      <aside class="sidebar large-4 columns" role="complementary">
        <?php include rootbeer_sidebar_path(); ?>
      </aside>
    </div>
  </div>
<?php get_footer(); ?>