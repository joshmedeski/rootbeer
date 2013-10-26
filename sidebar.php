<?php
/* Sidebar Content
 *
 * @package RootBeer
 * @author JoshMedeski
 */
if ( is_active_sidebar( 'sidebar_widgets' ) ) :
	dynamic_sidebar( 'sidebar_widgets' ); 
endif; ?>