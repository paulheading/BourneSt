<?php
/*
 * Template Name: About Template
 * Description: About Page Layout
 */

get_header();

if ( is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ):

	echo '<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">';

	the_title('<h1 class="title _main">','</h1>');

	$field = 'slider_about';

	include locate_template("partials/slider/$field.php");

	echo '<div class="site-main-wrap">';

	if (get_field('hero_title')) {
		echo '<h2 class="title _sub">';
		the_field('hero_title');
		echo '</h2>';
	}

	if (get_field('hero_content')) {
		echo '<div class="clever-box"><div class="clever-pic"><div class="clever-bg"></div></div><div class="clever-copy">';
		the_field('hero_content');
		echo '</div></div>';
	}

	if (get_field('hero_image')) {
		the_field('hero_image');
	}

	if (get_field('materials_title')) {
		echo '<h2 class="title _sub">';
		the_field('materials_title');
		echo '</h2>';
	}

	if (get_field('materials_content')) {
		the_field('materials_content');
	}

	$field = 'slider_history';
	include locate_template("partials/slider/$field.php");

	if (get_field('history_title')) {
		echo '<h2 class="title _sub">';
		the_field('history_title');
		echo '</h2>';
	}

	if (get_field('history_content')) {
		the_field('history_content');
	}

	if (get_field('service_title')) {
		echo '<h2 class="title _sub">';
		the_field('service_title');
		echo '</h2>';
	}

	if (get_field('service_content')) {
		the_field('service_content');
	}

	echo '</div>
				</main>
				</div>';

else:

	if ( have_posts() ) : while ( have_posts() ) : the_post();
		the_content();
	endwhile; else:
		echo '<p>Sorry, no posts matched your criteria.</p>';
	endif;

endif;

get_footer();
