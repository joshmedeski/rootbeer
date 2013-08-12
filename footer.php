<?php
/* The organism for displaying the footer.
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @author     JoshMedeski
 * @framework  Foundation
 */
?>
  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'javascripts/vendor/zepto' : 'javascripts/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="<?php echo get_template_directory_uri(); ?>javascripts/foundation/foundation.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>javascripts/foundation/foundation.abide.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>javascripts/foundation/foundation.alerts.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>javascripts/foundation/foundation.clearing.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>javascripts/foundation/foundation.cookie.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>javascripts/foundation/foundation.dropdown.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>javascripts/foundation/foundation.forms.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>javascripts/foundation/foundation.interchange.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>javascripts/foundation/foundation.joyride.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>javascripts/foundation/foundation.magellan.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>javascripts/foundation/foundation.orbit.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>javascripts/foundation/foundation.placeholder.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>javascripts/foundation/foundation.reveal.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>javascripts/foundation/foundation.section.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>javascripts/foundation/foundation.tooltips.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>javascripts/foundation/foundation.topbar.js"></script>
	
  
  <script>
    $(document).foundation();
  </script>
  <?php wp_footer(); ?>
</body>
</html>