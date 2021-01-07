<?php
/*
 * Template Name: Home Template
 * Description: Home Page Layout
 */

get_header();

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

if ( is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ):

  $rows = get_field('randomizer');
  $row_count = count($rows);
  $i = rand(0, $row_count - 1);

  echo '<div class="content-area" style="background-image: url(';
  echo $rows[ $i ]['image_queue'];
  echo ');background-size:cover;"></div>';

else: endif;

get_footer();
