<?php
/**
 * The component for displaying meta information (Date, author, category, etc...).
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @author     JoshMedeski
 * @framework  Foundation
 */
?>
<hgroup>
	<h6><?php the_time(get_option('date_format')); ?> by <?php the_author(); ?> in 
	<?php 
		$categories = get_the_category();
		$separator = ' , ';
		$output = '';
		if($categories){
		foreach($categories as $category) {
		$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
		}
		echo trim($output, $separator);
		} ?></h6>
</hgroup>