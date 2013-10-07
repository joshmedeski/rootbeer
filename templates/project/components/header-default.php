<?php
/* This will be seen on the top of every page (except landing pages, see landing-header.php).
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @author     JoshMedeski
 * @framework  Foundation
 */
?>

<header id="header-default">
	<div class="row collapse">
		<div class="small-12 columns">
			<?php get_template_part( 'components/nav-topbar' ); ?>
		</div>
	</div>
</header>