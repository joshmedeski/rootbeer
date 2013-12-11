<form class="search-form" method="get" role="search" action="<?php echo home_url(); ?>">
	<div class="row collapse">
		<div class="small-8 columns">
			<input name="s" type="text" placeholder="<?php echo esc_attr__('Search', 'rootbeer'); ?>" value="<?php get_search_query(); ?>">
		</div>
		<div class="small-4 columns">
			<input class="secondary button prefix" type="submit" value="<?php echo esc_attr__('Search', 'rootbeer'); ?>">
		</div>
	</div>
</form>