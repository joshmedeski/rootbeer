<?php
/* The Search Form
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @framework  Foundation
 * @author     JoshMedeski
 */
?>

<form role="search" class="searchform" method="get" action="<?php echo home_url(); ?>">
	<div class="row collapse">
		<div class="searchform__input small-8 columns">
			<input type="text" value="<?php get_search_query(); ?>" name="s" placeholder="<?php echo esc_attr__('Search', 'rootbeer'); ?>" />
		</div>
		<div class="searchform__submit small-4 columns">
			<input type="submit" class="secondary button prefix" value="<?php echo esc_attr__('Search', 'rootbeer'); ?>" />
		</div>
	</div>
</form>