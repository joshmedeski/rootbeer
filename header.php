<?php
/**
 * The organism for displaying the head content.
 *
 * @package WordPress
 * @subpackage Root Beer
 * @author Josh Medeski
 * @framework Foundation
 */
?>

<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width">

    <title><?php wp_title('|', true, 'right'); ?></title>

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <script src="<?php echo get_template_directory_uri(); ?>/javascripts/vendor/custom.modernizr.js"></script>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>