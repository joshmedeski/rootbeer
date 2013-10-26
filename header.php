<?php
/* Header
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @framework  Foundation
 * @author     JoshMedeski
 */
?>

<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="initial-scale=1.0">
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
	<div class="row">
		<div class="small-12 columns">
			<div class="contain-to-grid">
			  <nav class="top-bar">
			      <ul class="title-area">
			          <li class="name">
			            <h1 class="header__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			          </li>
			      <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			      <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			      </ul>
			      <section class="top-bar-section">
			        <ul class="left">
			          <li><a class="header__description"><?php bloginfo('description'); ?></a></li>
			        </ul>
			      <?php
			          wp_nav_menu( array(
			              'theme_location' => 'topbar',
			              'container' => false,
			              'depth' => 0,
			              'items_wrap' => '<ul class="right">%3$s</ul>',
			              'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
			              'walker' => new rootbeer_walker( array(
			                  'in_top_bar' => true,
			                  'item_type' => 'li'
			              ) ),
			          ) );
			      ?>
			      </section>
			  </nav>
			</div>
		</div>
	</div>
</header>