<?php

// THE TEMPLATE FILE FOR THE PAGE 'makers'

$loop = new WP_Query( array(
  'post_type' => 'makers',
  'posts_per_page' => -1,
) );
if( $loop->have_posts() ) : ?>

<div class="bs-tiles__list">

  <?php while( $loop->have_posts() ): $loop->the_post(); ?>

    <div class="bs-tiles__item bs-tiles__item--bw">

      <div class="bs-tiles__text">
        <div class="bs-tiles__text-content">

          <a href="<?php the_permalink(); ?>" class="bs-tiles__link">
            <span class="bs-tiles__header">
              <?php the_title(); ?>
            </span>

            <span class="bs-tiles__text-paragraph">
              <?php echo get_the_excerpt(); ?>
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

<?php endif; ?>
