<h2 class="title contact-location"><?php echo $title; ?></h2>

<div class="block contact-shop-open">
  <?php echo $addr;
  include locate_template("partials/contact/hours.php"); ?>
</div>

<div class="block contact-shop-images">

  <?php

  $images = get_field($images);

  if ($images) :

    echo '<div class="slick _contact">';
    foreach ($images as $image) :
      echo '<div><a class="slick-lnk" href="';
      echo $image['url'];
      echo '" data-caption="';
      echo $image['caption'];
      echo '"><img src="';
      echo $image['sizes']['large'];
      echo '" data-caption="';
      if ($image['caption']) : echo $image['caption'];
      endif;
      echo '" />';
      echo '</a></div>';
    endforeach;

    echo '</div>';
  endif;

  ?>

</div>