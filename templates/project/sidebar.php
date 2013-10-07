<?php
/* Sidebar Content
 *
 * @package RootBeer
 * @author JoshMedeski
 */
if ( is_active_sidebar( 'sidebar' ) ) : ?>
	<div class="site--sidebar">
		<?php dynamic_sidebar( 'sidebar' ); ?>
	</div>
<?php endif; ?>