<?php
/*
  The single productions template file.
*/

get_header(); ?>

<?php get_template_part( 'template-parts/content', 'hero' ); ?>

<main>
  <section class="bs-tiles">
    <div class="bs-tiles__container uk-container">
      <div class="bs-single-tiles__list">

        <div class="bs-single-tiles__item">
          <div class="bs-tiles__text">
            <div class="bs-tiles__text-content">
              <span class="bs-tiles__header">
                <?php the_title(); ?>
              </span>

              <div class="bs-tiles__text-paragraph">
                <?php if( have_posts() ): while( have_posts() ): the_post();
                  the_content();
                endwhile; endif; ?>
              </div>

            </div>
          </div>
        </div>

        <div class="bs-single-tiles__item">

          <?php $bg_image = get_the_post_thumbnail_url(); ?>

          <div class="bs-tiles__photo" style="background-image: url(<?php echo $bg_image; ?>)">
            &nbsp;
          </div>

        </div>

      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
