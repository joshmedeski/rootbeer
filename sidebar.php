<?php
/* Sidebar
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @framework  Foundation
 * @author     JoshMedeski
 */
if ( is_active_sidebar( 'rootbeer_sidebar_widgets' ) ) :
	dynamic_sidebar( 'rootbeer_sidebar_widgets' );
endif; ?>