
<?php

echo '<div class="acc-area">
      <div class="acc-btn">';

if (get_sub_field('acc_title')) {
  echo '<h3 class="title _acc">';
  echo the_sub_field('acc_title');
  echo '</h3>';
} else {
  echo '<h3 class="title _acc">Panel Size Information</h3>';
}

get_template_part("svg/icon/plus.svg");
echo '</div><div class="acc-panel">';

?>
