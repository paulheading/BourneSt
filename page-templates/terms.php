<?php
/*
 * Template Name: Terms Template
 * Description: Terms Page Layout
 */

get_header();

if ( is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ):

	echo '<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">';

	the_title('<h1 class="title _main">','</h1>');

	$terms = 'general';
	include locate_template("partials/terms/block.php");

	$terms = 'goods';
	include locate_template("partials/terms/block.php");

	$terms = 'delivery';
	include locate_template("partials/terms/block.php");

	$terms = 'product';
	include locate_template("partials/terms/block.php");

	$terms = 'claims';
	include locate_template("partials/terms/block.php");

	$terms = 'vintage';
	include locate_template("partials/terms/block.php");

	$terms = 'wallpaper';
	include locate_template("partials/terms/block.php");

	echo '</main></div>';

else: endif;

get_footer();
