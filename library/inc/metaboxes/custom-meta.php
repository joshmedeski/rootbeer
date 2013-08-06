<?php
/**
 * Custom Meta Boxes
 * This creates custom meta boxes from meta-fields.php
 *
 * @author Tammy Hart (@tammyhart / tammyhartdesigns.com)
 * @author Anthony Wilhelm (@awshout / anthonywilhelm.com)
 * @license GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 */
 
/**
 * metaboxes directory constant
 */
define( 'CUSTOM_METABOXES_DIR', get_template_directory_uri() . '/library/inc/metaboxes' );

/**
 * Require the meta box fields
 */
//require_once('meta-fields.php');
require_once locate_template('/library/inc/metaboxes/meta-fields.php');

/**
 * recives data about a form field and spits out the proper html
 *
 * @param	array					$field			array with various bits of information about the field
 * @param	string|int|bool|array	$meta			the saved data for this field
 * @param	array					$repeatable		if is this for a repeatable field, contains parant id and the current integar
 *
 * @return	string									html for the field
 */
function custom_meta_box_field( $field, $meta = null, $repeatable = null ) {
	if ( !( $field || is_array( $field ) ) )
		return;

	// get field data
	$type = isset( $field['type'] ) ? $field['type'] : null;
	$label = isset( $field['label'] ) ? $field['label'] : null;
	$desc = isset( $field['desc'] ) ? '<span class="description">' . $field['desc'] . '</span>' : null;
	$place = isset( $field['place'] ) ? $field['place'] : null;
	$size = ( isset( $field['size'] ) && $field['size'] ) ? $field['size'] . '%' : '100%';
	$std = isset( $field['std'] ) ? $field['std'] : null;
	$options = isset( $field['options'] ) ? $field['options'] : null;
	$taxonomy = isset( $field['taxonomy'] ) ? $field['taxonomy'] : null;
	$post_type = isset( $field['post_type'] ) ? $field['post_type'] : null;
	$repeatable_fields = isset( $field['repeatable_fields'] ) ? $field['repeatable_fields'] : null;

	$meta = (  $meta ) ? $meta : $std;
	
	// the id and name for each field
	$id = $name = isset( $field['id'] ) ? $field['id'] : null;
	if ( $repeatable ) {
		$name = $repeatable[0] . '[' . $repeatable[1] . '][' . $id .']';
		$id = $repeatable[0] . '_' . $repeatable[1] . '_' . $id;
	}
					switch( $type ) {
						// basic
						case 'text':
						case 'tel':
						case 'email':
						default:
							echo '<input type="' . $type . '" name="' . esc_attr( $name ) . '" id="' . esc_attr( $id ) . '" value="' . esc_attr( $meta ) . '" style="width:' . $size .'" />
									<br />' . $desc;
						break;
						case 'url':
							echo '<input type="' . $type . '" name="' . esc_attr( $name ) . '" id="' . esc_attr( $id ) . '" value="' . esc_url( $meta ) . '" style="width:' . $size .'" />
									<br />' . $desc;
						break;
						case 'number':
							echo '<input type="' . $type . '" name="' . esc_attr( $name ) . '" id="' . esc_attr( $id ) . '" value="' . intval( $meta ) . '" style="width:' . $size .'" />
									<br />' . $desc;
						break;
						// textarea
						case 'textarea':
							echo '<textarea name="' . esc_attr( $name ) . '" id="' . esc_attr( $id ) . '" cols="60" rows="4" style="width:' . $size .'">' . esc_textarea( $meta ) . '</textarea>
									<br />' . $desc;
						break;
						// editor
						case 'editor':
							echo wp_editor( $meta, $id, $options ) . '<br />' . $desc;
						break;
						// checkbox
						case 'checkbox':
							echo '<input type="hidden" name="' . esc_attr( $name ) . '" value="" />';
							echo '<input type="checkbox" name="' . esc_attr( $name ) . '" id="' . esc_attr( $id ) . '" ' . checked( $meta, true, false ) . ' value="1" />
									<label for="' . esc_attr( $id ) . '">' . $desc . ' </label>';
						break;	
						// select
						case 'select':
							echo '<select name="' . esc_attr( $name ) . '" id="' . esc_attr( $id ) . '"' , isset( $multiple ) && $multiple == true ? ' multiple="multiple"' : '' , '>
									<option value="">&mdash; ' . __('Select', 'reactor') . ' &mdash;</option>'; // Select One
							foreach ( $options as $value => $label )
								echo '<option' . selected( $meta, $value, false ) . ' value="' . $value . '">' . $label . '</option>';
							echo '</select><br />' . $desc;
						break;
						// radio
						case 'radio':
							echo '<ul class="meta_box_items">';
							foreach ( $options as $value => $label )
								echo '<li><input type="radio" name="' . esc_attr( $name ) . '" id="' . esc_attr( $id ) . '-' . $value . '" value="' . $value . '" ' . checked( $meta, $value, false ) . ' />
										<label for="' . esc_attr( $id ) . '-' . $value . '">' . $label . '</label></li>';
							echo '</ul>' . $desc;
						break;
						// checkbox_group
						case 'checkbox_group':
							echo '<ul class="meta_box_items"><input type="hidden" name="' . esc_attr( $name ) . '[]" value="" />';
							foreach ( $options as $value => $label )
								echo '<li><input type="checkbox" value="' . $value . '" name="' . esc_attr( $id ) . '[]" id="' . esc_attr( $id ) . '-' . $value . '"' , is_array( $meta ) && in_array( $value, $meta ) ? ' checked="checked"' : '' , ' /> 
										<label for="' . esc_attr( $id ) . '-' . $value . '">' . $label . '</label></li>';
							echo '</ul>' . $desc;
						break;
						// color
						case 'color':
							$hex_color = '( ( [a-fA-F0-9] ){3} ){1,2}$';
							if ( preg_match( '/^' . $hex_color . '/i', $meta ) ) // Value is just 123abc, so prepend #.
								$meta = '#' . $meta;
							echo '<input class="color_picker" type="text" name="' . esc_attr( $name ) . '" id="' . esc_attr( $id ) . '" value="' . $meta . '" size="10" />
								<br />' . $desc;
						break;
						// post_select
						case 'post_select':
						case 'post_list':
							echo '<select data-placeholder="Select One" name="' . esc_attr( $name ) . '[]" id="' . esc_attr( $id ) . '"' , isset( $multiple ) && $multiple == true ? ' multiple="multiple"' : '' , '>
									<option value="">&mdash; ' . __('Select', 'reactor') . ' &mdash;</option>'; // Select One
							$posts = get_posts( array( 'post_type' => $post_type, 'posts_per_page' => -1, 'orderby' => 'name', 'order' => 'ASC' ) );
							foreach ( $posts as $item )
								echo '<option value="' . $item->ID . '"' . selected( is_array( $meta ) && in_array( $item->ID, $meta ), true, false ) . '>' . $item->post_title . '</option>';
							$post_type_object = get_post_type_object( $post_type );
							echo '</select> &nbsp;<span class="description"><a href="' . admin_url( 'edit.php?post_type=' . $post_type . '">Manage ' . $post_type_object->label ) . '</a></span><br />' . $desc;
						break;
						// post_checkboxes
						case 'post_checkboxes':
							$posts = get_posts( array( 'post_type' => $post_type, 'posts_per_page' => -1 ) );
							echo '<ul class="meta_box_items">';
							foreach ( $posts as $item ) 
								echo '<li><input type="checkbox" value="' . $item->ID . '" name="' . esc_attr( $name ) . '[]" id="' . esc_attr( $id ) . '-' . $item->ID . '"' , is_array( $meta ) && in_array( $item->ID, $meta ) ? ' checked="checked"' : '' , ' />
										<label for="' . esc_attr( $id ) . '-' . $item->ID . '">' . $item->post_title . '</label></li>';
							$post_type_object = get_post_type_object( $post_type );
							echo '</ul> ' . $desc , ' &nbsp;<span class="description"><a href="' . admin_url( 'edit.php?post_type=' . $post_type . '">Manage ' . $post_type_object->label ) . '</a></span>';
						break;
						// post_drop_sort
						case 'post_drop_sort':
							//areas
							$post_type_object = get_post_type_object( $post_type );
							echo '<p>' . $desc . ' &nbsp;<span class="description"><a href="' . admin_url( 'edit.php?post_type=' . $post_type . '">Manage ' . $post_type_object->label ) . '</a></span></p><div class="post_drop_sort_areas">';
							foreach ( $areas as $area ) {
								echo '<ul id="area-' . $area['id']  . '" class="sort_list">
										<li class="post_drop_sort_area_name">' . $area['label'] . '</li>';
										if ( is_array( $meta ) ) {
											$items = explode( ',', $meta[$area['id']] );
											foreach ( $items as $item ) {
												$output = $display == 'thumbnail' ? get_the_post_thumbnail( $item, array( 204, 30 ) ) : get_the_title( $item ); 
												echo '<li id="' . $item . '">' . $output . '</li>';
											}
										}
								echo '</ul>
									<input type="hidden" name="' . esc_attr( $name ) . '[' . $area['id'] . ']" 
									class="store-area-' . $area['id'] . '" 
									value="' , $meta ? $meta[$area['id']] : '' , '" />';
							}
							echo '</div>';
							// source
							$exclude = null;
							if ( !empty( $meta ) ) {
								$exclude = implode( ',', $meta ); // because each ID is in a unique key
								$exclude = explode( ',', $exclude ); // put all the ID's back into a single array
							}
							$posts = get_posts( array( 'post_type' => $post_type, 'posts_per_page' => -1, 'post__not_in' => $exclude ) );
							echo '<ul class="post_drop_sort_source sort_list">
									<li class="post_drop_sort_area_name">Available ' . $label . '</li>';
							foreach ( $posts as $item ) {
								$output = $display == 'thumbnail' ? get_the_post_thumbnail( $item->ID, array( 204, 30 ) ) : get_the_title( $item->ID ); 
								echo '<li id="' . $item->ID . '">' . $output . '</li>';
							}
							echo '</ul>';
						break;
						// tax_select
						case 'tax_select':
							echo '<select name="' . esc_attr( $name ) . '" id="' . esc_attr( $id ) . '">
									<option value="">&mdash; ' . __('Select', 'reactor') . ' &mdash;</option>'; // Select One
							$terms = get_terms( $taxonomy, 'get=all' );
							$selected = ( isset( $meta ) ) ? $meta : '';
							foreach ( $terms as $term ) {
								echo '<option value="' . $term->slug . '"' . selected( $selected, $term->slug, false ) . '>' . $term->name . '</option>'; 
							}
							$tax = get_taxonomy( $taxonomy );
							echo '</select> &nbsp;<span class="description"><a href="'.get_bloginfo( 'url' ) . '/wp-admin/edit-tags.php?taxonomy=' . $taxonomy . '">Manage ' . $tax->label . '</a></span>
								<br />' . $desc;
						break;
						// tax_checkboxes
						case 'tax_checkboxes':
							$terms = get_terms( $taxonomy, 'get=all' );
							$checked = ( isset( $meta ) ) ? $meta : '';
							foreach ( $terms as $term)
								echo '<input type="checkbox" value="' . $term->slug . '" name="' . $id . '[]" id="' . $term->slug . '"' . checked( $checked, $term->slug, false ) . ' /> <label for="' . $term->slug . '">' . $term->name . '</label><br />';
							$tax = get_taxonomy( $taxonomy );
							echo '<span class="description">' . $desc . ' <a href="'.get_bloginfo( 'url' ) . '/wp-admin/edit-tags.php?taxonomy=' . $taxonomy . '&post_type=' . $page . '">Manage ' . $tax->label . '</a></span>';
						break;
						// date
						case 'date':
							echo '<input type="text" class="datepicker" name="' . esc_attr( $name ) . '" id="' . esc_attr( $id ) . '" value="' . $meta . '" style="width:' . $size .'" />
									<br />' . $desc;
						break;
						// slider
						case 'slider':
						$value = ( !empty( $meta ) ) ? intval( $meta ) : '0';
							echo '<div class="meta-slider" id="' . esc_attr( $id ) . '-slider"></div>
									<input type="text" name="' . esc_attr( $name ) . '" id="' . esc_attr( $id ) . '" value="' . $value . '" size="5" />
									<br />' . $desc;
						break;
						// image
						case 'image':
							$image = get_template_directory_uri() . '/library/includes/metaboxes/images/image.png';	
							echo '<div class="meta_box_image"><span class="meta_box_default_image" style="display:none">' . $image . '</span>';
							if ( $meta ) {
								$image = wp_get_attachment_image_src( intval( $meta ), 'medium' );
								$image = $image[0];
							}				
							echo	'<input name="' . esc_attr( $name ) . '" type="hidden" class="meta_box_upload_image" value="' . intval( $meta ) . '" />
										<img src="' . esc_attr( $image ) . '" class="meta_box_preview_image" alt="" />
											<a href="#" class="meta_box_upload_image_button button" rel="' . get_the_ID() . '">Choose Image</a>
											<small>&nbsp;<a href="#" class="meta_box_clear_image_button">Remove Image</a></small></div>
											<br clear="all" />' . $desc;
						break;
						// file
						case 'file':		
							$iconClass = 'meta_box_file';
							if ( $meta ) $iconClass .= ' checked';
							echo	'<div class="meta_box_file_stuff"><<input name="' . esc_attr( $name ) . '" type="hidden" class="meta_box_upload_file" value="' . esc_url( $meta ) . '" />
										<span class="' . $iconClass . '"></span>
										<span class="meta_box_filename">' . esc_url( $meta ) . '</span>
											<a href="#" class="meta_box_upload_image_button button" rel="' . get_the_ID() . '">Choose File</a>
											<small>&nbsp;<a href="#" class="meta_box_clear_file_button">Remove File</a></small></div>
											<br clear="all" />' . $desc;
						break;
						// repeatable
						case 'repeatable':
							echo '<table id="' . esc_attr( $id ) . '-repeatable" class="meta_box_repeatable" cellspacing="0">
								<thead>
									<tr>
										<th><span class="sort_label"></span></th>
										<th>Fields</th>
										<th><a class="meta_box_repeatable_add" href="#"></a></th>
									</tr>
								</thead>
								<tbody>';
							$i = 0;
							// create an empty array
							if ( $meta == '' || $meta == array() ) {
								$keys = wp_list_pluck( $repeatable_fields, 'id' );
								$meta = array ( array_fill_keys( $keys, null ) );
							}
							$meta = array_values( $meta );
							foreach( $meta as $row ) {
								echo '<tr>
										<td><span class="sort hndle"></span></td><td>';
								foreach ( $repeatable_fields as $repeatable_field ) {
									if ( !array_key_exists( $repeatable_field['id'], $meta[$i] ) )
										$meta[$i][$repeatable_field['id']] = null;
									echo '<label>' . $repeatable_field['label']  . '</label><p>';
									echo custom_meta_box_field( $repeatable_field, $meta[$i][$repeatable_field['id']], array( $id, $i ) );
									echo '</p>';
								} // end each field
								echo '</td><td><a class="meta_box_repeatable_remove" href="#"></a></td></tr>';
								$i++;
							} // end each row
							echo '</tbody>';
							echo '
								<tfoot>
									<tr>
										<th><span class="sort_label"></span></th>
										<th>Fields</th>
										<th><a class="meta_box_repeatable_add" href="#"></a></th>
									</tr>
								</tfoot>';
							echo '</table>
								' . $desc;
						break;
					} //end switch
		
}

/**
 * Finds any item in any level of an array
 *
 * @param	string	$needle 	field type to look for
 * @param	array	$haystack	an array to search the type in
 *
 * @return	bool				whether or not the type is in the provided array
 */
function meta_box_find_field_type( $needle, $haystack ) {
	foreach ( $haystack as $h )
		if ( isset( $h['type'] ) && $h['type'] == 'repeatable' )
			return meta_box_find_field_type( $needle, $h['repeatable_fields'] );
		elseif ( ( isset( $h['type'] ) && $h['type'] == $needle ) || ( isset( $h['repeatable_type'] ) && $h['repeatable_type'] == $needle ) )
			return true;
	return false;
}

/**
 * Find repeatable
 *
 * This function does almost the same exact thing that the above function 
 * does, except we're exclusively looking for the repeatable field. The 
 * reason is that we need a way to look for other fields nested within a 
 * repeatable, but also need a way to stop at repeatable being true. 
 * Hopefully I'll find a better way to do this later.
 *
 * @param	string	$needle 	field type to look for
 * @param	array	$haystack	an array to search the type in
 *
 * @return	bool				whether or not the type is in the provided array
 */
function meta_box_find_repeatable( $needle = 'repeatable', $haystack ) {
	foreach ( $haystack as $h )
		if ( isset( $h['type'] ) && $h['type'] == $needle )
			return true;
	return false;
}

/**
 * sanitize boolean inputs
 */
function meta_box_santitize_boolean( $string ) {
	if ( !isset( $string ) || $string != 1 || $string != true )
		return false;
	else
		return true;
}

/**
 * outputs properly sanitized data
 *
 * @param	string	$string		the string to run through a validation function
 * @param	string	$function	the validation function
 *
 * @return						a validated string

 */
function meta_box_sanitize( $string, $function = 'sanitize_text_field' ) {
	switch ( $function ) {
		case 'none' :
			return $string;
		case 'intval':
			return intval( $string );
		case 'absint':
			return absint( $string );
		case 'wp_kses_post':
			return wp_kses_post( $string );
		case 'wp_kses_data':
			return wp_kses_data( $string );
		case 'esc_url_raw':
			return esc_url_raw( $string );
		case 'is_email':
			return is_email( $string );
		case 'sanitize_title':
			return sanitize_title( $string );
		case 'santitize_boolean':
			return santitize_boolean( $string );
		case 'sanitize_text_field':
		default:
			return sanitize_text_field( $string );
	}
}

/**
 * Map a multidiminsional array
 *
 * @param	string	$func		the function to map
 * @param	array	$meta		a multidimensional array
 * @param	array	$sanitizer	a matching multidimensional array of sanitizers
 *
 * @return	array				new array, fully mapped with the provided arrays
 */
function meta_box_array_map_r( $func, $meta, $sanitizer ) {

	$newMeta = array();
	$meta = array_values( $meta );
	
	foreach( $meta as $key => $array ) {
		if ( $array == '' )
			continue;
			
		/**
		 * some values are stored as array, we only want multidimensional ones
		 */
		if ( !is_array( $array ) ) {
			return array_map( $func, $meta, (array)$sanitizer );
			break;
		}
		
		/**
		 * the sanitizer will have all of the fields, but the item may only 
		 * have values for a few, remove the ones we don't have from the santizer
		 */
		$keys = array_keys( $array );
		$newSanitizer = $sanitizer;
		if ( is_array( $sanitizer ) ) {
			foreach( $newSanitizer as $sanitizerKey => $value )
				if ( !in_array( $sanitizerKey, $keys ) )
					unset( $newSanitizer[$sanitizerKey] );
		}
		/**
		 * run the function as deep as the array goes
		 */
		foreach( $array as $arrayKey => $arrayValue )
			if ( is_array( $arrayValue ) )
				$array[$arrayKey] = meta_box_array_map_r( $func, $arrayValue, $newSanitizer[$arrayKey] );
		
		$array = array_map( $func, $array, $newSanitizer );
		$newMeta[$key] = array_combine( $keys, array_values( $array ) );
	}
	return $newMeta;
}

/**
 * takes in a few peices of data and creates a custom meta box
 *
 * @param	string			$id			meta box id
 * @param	string			$title		title
 * @param	array			$fields		array of each field the box should include
 * @param	string|array	$page		post type to add meta box to
 */
class Reactor_Add_Meta_Box {
	
	var $id;
	var $title;
	var $page;
	var $position;
	var $priority;
	var $fields;
	
    public function __construct( $id, $title, $page, $position, $priority, $fields ) {
		$this->id = $id;
		$this->title = $title;
		$this->page = $page;
		$this->position = $position;
		$this->priority = $priority;
		$this->fields = $fields;
		
		if( !is_array( $this->page ) )
			$this->page = array( $this->page );
		
		add_action( 'admin_enqueue_scripts', array( $this, 'meta_box_enqueue_scripts' ) );
		add_action( 'admin_head',  array( $this, 'meta_box_head' ) );
		add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );
		add_action( 'save_post',  array( $this, 'save_meta_box' ));
    }
	
	/**
	 * enqueue necessary scripts and styles
	 */
	function meta_box_enqueue_scripts() {
		global $pagenow;
		if ( is_admin() && in_array( $pagenow, array( 'post-new.php', 'post.php' ) ) && in_array( get_post_type(), $this->page ) ) {
			// js
			$deps = array( 'jquery' );
			if ( meta_box_find_field_type( 'date', $this->fields ) )
				$deps[] = 'jquery-ui-datepicker';
			if ( meta_box_find_field_type( 'slider', $this->fields ) )
				$deps[] = 'jquery-ui-slider';
			if ( meta_box_find_field_type( 'color', $this->fields ) )
				$deps[] = 'wp-color-picker';

			wp_enqueue_script( 'meta_box', CUSTOM_METABOXES_DIR . '/js/scripts.js', $deps );
			
			// css
			$deps = array();
			wp_register_style( 'jqueryui', CUSTOM_METABOXES_DIR . '/css/jqueryui.css' );
			if ( meta_box_find_field_type( 'date', $this->fields ) || meta_box_find_field_type( 'slider', $this->fields ) )
				$deps[] = 'jqueryui';
			if ( meta_box_find_field_type( 'color', $this->fields ) )
				$deps[] = 'wp-color-picker';
			wp_enqueue_style( 'meta_box', CUSTOM_METABOXES_DIR . '/css/meta_box.css', $deps );
		}
	}
	
	/**
	 * adds scripts to the head for special fields with extra js requirements
	 */
	function meta_box_head() {
		if ( in_array( get_post_type(), $this->page ) && ( meta_box_find_field_type( 'date', $this->fields ) || meta_box_find_field_type( 'slider', $this->fields ) ) ) {
		
			echo '<script type="text/javascript">
						jQuery(function( $) {';
			
			foreach ( $this->fields as $field ) {
				switch( $field['type'] ) {
					// date
					case 'date' :
						echo '$("#' . $field['id'] . '").datepicker({
								dateFormat: \'yy-mm-dd\'
							});';
					break;
					// slider
					case 'slider' :
					$meta_array = get_post_meta( get_the_ID(), $this->id, true );
					$value = ( !empty( $meta_array ) ) ? $meta_array[$field['id']] : '0';
					if ( $value == '' )
						$value = $field['min'];
					echo '
							$( "#' . $field['id'] . '-slider" ).slider({
								value: ' . $value . ',
								min: ' . $field['min'] . ',
								max: ' . $field['max'] . ',
								step: ' . $field['step'] . ',
								slide: function( event, ui ) {
									$( "#' . $field['id'] . '" ).val( ui.value );
								}
							});';
					break;
				}
			}
			
			echo '});
				</script>';
		
		}
	}
	
	/**
	 * adds the meta box for every post type in $page
	 */
	function add_meta_box() {
		foreach ( $this->page as $page ) {
			add_meta_box( $this->id, $this->title, array( $this, 'meta_box_callback' ), $page, $this->position, $this->priority );
		}
	}
	
	/**
	 * outputs the meta box
	 */
	function meta_box_callback() {
		// Use nonce for verification
		wp_nonce_field( 'custom_meta_box_nonce_action', 'custom_meta_box_nonce_field' );
		
		// Begin the field table and loop
		echo '<table class="form-table meta_box">';
		foreach ( $this->fields as $field) {
			if ( $field['type'] == 'section' ) {
				echo '<tr>
						<td colspan="2">
							<h2>' . $field['label'] . '</h2>
						</td>
					</tr>';
			}
			else {
				echo '<tr>
						<th style="width:20%"><label for="' . $field['id'] . '">' . $field['label'] . '</label></th>
						<td>';
						
						$meta = get_post_meta( get_the_ID(), $field['id'], true);
						echo custom_meta_box_field( $field, $meta );
						
				echo     '<td>
					</tr>';
			}
		} // end foreach
		echo '</table>'; // end table
	}
	
	/**
	 * saves the captured data
	 */
	function save_meta_box( $post_id ) {
		$post_type = get_post_type();
		
		// verify nonce
		if ( ! isset( $_POST['custom_meta_box_nonce_field'] ) )
			return $post_id;
		if ( ! ( in_array( $post_type, $this->page ) || wp_verify_nonce( $_POST['custom_meta_box_nonce_field'],  'custom_meta_box_nonce_action' ) ) ) 
			return $post_id;
		// check autosave
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;
		// check permissions
		if ( ! current_user_can( 'edit_page', $post_id ) )
			return $post_id;
		
		// loop through fields and save the data
		foreach ( $this->fields as $field ) {
			if( $field['type'] == 'section' ) {
				$sanitizer = null;
				continue;
			}
			if( in_array( $field['type'], array( 'tax_select', 'tax_checkboxes' ) ) ) {
				// save taxonomies
				if ( isset( $_POST[$field['id']] ) ) {
					$term = $_POST[$field['id']];
					wp_set_object_terms( $post_id, $term, $field['id'] );
				}
			}
			else {
				// save the rest
				$new = false;
				$old = get_post_meta( $post_id, $field['id'], true );
				if ( isset( $_POST[$field['id']] ) )
					$new = $_POST[$field['id']];
				if ( isset( $new ) && '' == $new && $old ) {
					delete_post_meta( $post_id, $field['id'], $old );
				} elseif ( isset( $new ) && $new != $old ) {
					if ( 'editor' == $field['type']  ) {
						$sanitizer = isset( $field['sanitizer'] ) ? $field['sanitizer'] : 'wp_kses_post';
						$new = wpautop( $new );
					} else {
						$sanitizer = isset( $field['sanitizer'] ) ? $field['sanitizer'] : 'sanitize_text_field';
					}
					if ( is_array( $new ) )
						$new = meta_box_array_map_r( 'meta_box_sanitize', $new, $sanitizer );
					else
						$new = meta_box_sanitize( $new, $sanitizer );
					update_post_meta( $post_id, $field['id'], $new );
				}
			}
		} // end foreach
	}
	
}
