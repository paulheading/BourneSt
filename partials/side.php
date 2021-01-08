<?php

	echo '<div class="details-box">
				<h3>Details</h3>';
	echo '<ul class="product-details">';

	$get = 'product_name'; $title = 'Name';
	include locate_template("partials/side/field.php");

	$get = 'product_range'; $title = 'Range';
	include locate_template("partials/side/field.php");

	$get = 'product_colour'; $title = 'Colour';
	include locate_template("partials/side/field.php");

	$get = 'product_repeat'; $title = 'Pattern repeat';
	include locate_template("partials/side/field.php");

	$get = 'paper_type'; $title = 'Paper type';
	include locate_template("partials/side/field.php");

	$get = 'product_animal'; $title = 'Animal';
	include locate_template("partials/side/field.php");

	$get = 'product_item'; $title = 'Item';
	include locate_template("partials/side/field.php");

	$get = 'product_code'; $title = 'Code';
	include locate_template("partials/side/field.php");

	$get = 'product_size'; $title = 'Size';
	include locate_template("partials/side/field.php");

	$get = 'product_thickness'; $title = 'Thickness';
	include locate_template("partials/side/field.php");

	$get = 'product_composition'; $title = 'Composition';
	include locate_template("partials/side/field.php");

	$get = 'product_fabric'; $title = 'Fabric';
	include locate_template("partials/side/field.php");

	$get = 'total_fabric_width'; $title = 'Total fabric width';
	include locate_template("partials/side/field.php");

	$get = 'useable_fabric_width'; $title = 'Useable fabric width';
	include locate_template("partials/side/field.php");

	$get = 'repeat_size'; $title = 'Repeat size';
	include locate_template("partials/side/field.php");

	$get = 'roll_width'; $title = 'Roll width';
	include locate_template("partials/side/field.php");

	$get = 'roll_length'; $title = 'Roll length';
	include locate_template("partials/side/field.php");

	$get = 'product_minimum'; $title = 'Minimum order';
	include locate_template("partials/side/field.php");

	$get = 'pieces_range'; $title = 'Pieces range from';
	include locate_template("partials/side/field.php");

	$get = 'average_piece_size'; $title = 'Average piece size';
	include locate_template("partials/side/field.php");

	$get = 'available_in_increments_of'; $title = 'Available in increments of';
	include locate_template("partials/side/field.php");

	$get = 'skins_range'; $title = 'Skins range from';
	include locate_template("partials/side/field.php");

	$get = 'average_skin_size'; $title = 'Average skin size';
	include locate_template("partials/side/field.php");

	if (get_field('product_type') == 'Face Masks') {
		
		global $product;

		$price = $product->get_price_html();

		if(!empty($price)) {
			echo "<li class='product_name'>Price: <strong>"; echo $price; echo "</strong></li>";
		}

	} else {
		$get = 'product_price'; $title = 'Price';
		include locate_template("partials/side/field.php");
	}

	echo '</ul>';

	$get = 'details_notes';

	if (is_plugin_active('advanced-custom-fields-pro/acf.php')) {
		if (!empty(get_field($get))) {
			echo '<div class="product-notes">';
			echo the_field($get);
			echo '</div>';
		}
	}

	echo '</div>';

?>
