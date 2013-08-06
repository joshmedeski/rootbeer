<?php
/**
 * Reactor - A WordPress Framework based on Foundation by ZURB
 * Include the necessary files for Reactor Theme
 * Some files are included based on theme support
 *
 * @package Reactor
 * @author Anthony Wilhelm (@awshout / anthonywilhelm.com)
 * @since 1.1.0
 * @copyright Copyright (c) 2013, Anthony Wilhelm
 * @license GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 */

class Reactor {

	function __construct() {
		global $reactor;

		$reactor = new stdClass;
		
		add_action('after_setup_theme', array( &$this, 'options' ), 6);
		add_action('after_setup_theme', array( &$this, 'extensions' ), 12);
		add_action('after_setup_theme', array( &$this, 'functions' ), 13);
		add_action('after_setup_theme', array( &$this, 'content' ), 14);
	}
	
	function options() {	
		// function to get options
		require_once locate_template('/library/inc/functions/get-options.php');
		require_once locate_template('/library/inc/customizer/customize.php');
	}
		
	function extensions() {	
		// required extensions
		require_once locate_template('/library/inc/extensions/comments.php');
		require_once locate_template('/library/inc/extensions/styles.php');
		require_once locate_template('/library/inc/extensions/scripts.php');
		require_once locate_template('/library/inc/metaboxes/custom-meta.php');
		
		// custom widgets
		require_once locate_template('/library/inc/widgets/recent-posts.php');
		
		// if theme supports extensions
		require_if_theme_supports('reactor-menus', locate_template('/library/inc/extensions/walkers.php'));
		require_if_theme_supports('reactor-menus', locate_template('/library/inc/extensions/menus.php'));
		require_if_theme_supports('reactor-post-types', locate_template('/library/inc/extensions/post-types.php'));
		require_if_theme_supports('reactor-sidebars', locate_template('/library/inc/extensions/sidebars.php'));
		require_if_theme_supports('reactor-shortcodes', locate_template('/library/inc/shortcodes/reactor-shortcodes.php'));
		require_if_theme_supports('reactor-translation', locate_template('/library/inc/translation/language.php'));
	}
	
	function functions() {	
		// required functions
		require_once locate_template('/library/inc/functions/columns.php');
		require_once locate_template('/library/inc/functions/helpers.php');
		
		// optional functions
		require_once locate_template('/library/inc/functions/top-bar.php');
		require_once locate_template('/library/inc/functions/slider.php');
		
		// if theme supports functions
		require_if_theme_supports('reactor-breadcrumbs', locate_template('/library/inc/functions/breadcrumbs.php'));
		require_if_theme_supports('reactor-custom-login', locate_template('/library/inc/functions/custom-login.php'));
		require_if_theme_supports('reactor-page-links', locate_template('/library/inc/functions/page-links.php'));
		require_if_theme_supports('reactor-post-meta', locate_template('/library/inc/functions/post-meta.php'));
		require_if_theme_supports('reactor-tumblog-icons', locate_template('/library/inc/functions/tumblog-icons.php'));
		require_if_theme_supports('reactor-taxonomy-subnav', locate_template('/library/inc/functions/taxonomy-subnav.php'));
	}
	
	function content() {
		// hooked content
		require_once locate_template('/library/inc/extensions/hooks.php');
		require_once locate_template('/library/inc/content/content-header.php');
		require_once locate_template('/library/inc/content/content-footer.php');
		require_once locate_template('/library/inc/content/content-posts.php');
		require_once locate_template('/library/inc/content/content-pages.php');
	}
	
}