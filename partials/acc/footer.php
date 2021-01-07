
<?php

if (!get_sub_field('acc_title')) {

  if ($type == "Gotland") {
    $tablepath = "partials/table/" . strtolower($type) . ".php";
    include(locate_template($tablepath));
  } else {
    include(locate_template("partials/table/generic.php"));
  }

  echo "<div class='diagram _" . strtolower($type) . "'>";

  $svgpath = "svg/diagram/" . strtolower($type) . ".svg";

  get_template_part($svgpath);

  echo '</div>';

}

echo '</div></div>';

?>
