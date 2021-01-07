
<?php

$images = get_field($field);

if ($images):

echo '<div class="slick _default">';
foreach ($images as $image):
echo '<div><a class="slick-lnk" href="';
echo $image['url'];
echo '" data-caption="';
if ($image['caption']): echo $image['caption'];
endif;
echo '"><img src="';
echo $image['sizes']['large'];
echo '"/></a></div>';
endforeach;

echo '</div>';
endif;

?>
