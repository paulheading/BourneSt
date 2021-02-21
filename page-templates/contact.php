<?php
/*
 * Template Name: Contact Template
 * Description: Contact Page Layout
 */

get_header();

if (is_plugin_active('advanced-custom-fields-pro/acf.php')) : ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<?php the_title('<h1 class="title _main">', '</h1>'); ?>

			<div class="wrap contact-shop">

				<?php $shop = 'bournest';
				include locate_template("partials/contact/split.php"); ?>

				<div class="block contact-shop-methods">
					<p>Telephone +44 (0) 20 7730 7991</p>
					<p><a href="mailto:Howe@36BourneStreet.com">Howe@36BourneStreet.com</a></p>
					<p><a target="_blank" href="https://www.36BourneStreet.com">www.36BourneStreet.com</a></p>
					<p>Instagram: <a target="_blank" href="https://www.instagram.com/howe36bournestreet/">Howe36BourneStreet</a></p>
				</div>

				<p class="title contact-location">Two Locations</p>

				<div class="wrap contact-shop-hours bournest">
					<?php $title = 'Shop';
					$addr = '<p>36 Bourne Street<br>Belgravia<br>London<br>SW1W 8JA</p>';
					$hours = 'bournest_hours';
					$images = 'bournest_images';
					include locate_template("partials/contact/shop.php"); ?>
				</div>

				<div class="wrap contact-map">
					<div class="block contact-map">
						<div class="block contact-map-overlay"></div>
						<iframe style="border:0; height: 100%; width:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.193964863282!2d-0.1559199488634639!3d51.49130797953241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487605179df0c57b%3A0xc0abb7dc49981268!2sHOWE+at+36+Bourne+Street!5e0!3m2!1sen!2suk!4v1472465775804" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
					</div>
				</div>

				<div class="wrap contact-shop-hours studio">
					<?php $title = 'Studio';
					$addr = '<p>Unit 20<br>Vanguard Court<br>Rear of 36-38 Peckham Road<br>Camberwell<br>London<br>SE5 8QT</p>';
					$hours = 'studio_hours';
					$images = 'studio_images';
					include locate_template("partials/contact/shop.php"); ?>
				</div>

				<div class="wrap contact-map">
					<div class="block contact-map">
						<div class="block contact-map-overlay"></div>
						<iframe style="border:0; height: 100%; width:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.2143667799805!2d-0.0834318842405762!3d51.4725793796294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876039526553645%3A0x9a350727b45c8b11!2sHowe%20at%2036%20Bourne%20Street%20-%20The%20Studio%20(by%20appointment%20only)!5e0!3m2!1sen!2suk!4v1596101256597!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
					</div>
				</div>

				<!-- ************************************************************ -->
				<!-- End Split ************************************************** -->

			</div>

			<?php $shop = 'pimlicord';
			include locate_template("partials/contact/split.php"); ?>

			<div class="block contact-shop-methods">
				<p>Telephone +44 (0) 20 7730 7987</p>
				<p><a href="mailto:Ask@HoweLondon.com">Ask@HoweLondon.com</a></p>
				<p><a target="_blank" href="https://www.howelondon.com">www.HoweLondon.com</a></p>
				<p>Instagram: <a target="_blank" href="https://www.instagram.com/howelondon/">HoweLondon</a></p>
			</div>

			<p class="title contact-location">Two Locations</p>

			<div class="wrap contact-shop-hours pimlicord">
				<?php $title = 'Shop';
				$addr = '<p>93 Pimlico Road<br>Belgravia<br>London<br>SW1W 8PH</p>';
				$hours = 'pimlicord_hours';
				$images = 'pimlicord_images';
				include locate_template("partials/contact/shop.php"); ?>
			</div>

			<div class="wrap contact-map">
				<div class="block contact-map">
					<div class="block contact-map-overlay"></div>
					<iframe style="border:0; height: 100%; width:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.2633254657408!2d-0.15655118423067413!3d51.49003507963228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876051715f2f535%3A0xbef980b599c8b7f3!2sChristopher%20Howe%20Antiques%2C%2093%20Pimlico%20Rd%2C%20Belgravia%2C%20London%20SW1W%208PH!5e0!3m2!1sen!2suk!4v1596101121635!5m2!1sen!2suk" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
				</div>
			</div>

			<div class="wrap contact-shop-hours warehouse">
				<?php $title = 'Warehouse';
				$addr = '<p>Unit 15B (First Bay)<br>Parkfield Industrial Estate<br>Culvert Place<br>Battersea<br>London<br>SW11 5BA</p>';
				$hours = 'warehouse_hours';
				$images = 'warehouse_images';
				include locate_template("partials/contact/shop.php"); ?>
			</div>

			<div class="wrap contact-map">
				<div class="block contact-map">
					<div class="block contact-map-overlay"></div>
					<iframe style="border:0; height: 100%; width:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.2965737280697!2d-0.15660068424062698!3d51.47107032962917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487605ffef34d347%3A0xa2c4babf7a89fc2a!2sHOWE%20Warehouse!5e0!3m2!1sen!2suk!4v1596101342967!5m2!1sen!2suk" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
				</div>
			</div>

			<!-- ************************************************************ -->
			<!-- End Split ************************************************** -->

	</div>

	<div class="wrap contact-subscribe">
		<div class="block contact-subscribe">
			<!-- echo do_shortcode('[ninja_form id=3]'); -->
		</div>
	</div>

	</main>

	</div>

<?php

else :

	if (have_posts()) : while (have_posts()) : the_post();
			the_content();
		endwhile;
	else :
		echo '<p>Sorry, no posts matched your criteria.</p>';
	endif;

endif;

get_footer();
