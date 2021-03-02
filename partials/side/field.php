
<?php if (!empty(get_field($get))) {
  echo "<li class='" . $get . "'>$title: <strong>"; echo the_field($get); echo "</strong></li>";
} ?>
