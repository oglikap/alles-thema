<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

  <div class="bs-content__inner">
    <?php if( get_field('intro') ): ?>
      <p class="bs-content__text-intro" id="bs-content"><?php the_field('intro'); ?></p>
    <?php endif; ?>

    <div class="bs-content__text">
      <?php the_content(); ?>
    </div>
  </div>

<?php endwhile; endif; ?>
