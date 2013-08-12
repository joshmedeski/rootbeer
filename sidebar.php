<?php
/* Sidebar Content
 *
 * @package RootBeer
 * @author JoshMedeski
 */
?>

<h3>The Sidebar</h3>

<?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
	<ul id="sidebar">
		<?php dynamic_sidebar( 'main-sidebar' ); ?>
	</ul>
<?php endif; ?>