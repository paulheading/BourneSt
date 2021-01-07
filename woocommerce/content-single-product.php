<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

?>

<div id="product-<?php the_ID(); ?>" <?php post_class('product-content'); ?>>

  <?php

  /**
   * @hooked bournest_template_single_title - 5
   */

  do_action('bournest_before_single_product_summary');

  if (is_plugin_active('advanced-custom-fields-pro/acf.php')) :

    $field = 'slider';
    include(locate_template("partials/slider/$field.php"));

  endif;

  ?>

  <div class="col-main">

    <div class="slick-info">Click the images to view them in full screen and with extra information.</div>

    <?php

    the_content();

    if (is_plugin_active('advanced-custom-fields-pro/acf.php')) :

      if (have_rows('accordion')) : while (have_rows('accordion')) : the_row();

          include(locate_template("partials/acc/header.php"));
          the_sub_field('acc_text');
          include(locate_template("partials/acc/footer.php"));

        endwhile;

      endif;

      $type  = get_field('product_type');

      if ($type == 'Goat' || $type == 'Nappa' || $type == 'Tempesti' || $type == 'Gotland' || $type == 'Merino') {
        include(locate_template("partials/acc/header.php"));
        include(locate_template("partials/acc/$type.php"));
        include(locate_template("partials/acc/footer.php"));
      }

    endif;

    ?>

  </div>

  <div class="col-side">

    <?php

    if (is_plugin_active('advanced-custom-fields-pro/acf.php')) :

      get_template_part('partials/side');

    endif;

    do_action( 'woocommerce_single_product_summary' );

    ?>

  </div>

  <div class="col-extra">

    <?php

    $content = get_field('colourways');
    $title = 'Alternative Colourways';

    if ($content) {
      include locate_template('partials/related.php');
    }

    $content = get_field('upsells');
    $title = 'Related Products';

    if ($content) {
      include locate_template('partials/related.php');
    }

    ?>

  </div>

</div>