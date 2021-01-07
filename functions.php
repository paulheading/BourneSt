
<?php

function theme_scripts() {

	$dirJS = new DirectoryIterator(get_stylesheet_directory() . '/js');

	foreach ($dirJS as $file) {

	  if (pathinfo($file, PATHINFO_EXTENSION) === 'js') {

			$fullName = basename($file);
	    $name = substr(basename($fullName), 0, strpos(basename($fullName), '.'));

	    switch($name) {
	      case 'header': $deps = null; $last = false;
				break;
				case 'scripts': $deps = array('jquery'); $last = true;
				break;
	      default : $deps = null; $last = true;
				break;
	    }

	    wp_enqueue_script( $name, get_stylesheet_directory_uri() . '/js/' . $fullName, $deps, null, $last);

	  }
	}

	wp_dequeue_style('storefront-child-style');

	$dirCSS = new DirectoryIterator(get_stylesheet_directory() . '/');

	foreach ($dirCSS as $file) {

	  if (pathinfo($file, PATHINFO_EXTENSION) === 'css') {

			$fullName = basename($file);
	    $name = substr(basename($fullName), 0, strpos(basename($fullName), '.'));

	    switch($name) {
	      default : $deps = null; $last = false;
				break;
	    }

	    wp_enqueue_style( $name, get_stylesheet_directory_uri() . '/' . $fullName, $deps, '0.0.6', $last);

	  }
	}
}

function move_storefront_messages(){
    if( is_product() ) {
        remove_action( 'storefront_content_top','storefront_shop_messages',15 );
    }
    remove_action( 'woocommerce_before_single_product', 'wc_print_notices', 10 );
		add_action( 'storefront_before_content', 'wc_print_notices', 1 );
}

function hide_stock_count( $html, $text, $product ) {
	$availability = $product->get_availability();

	if ( isset( $availability['class'] ) && 'in-stock' === $availability['class'] ) {
		return '';
	}

	return $html;
}

remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_head', 'rel_canonical');
remove_action( 'wp_head', 'wp_shortlink_wp_head');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

add_action( 'wp_head', 'move_storefront_messages' );
add_action( 'bournest_before_single_product_summary', 'woocommerce_template_single_title', 5);
add_action( 'wp_enqueue_scripts', 'theme_scripts', 50);

add_filter( 'woocommerce_stock_html', 'hide_stock_count', 10, 3 );

add_theme_support('woocommerce');

?>
