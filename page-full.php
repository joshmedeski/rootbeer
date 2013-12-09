<?php
/* Page Template: Full Width
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @framework  Foundation
 * @author     JoshMedeski
 */
get_header(); ?>
  <section class="content">
  	<div class="row">
  		<main class="large-10 large-centered columns" role="main">
  			<?php if ( have_posts() ) :
  				while ( have_posts() ) : the_post();
  					get_template_part( 'content', get_post_format() );
  				endwhile;
  			endif;?>
  		</main>
  	</div>
  </section>
<?php get_footer(); ?>