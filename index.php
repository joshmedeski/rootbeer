<?php get_header(); ?>
  <section class="content">
    <div class="row">
      <main class="large-8 columns" role="main">
        <?php if ( have_posts() ) :
          while ( have_posts() ) : the_post();
            get_template_part( 'content', get_post_format() );
          endwhile;
          else :
            get_template_part( 'content', 'none' );
        endif; ?>
      </main>
      <?php get_sidebar(); ?>
    </div>
  </section>
<?php get_footer(); ?>
