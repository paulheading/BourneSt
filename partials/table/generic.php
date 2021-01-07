<?php echo

'<div class="table _generic">

  <div class="table-row">
    <div>'; the_field('table_product_title'); echo '</div>
    <div class="--center">Smallest skin in the batch</div>
    <div class="--center">Average skin in the batch</div>
    <div class="--center">Largest skin in the batch</div>
  </div>

  <div class="table-row">
    <div></div>
    <div class="--center">'; the_field('sml_skin_size'); echo 'sq ft skin</div>
    <div class="--center">'; the_field('med_skin_size'); echo 'sq ft skin</div>
    <div class="--center">'; the_field('lrg_skin_size'); echo 'sq ft skin</div>
  </div>

  <div class="table-row">
    <div>A = Average Panel Width</div>
    <div class="--center">'; the_field('sml_panel_width'); echo 'cm</div>
    <div class="--center">'; the_field('med_panel_width'); echo 'cm</div>
    <div class="--center">'; the_field('lrg_panel_width'); echo 'cm</div>
  </div>

  <div class="table-row">
    <div>B = Average Panel Height</div>
    <div class="--center">'; the_field('sml_panel_height'); echo 'cm</div>
    <div class="--center">'; the_field('med_panel_height'); echo 'cm</div>
    <div class="--center">'; the_field('lrg_panel_height'); echo 'cm</div>
  </div>

  <div class="table-row">
    <div>C = Average Skin Width</div>
    <div class="--center">'; the_field('sml_skin_width'); echo 'cm</div>
    <div class="--center">'; the_field('med_skin_width'); echo 'cm</div>
    <div class="--center">'; the_field('lrg_skin_width'); echo 'cm</div>
  </div>

  <div class="table-row">
    <div>D = Average Skin Height</div>
    <div class="--center">'; the_field('sml_skin_height'); echo 'cm</div>
    <div class="--center">'; the_field('med_skin_height'); echo 'cm</div>
    <div class="--center">'; the_field('lrg_skin_height'); echo 'cm</div>
  </div>

</div>'; ?>
