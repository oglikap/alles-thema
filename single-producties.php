<?php
/*
  The single productions template file.
*/

get_header(); ?>

<?php get_template_part( 'template-parts/content', 'hero' ); ?>

<main>
  <section class="bs-tiles">
    <div class="bs-tiles__container uk-container">
      <div class="bs-single-tiles__list uk-box-shadow-small">

        <div class="bs-single-tiles__item">
          <div class="bs-tiles__text">
            <div class="bs-tiles__text-content">
              <span class="bs-tiles__header">
                <?php the_title(); ?>
              </span>

              <div class="bs-tiles__text-paragraph">
                <?php the_field('text_main'); ?>
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

        <?php $images = get_field('gallery');
          if( $images ): ?>

          <div class="bs-single-tiles__item">
            <div class="bs-single-tiles__lightbox">
              <div class="bs-tiles__text">
                <div class="bs-tiles__text-content">

                  <div class="bs-tiles__header uk-margin-small-bottom">Fotogalerij</div>
                    <div class="uk-child-width-1-2@s uk-grid-collapse" uk-grid uk-lightbox="animation: slide">

                      <?php foreach( $images as $image ): ?>

                      <div>
                        <a class="uk-inline" href="<?php echo esc_url($image['url']); ?>" data-caption="<?php echo esc_html($image['caption']); ?>">
                          <img src="<?php echo esc_url($image['sizes']['square-medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" style="background-color: #222; opacity: .8">
                        </a>
                      </div>
                    <?php endforeach; ?>

                  </div>

                </div>
              </div>
            </div>

          </div>

          <?php endif; ?>

          <?php if( get_field('credits') ): ?>

            <div class="bs-single-tiles__item">
              <div class="bs-tiles__text">
                <div class="bs-tiles__text-content">

                  <div class="bs-tiles__header uk-margin-small-bottom">Credits | links</div>

                  <?php the_field('credits'); ?>

                </div>
              </div>
            </div>

          <?php endif; ?>


          <?php if( get_field( 'agenda' ) ):

            $options = array(
              // 'artist' => '',
              'tour' => get_field( 'agenda' ),
            );
            if( gigpress_has_upcoming($options) ) {

              $args = array(
                'tour' => get_field( 'agenda' ),
                'limit' => 5
              ); ?>

              <div class="bs-single-tiles__item">

                <div class="bs-tiles__text">
                  <div class="bs-tiles__text-content">
                    <div class="bs-single-tiles__agenda">
                      <?php echo gigpress_shows( $args ); ?>
                        <a class="bs-single-tiles__agenda-button" href="<?php echo get_permalink( get_page_by_path( 'agenda' ) ); ?>">Bekijk hele agenda</a>
                    </div>
                  </div>
                </div>

              </div>

              <?php }
            endif; ?>

            <?php if( get_field('video') ): ?>

              <div class="bs-single-tiles__item">
                <?php the_field('video'); ?>
              </div>

            <?php endif; ?>

      </div>
      <?php get_template_part('template-parts/content', 'prev-next'); ?>
    </div>

  </section>
</main>


<?php get_footer(); ?>
