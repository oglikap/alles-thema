<?php
/*********************************
 *
 * The front-page template file.
 *
*********************************/

get_header();

// get the NAVIGATION template
get_template_part( 'template-parts/content', 'nav' );

$loop = new WP_Query( array(
    'post_type' => 'producties',
    'posts_per_page' => -1,
    'category_name' => 'nieuw',
    'orderby' => 'rand'
  )
);

if( $loop->have_posts() ): ?>

<main>

  <section class="bs-tiles">
    <div class="bs-tiles__container uk-container">

      <div class="bs-tiles__list">

        <div class="bs-tiles__item">
          <div class="bs-tiles__text bs-tiles__text--front">
            <div class="bs-tiles__text-content">
              <span class="bs-tiles__header">
                Alles voor de Kunsten
              </span>
              <span class="bs-tiles__subheader">
                U kunt ons benaderen voor:
              </span>
              <ul class="bs-tiles__text-list">
                <li class="bs-tiles__text-item">Productie</li>
                <li class="bs-tiles__text-item">Zakelijke leiding</li>
                <li class="bs-tiles__text-item">Verkoop</li>
                <li class="bs-tiles__text-item">Publiciteit &amp; marketing</li>
                <li class="bs-tiles__text-item">Artistieke ontwikkeling</li>
                <li class="bs-tiles__text-item">Inhoudelijke ondersteuning</li>
              </ul>

            </div>
          </div>
        </div>

        <?php while( $loop->have_posts() ): $loop->the_post(); ?>

          <div class="bs-tiles__item">

            <div class="bs-tiles__text">
              <div class="bs-tiles__text-content">

                <a href="<?php the_permalink(); ?>" class="bs-tiles__link">
                  <span class="bs-tiles__header">
                    <?php the_title(); ?>
                  </span>

                  <span class="bs-tiles__text-paragraph">
                    <?php echo get_the_excerpt();; ?>
                  </span>
                </a>

              </div>

            </div>

            <?php $bg_image = get_the_post_thumbnail_url(); ?>

            <div class="bs-tiles__photo" style="background-image: url(<?php echo $bg_image; ?>)">
              &nbsp;
            </div>

          </div>

        <?php endwhile; ?>
      </div>

    </div>
  </section>

</main>

</div><!-- Wrapper -->


<?php endif; ?>


	<?php get_template_part( 'template-parts/content', 'totop' ); ?>

<?php get_footer(); ?>
