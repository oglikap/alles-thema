<?php
// THE TEMPLATE-PART FOR DISPLAYING GROUP (OR ARTIST) INFO ON THE SINGLE PRODUCTION PAGES


$loop = new WP_Query( array(
  'post_type' => 'producties',
  'category_name' => __(get_field('groep'))
  ) );
  if( $loop->have_posts() ): ?>
  <section class="bs-tiles">
    <!-- <div class="uk-container"> -->
      <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-5@l" uk-grid>

        <?php while ( $loop->have_posts() /*&& gigpress_has_upcoming()*/ ) : $loop->the_post(); ?>

          <div class="bs-stamps__frame">
            <a href="<?php the_permalink(); ?>" class="bs-stamps__frame--link">
              <?php the_post_thumbnail('hvrbox'); ?>
              <div class="bs-stamps__overlay">
                <div class="bs-stamps__hover">
                  <div class="bs-stamps__header">
                    <h4 class="bs-header-small uk-light"><?php the_title(); ?></h4>
                  </div>
                </div>
              </div>
            </a>
          </div>

        <?php endwhile; wp_reset_query(); ?>

      </div>
    <!-- </div> -->

  </section>


<?php endif; ?>
