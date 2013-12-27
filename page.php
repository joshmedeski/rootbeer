<<<<<<< HEAD
<?php if ( have_posts() ) :
  while ( have_posts() ) : the_post();
    get_template_part( 'content', get_post_format() );
  endwhile;
  else :
    get_template_part( 'content', 'none' );
endif; ?>
=======
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
>>>>>>> 115308afa5f1504a4d6957d7018df40e698df605
