<?php
/**
 * The organism for displaying the header content.
 *
 * @package WordPress
 * @subpackage Root Beer
 * @author Josh Medeski
 * @framework Foundation
 */
?>

<form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
	<div class="row collapse">
		<label for="s"><?php _e('Search for:', 'rootbeer'); ?></label>
		<div class="small-12 medium-9 large-9 columns">
			<input type="text" value="<?php get_search_query(); ?>" name="s" id="s" placeholder="<?php echo esc_attr__('Search', 'rootbeer'); ?>" />
		</div>
		<div class="small-12 medium-3 large-3 columns">
			<input class="button prefix" type="submit" id="searchsubmit" value="<?php echo esc_attr__('Search', 'rootbeer'); ?>" />
		</div>
	</div>
</form>