<?php
/* Sidebar
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @framework  Foundation
 * @author     JoshMedeski
 */
?>
	<?php if ( is_active_sidebar( 'sidebar-widgets' ) ) :
		dynamic_sidebar( 'sidebar-widgets' );
	endif; ?>