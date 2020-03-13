<main>
  <div class="bs-about">
    <div class="uk-container bs-tiles__container">

      <?php if( have_rows('crew') ): ?>

      <div class="bs-about__tiles">

        <?php while( have_rows('crew') ): the_row(); ?>

        <div class="bs-about__item">
          <div class="bs-about__text-box">
            <div class="bs-about__text">
              <div class="bs-about__header">
                <?php the_sub_field('title'); ?>
              </div>
              <div class="bs-about__content">
                <?php the_sub_field('content'); ?>
              </div>
              <!-- <a href="#" class="bs-about__button">Lees verder</a> -->
            </div>
          </div>

          <div class="bs-about__photo" style="background-image: url(<?php the_sub_field('image'); ?>);">
            &nbsp;
          </div>
        </div>

        <?php endwhile; ?>

      </div>

      <?php endif; ?>

    </div>
  </div>

</main>
