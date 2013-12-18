<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Title Credit: http://perishablepress.com/how-to-generate-perfect-wordpress-title-tags-without-a-plugin/ -->
		<title>
			<?php
				if (function_exists('is_tag') && is_tag()) { 
					echo 'Tag Archive for &quot;'.$tag.'&quot; — '; 
				} 
				elseif (is_archive()) { 
					wp_title(''); echo ' Archive — '; 
				}
				elseif (is_search()) { 
					echo 'Search for &quot;'.wp_specialchars($s).'&quot; — '; 
				}
				elseif (!(is_404()) && (is_single()) || (is_page())) { 
					wp_title(''); echo ' — '; 
				}
				elseif (is_404()) {
					echo 'Not Found — '; 
				}
				if (is_home()) { 
					bloginfo('name'); echo ' — '; bloginfo('description'); 
				}
				else { bloginfo('name'); }
			?>
		</title>

		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app.css">

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php wp_head(); ?>
    
	</head>

	<body <?php body_class(); ?>>
		<header class="header" role="banner">
			<div class="row">
				<div class="large-6 columns">
					<h1 class="site-title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
					<p class="site-tagline subheader"><?php bloginfo('description'); ?></p>
				</div>
				<div class="large-2 columns">

				</div>
				<div class="large-4 columns hide-for-small">
					<?php get_search_form(); ?>
				</div>
			</div>
		</header>

<div class="contain-to-grid">
	<nav class="top-bar" data-topbar>
	  <ul class="title-area">
	    <li class="name"></li>
	  </ul>

	  <section class="top-bar-section">
     <!-- Left Nav Section -->
     <?php
     wp_nav_menu( array(
      'theme_location' => 'topbar',
      'container'      => false,
      'depth'          => 0,
      'items_wrap'     => '<ul class="left">%3$s</ul>',
      'fallback_cb'    => 'reverie_menu_fallback', // workaround to show a message to set up a menu
      'walker'         => new rootbeer_walker( array(
      'in_top_bar'     => true,
      'item_type'      => 'li'
        ) ),
      ) ); ?>
	    <!-- Right Nav Section -->
	    <ul class="right">
	    	<li class="has-form show-for-small">
	    		<form class="search-form" method="get" role="search" action="<?php echo home_url(); ?>
	    			">
	    			<div class="row collapse">
	    				<div class="small-8 columns">
	    					<input name="s" type="text" placeholder="<?php echo esc_attr__('Search', 'rootbeer'); ?>" value="<?php get_search_query(); ?>"></div>
	    				<div class="small-4 columns">
	    					<input class="secondary button expand" type="submit" value="<?php echo esc_attr__('Search', 'rootbeer'); ?>"></div>
	    			</div>
	    		</form>
	    	</li>
	    </ul>
	  </section>
	</nav>
</div>

<div id="optin">
  <div id="optin-inner">
    <form action="http://paula-stephens.us7.list-manage.com/subscribe/post?u=0fc1553a7295bf82a19e9497d&amp;id=e9683d5265" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
      <h4>Don't miss out on FREE tips to rock a healthy life. Sign up now!</h4>
      <div id="name-email">
        <input id="mce-FNAME" class="name" type="text" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';" name="FNAME" value="Enter your name" size="25">
        <input id="mce-EMAIL" class="required email" type="email" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';" name="EMAIL" value="Enter your email" size="25">
        <div id="mce-responses" class="clear">
          <div id="mce-error-response" class="response" style="display:none"></div>
          <div id="mce-success-response" class="response" style="display:none"></div>
        </div>
      </div>
      <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Sign Up!">
    </form>
  </div>
</div>
