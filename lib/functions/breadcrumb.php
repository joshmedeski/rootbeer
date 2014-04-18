<?

// Modify breadcrumb arguments.
add_filter( 'genesis_breadcrumb_args', 'sp_breadcrumb_args' );
function sp_breadcrumb_args( $args ) {
  $args['home'] = 'Home';
  $args['sep'] = ' / ';
  $args['list_sep'] = ', '; // Genesis 1.5 and later
  $args['prefix'] = '<div class="breadcrumb">';
  $args['suffix'] = '</div>';
  $args['heirarchial_attachments'] = true; // Genesis 1.5 and later
  $args['heirarchial_categories'] = true; // Genesis 1.5 and later
  $args['display'] = true;
  $args['labels']['prefix'] = 'You are here: ';
  $args['labels']['author'] = 'Archives for ';
  $args['labels']['category'] = 'Archives for '; // Genesis 1.6 and later
  $args['labels']['tag'] = 'Archives for ';
  $args['labels']['date'] = 'Archives for ';
  $args['labels']['search'] = 'Search for ';
  $args['labels']['tax'] = 'Archives for ';
  $args['labels']['post_type'] = 'Archives for ';
  $args['labels']['404'] = 'Not found: '; // Genesis 1.5 and later
return $args;
}
