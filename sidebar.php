<?php
/* Sidebar Content
 *
 * @package RootBeer
 * @author JoshMedeski
 */
if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
	<div class="large-4 columns side-content">
		<?php dynamic_sidebar( 'main-sidebar' ); ?>
	</div>
<?php endif; ?>