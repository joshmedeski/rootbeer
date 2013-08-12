<?php
/* Sidebar Content
 *
 * @package RootBeer
 * @author JoshMedeski
 */
?>

<?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
		<?php dynamic_sidebar( 'main-sidebar' ); ?>
<?php endif; ?>