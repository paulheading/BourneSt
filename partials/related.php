<?php

if($content):

echo '<h3 class="title _sub">'; echo $title; echo '</h3>
      <ul class="bs-products">';
      foreach($content as $post):
      setup_postdata($post);
      if (get_post_status() == 'publish'):
echo '<li class="bs-related">
      <a href="'; the_permalink(); echo '">';
      the_post_thumbnail('thumbnail');
echo '<h5 class="title _thmb">'; the_field('product_name'); echo '</h5>
      <h5 class="title _thmb-col">'; the_field('product_colour'); echo '</h5>
      </a>
      </li>';
      endif;
      endforeach;
echo '</ul>';
      endif;
      wp_reset_postdata();

?>
