
<?php

$images = get_field($field);

if ($images):

echo '<div class="slick _slim">';
foreach ($images as $image):
echo '<div><a class="slick-lnk" href="';
echo $image['url'];
echo '" data-caption="';
echo $image['caption'];
echo '"><img src="';
echo $image['sizes']['large'];
echo '" data-caption="';
if ($image['caption']): echo $image['caption'];
endif;
echo '" />';
echo '<div class="slick-date">';
echo $image['alt'];
echo '</div>';
echo '</a></div>';
endforeach;

echo '</div>';
endif;

?>
