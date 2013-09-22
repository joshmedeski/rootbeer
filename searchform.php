<?php
/**
 * The organism for displaying the header content.
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @author     JoshMedeski
 * @framework  Foundation
 */
?>

<form role="search" method="get" id="searchform" action="<?php echo home_url(); ?>">
	<div class="row collapse">
		<div class="small-8 columns">
			<input type="text" value="<?php get_search_query(); ?>" name="s" id="s" placeholder="<?php echo esc_attr__('Search', 'rootbeer'); ?>" />
		</div>
		<div class="small-4 columns">
			<input class="secondary button prefix" type="submit" id="searchsubmit" value="<?php echo esc_attr__('Search', 'rootbeer'); ?>" />
		</div>
	</div>
</form>