<?php

  if ( get_field( "{$terms}_terms" ) ) {
  echo '<div class="terms-block">
        <div class="terms-border-cont">
        <div class="terms-border"></div>
        </div>';
        the_field("{$terms}_terms");
  echo '</div>'; }

?>
