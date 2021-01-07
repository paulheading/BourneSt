<?php if (have_rows("{$hours}")) : ?>

  <div class="block contact-shop-hours">

    <p class="title contact-shop-hours">Opening Hours</p>

    <?php while (have_rows("{$hours}")) : the_row(); ?>

      <div class="row contact-shop-hours">

        <div class="block shop-days">

          <?php the_sub_field("days"); ?>

        </div>

        <div class="block shop-hours">

          <?php $test = get_sub_field("hours"); ?>

          <?php if (!empty($test)) : ?>

            <?php the_sub_field("hours"); ?>

          <?php endif; ?>

        </div>

        <?php if (has_sub_field("appointment_only")) : ?>

          <div class="block contact-shop-appointment">

            <small class="title appointment-only">by appointment only</small>

          </div>

        <?php endif; ?>

      </div>

    <?php endwhile; ?>

  </div>

<?php else : endif; ?>