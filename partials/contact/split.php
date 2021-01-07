
<div class="block contact-shop">

	<div class="block contact-shop-logo <?php $shop ?>">

		<?php include locate_template("imgs/logos/inline/{$shop}.svg"); ?>

	</div>

	<?php if (get_field("{$shop}_description")) {
			echo '<h4 class="title _contact">'; the_field("{$shop}_description"); echo '</h4>';
	} ?>