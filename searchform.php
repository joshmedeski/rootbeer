<form class="searchform" method="get" role="search" action="<?php echo home_url(); ?>">
  <label class="searchform__label" for="s"><?php echo esc_attr__('Search', 'rootbeer'); ?></label>
  <input class="searchform__field" name="s" type="text" placeholder="<?php echo esc_attr__('Type your search and hit enter', 'rootbeer'); ?>" value="<?php get_search_query(); ?>" />
  <input class="searchform__submit" type="submit" value="<?php echo esc_attr__('Search', 'rootbeer'); ?>" />
</form>
