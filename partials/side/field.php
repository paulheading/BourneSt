<?php

if (!empty(get_field($get))) {
  echo "<li class='product_name'>$title: <strong>"; echo the_field($get); echo "</strong></li>";
}

?>
